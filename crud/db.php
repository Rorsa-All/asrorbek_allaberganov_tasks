<?php
$servername = "db";
$username = "rorsa";
$password = "asror2003";
$dbname = "rorsa";
//connection

$conn = new mysqli($servername , $username, $password , $dbname);

if ($conn->connect_error)
{
    die("connection failed:" . $conn->connect_error);
}

?>