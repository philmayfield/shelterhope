<?php

session_start();

require_once('../db_connect.php'); // Sets up $conn
require_once('login_test.php'); // requires session_start(), sets up $logged_in, $user, $user_is_employee, $user_access, $empdata, $locdata;

if ($user_access > 1) {
	header("location: main.php");
}

$getPressStmt = $conn->prepare('SELECT id,title,type,date,published FROM press ORDER BY type ASC, date ASC');
$getPressStmt->execute();

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

				<h2>Press</h2>
				
				<div class="action-btn-holder">
					<a href="press_item.php" class="btn">Add Press Item</a>
				</div>

				<?php
				$type = '';
				$ptype = '';
				while($press = $getPressStmt->fetch(PDO::FETCH_OBJ)) {
					$type = $press->type;
					if($type != $ptype){
						if($ptype != ''){
							echo '</ul>';
						}
						echo '<h3>'.ucfirst($type).'</h3>';
						echo '<ul class="no-bull">';
					}
					$date = date_create($press->date);
					echo '<li>';
					if($press->published == 1){
						echo '<i class="fa fa-check-circle green"></i>';
					} else {
						echo '<i class="fa fa-times-circle red"></i>';
					}
					echo '<a href="press_item.php?p='.$press->id.'">'.$date->format('M d, Y').' - <span class="press-title">'.$press->title.'</span></a></li>';
					$ptype = $type;
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