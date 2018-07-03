<?php

$genSite = false; // generic site?

if(!empty($_GET['l'])){
    $the_loc = $_GET['l'];
} else {
	$genSite = true;
	$the_loc = 'default';
}
$get_loc = $conn->prepare('SELECT * FROM locations WHERE web_name = :loc');
$get_loc->execute(array('loc' => $the_loc));

if($get_loc->rowCount() == 1){
    $locdata = $get_loc->fetch(PDO::FETCH_OBJ);
}

?>
