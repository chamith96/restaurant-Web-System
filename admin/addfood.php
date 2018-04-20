<?php
include "navbar.inc.php";
include "connect.inc.php";

if (isset($_POST['fname']) && isset($_POST['price'])) {
  $fname = $_POST['fname'];
  $price = $_POST['price'];
    if(!empty($fname) && !empty($price)){
      $sql = "INSERT INTO food(`food name`,`price`) VALUES ('$fname', '$price')";
        if(mysqli_query($conn, $sql)){
          echo "Food Added.";
        }
    }
}

 ?>

 <div class="container">
  <h2 align="center">Add Food</h2>
  <form action="addfood.php" method="POST">
    <div class="form-group">
      <label>Food Name</label>
      <input type="text" class="form-control" placeholder="Food Name" name="fname">
    </div>
    <div class="form-group">
      <label>Price</label>
      <input type="text" class="form-control" placeholder="Food Price (Rs.)" name="price">
    </div>
    <button type="submit" class="btn btn-default">Add Food</button>
  </form>
</div>
