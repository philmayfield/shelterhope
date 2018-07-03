<?php

if (!$_SERVER['REQUEST_METHOD'] === 'POST') {
    header("location: index.php?m=li");
    die();
}

require_once('../db_connect.php'); // Sets up $conn

$v = 0;
$id = $_POST['id'];
$table = $_POST['table'];
if($id && $table){
    $update = true;
}

if($update == true){
    $testStmt = $conn->prepare('SELECT id FROM '.$table.' WHERE id = :id LIMIT 1');
    $testStmt->execute(array('id' => $id));
    $count = $testStmt->rowCount();

    if($count != 1){
        $update = false;
    }
}

// If id is true then we are updating an existing record, if id is false, we are inserting a new record.

// Beginning of SQL query
if($update){
    $SQL = 'UPDATE `'.$table.'` SET ';
} else {
    $SQL = 'INSERT INTO `'.$table.'` (';
    if($id && $table){
        // Inserting new row, but id is known
        $new_keys = '`id`';
        $new_vals = '"'.$id.'"';
        $v = 1;
    } else {
        $new_keys = '';
        $new_vals = '';
    }
}

// Middle of SQL query
foreach($_POST AS $name => $value) {
    if($name != 'table' && $name != 'id'){
        if($update){
            if($v > 0){
                $SQL .= ', ';
            }
            $SQL .= '`'.$name.'` = "'.htmlspecialchars($value, ENT_QUOTES).'"';
        } else {
            if($v > 0){
                $new_keys .= ', ';
                $new_vals .= ', ';
            }
            $new_keys .= '`'.$name.'`';
            $new_vals .= '"'.htmlspecialchars($value, ENT_QUOTES).'"';
        }
        $v++;
    }
}

// End of SQL query
if($update){
    $SQL .= ' WHERE `id` = "'.$id.'"';
} else {
    $SQL .= $new_keys.') VALUES ('.$new_vals.')';
}

try{
    $query = $conn->prepare($SQL);
    $query->execute();
    if($update){
        echo '<span class="success">Successfully saved!</span>';
    } else {
        echo '<span class="success">Successfully added!</span>';
    }
}catch(Exception $e){
    echo '<span class="error">Error has occured while inserting data.</span>';
    echo '<br><br>ERROR: ' . $e->getMessage();
}

$conn = null;

?>