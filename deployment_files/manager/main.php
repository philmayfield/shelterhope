<?php

session_start();

require_once('../db_connect.php'); // Sets up $conn
require_once('login_test.php'); // requires session_start(), sets up $logged_in, $user, $user_is_employee, $user_access, $empdata, $locdata;

if($user_access == 0){
	// super user

	// super user gets access to all locations
	$locstmt = $conn->prepare('SELECT * FROM locations ORDER BY name ASC');
	$locstmt->execute();

	if(!empty($_GET['l'])){
		$loc = $_GET['l'];
	}
} else {
	if($user_is_employee){
		// employee

		// set loc for content fetch below
		$loc = $locdata->id;
	} else {
		header("location: index.php?m=noem");
	}
}

// fetch content
$contstmt = $conn->prepare('SELECT * FROM main_content WHERE id = :id LIMIT 1');
$contstmt->execute(array('id' => $loc));

$count = $contstmt->rowCount();

if($count == 1){
	$content = $contstmt->fetch(PDO::FETCH_OBJ);

	$webstmt = $conn->prepare('SELECT web_name FROM locations WHERE id = :id LIMIT 1');
	$webstmt->execute(array('id' => $content->id));
	$web = $webstmt->fetch(PDO::FETCH_OBJ);
	$web_name = $web->web_name == 'default' ? '' : $web->web_name;
}

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <?php include_once('head.php'); ?>
    <body>

    	<main class="container">

			<?php include_once('nav.php');?>

			<section class="manager-content col-xs-12">

				<h2>Manager - Main Content</h2>
				
				<div class="row margin-bottom-15 <?php if($user_access != 0){ echo 'hidden'; } ?>">
					<div class="col-xs-12 col-md-4">
						<form action="main.php" method="get" enctype="multipart/form-data">
							<label for="main-content-select">Choose a location:</label>
							<select name="l" id="main-content-select" class="item" required>
								<option value=""></option>
								<?php
								if($user_access == 0){
									while($row = $locstmt->fetch(PDO::FETCH_OBJ)) {
									    echo '<option value="'.$row->id.'"';
									    if($row->id == $loc){
									    	echo ' selected="selected"';
									    }
									    echo '>'.$row->name.'</option>';
									}
								}
								?>
							</select>
							<div class="input-note">As a super user, you can edit content for any page</div>
						</form>
					</div>
					<div class="col-xs-12 col-md-4">
						<a href="../<?php echo $web_name; ?>" class="btn btn-tight margin-top-15 inactive" id="follow-btn" target="_blank">Launch Site</a>
					</div>
				</div>

				<div class="row <?php if(!$loc){ echo 'hidden'; } ?>">
					<div class="col-xs-12">
						<form id="update-form" action="db_interface.php" method="post" enctype="multipart/form-data">
							<input type="hidden" name="id" class="item" value="<?php echo $loc; ?>">
							<input type="hidden" name="table" value="main_content" class="item">

							<h3>Home page main content</h3>
							<textarea name="content" class="item editor" id="editor" cols="80" rows="10"><?php if($content){ echo $content->content; } ?></textarea>

							<h3>Adopt-a-Pet code</h3>
							<textarea name="aapcode" class="item" cols="80" rows="10"><?php if($content){ echo $content->aapcode; } ?></textarea>
							<div class="input-note">Paste the code from Adopt-a-Pet here</div>

							<div class="action-btn-holder">
								<button id="submit" class="btn">Save Info</button>
							</div>

						</form>
					</div>
				</div>

				<div class="row <?php if(!$loc){ echo 'hidden'; } ?>">
					<div class="col-xs-12">
						
					</div>
				</div>	

				<div id="form-msg"></div>

			</section>

		</main>

	<script src="../js/tinymce/tinymce.min.js"></script>
	<?php include_once('scripts.php'); ?>


	</body>

</html>

<?php

$conn = null; // Close connection

?>