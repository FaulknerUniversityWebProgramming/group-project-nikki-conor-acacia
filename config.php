<?php
include "/databases/header.php";

//config.php

if(!isset($_COOKIE["type"]))
{
 header("location:login.php");
}

?>
   <?php
   if(isset($_COOKIE["type"]))
   {
    echo '<h2 align="center">Welcome User</h2>';
   }
   ?>