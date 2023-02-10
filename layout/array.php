<?php 
$title = "Exercise 5";
include "header.php"?>

<h4>1.  Write a php script to display courses as list. Use li </h4>

<?php 
$courses=array("PHP", "HTML", "JavaScript", "CMS", "Project");

for ($i = 0; $i < count($courses); $i++)

{
 echo '<li>' . $courses[$i]. '</li>';
}
 
?>

<h4>The unset() function is used to remove element from the array. </h4>
<?php 
error_reporting(E_ERROR | E_PARSE);
echo "<h4>1.  Write a php script to display courses as list. Use li </h4>";
$courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");
unset($courses1[2]);
for($i=0;$i<count($courses1); $i++ )
{
 echo '<li>' . $courses1[$i];
}
echo " <br> i  have removed JavaScript using unset!";
?>  

<h4>Sort the following arra</h4>
<?php
$courses3 = array("PHP", "HTML", "JavaScript", "CMS", "Project");
sort($courses3);
echo "a)<br>";
foreach($courses3 as $key=>$val) {
    echo "courses[" . $key . "]=" . $val . "<br>";
}
?>
<h4>Change the following array's all values to upper case.
</h4>
<?php
error_reporting(E_ERROR | E_PARSE);
 $courses4=array("php", "html", "javascript", "cms", "project");

 foreach($courses4 as $key=>$val) {
    $courses4 = strtoupper($val);
    echo "courses[" . $key . "]=" . $courses4 . "<br>";
}
?>
<h4>5. color </h4>
<?PHP
$color = array("red"=>"#FF0000", "green"=>"#2BFF00", "black"=>"#000000", "white"=>"#FFFFFF");
foreach($color as $colorn=>$val) {
    echo "$colorn=" . $val . "<br>";
}
?>

<h4>6.average temperature</h4>
<?php
 $temp=array(78, 60, 62, 68, 71, 68, 73,
 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 
 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
);

echo "<hr><h2> Calculation average temperature: </h2>";
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
// what is explode and what does the below code do? : 
$temp_array = explode(',', $month_temp);
$tot_temp = 0;
// What is count?
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."
"; 
// what does sort do?
sort($temp_array);
echo "<br> List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].", ";
}
echo "<br>List of five highest temperatures :";
// explain the following loop
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
}
?>


?>

<?php include "footer.php" ?>