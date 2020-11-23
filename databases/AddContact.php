<?php

include 'header.php';


 $msg = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        $stmt = $conn->prepare("INSERT INTO contact(first_name, last_name, email, comment) VALUES (:firstname, :lastname. :email, :comment)");
        $stmt->bindParam(":firstname", $firstname);
        $stmt->bindParam(":lastname", $lastname);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":comment", $comment);

        
        $firstname = $_POST["first_name"];
        $lastname = $_POST["last_name"];
        $email = $_POST["email"];
        $comment = $_POST["comment"];

        
        $stmt->execute();
        
        $msg = "Record inserted successfully";
    }

?>
<?php
        if(strlen($msg) > 0){
            echo "<strong>".$msg."</strong>";
        }
    ?>
<h1>Contact Us!!</h1>



    <form method='post' action="<?php echo $_SERVER['PHP_SELF']?>">
        <input type="text" placeholder='First Name' name='first_name' required />
        <br />
        <br />
        <input type='text' placeholder='Last Name' name='last_name' required />
        <br />
        <br />
        <input type='text' placeholder='Email Address' name='email' required />
        <br />
        <br />
        <input type='text' placeholder='Comment' name='comment' required />
        <br>
        <br>
        <br>
        <input type='submit' name='submit' value='Submit' />
    </form>


 <button id='back'>
        Go to Contact List
    </button>


    <script>
        var back = document.getElementById("back");
        back.addEventListener('click', function(){
          window.location.href = '/group-project-nikki-conor-acacia/databases/contact_list.php';  
        });
    </script>



<?php
include 'footer.php';

?>