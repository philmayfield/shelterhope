<?php

$genSite = false; // generic site?

// short circuiting to be just thousand oaks
//
// un comment if going back to more than one store
//
// if(!empty($_GET['l'])){
//     $the_loc = $_GET['l'];
// } else {
// 	$genSite = true;
// 	$the_loc = 'default';
// }

// delete line if going back to more than one store
$the_loc = 'thousandoaks';

$get_loc = $conn->prepare('SELECT * FROM locations WHERE web_name = :loc');
$get_loc->execute(array('loc' => $the_loc));

if($get_loc->rowCount() == 1){
    $locdata = $get_loc->fetch(PDO::FETCH_OBJ);
}

?>
