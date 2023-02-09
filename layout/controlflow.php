<?php 
$title = "Exercise 4";
include "header.php" ?>

<h3>Exercise 4</h3>
<h4>Write a script that gets the current month and prints one of the following responses, depending on whether it's August or not:
</h4>
<?PHP
$name = $_SERVER['PHP_SELF'];
$filename = basename($name);
// echo "$filename";
if( (date("F", fileatime($filename))=='August'))
{
    echo "It's " . date("F", fileatime($filename)); 
    echo ", so it's still holiday.";
}
else
{
    echo "Not August, this is ". date("F", fileatime($filename));
    echo "so I don't have any holidays.";
}
?>
<h4>Assign colour red to a variable name $color and check to print one the following responses (if else statement)</h4>
<?php
$color = "red";
if($color=="red")
{
    echo "the color is red";
} else
    echo "the color is not red ";
?>
<h4>Write a program to grade students based on their total score for a subject. Use variable to hold the total score.</h4>
<?php
$score = 60;
if($score>80)
echo "Excellent" ;
if($score<=80 && $score>70)
echo "Great" ;
if($score<=70 && $score>60)
echo "Good";
if($score<=60 && $score>50)
echo "Pass" ;
if($score<50)
echo "-_- Fail... good luck" ;
?>
<h4>Write a program to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting,)</h4>

<form action="controlflow.php" method="post">
<div class="row">
<div class="col">
    <input class="form-control" type="text" name="fname" required placeholder="First Name"><br>
</div>
<div class="col">
    <input class="form-control" type="number" name="age" required placeholder="age"><br>
</div>

        <input type="submit" value="submit">
</div>
</form>
<?php
error_reporting(E_ERROR | E_PARSE);
$fname = $_POST['fname'];
$age= $_POST['age'];
if($age>=18)
echo "<h3> eligible for voting </h3> ";
elseif($age<18)
echo "<h3> is not eligible for voting </h3>"
?>
<h4>
In task 5, you used $_SERVER['HTTP_USER_AGENT']; to get the browser name. 
Use Switch statement with strops function to print the name of the browser as below: 
If someone is using Chrome it should print, you are using Goolge Chrome….
</h4>

<?php
$user = $_SERVER['HTTP_USER_AGENT'];

switch (( strpos($user,'Edge')||strpos($user,'Chrome')) ==true)
{
    // case "Edge": echo "this is microsoft edge"; break;
    case "Chrome": echo "this is Chrome"; break;
    case "Firefox": echo "this is microsoft Firefox"; break;
    default: echo "this is microsoft unknown browser"; break;

}


?>
<?php include "footer.php" ?>