<?php

session_start();

require_once('../db_connect.php'); // Sets up $conn
require_once('login_test.php'); // requires session_start(), sets up $logged_in, $user, $user_is_employee, $user_access, $empdata, $locdata;

if ($user_access > 1) {
	header("location: main.php");
}

$p = $_GET['p'];
if($p){
	$getPressStmt = $conn->prepare('SELECT * FROM press WHERE id = :id LIMIT 1');
	$getPressStmt->execute(array('id' => $p));

	$getPress = $getPressStmt->fetch(PDO::FETCH_OBJ);
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

			<?php include_once('nav.php'); ?>

			<section class="manager-content col-xs-12">

				<h2>
					<?php
					if($p){
						echo 'Updating Press Item: '.$getPress->title;
					} else {
						echo 'Adding New Press Item';
					}
					?>
				</h2>

				<form id="update-form" action="db_interface.php" method="post" enctype="multipart/form-data">
					<input type="hidden" name="table" value="press" class="item">
					<input type="hidden" name="id" class="item" value="<?php echo $getPress->id; ?>">
					<div class="row">
						<div class="col-xs-12 col-md-6">
							<label for="type">Type</label>
							<select name="type" id="type" class="item" required>
								<option value=""></option>
								<option value="article"<?php if($getPress->type == 'article'){echo 'selected="selected"';} ?>>Article</option>
								<option value="release"<?php if($getPress->type == 'release'){echo 'selected="selected"';} ?>>Press Release</option>
								<option value="video"<?php if($getPress->type == 'video'){echo 'selected="selected"';} ?>>Video</option>
							</select>
							<label for="name">Title</label>
							<input type="text" id="title" name="title" class="item" value="<?php echo $getPress->title; ?>" required>
							<label for="date">Date</label>
							<input type="text" id="date" name="date" class="item datepicker D" value="<?php echo $getPress->date; ?>">
						</div>
						<div class="col-xs-12 col-md-6">
							<label for="link">Link URL</label>
							<input type="text" id="link" name="link" class="item" value="<?php echo $getPress->link; ?>">
							<label for="published">Published?</label>
							<input type="hidden" name="published" class="item" value="0">
							<input type="checkbox" id="published" name="published" class="item" value="1" <?php if($getPress->published == 1){ echo 'checked="checked"'; } ?>>
						</div>
					</div>
					<div class="row margin-top-15">
						<div class="col-xs-12">
							<label for="content">Content (optional)</label>
							<textarea name="content" id="content" class="item content editor"><?php echo $getPress->content; ?></textarea>
						</div>
					</div>

					<div class="action-btn-holder">
						<button id="submit" class="btn">
							<?php
							if($p){
								echo 'Save Press Item';
							} else {
								echo 'Add Press Item';
								echo '<span id="goto" data-url="press.php"></span>';
							}
							?>
						</button>
					</div>
				</form>

				<div id="form-msg"></div>

			</section>

		</main>

		<script src="../js/tinymce/tinymce.min.js"></script>
		<?php include_once('scripts.php'); ?>
		<script src="../js/vendor/jquery-ui.min.js"></script>
		<script src="../js/vendor/jquery.datetimepicker.js"></script>

	</body>

</html>

<?php

$conn = null; // Close connection

?>