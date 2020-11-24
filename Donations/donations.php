<?php

include 'header.php';


 $msg = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        $stmt = $conn->prepare("INSERT INTO donations(first_name, last_name, number, email, amountEntered, amountWanted) VALUES (:firstname, :lastname, :number, :email, :amountEntered, :amountWanted)");
        $stmt->bindParam(":firstname", $firstname);
        $stmt->bindParam(":lastname", $lastname);
        $stmt->bindParam(":number", $number);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":amountEntered", $amountEntered);
        $stmt->bindParam(":amountEntered", $amountWanted);

        
        $firstname = $_POST["first_name"];
        $lastname = $_POST["last_name"];
        $number = $_POST["number"];        
        $email = $_POST["email"];
        $amountEntered = $_POST["amountEntered"];
        $amountWanted = $_POST["amountWanted"];

        
        $stmt->execute();
        
        $msg = "Record inserted successfully";
    }

?>
<?php
        if(strlen($msg) > 0){
            echo "<strong>".$msg."</strong>";
        }
    ?>









<h1>Donations Page</h1>
<h3>Interested in making a donation to a social club?</h3>
<h3>Fill out the form below!!</h3>

        <link rel="stylesheet" href="../css/donations.css"/>


<div>
    
    <form method='post' action="<?php echo $_SERVER['PHP_SELF']?>">
        <label for="fname">Full Name: </label>
        <input type="text" placeholder='First Name' name='first_name' required />
        <input type='text' placeholder='Last Name' name='last_name' required />
        <br />
        <br />
          <label for="number">Phone Number: </label>

        <input type='text' placeholder='Phone Number' name='number' required />
        <br />
        <br />
          <label for="email">Email Address: </label>

        <input type='text' placeholder='Email Address' name='email' required />
        <br />
        <br />
        <label for="amountEntered">Amount Entered: </label>
        <select id="filterMoney">
               <option value="0">USD</option>
               <option value="1">AED</option>
               <option value="2">AFN</option>
               <option value="3">ALL</option>
               <option value="4">AMD</option>
               <option value="5">ANG</option>
               <option value="6">AOA</option>
               <option value="7">ARS</option>
               <option value="8">AUD</option>
               <option value="9">AWG</option>
               <option value="10">AZN</option>
               <option value="11">BAM</option>
               <option value="12">BBD</option>
               <option value="13">BDT</option>
               <option value="14">BGN</option>
               <option value="15">BHD</option>
               <option value="16">BIF</option>
               <option value="17">BMD</option>
               <option value="18">BND</option>
               <option value="19">BOB</option>
               <option value="20">BRL</option>
               <option value="21">BSD</option>
               <option value="22">BTC</option>
               <option value="23">BTN</option>
               <option value="24">BWP</option>
               <option value="25">BYN</option>
               <option value="26">BYR</option>
               <option value="27">BZD</option>
        </select>
                <input type='text' placeholder='Amount' name='amountEntered' required />
        
        
        <label for="amountWanted">Amount Wanted: </label>
        <select id="filterCurrency">
               <option value="0">USD</option>
               <option value="1">AED</option>
               <option value="2">AFN</option>
               <option value="3">ALL</option>
               <option value="4">AMD</option>
               <option value="5">ANG</option>
               <option value="6">AOA</option>
               <option value="7">ARS</option>
               <option value="8">AUD</option>
               <option value="9">AWG</option>
               <option value="10">AZN</option>
               <option value="11">BAM</option>
               <option value="12">BBD</option>
               <option value="13">BDT</option>
               <option value="14">BGN</option>
               <option value="15">BHD</option>
               <option value="16">BIF</option>
               <option value="17">BMD</option>
               <option value="18">BND</option>
               <option value="19">BOB</option>
               <option value="20">BRL</option>
               <option value="21">BSD</option>
               <option value="22">BTC</option>
               <option value="23">BTN</option>
               <option value="24">BWP</option>
               <option value="25">BYN</option>
               <option value="26">BYR</option>
               <option value="27">BZD</option>
        </select>
        <input type='text' placeholder='Amount' name='amountWanted' />
        <br>
        <br>
        <input type='submit' name='submit' value='Submit' />
        <br>
    </form>
</div>


<button id='back'>
        Go to Main Page
    </button>


    <script>
        var back = document.getElementById("back");
        back.addEventListener('click', function(){
          window.location.href = '/group-project-nikki-conor-acacia/MainFile.html';  
        });
    </script>



<?php
include 'footer.php';

?>