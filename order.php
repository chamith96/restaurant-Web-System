<?php
include "connect.inc.php";

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['tele']) && isset($_POST['address1']) && isset($_POST['address2']) && isset($_POST['food']) && isset($_POST['date']) && isset($_POST['amount'])){
	if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['tele']) && !empty($_POST['address1']) && !empty($_POST['address2']) && !empty($_POST['food']) && !empty($_POST['date']) && !empty($_POST['amount'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$tele = $_POST['tele'];
		$address1 = $_POST['address1'];
		$address2 = $_POST['address2'];
    $food = $_POST['food'];
    $date = $_POST['date'];
    $amount = $_POST['amount'];

			$query = "INSERT INTO orders VALUES ('$name','$email','$tele','$address1', '$address2', '$food', '$date', '$amount')";

			if(mysqli_query($conn, $query)){
				echo "<script>window.onload = function(){alert('Your Order has submited.We`ll inform you within 1 hour.');}</script>";;
			}

	}else{
		echo "<script>window.onload = function(){alert('Please Fill all fields.');}</script>";
	}
}
?>

<!doctype html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Food Order</title>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>

		<div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <header id="home" class="navbar-fixed-top">
            <div class="header_top_menu clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-md-offset-3 col-sm-12 text-right">

                        </div>

                        <div class="col-md-4 col-sm-12">
                            <div class="head_top_social text-right">
                               <?php
                                    session_start();
                                    if(isset($_SESSION['uname'])){
                                    echo '<form action="signout.inc.php" method="POST">
                                        <button type="submit" name="submit" id="button">Sign out</button>
                                        </form>
                                        <style>#button{
                                          background-color: #e7a331;
                                          border-radius: 12px;
                                          color: white;
                                        }
                                        </style>
                                        ';
                                        }
                                ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- End navbar-collapse-->

            <div class="main_menu_bg">
                <div class="container">
                    <div class="row">
                        <nav class="navbar navbar-default">
                            <div class="container-fluid">
                                <div class="navbar-header">
                                    <a class="navbar-brand our_logo" href="home.php"><img src="assets/images/logo.png" alt="" /></a>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <section id="slider" class="slider">
            <div class="slider_overlay">
                <div class="container">
                    <div class="row">
                        <div class="main_slider text-center">
                            <div class="col-md-12">
                                <div class="main_slider_content wow zoomIn">
                                  <div class="single_widget_form text-left">
                                     <form action="order.php" id="formid" method="POST">
                                         <div class="form-group">
																					 <label class="control-label" for="pwd">Customer Name</label>
                                             <input type="text" class="form-control" name="name" placeholder="Customer Name">
                                         </div>
                                           <div class="form-group">
																						 <label class="control-label" for="pwd">Email enter to sign in</label>
                                               <input type="email" class="form-control" name="email" placeholder="Email enter to sign in">
                                           </div>

                                            <div class="form-group">
																							<label class="control-label" for="pwd">Contact Number</label>
                                                <input type="text" class="form-control" name="tele" placeholder="Contact Number">
                                            </div>

                                            <div class="form-group">
																							<label class="control-label" for="pwd">Address lane 1</label>
                                                <input type="text" class="form-control" name="address1" placeholder="Address lane 1">
                                            </div>

                                            <div class="form-group">
																							<label class="control-label" for="pwd">Address lane 2</label>
                                             <input type="text" class="form-control" name="address2" placeholder="Address lane 2">
                                            </div>

																						<label class="control-label" for="pwd">Select Food</label>
                                            <div class="form-group">
                                                <select class="form-control" name="food">
                                                  <option><b>Select Food</b></option>
                                                  <option>Bull's eye egg</option>
                                                  <option>Mutton Deval</option>
                                                  <option>Yams Rice</option>
                                                  <option>Pastry</option>
                                                  <option>Chicken Double Bun</option>
                                                  <option>Mushroom Deval</option>
                                                  <option>Masala Those</option>
                                                  <option>Fish Deval</option>
                                            </select>
                                            </div>
																						<label class="control-label" for="pwd">Order date</label>
                                                <div class="form-group">
                                                <input type="date" name="date" class="form-control">
                                                </div>

																								<label class="control-label" for="pwd">Amount</label>
                                                <div class="form-group">
                                                <input type="text" class="form-control" name="amount" placeholder="Amount">
                                                </div>


                                            <input type="submit" value="Order now" class="btn btn-primary">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>
