<?php

session_start();

if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
	$m = 'err';
	$errmsg = '';
	foreach($_SESSION['ERRMSG_ARR'] as $msg) {
		$errmsg .= $msg;
	}
	unset($_SESSION['ERRMSG_ARR']);
}

// require_once('../db_connect.php'); // Sets up $conn

// $locstmt = $conn->prepare('SELECT * FROM locations ORDER BY name ASC');
// $locstmt->execute();

// if(!empty($_GET['loc'])){
// 	$loc = $_GET['loc'];

// 	$contstmt = $conn->prepare('SELECT content FROM main_content WHERE id = :id');
// 	$contstmt->execute(array('id' => $loc));
// 	$content = $contstmt->fetch(PDO::FETCH_OBJ);
// }

if(!empty($_GET['m'])){
	$m = $_GET['m'];
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

			<h1 class="align-center">Shelter Hope Pet Shop</h1>

			<?php
				if($m){
					echo '<div class="alert">';
					switch ($m) {
						case 'li':
							echo 'You need to log in.';
							break;
						case 'lo':
							echo 'You have been logged out.';
							break;
						case 'noem':
							echo 'Contact Admin - User account needs to be linked to employee.';
							break;
						case 'err':
							echo $errmsg;
							break;
					}
					echo '</div>';
				}
			?>

			<section class="manager-content col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
				<h2>Login</h2>
				<form action="reg.php" method="POST">
					<label for="uname">Username</label>
					<input id="uname" type="text" name="uname" /><br>
					<label for="pword">Password</label>
					<input id="pword" type="password" name="pword" /><br>
					<div class="action-btn-holder">
						<input class="btn" type="submit" value="Login" />
					</div>
				</form>
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