<?php
$title = "ex3";
include "header.php" ?>

<h3>Ex3</h3>
<h4>
    Create a simple html form to get Firstname and Lastname from the user and use echo echo statement to print using
    tag: Hello …., You are welcome to my site. (Form Tutorial: https://www.youtube.com/watch?v=nLPlDHrsyYA

</h4>
<form action="action.php" method="post">
    <div class="row">
        <div class="col">
            <input class="form-control" type="text" name="fname" required placeholder="First Name"><br>
        </div>
        <div class="col">
            <input class="form-control" type="text" name="lname" required placeholder="Last Name"><br>
        </div>
        <div class="col">
          <input class="form-control" type="date" name="bdate" required placeholder="birth"><br>
        </div>
          <div class="col">
              color: <input type="color" name="color">
              </div>
              <div class="col">
                </div>

                <input type="submit" value="submit">
        </div>
    </div>
</form>
<h4>Prepare a simple html table and apply bootstrap style to the table. You may use the same table that you did in 3.5.
</h4>

<!-- table -->
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Grade</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>4</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>3</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>5</td>
    </tr>
  </tbody>
</table>

<?php
$word1 = "Iam";
$word2 = "smart bot";

$result = $word1 .' '.  $word2;
echo "$result"
?>
<h4>Write a script to add up the numbers: 298, 234, 46. Use variables to store these numbers and echo statement to output your answer.
</h4>
<!-- 298, 234, 46. -->
<?php
$fir_number = 298;
$sec_number = 234;
$th_number = 46;
$sum_total = $fir_number + $sec_number+$th_number;
echo "$sum_total";

?>
<!--6 -->
<h4>Write a PHP script to detect the browser being used to view your pages. (Use predefined variables: $_SERVER). 
</h4>

<?php
echo $_SERVER['HTTP_USER_AGENT'];
?>
<!-- 7 -->
<h4>Last modification time of a file</h4>





<?php include "footer.php" ?>