<?php

session_start();

require_once('../db_connect.php'); // Sets up $conn
require_once('login_test.php'); // requires session_start(), sets up $logged_in, $user, $user_is_employee, $user_access, $empdata, $locdata;

if ($user_access > 1) {
	header("location: main.php");
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

				<h2>Manager - Employees</h2>

				<div class="action-btn-holder">
					<a href="employee.php" class="btn">Add an Employee</a>
				</div>

				<?php

				if($locdata){
					echo '<ul>';
					$empl = $conn->prepare('SELECT * FROM employees WHERE location = :id ORDER BY name ASC');
					$empl->execute(array('id' => $locdata->id));
					while($erow = $empl->fetch(PDO::FETCH_OBJ)) {
						echo '<li><a href="employee.php?e='.$erow->id.'">'.$erow->name.'</a></li>';
					}
					echo '</ul>';
				} else {
					while($row = $locstmt->fetch(PDO::FETCH_OBJ)) {
						echo '<h3>'.$row->name.'</h3>';
						echo '<ul class="no-bull">';
						$empl = $conn->prepare('SELECT * FROM employees WHERE location = :id ORDER BY name ASC');
						$empl->execute(array('id' => $row->id));
						while($erow = $empl->fetch(PDO::FETCH_OBJ)) {
							echo '<li>';
							if($erow->published == 1){
								echo '<i class="fa fa-check-circle green"></i>';
							} else {
								echo '<i class="fa fa-times-circle red"></i>';
							}
							echo '<a href="employee.php?e='.$erow->id.'">'.$erow->name.'</a></li>';
						}
						echo '</ul>';
					}
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