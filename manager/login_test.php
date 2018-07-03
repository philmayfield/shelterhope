<?php

if($_SESSION['logged_in'] != '1' && $_SESSION['user'] == ''){
	// failed - redirect to login
	header("location: index.php?m=li");
} else {
	// success

	$logged_in = true;
	$user = $_SESSION['user'];

	$userstmt = $conn->prepare('SELECT * FROM users WHERE login = :login LIMIT 1');
	$userstmt->execute(array('login' => $user));
	$userdata = $userstmt->fetch(PDO::FETCH_OBJ);

	$user_is_employee = $userdata->is_employee;
	$user_access = $userdata->access;

	// if user is an employee, then get their data, and their locations data
	if($user_access == 0){
		// get full location data
		$locstmt = $conn->prepare('SELECT * FROM locations ORDER BY name ASC');
		$locstmt->execute();
	} elseif($user_is_employee > 0) {
		// get employee info
		$empstmt = $conn->prepare('SELECT * FROM employees WHERE id = :id LIMIT 1');
		$empstmt->execute(array('id' => $user_is_employee));
		$empdata = $empstmt->fetch(PDO::FETCH_OBJ);

		// get location data for employee
		$locstmt = $conn->prepare('SELECT * FROM locations WHERE id = :location LIMIT 1');
		$locstmt->execute(array('location' => $empdata->location));
		$locdata = $locstmt->fetch(PDO::FETCH_OBJ);
	}
}

?>