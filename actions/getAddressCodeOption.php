<?php

use Libs\Database\Mysql;

include '../vendor/autoload.php';



$selectedState = $_POST['selectState'];

$db = new Mysql();
$dbconnect = $db->connect();

try{
    $query = "SELECT * FROM townships WHERE state_code = '$selectedState'";
    $statement = $dbconnect->prepare($query);
    $statement->execute();

    
    echo json_encode($statement->fetchAll(PDO::FETCH_OBJ));
}catch(PDOException $e){
    echo $e;
}