
<?php
include "connect.inc.php";

if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['repassword'])){
	if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['repassword'])){
		$fame = $_POST['fname'];
		$lame = $_POST['lname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$repassword = $_POST['repassword'];
		$md5_password = md5($password);
		$query_1 = "SELECT email from user";
		if($password==$repassword){
			$query = "INSERT INTO user VALUES ('$fame','$lame','$email','$md5_password')";

			if(mysqli_query($conn, $query)){
				echo "<script>window.onload = function(){alert('You`ve created an account');}</script>";
			}
		}else{
			echo "<script>window.onload = function(){alert('Plesase enter matched password.');}</script>";
		}
	}else{
		echo "<script>window.onload = function(){alert('Please Fill details.');}</script>";
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
															<div class="head_top_social text-right">
																	<label></label>
															</div>
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
                                    <a class="navbar-brand our_logo" href="index.php"><img src="assets/images/logo.png" alt="" /></a>
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
                                     <form action="signup.php" method="POST" id="formid">
                                         <div class="form-group">
                                             <input type="text" name="fname" class="form-control" placeholder="First Name">
                                         </div>
                                           <div class="form-group">
                                               <input type="text" name="lname" class="form-control" placeholder="Last Name">
                                           </div>

                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control" placeholder="Email">
                                            </div>

                                            <div class="form-group">
                                                <input type="password" name="password" class="form-control" placeholder="Password">
                                            </div>

                                            <div class="form-group">
                                             <input type="password" name="repassword" class="form-control" placeholder="Re-Password">
                                            </div>

                                            <input type="submit" name="submit" value="create an account" class="btn btn-primary">
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
