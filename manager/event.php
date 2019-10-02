<?php

session_start();

require_once('../db_connect.php'); // Sets up $conn
require_once('login_test.php'); // requires session_start(), sets up $logged_in, $user, $user_is_employee, $user_access, $empdata, $locdata;

if ($user_access > 1) {
	header("location: main.php");
}

$e = $_GET['e'];
if($e){
	$eventStmt = $conn->prepare('SELECT * FROM events WHERE id = :id');
	$eventStmt->execute(array('id' => $e));

	$event = $eventStmt->fetch(PDO::FETCH_OBJ);
}

$allLocstmt = $conn->prepare('SELECT * FROM locations WHERE id = :id ORDER BY :order ASC');
$allLocstmt->execute(array('id' => 1, 'order' => 'name'));

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
						echo 'Updating Event: '.$event->name;
					} else {
						echo 'Adding New Event';
					}
					?>
				</h2>

				<form id="update-form" action="db_interface.php" method="post" enctype="multipart/form-data">
					<div class="row">
						<div class="col-xs-12 col-md-6">
							<input type="hidden" name="table" class="item" value="events">
							<input type="hidden" name="id" class="item" value="<?php echo $event->id; ?>">
							<label for="name">Name</label>
							<input type="text" id="name" name="name" class="item" value="<?php echo $event->name; ?>" required>
							<label for="location">Location</label>
							<select id="location" name="location" class="item" required>
								<option value=""></option>
								<?php
								while($row = $allLocstmt->fetch(PDO::FETCH_OBJ)) {
								    echo '<option value="'.$row->id.'"';
								    // if($row->id == $event->location){
									if($row->id == 1){
								    	echo ' selected="selected"';
								    }
								    echo '>'.$row->name.'</option>';
								}
								?>
							</select>
						</div>
						<div class="col-xs-12 col-md-6">
							<label for="date">Date</label>
							<input type="text" id="date" name="date" class="item datepicker DT" value="<?php echo $event->date; ?>" required>
							<label for="published">Published?</label>
							<input type="hidden" name="published" class="item" value="0">
							<input type="checkbox" id="published" name="published" class="item" value="1" <?php if($event->published == 1){ echo 'checked="checked"'; } ?>>
						</div>
					</div>
					<div class="row margin-top-15">
						<div class="col-xs-12">
							<label for="details">Details</label>
							<textarea name="details" id="details" class="item details editor"><?php echo $event->details; ?></textarea>
						</div>
					</div>
					<div class="action-btn-holder">
						<button id="submit" class="btn">
							<?php
							if($e){
								echo 'Save Event';
							} else {
								echo 'Add Event';
								echo '<span id="goto" data-url="events.php"></span>';
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