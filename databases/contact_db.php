<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'test';

try{
    $conn = new PDO("mysql:host=$server;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 //   echo 'DB conn successful';
}
catch(PDOException $e){
    echo "DB conn failed".$e->getMessage();
}
?>