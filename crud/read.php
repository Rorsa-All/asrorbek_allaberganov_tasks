<?php
$title="reading data from the database";
include "../layout/header.php" ;
include "db.php";
$sql = "select * from studentinfo";
$result = $conn->query($sql);
if($result->num_rows>0)
{


    echo"
    <table class='table'>
    <tr><th>ID</th><th>First_name</th><th>Last_name</th><th>City</th><th>Group_id</th></tr>";
    while ($row=$result->fetch_assoc()){
    
    echo"
    <tr> <a href='updatesingle.php?id=$row[id]'>$row[id]</a></td>
    <td> 
    <td> $row[id]</td>
    <td> $row[fname]</td>
    <td> $row[lname]</td>
    <td> $row[city]</td>
    <td> $row[groupid]</td>
    </tr>
    
    ";
}
echo "</table>";
}
else
{
    echo "no results";
}
$conn->close();
include '../layout/footer.php';
?>