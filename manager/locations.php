<?php

session_start();

require_once('../db_connect.php'); // Sets up $conn
require_once('login_test.php'); // requires session_start(), sets up $logged_in, $user, $user_is_employee, $user_access, $empdata, $locdata;

if ($user_access > 0) {
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

				<h2>Locations</h2>
				
				<div class="action-btn-holder">
					<a href="location.php" class="btn">Add a Location</a>
				</div>

				<ul class="no-bull">			
				<?php
				while($loc = $locstmt->fetch(PDO::FETCH_OBJ)) {
					echo '<li>';
					if($loc->published == 1){
						echo '<i class="fa fa-check-circle green"></i>';
					} else {
						echo '<i class="fa fa-times-circle red"></i>';
					}
					echo '<a href="location.php?l='.$loc->id.'">'.$loc->name.', '.$loc->state.'</a></li>';
				}
				?>
				</ul>

			</section>

		</main>

		<?php include_once('scripts.php'); ?>

	</body>

</html>

<?php

$conn = null; // Close connection

?>