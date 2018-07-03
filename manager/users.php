<?php

session_start();

require_once('../db_connect.php'); // Sets up $conn
require_once('login_test.php'); // requires session_start(), sets up $logged_in, $user, $user_is_employee, $user_access, $empdata, $locdata;

if ($user_access > 0) {
	// only super user access
	header("location: main.php");
}

// get location data for employee
$allUserStmt = $conn->prepare('SELECT access FROM users ORDER BY access ASC');
$allUserStmt->execute();

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

				<h2>Manager - Users</h2>

				<div class="action-btn-holder">
					<a href="user.php" class="btn">Add an User</a>
				</div>

				<?php

				$a = '';

				while($row = $allUserStmt->fetch(PDO::FETCH_OBJ)) {
					if($a == $row->access){
						continue;
					}
					switch($row->access){
						case 0:
							echo '<h3>Administrators</h3>';
							echo '<div class="input-note">Admins can edit all locations info, employees, and users.</div>';
							break;
						case 1;
							echo '<h3>Managers</h3>';
							echo '<div class="input-note">Managers can edit all location and employee info for their specific location.</div>';
							break;
						case 2;
							echo '<h3>Users</h3>';
							echo '<div class="input-note">Users can edit main page info only for their specific location.</div>';
							break;
					}
					echo '<ul>';
					$subusers = $conn->prepare('SELECT * FROM users WHERE access = :access ORDER BY login ASC');
					$subusers->execute(array('access' => $row->access));
					while($urow = $subusers->fetch(PDO::FETCH_OBJ)) {
						echo '<li><a href="user.php?u='.$urow->id.'">'.$urow->login.'</a></li>';
					}
					echo '</ul>';
					$a = $row->access;
				}

				?>

			</section>

		</main>

		<?php include_once('scripts.php'); ?>

	</body>

</html>

<?php

$conn = null; // Close connection

?>