<?php
include("databases/header.php");

if(isset($_COOKIE["type"]))
{
 header("location:config.php");
}

$message = '';

if(isset($_POST["login"]))
{
 if(empty($_POST["email"]) || empty($_POST["password"]))
 {
  $message = '<div class="alert alert-danger">Both Fields are required</div>';
 }
 else
 {
  $query = "
  SELECT * FROM user 
  WHERE email = :email
  ";
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
     setcookie("type", $row["type"], time()+3600);
     header("location:config.php");
    }
    else
    {
     $message = '<div class="alert alert-danger">Wrong Password</div>';
    }
   }
  }
  else
  {
   $message = '<div class="alert alert-danger">Wrong Email Address</div>';
  }
 }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
  <br />
  <div class="container">
    <div class="panel panel-default">

    <div class="panel-heading">Login</div>
    <div class="panel-body">
     <span><?php echo $message; ?></span>
     <form method="post">
      <div class="form-group">
       <label>Email</label>
       <input type="text" name="email" id="email" class="form-control" />
      </div>
      <div class="form-group">
       <label>Password</label>
       <input type="password" name="password" id="password" class="form-control" />
      </div>
      <div class="form-group">
       <input type="submit" name="login" id="login" class="btn btn-info" value="Login" />
      </div>
     </form>
    </div>
   </div>
  </div>
 </body>
</html>
