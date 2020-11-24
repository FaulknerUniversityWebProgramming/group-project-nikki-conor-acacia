<?php
session_start();
  $host= "localhost";
  $user= "root";
  $password= "";
  $databasename= "Login"
    
  $con = mysqli_conecct($host, $user, $password, $databasename);
 // checking for connection
if (!$con){
  die("Connection Failed: " . mysqli_conecct_error());
}
     
?>