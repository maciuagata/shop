<?php require('includes/Dbconfig.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Blog | E-Shopper</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/prettyPhoto.css" rel="stylesheet">
        <link href="css/price-range.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    </head><!--/head-->

    <body>
        <header id="header"><!--header-->
            <div class="header_top"><!--header_top-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="contactinfo">
                                <ul class="nav nav-pills">
                                    <li><a href=""><i class="fa fa-phone"></i> +370 5 2476560</a></li>
                                    <li><a href=""><i class="fa fa-envelope"></i> vtvpmc_lt@gmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="social-icons pull-right">
                                <ul class="nav navbar-nav">
                                    <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                    <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header_top-->

            <div class="header-middle"><!--header-middle-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="logo pull-left">
                                <a href="index.php"><img src="images/home/logo.png" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="shop-menu pull-right">
                                <ul class="nav navbar-nav">
                                    <li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Krepšys</a></li>
                                    <li><a href="indexs.php"><i class="fa fa-user"></i> Account</a></li>																
                                    <li><a href="login.php"><i class="fa fa-lock"></i> Login</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header-middle-->

            <div class="header-bottom"><!--header-bottom-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="mainmenu pull-left">
                                <ul class="nav navbar-nav collapse navbar-collapse">
                                    <li><a href="index.php" class="active">Pagrindinė</a></li>
                                    <li class="dropdown"><a href="#">Parduotuvė<i class="fa fa-angle-down"></i></a>
                                        <ul role="menu" class="sub-menu">
                                            <li><a href="shop.php">Products</a></li>
                                            <li><a href="product-details.php">Product Details</a></li>
                                            <li><a href="cart.php">Cart</a></li>
                                            <li><a href="login.php">Login</a></li>
                                        </ul>
                                    </li> 
                                    <li class="dropdown"><a href="#">Blogas<i class="fa fa-angle-down"></i></a>
                                        <ul role="menu" class="sub-menu">
                                            <li><a href="blog.php">Blog List</a></li>
                                        </ul>
                                    </li> 
                                    <li><a href="#">About parduotuvę</a></li>
                                    <li><a href="contact-us.php" class="active">Kontaktai</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header-bottom-->
        </header><!--/header-->

        <section>
            <div class="container">
                <div class="row">
                       <div class="col-sm-3">
                        <div class="left-sidebar">
                            <h2>KATALOGAS</h2>
                            <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">                                               
                                                Džinsai- vyriški
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordian" href="#mens"> 
                                                Kelnės - vyriški
                                            </a>
                                        </h4>
                                    </div>
                                </div>   
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordian" href="#womens">                                            
                                                Marškiniai - moteriški
                                            </a>
                                        </h4>
                                    </div>
                                </div>    
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordian" href="#womens">                                            
                                                Megztinis - moteriški
                                            </a>
                                        </h4>
                                    </div>
                                </div> 
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordian" href="#womens">                                            
                                                Suknelės - moteriški
                                            </a>
                                        </h4>
                                    </div>
                                </div> 
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordian" href="#womens">                                            
                                                Marškiniai - vyriški
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-9">
                        <div class="blog-post-area">
                            <h2 class="title text-center">Latest From our Blog</h2>
                            <div class="single-blog-post">
                                <div id="wrapper">

                                    <h3>Blog</h3>
                                    <hr />

                                    <?php
                                    try {
                                        $stmt = $db->query('SELECT postID, postTitle, postDesc, postDate FROM blog_posts ORDER BY postID DESC');
                                        while ($row = $stmt->fetch()) {

                                            echo '<div>';
                                            echo '<h1><a href="viewpost.php?id=' . $row['postID'] . '">' . $row['postTitle'] . '</a></h1>';
                                            echo '<p>Posted on ' . date('jS M Y H:i:s', strtotime($row['postDate'])) . '</p>';
                                            echo '<p>' .'Subject: '. $row['postDesc'] . '</p>';
                                            echo '<p><a href="viewpost.php?id=' . $row['postID'] . '">Read More</a></p>';
                                            echo '</div>';
                                        }
                                    } catch (PDOException $e) {
                                        echo $e->getMessage();
                                    }
                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    </section>

                    <footer id = "footer"><!--Footer-->
                        <div class = "footer-top">
                            <div class = "container">
                                <div class = "row">
                                    <div class = "col-sm-2">
                                        <div class = "companyinfo">
                                            <h2><span>e</span>-shopper</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                                        </div>
                                    </div>
                                    <div class = "col-sm-3">
                                        <div class = "address">
                                            <img src = "images/home/map.png" alt = "" />
                                            <p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class = "footer-widget">
                            <div class = "container">
                                <div class = "row">
                                    <div class = "col-sm-2">
                                        <div class = "single-widget">
                                            <h2>Service</h2>
                                            <ul class = "nav nav-pills nav-stacked">
                                                <li><a href = "">Online Help</a></li>
                                                <li><a href = "">Contact Us</a></li>
                                                <li><a href = "">Order Status</a></li>
                                                <li><a href = "">Change Location</a></li>
                                                <li><a href = "">FAQ’s</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class = "col-sm-2">
                                        <div class = "single-widget">
                                            <h2>Quock Shop</h2>
                                            <ul class = "nav nav-pills nav-stacked">
                                                <li><a href = "">T-Shirt</a></li>
                                                <li><a href = "">Mens</a></li>
                                                <li><a href = "">Womens</a></li>
                                                <li><a href = "">Gift Cards</a></li>
                                                <li><a href = "">Shoes</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class = "col-sm-2">
                                        <div class = "single-widget">
                                            <h2>Policies</h2>
                                            <ul class = "nav nav-pills nav-stacked">
                                                <li><a href = "">Terms of Use</a></li>
                                                <li><a href = "">Privecy Policy</a></li>
                                                <li><a href = "">Refund Policy</a></li>
                                                <li><a href = "">Billing System</a></li>
                                                <li><a href = "">Ticket System</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class = "col-sm-2">
                                        <div class = "single-widget">
                                            <h2>About Shopper</h2>
                                            <ul class = "nav nav-pills nav-stacked">
                                                <li><a href = "">Company Information</a></li>
                                                <li><a href = "">Careers</a></li>
                                                <li><a href = "">Store Location</a></li>
                                                <li><a href = "">Affillate Program</a></li>
                                                <li><a href = "">Copyright</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class = "col-sm-3 col-sm-offset-1">
                                        <div class = "single-widget">
                                            <h2>About Shopper</h2>
                                            <form action = "#" class = "searchform">
                                                <input type = "text" placeholder = "Your email address" />
                                                <button type = "submit" class = "btn btn-default"><i class = "fa fa-arrow-circle-o-right"></i></button>
                                                <p>Get the most recent updates from <br />our site and be updated your self...</p>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                    </footer><!--/Footer-->



                    <script src = "js/jquery.js"></script>
                    <script src="js/price-range.js"></script>
                    <script src="js/jquery.scrollUp.min.js"></script>
                    <script src="js/bootstrap.min.js"></script>
                    <script src="js/jquery.prettyPhoto.js"></script>
                    <script src="js/main.js"></script>
                    </body>
                    </html>



                                    <?php
                                    