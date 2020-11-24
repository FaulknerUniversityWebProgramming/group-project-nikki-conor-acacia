<link rel="stylesheet" href="login.css" media="screen">
<?php
include "/databases/header.php";

//exsisting users
if(isset($_POST['but_submit'])){

    $email = mysqli_real_escape_string($conn,$_POST['txt_email']);
    $password = mysqli_real_escape_string($conn,$_POST['txt_password']);

    if ($email != "" && $password != ""){

        $sql_query = "select count(*) as id from user where email='".$email."' and password='".$password."'";
        $result = mysqli_query($conn,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['id'];

        if($count > 0){
            $_SESSION['email'] = $email;
            header('Location: MainFile.html');
        }else{
            echo "Invalid email and/or password";
        }
    }
  if($email == '' || $password == ''){
			$isValid = false;
			$error_message = "Please fill all fields.";
		}
}
?>

<?php
include "/databases/footer.php";
?>
