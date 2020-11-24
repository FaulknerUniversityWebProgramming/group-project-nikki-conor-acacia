<link rel="stylesheet" href="/css/register.css" media="screen">
<?php
include "/databases/header.php";
$error_message = "";$success_message = "";

	// make new user
	if(isset($_POST['btnsignup'])){
		$fname = trim($_POST['fname']);
		$lname = trim($_POST['lname']);
		$email = trim($_POST['email']);
		$password = trim($_POST['password']);
		$confirmpassword = trim($_POST['confirmpassword']);

		$isValid = true;

		// if required fields are empty
		if($fname == '' || $lname == '' || $email == '' || $password == '' || $confirmpassword == ''){
			$isValid = false;
			$error_message = "Please fill all fields.";
		}

		// password check
		if($isValid && ($password != $confirmpassword) ){
			$isValid = false;
			$error_message = "Confirm password not matching.";
		}

		// Check if Email-ID is valid or not
		if ($isValid && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
		  	$isValid = false;
		  	$error_message = "Invalid Email-ID.";
		}

		if($isValid){

			// Check if Email-ID already exists
			$stmt = $con->prepare("SELECT * FROM users WHERE email = ?");
			$stmt->bind_param("s", $email);
			$stmt->execute();
			$result = $stmt->get_result();
			$stmt->close();
			if($result->num_rows > 0){
				$isValid = false;
				$error_message = "Email-ID is already existed.";
			}
		}

		// Insert records
		if($isValid){
			$insertSQL = "INSERT INTO users(fname,lname,email,password ) values(?,?,?,?)";
			$stmt = $con->prepare($insertSQL);
			$stmt->bind_param("ssss",$fname,$lname,$email,$password);
			$stmt->execute();
			$stmt->close();

			$success_message = "Account created successfully.";
       header('Location: MainFile.html');
		}
	}
?>
<?php
include "/databases/footer.php";
?>