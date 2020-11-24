
<link rel="stylesheet" href="login.css" media="screen">
include "/databases/header.php";

<?php
if(isset($_COOKIE["email"]))
{
 header("location: MainFile.html");
}

$message = '';

if(isset($_POST["login"]))
{
 if(empty($_POST["email"]) || empty($_POST["password"]))
 {
  $message = "<div class='alert alert-danger'>Both Fields are required</div>";
 }
 else
 {
  $query = "SELECT * FROM user WHERE email = :email";
  $statement = $conn->prepare($query);
  $statement->execute(
   array(
    'email' => $_POST["email"]
   )
  );
  $count = $statement->rowCount();
  if($count > 0)
  {
   $result = $statement->fetchAll();
   foreach($result as $row)
   {
    if(password_verify($_POST["password"], $row["password"]))
    {
     setcookie("email", $row["email"], time()+3600);
     header("location: MainFile.html");
    }
    else
    {
     $message = '<div class="alert alert-danger">Wrong Password</div>';
    }
   }
  }
  else
  {
   $message = "<div class='alert alert-danger'>Wrong Email Address</div>";
  }
 }
}
?>
<?php
include "/databases/footer.php";
?>
