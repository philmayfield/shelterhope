<?php

if (!$_SERVER['REQUEST_METHOD'] === 'POST') {
    header("location: about-us.php");
    die();
}

$email;

foreach($_POST AS $name => $value) {
	$email .= $name.": ".filter_var(trim($value), FILTER_SANITIZE_STRING)."\r\n";
}

$to = "contact@shelterhopepetshop.org";
if($_POST['email']){
	$from = $_POST['email'];
} else {
	$from = "contact@shelterhopepetshop.org";
}
$subject = "Contact Form from ".filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);

$headers = "From:" . $from;

if(mail($to,$subject,$email,$headers)){
	echo '<i class="fa fa-check"></i> Thanks!  Your message has been sent!';
}

?>