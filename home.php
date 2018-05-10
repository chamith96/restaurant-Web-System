<!doctype html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Food and Restorent One page Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


        <!--For Plugins external css-->
        <link rel="stylesheet" href="assets/css/animate/animate.css" />
        <link rel="stylesheet" href="assets/css/plugins.css" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
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
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                    </button>
                                    <a class="navbar-brand our_logo" href="home.php"><img src="assets/images/logo.png" alt="" /></a>
                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                    <ul class="nav navbar-nav navbar-right">
                                        <li><a href="#slider">Home</a></li>
                                        <li><a href="#portfolio">Order</a></li>
                                        <li><a href="#ourPakeg">Menu</a></li>
                                    </ul>
                                </div><!-- /.navbar-collapse -->
                            </div><!-- /.container-fluid -->
                        </nav>
                    </div>
                </div>
            </div>
        </header> <!-- End Header Section -->

        <section id="slider" class="slider">
            <div class="slider_overlay">
                <div class="container">
                    <div class="row">
                        <div class="main_slider text-center">
                            <div class="col-md-12">
                                <div class="main_slider_content wow zoomIn" data-wow-duration="1s">
                                    <h1>Tasty Food</h1>
                                    <p>We Provide best foods for your tasty.You can select foods at home as you want.We delever it as soon as posible.It is your select your tasty.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>


        <section id="portfolio" class="portfolio">
            <div class="container">
                <div class="row">
                    <div class="portfolio_content text-center  wow fadeIn" data-wow-duration="5s">
                        <div class="col-md-12">
                            <div class="head_title text-center">
                                <h4>Order</h4>
                                <h3>We deliver to your door step</h3>
                            </div>

                            <div class="main_portfolio_content">
                                <div class="col-md-3 col-sm-4 col-xs-6 single_portfolio_text">
                                    <img src="assets/images/p1.png" alt="" />
                                    <div class="portfolio_images_overlay text-center">
                                        <h6>Bull's eye egg</h6>
                                        <p class="product_price">Rs.50</p>
                                        <a href="order.php" class="btn btn-primary">Order Now</a>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-6 single_portfolio_text">
                                    <img src="assets/images/p2.png" alt="" />
                                    <div class="portfolio_images_overlay text-center">
                                        <h6>Mutton Deval</h6>
                                        <p class="product_price">Rs.450</p>
                                        <a href="order.php" class="btn btn-primary">Order Now</a>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-6 single_portfolio_text">
                                    <img src="assets/images/p3.png" alt="" />
                                    <div class="portfolio_images_overlay text-center">
                                        <h6>Yams Rice</h6>
                                        <p class="product_price">Rs.250</p>
                                        <a href="order.php" class="btn btn-primary">Order Now</a>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-6 single_portfolio_text">
                                    <img src="assets/images/p4.png" alt="" />
                                    <div class="portfolio_images_overlay text-center">
                                        <h6>Pastry</h6>
                                        <p class="product_price">Rs.125</p>
                                        <a href="order.php" class="btn btn-primary">Order Now</a>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-6 single_portfolio_text">
                                    <img src="assets/images/p5.png" alt="" />
                                    <div class="portfolio_images_overlay text-center">
                                        <h6>Chicken Double Bun</h6>
                                        <p class="product_price">Rs.350</p>
                                        <a href="order.php" class="btn btn-primary">Order Now</a>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-6 single_portfolio_text">
                                    <img src="assets/images/p6.png" alt="" />
                                    <div class="portfolio_images_overlay text-center">
                                        <h6>Mushroom Deval</h6>
                                        <p class="product_price">Rs.225</p>
                                        <a href="order.php" class="btn btn-primary">Order Now</a>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-6 single_portfolio_text">
                                    <img src="assets/images/p7.png" alt="" />
                                    <div class="portfolio_images_overlay text-center">
                                        <h6>Masala Those</h6>
                                        <p class="product_price">Rs.100</p>
                                        <a href="order.php" class="btn btn-primary">Order Now</a>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-6 single_portfolio_text">
                                    <img src="assets/images/p8.png" alt="" />
                                    <div class="portfolio_images_overlay text-center">
                                        <h6>Fish Deval</h6>
                                        <p class="product_price">Rs.175</p>
                                        <a href="order.php" class="btn btn-primary">Order Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="ourPakeg" class="ourPakeg">
            <div class="container">
                <div class="main_pakeg_content">
                    <div class="row">
                        <div class="head_title text-center">
                            <h4>Menu</h4>
                            <h3>Come and feel the tasty</h3>
                        </div>

                        <div class="single_pakeg_one text-right wow rotateInDownRight">
                            <div class="col-md-6 col-md-offset-6 col-sm-8 col-sm-offset-4">
                                <div class="single_pakeg_text">
                                    <div class="pakeg_title">
                                        <h4>Drinks</h4>
                                    </div>

                                    <ul>
                                        <li> Tuna Roast Source........................................................$24.5 </li>
                                        <li> Tuna Roast Source........................................................$24.5 </li>
                                        <li> Tuna Roast Source........................................................$24.5 </li>
                                        <li> Tuna Roast Source........................................................$24.5 </li>
                                        <li> Tuna Roast Source........................................................$24.5 </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="single_pakeg_two text-left wow rotateInDownLeft">
                            <div class="col-md-6 col-sm-8">
                                <div class="single_pakeg_text">
                                    <div class="pakeg_title">
                                        <h4>Main course </h4>
                                    </div>

                                    <ul>
                                        <li> Tuna Roast Source........................................................$24.5 </li>
                                        <li> Tuna Roast Source........................................................$24.5 </li>
                                        <li> Tuna Roast Source........................................................$24.5 </li>
                                        <li> Tuna Roast Source........................................................$24.5 </li>
                                        <li> Tuna Roast Source........................................................$24.5 </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="single_pakeg_three text-left wow rotateInDownRight">
                            <div class="col-md-6 col-md-offset-6 col-sm-8 col-sm-offset-4">
                                <div class="single_pakeg_text">
                                    <div class="pakeg_title">
                                        <h4>Desserts</h4>
                                    </div>

                                    <ul>
                                        <li> Tuna Roast Source........................................................$24.5 </li>
                                        <li> Tuna Roast Source........................................................$24.5 </li>
                                        <li> Tuna Roast Source........................................................$24.5 </li>
                                        <li> Tuna Roast Source........................................................$24.5 </li>
                                        <li> Tuna Roast Source........................................................$24.5 </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="footer_widget" class="footer_widget">
            <div class="container">
                <div class="row">
                    <div class="footer_widget_content text-center">
                        <div class="col-md-4">
                          <div class="sample">
                            <div class="single_widget wow fadeIn" data-wow-duration="3s">
                                <h3>Take it easy with location</h3>

                                <div class="single_widget_info">
                                    <p><span class="date_day">Monday To Friday</span>
                                        <span>8:00am to 10:00pm(Breakfast)</span>
                                        <span>11:00am to 10:00pm(Lunch/Diner)</span>

                                        <span class="date_day">Saturday & Sunday</span>
                                        <span>10:00am to 11:00pm(Brunch)</span>
                                        <span>11:00am to 12:00pm(Lunch/Dinner)</span></p>
                                </div>
                              </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

		<div class="scrollup">
			<a href="#"><i class="fa fa-chevron-up"></i></a>
		</div>


        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>

        <script src="assets/js/jquery-easing/jquery.easing.1.3.js"></script>
        <script src="assets/js/wow/wow.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>
