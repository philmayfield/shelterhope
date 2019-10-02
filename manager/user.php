<?php

session_start();

require_once('../db_connect.php'); // Sets up $conn
require_once('login_test.php'); // requires session_start(), sets up $logged_in, $user, $user_is_employee, $user_access, $empdata, $locdata;

if ($user_access > 0) {
	header("location: main.php");
}

$u = $_GET['u'];
if($u){
	$getUserStmt = $conn->prepare('SELECT * FROM users WHERE id = :id LIMIT 1');
	$getUserStmt->execute(array('id' => $u));

	$getUser = $getUserStmt->fetch(PDO::FETCH_OBJ);
}

$getEmpStmt = $conn->prepare('SELECT id,name FROM employees ORDER BY name ASC');
$getEmpStmt->execute();

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
					if($u){
						echo 'Updating User: '.$getUser->login;
					} else {
						echo 'Adding New User';
					}
					?>
				</h2>

				<form id="update-form" action="db_interface.php" method="post" enctype="multipart/form-data">
					<input type="hidden" name="table" value="users" class="item">
					<input type="hidden" name="id" class="item" value="<?php echo $getUser->id; ?>">
					<div class="row">
						<div class="col-xs-12 col-md-6">
							<label for="login">Login</label>
							<input type="text" id="login" name="login" class="item" value="<?php echo $getUser->login; ?>" required>
							<label for="password">Password</label>
							<input type="password" id="password" name="password" class="item" value="<?php echo $getUser->password; ?>" required>
							<label for="is_employee">Is Employee?</label>
							<select name="is_employee" id="is_employee" class="item" required>
								<option value="0" <?php if($getUser->is_employee == 0 || $getUser->is_employee == ''){echo 'selected="selected"';} ?>>No - Admin</option>
								<?php
								while($row = $getEmpStmt->fetch(PDO::FETCH_OBJ)) {
								    echo '<option value="'.$row->id.'"';
								    if($row->id == $getUser->is_employee){
								    	echo ' selected="selected"';
								    }
								    echo '>'.$row->name.'</option>';
								}
								?>
							</select>
							<div class="input-note">Is this user an existing employee? Defines which location they have access to.</div>
							<label for="access">Access Level</label>
							<select name="access" id="access" class="item" required>
								<option value=""></option>
								<option value="0" <?php if($u && $getUser->access == 0){echo 'selected="selected"';} ?>>Administrator</option>
								<option value="1" <?php if($getUser->access == 1){echo 'selected="selected"';} ?>>Manager</option>
								<option value="2" <?php if($getUser->access == 2){echo 'selected="selected"';} ?>>User</option>
							</select>
							<div class="input-note">
								<b>Admins</b> - Can edit all locations info, employees, and users.<br>
								<b>Managers</b> - Can edit all location and employee info for their specific location.<br>
								<b>Users</b> - Can edit main page info only for their specific location.
							</div>
						</div>
					</div>
					
					<?php
						if($getUser->id == $userdata->id){
							// Editing self
							echo '<div id="log-me-out" class="margin-top-15"><b>You are editing your own user account - you will will need to log back in after saving.</b></div>';
						}
					?>

					<div class="action-btn-holder">
						<button id="submit" class="btn">
							<?php
							if($u){
								echo 'Save User';
							} else {
								echo 'Add User';
								echo '<span id="goto" data-url="users.php"></span>';
							}
							?>
						</button>
					</div>
				</form>

				<div id="form-msg"></div>

			</section>

		</main>

		<?php include_once('scripts.php'); ?>

	</body>

</html>

<?php

$conn = null; // Close connection

?>