<?php

require_once('db_connect.php'); // Sets up $conn

require_once('get_loc.php'); // Sets up $loc object - keys corresponds with 'locations' database eg: $loc->address

echo $loc->address;

$stmt = $conn->prepare('SELECT * FROM employees WHERE location = :loc');
$stmt->execute(array('loc' => $loc->id));

while($row = $stmt->fetch(PDO::FETCH_OBJ)) {
    echo $row->name;
}

$contstmt = $conn->prepare('SELECT * FROM main_content WHERE id = :loc LIMIT 1');
$contstmt->execute(array('loc' => $loc->id));
$content = $contstmt->fetch(PDO::FETCH_OBJ);

echo htmlspecialchars_decode($content->content, ENT_QUOTES);
echo htmlspecialchars_decode($content->aapcode, ENT_QUOTES);

?>