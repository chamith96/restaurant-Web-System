<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Food Restorent</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="apple-touch-icon" href="apple-touch-icon.png">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="assets/css/font-awesome.min.css">
<!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->

<nav class="navbar navbar-inverse">
 <div class="container-fluid">
   <div class="navbar-header">
     <a class="navbar-brand" href="../index.php">Food Restorent</a>
   </div>
   <ul class="nav navbar-nav">
     <li><a href="orders.php">Orders</a></li>
     <li><a href="food.php">Food</a></li>
     <li><a href="addfood.php">Add Food</a></li>
   </ul>
   <ul class="nav navbar-nav navbar-right">
     <li>
      <a href="#"><span></span><?php
        session_start();
        if(isset($_SESSION['uname'])){
          echo'
          <form action="signout.inc.php" method="POST">
          <button type="submit" name="submit" id="button" >Sign out</button>
          </form>
          <style>#button{
          background-color:#222222;
          border: none;
          }
          </style>
          ';
          }
        ?>
      </a>
    </li>
   </ul>
 </div>
</nav>
