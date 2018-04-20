<?php
include "navbar.inc.php";
include "connect.inc.php";

$query = "DELETE FROM food where fid =".$_GET['sid'];

mysqli_query($conn,$query) or die("can't Execute...");


header("location:food.php");
 ?>
