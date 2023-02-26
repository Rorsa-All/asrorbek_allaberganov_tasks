<?php
$title = "A simple CRUP app";

?>
<?php 

include '../layout/header.php' ?>
<form action="" method="post" onsubmit="return crud()" name="form1">
    <input type="text" name ="fname" placeholder="First name" required onblur="fname"> <br>
    <input type="text" name ="lname" placeholder="Last name" required> <br>
    <input type="text" name ="city" placeholder="City" required> <br>
    <select name="groupid" id="">
<option value="BBCAP22">BBCAP22</option>
<option value="BBCAP22">BBCAP22</option>
<option value="Others">Others</option>
    </select>

    <input type="submit" value="Submit" name ="submit">

</form>

<?php
if(isset($_POST['submit']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $city = $_POST['city'];
    $groupid = $_POST['groupid'];
    include('db.php');
    $sql = "insert into studentinfo (fname,lname,city,groupid)values('$fname','$lname','$city','$groupid')";
    if($conn->query($sql)===true)
    {
        echo "your information is added successfully";
    }
    else
    {
        echo "Error:" . $conn->error;
    }
}
?>

<?php include '../layout/footer.php' ?>