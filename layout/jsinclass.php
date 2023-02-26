<?php 

$title="JavaScript Event and form validation";
include "header.php";
?>

<h2>A simple button to display date</h2>
<button onclick="this.innerHTML=Date()">click to know date</button>
<h2> Make a button and a place holder as paragraph for the date</h2>
<button onclick="getElementById('p1').innerHTML=Date()">click to know date</button>
<p  id="p1"><p>

<h2>Chabge the background color</h2>

<form action="">
<input type="color" id="background" onchange="changeColor()">
</form>

<h2>Chabge the background color</h2>

<form action="">
<input type="color" id="fcolor" onchange="changeFColor()">
</form>

<h2>On mouse Over & On mouse out</h2>
<span 
onmouseover="
this.style.color='blue';
this.style.backgroundColor='yellow';
this.style.fontSize='2em';"
onmouseout="
this.style.color='red';
this.style.backgroundColor='white';
this.style.fontSize='1em';
"
> Some text</span>
<?php 
include "footer.php";
?>