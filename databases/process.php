//This is a wip file

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
        
    
    include 'contact_db.php';
    
    
       $firstname = $_POST["first_name"];
       $lastname = $_POST["last_name"];
       $email = $_POST["email"];
   //    $comment = $_POST["comment"];
    
            $statement = $conn->prepare("INSERT INTO contact(first_name, last_name, email) VALUES (?, ?, ?)");

    	$statement->bind_param('ssss', $firstname, $lastname, $email); //bind values and execute insert query

    	if($statement->execute()){

    	print "Hello ".$firstname."!, we have received your message and email ".$email;
}
    else{
		print $mysqli->error; //show mysql error if any
	}
}
    ?>