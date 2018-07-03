<?php

$username = 'root';
$password = '';
$host = 'localhost';
$table = 'kimberly_shps';

try {
	$conn = new PDO('mysql:host='.$host.';dbname='.$table, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

?>
