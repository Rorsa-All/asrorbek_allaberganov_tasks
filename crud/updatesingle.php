<?php
$title="Update your info";
include '../layout/header.php';
$a=$_GET['id'];
include 'db.php';
$result= mysqli_query($conn,"Select * from studentinfo 
where id ='$a'");
$row=mysqli_fetch_array($result);

?>

<h3>Update your info below</h3>

<form name="update" method="post" action="">

    <input type="text" name ="fname" placeholder="First name" required value="<?php echo $row ['fname']; ?>"> <br><br>
    <input type="text" name ="lname" placeholder="Last name" required value="<?php echo $row ['lname']; ?>"> <br><br>
    <input type="text" name ="city" placeholder="City" required value="<?php echo $row ['city']; ?>"> <br><br>
    <select name="groupid" required value="<?php echo $row ['groupid']; ?>">
<option value="BBCAP22">BBCAP22</option>
<option value="BBCAP22">BBCAP22</option>
<option value="Others">Others</option>
    </select><br><br>

    <input type="submit" value="Upadate your info" name ="update"><br>
    <input type="submit" value="Delete your info" name ="delete">
</form>

<?php
if(isset($_POST['update']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $query=mysqli_query($conn,"UPDATE studentinfo set fname='$fname',
    lname='$lname' where id='$a");
    if($query)
    {
        echo"<h3>Your info is updated successfully</h3>";
    }
    else
    {
        echo "Record not modified";
        }
}

?>