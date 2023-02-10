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
$a = array(
    "one" => 1,
    "two" => 2,
    "three" => 3,
    "seventeen" => 17
);

?>

<?php include "footer.php" ?>