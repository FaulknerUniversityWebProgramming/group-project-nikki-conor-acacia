<?php 
include "/databases/header.php";
//logout
setcookie("email", "", time()-3600);
header("location:login.php");


// Delete account
$id=$loggedin_id;
$sql="DELETE FROM member WHERE user_id='$id'";
$result=mysqli_query($conn,$sql);
if($result){
 echo " <div align='center'>";
 echo "Account Deleted Sucessfully.";
 echo " <a href='MainFile.html' >Click here</a> to go back. ";
 echo "</div> ";
} elseif(!isset($loggedin_session) || $loggedin_session==NULL) {
 header("Location: register.php");
} else {
 echo "Unable to delete Your Account";
}
?>

<?php
include "/databases/footer.php";
?>
