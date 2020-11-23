<?php
include 'header.php';

?>


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
            $query = $conn->query("SELECT * FROM contact");
                foreach($query as $contact){
                    echo "<tr><td>".$contact['first_name']."</td><td>".$contact['last_name']."</td><td>".$contact['email']."</td></tr>";
                 //   echo "<td><a href='/www/editDept.php?deptNo=".urlencode($dept['dept_no'])."'>Edit</a></td>";
                  //  echo "<td><a href='#' onclick='deleteDept(\"".$dept['dept_name']."\",\"".urlencode($dept['dept_no'])."\")'>Delete</a></td></tr>";

                }
    
            ?>
        </tbody>
    </table>


<?php
    include 'footer.php';
?>