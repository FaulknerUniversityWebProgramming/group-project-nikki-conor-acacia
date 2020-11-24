<?php 
session_start();
$_SESSION["user_id"] = "";
session_destroy();
header("Location: login.php");


// Delete account
$id=$loggedin_id;
$sql="DELETE FROM member WHERE user_id='$id'";
$result=mysqli_query($con,$sql);
if($result){
 echo " <div align='center'>";
 echo "Account Deleted Sucessfully.";
 echo " <a href='index.php' >Click here</a> to go back. ";
 echo "</div> ";
} elseif(!isset($loggedin_session) || $loggedin_session==NULL) {
 header("Location: php/register.php");
} else {
 echo "Unable to delete Your Account";
}
?>


