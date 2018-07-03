<?php

session_start();

require_once('../db_connect.php'); // Sets up $conn
require_once('login_test.php'); // requires session_start(), sets up $logged_in, $user, $user_is_employee, $user_access, $empdata, $locdata;

if ($user_access > 1) {
	header("location: main.php");
}

$e = $_GET['e'];
if($e){
	$employeeStmt = $conn->prepare('SELECT * FROM employees WHERE id = :id');
	$employeeStmt->execute(array('id' => $e));

	$employee = $employeeStmt->fetch(PDO::FETCH_OBJ);
}

$allLocstmt = $conn->prepare('SELECT * FROM locations ORDER BY :order ASC');
$allLocstmt->execute(array('order' => 'name'));

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
    <?php include_once('head.php'); ?>
    <body>

    	<main class="container">

			<?php include_once('nav.php'); ?>

			<section class="manager-content col-xs-12">

				<h2>
					<?php
					if($e){
						echo 'Updating Employee: '.$employee->name;
					} else {
						echo 'Adding New Employee';
					}
					?>
				</h2>

				<form id="update-form" action="db_interface.php" method="post" enctype="multipart/form-data">
					<div class="row">
						<div class="col-xs-12 col-md-5 col-md-push-2">
							<input type="hidden" name="table" class="item" value="employees">
							<input type="hidden" name="id" class="item" value="<?php echo $employee->id; ?>">
							<input type="hidden" name="img" class="item" value="<?php if($employee->img){ echo $employee->img; }else{ echo '../img/user_blank.png'; } ?>" id="img-hidden-input">
							<label for="name">Name</label>
							<input type="text" id="name" name="name" class="item" value="<?php echo $employee->name; ?>" required>
							<label for="location">Location</label>
							<select id="location" name="location" class="item" required>
								<option value=""></option>
								<?php
								while($row = $allLocstmt->fetch(PDO::FETCH_OBJ)) {
								    echo '<option value="'.$row->id.'"';
								    if($row->id == $employee->location){
								    	echo ' selected="selected"';
								    }
								    echo '>'.$row->name.'</option>';
								}
								?>
							</select>
							<label for="position">Position</label>
							<input type="text" id="position" name="position" class="item" value="<?php echo $employee->position; ?>" required>
							<label for="email">Email</label>
							<input type="text" id="email" name="email" class="item" value="<?php echo $employee->email; ?>">
							<label for="published">Published?</label>
							<input type="hidden" name="published" class="item" value="0">
							<input type="checkbox" id="published" name="published" class="item" value="1" <?php if($employee->published == 1){ echo 'checked="checked"'; } ?>>
						</div>
						<div class="col-xs-12 col-md-5 col-md-push-2">
							<label for="bio">Bio</label>
							<textarea name="bio" id="bio" class="item bio"><?php echo $employee->bio; ?></textarea>
							<label for="sort">Sort Order</label>
							<input type="text" id="sort" name="sort" class="item" value="<?php if($employee->sort){ echo $employee->sort; } else { echo '9'; } ; ?>">
						</div>
						<div class="col-xs-12 col-md-2 col-md-pull-10 align-center">
							<!-- <img src="../img/user_blank.png" alt="User" class="responsive-img profile-img"> -->
							<a class="open-roxy-custom" href="#">
								<img id="customRoxyImage" class="responsive-img profile-img" src="<?php if($employee->img){ echo $employee->img; }else{ echo '../img/user_blank.png'; } ?>">
							</a>
							<a href="#" class="open-roxy-custom">Add / Change Image</a>
							<p>NOTE: Image should be 600x600px</p>

							<div id="roxyCustomPanel" style="display: none;">
								<iframe src="../fileman/index.html?integration=custom" style="width:100%;height:100%" frameborder="0"></iframe>
							</div>
						</div>
					</div>
					
					<div class="action-btn-holder">
						<button id="submit" class="btn">
							<?php
							if($e){
								echo 'Save Employee';
							} else {
								echo 'Add Employee';
								echo '<span id="goto" data-url="employees.php"></span>';
							}
							?>
						</button>
					</div>
				</form>

				<div id="form-msg"></div>

			</section>
			
		</main>

		<?php include_once('scripts.php'); ?>
		<script src="../js/vendor/jquery-ui.min.js"></script>

	</body>

</html>

<?php

$conn = null; // Close connection

?>