<?php

session_start();

require_once('../db_connect.php'); // Sets up $conn
require_once('login_test.php'); // requires session_start(), sets up $logged_in, $user, $user_is_employee, $user_access, $empdata, $locdata;

if ($user_access > 0) {
	header("location: main.php");
}

$l = $_GET['l'];
if($l){
	$getLocStmt = $conn->prepare('SELECT * FROM locations WHERE id = :id LIMIT 1');
	$getLocStmt->execute(array('id' => $l));

	$getLocation = $getLocStmt->fetch(PDO::FETCH_OBJ);
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
					if($l){
						echo 'Updating Location: '.$getLocation->name;
					} else {
						echo 'Adding New Location';
					}
					?>
				</h2>

				<form id="update-form" action="db_interface.php" method="post" enctype="multipart/form-data">
					<input type="hidden" name="table" value="locations" class="item">
					<input type="hidden" name="id" class="item" value="<?php echo $getLocation->id; ?>">
					<div class="row">
						<div class="col-xs-12 col-md-4">
							<label for="name">Name</label>
							<input type="text" id="name" name="name" class="item" value="<?php echo $getLocation->name; ?>" required>
							<label for="web_name">Website Suffix</label>
							<input type="text" id="web_name" name="web_name" class="item" value="<?php echo $getLocation->web_name; ?>" required>
							<div class="input-note">This is the locations web address name - NO SPACES, eg: Thousand Oaks is thousandoaks)</div>
							<label for="email">Email</label>
							<input type="text" id="email" name="email" class="item" value="<?php echo $getLocation->email; ?>" required>
							<div class="input-note">General email for location</div>
							<label for="tel">Phone</label>
							<input type="text" id="tel" name="tel" class="item" value="<?php echo $getLocation->tel; ?>" required>
							<label for="fax">Fax</label>
							<input type="text" id="fax" name="fax" class="item" value="<?php echo $getLocation->fax; ?>">
							<label for="published">Published?</label>
							<input type="hidden" name="published" class="item" value="0">
							<input type="checkbox" id="published" name="published" class="item" value="1" <?php if($getLocation->published == 1){ echo 'checked="checked"'; } ?>>
						</div>
						<div class="col-xs-12 col-md-4">
							<label for="address">Address</label>
							<input type="text" id="address" name="address" class="item" value="<?php echo $getLocation->address; ?>" required>
							<label for="city">City</label>
							<input type="text" id="city" name="city" class="item" value="<?php echo $getLocation->city; ?>" required>
							<label for="state">State</label>
							<input type="text" id="state" name="state" class="item" value="<?php echo $getLocation->state; ?>" maxlength="2" required>
							<label for="zip">Zip</label>
							<input type="text" id="zip" name="zip" class="item" value="<?php echo $getLocation->zip; ?>" maxlength="10" required>
							
						</div>
						<div class="col-xs-12 col-md-4">
							<p>Hours</p>
							<div class="row">
								<div class="col-xs-6">
									<label for="hours_Mon">Monday</label>
									<input type="text" id="hours_Mon" name="hours_Mon" class="item" value="<?php echo $getLocation->hours_Mon; ?>">
									<label for="hours_Tue">Tuesday</label>
									<input type="text" id="hours_Tue" name="hours_Tue" class="item" value="<?php echo $getLocation->hours_Tue; ?>">
									<label for="hours_Wed">Wednesday</label>
									<input type="text" id="hours_Wed" name="hours_Wed" class="item" value="<?php echo $getLocation->hours_Wed; ?>">
									<label for="hours_Thu">Thursday</label>
									<input type="text" id="hours_Thu" name="hours_Thu" class="item" value="<?php echo $getLocation->hours_Thu; ?>">
								</div>
								<div class="col-xs-6">
									<label for="hours_Fri">Friday</label>
									<input type="text" id="hours_Fri" name="hours_Fri" class="item" value="<?php echo $getLocation->hours_Fri; ?>">
									<label for="hours_Sat">Saturday</label>
									<input type="text" id="hours_Sat" name="hours_Sat" class="item" value="<?php echo $getLocation->hours_Sat; ?>">
									<label for="hours_Sun">Sunday</label>
									<input type="text" id="hours_Sun" name="hours_Sun" class="item" value="<?php echo $getLocation->hours_Sun; ?>">
								</div>
							</div>
						</div>
					</div>
					

					<div class="action-btn-holder">
						<button id="submit" class="btn">
							<?php
							if($l){
								echo 'Save Location';
							} else {
								echo 'Add Location';
								echo '<span id="goto" data-url="locations.php"></span>';
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