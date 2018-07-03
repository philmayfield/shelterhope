<?php

require_once('../db_connect.php'); // Sets up $conn

$id = $_GET['id'];
if($id){
	$stmt = $conn->prepare('SELECT * FROM locations WHERE id = :id');
	$stmt->execute(array('id' => $id));

	$location = $stmt->fetch(PDO::FETCH_OBJ);
}

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
    	<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<title></title>
    	<meta name="description" content="">
    	<meta name="viewport" content="width=device-width, initial-scale=1">

    	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    	<link rel="stylesheet" href="../css/normalize.css">
    	<link rel="stylesheet" href="../css/main.css">
    	<link rel="stylesheet" href="../css/manager.css">
    	<script src="../js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>

    	<main class="col-xs-12">

			<h1>
			<?php
			if($id){
				echo 'Updating Location: '.$location->name;
			} else {
				echo 'Adding New Location';
			}
			?>
			</h1>

			<form id="update-form" action="" method="post" enctype="multipart/form-data">
				<input type="hidden" name="table" value="locations">
				<input type="hidden" name="id" value="<?php echo $location->id; ?>">
				<label for="name">Name</label>
				<input type="text" name="name" value="<?php echo $location->name; ?>" required>
				<label for="address">Address</label>
				<input type="text" name="address" value="<?php echo $location->address; ?>" required>
				<label for="city">City</label>
				<input type="text" name="city" value="<?php echo $location->city; ?>" required>
				<label for="state">State</label>
				<input type="text" name="state" value="<?php echo $location->state; ?>" maxlength="2" required>
				<label for="zip">Zip</label>
				<input type="text" name="zip" value="<?php echo $location->zip; ?>" maxlength="10" required>
				<label for="tel">Phone</label>
				<input type="text" name="tel" value="<?php echo $location->tel; ?>" required>
				<label for="fax">Fax</label>
				<input type="text" name="fax" value="<?php echo $location->fax; ?>">
				<label for="email">Email (general email for location)</label>
				<input type="text" name="email" value="<?php echo $location->email; ?>" required>
				<label for="web_name">Web Suffix (this is the locations web name - no spaces, eg: Thousand Oaks is thousandoaks)</label>
				<input type="text" name="web_name" value="<?php echo $location->web_name; ?>" required>
				<label for="published">Published?</label>
				<input type="hidden" name="published" value="0">
				<input type="checkbox" name="published" value="1" <?php if($location->published == 1){ echo 'checked="checked"'; } ?>>
				<button id="sub">
					<?php
					if($id){
						echo 'Save Info';
					} else {
						echo 'Add Info';
					}
					?>
				</button>
			</form>

			<span id="result"></span>

		</main>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
		<script src="../js/plugins.js"></script>
		<script src="../js/main.js"></script>

	</body>

</html>

<?php

$conn = null; // Close connection

?>