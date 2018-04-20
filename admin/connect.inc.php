<?php 
$server = "localhost";
$username = "root";
$password = "";
$dbname = "restaurant";

$conn = mysqli_connect($server, $username, $password ) or die("Not connected");
mysqli_select_db($conn, $dbname);
 ?>
