<?php
include "/databases/header.php";

// Check user login or not
if(!isset($_SESSION['email'])){
    header('Location: /php/login.php');
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: /php/login.php');
}
?>
<?php
include "/databases/footer.php";
?>