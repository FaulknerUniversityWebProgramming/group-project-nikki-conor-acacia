<?php
include 'header.php';



?>

    <h1>Contact List</h1>

<table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Comment</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $query = $conn->query("SELECT contact.first_name, contact.last_name, contact.email, contact.comment FROM contact");
                foreach($query as $contact){
                    echo "<tr><td>".$contact['first_name']."</td><td>".$contact['last_name']."</td><td>".$contact['email']."</td><td>".$contact['comment']."</td></tr>";
                 //   echo "<td><a href='/www/editDept.php?deptNo=".urlencode($dept['dept_no'])."'>Edit</a></td>";
                  //  echo "<td><a href='#' onclick='deleteDept(\"".$dept['dept_name']."\",\"".urlencode($dept['dept_no'])."\")'>Delete</a></td></tr>";

                }
    
            ?>
        </tbody>
    </table>

    <button id='back'>
        Go Add a Contact
    </button>

<br>
<br>

    <script>
        var back = document.getElementById("back");
        back.addEventListener('click', function(){
          window.location.href = '/group-project-nikki-conor-acacia/databases/AddContact.php';  
        });
    </script>

<?php
    include 'footer.php';
?>