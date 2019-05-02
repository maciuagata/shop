<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
if (!empty($_GET["action"])) {
    switch ($_GET["action"]) {
        case "add":
            if (!empty($_POST["availability"])) {
                $productByCode = $db_handle->runQuery("SELECT * FROM prekiushopas WHERE code='" . $_GET["code"] . "'");
                $itemArray = array($productByCode[0]["code"] => array('name' => $productByCode[0]["name"], 'code' => $productByCode[0]["code"], 'price' => $productByCode[0]["price"], 'availability' => $_POST["availability"], 'brand' => $productByCode[0]["brand"], 'image' => $productByCode[0]["image"], 'description' => $productByCode[0]["description"]));

                if (!empty($_SESSION["cart_item"])) {
                    if (in_array($productByCode[0]["code"], array_keys($_SESSION["cart_item"]))) {
                        foreach ($_SESSION["cart_item"] as $k => $v) {
                            if ($productByCode[0]["code"] == $k) {
                                if (empty($_SESSION["cart_item"][$k]["availability"])) {
                                    $_SESSION["cart_item"][$k]["availability"] = 0;
                                }
                                $_SESSION["cart_item"][$k]["availability"] += $_POST["availability"];
                            }
                        }
                    } else {
                        $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"], $itemArray);
                    }
                } else {
                    $_SESSION["cart_item"] = $itemArray;
                }
            }
            break;
        case "remove":
            if (!empty($_SESSION["cart_item"])) {
                foreach ($_SESSION["cart_item"] as $k => $v) {
                    if ($_GET["code"] == $k)
                        unset($_SESSION["cart_item"][$k]);
                    if (empty($_SESSION["cart_item"]))
                        unset($_SESSION["cart_item"]);
                }
            }
            break;
        case "empty":
            unset($_SESSION["cart_item"]);
            break;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Cart | E-Shopper</title>
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
                                    <li><a href="#"><i class="fa fa-phone"></i> +370 5 2476560</a></li>
                                    <li><a href="#"><i class="fa fa-envelope"></i>vtvpmc_lt@gmail.com</a></li>
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
                                    <li><a href="index.php">Pagrindinė</a></li>
                                    <li class="dropdown"><a href="#">Parduotuvė<i class="fa fa-angle-down"></i></a>
                                        <ul role="menu" class="sub-menu">
                                            <li><a href="shop.php">Products</a></li> 
                                            <li><a href="cart.php" class="active">Cart</a></li> 
                                            <li><a href="login.php">Login</a></li> 
                                        </ul>
                                    </li> 
                                    <li class="dropdown"><a href="#">Blogas<i class="fa fa-angle-down"></i></a>
                                        <ul role="menu" class="sub-menu">
                                            <li><a href="blog.php">Blog List</a></li>
                                        </ul>
                                    </li> 
                                    <li><a href="#">Apie parduotuvę</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header-bottom-->
        </header><!--/header-->
        <div id="shopping-cart">
            <div class="txt-heading">Shopping Cart</div>

            <a id="btnEmpty" href="cart.php?action=empty">Empty Cart</a>
            <?php
            if (isset($_SESSION["cart_item"])) {
                $total_availability = 0;
                $total_price = 0;
                ?>	
                <table class="tbl-cart" cellpadding="10" cellspacing="1">
                    <tbody>
                        <tr>
                            <th style="text-align:center;"width="5%">Name and image</th>
                            <th style="text-align:center;">Code</th>
                            <th style="text-align:right;" width="5%">Availability</th>
                             <th style="text-align:right;" width="10%">Price</th>   
                            <th style="text-align:right;" width="15%">Remove</th>
                        </tr>	
                        <?php
                        foreach ($_SESSION["cart_item"] as $item) {
                            $item_price = $item["availability"] * $item["price"];
                            ?>
                            <tr>
                                <td><img src="<?php echo $item["image"]; ?>" class="cart-item-image" /><?php echo $item["name"]; ?></td>
                                <td><?php echo $item["code"]; ?></td>
                                <td style="text-align:right;"><?php echo $item["availability"]; ?></td>
                                <td  style="text-align:right;"><?php echo "$ " . $item["price"]; ?></td>
                                <td  style="text-align:right;"><?php echo "$ " . number_format($item_price, 2); ?></td>
                                <td style="text-align:center;"><a href="index.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction"><img src="images/icon-delete.png" alt="Remove Item" /></a></td>
                            </tr>
                            <?php
                            $total_availability += $item["availability"];
                            $total_price += ($item["price"] * $item["availability"]);
                        }
                        ?>

                        <tr>
                            <td colspan="2" align="right">Total:</td>
                            <td align="right"><?php echo $total_availability; ?></td>
                            <td align="right" colspan="2"><strong><?php echo "$ " . number_format($total_price, 2); ?></strong></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>		
                <?php
            } else {
                ?>
                <div class="no-records">Your Cart is Empty</div>
                <?php
            }
            ?>
        </div>

        <div id="product-grid">
            <div class="txt-heading">Products</div>
            <?php
            $product_array = $db_handle->runQuery("SELECT * FROM prekiushopas ORDER BY id ASC");
            if (!empty($product_array)) {
                foreach ($product_array as $key => $value) {
                    ?>
                    <div class="product-item">
                        <style>div {text-align: center}</style>
                        <form method="post" action="cart.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
                            <div class="product-image"><img src="<?php echo $product_array[$key]["image"]; ?>"></div>
                            <div class="product-tile-footer">
                                <div class="product-title"><?php echo $product_array[$key]["name"]; ?></div>
                                <div class="product-price"><?php echo "$" . $product_array[$key]["price"]; ?></div>
                                <div class="cart-action"><input type="text" class="product-quantity" name="availability" value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                            </div>
                        </form>
                    </div>
                    <?php
                }
            }
            ?>
            <footer id="footer"><!--Footer-->
                <div class="footer-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="companyinfo">
                                    <h2><span>e</span>-shopper</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="col-sm-3">
                                    <div class="video-gallery text-center">
                                        <a href="#">
                                            <div class="iframe-img">
                                                <img src="images/home/iframe1.png" alt="" />
                                            </div>
                                            <div class="overlay-icon">
                                                <i class="fa fa-play-circle-o"></i>
                                            </div>
                                        </a>
                                        <p>Circle of Hands</p>
                                        <h2>24 DEC 2014</h2>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="video-gallery text-center">
                                        <a href="#">
                                            <div class="iframe-img">
                                                <img src="images/home/iframe2.png" alt="" />
                                            </div>
                                            <div class="overlay-icon">
                                                <i class="fa fa-play-circle-o"></i>
                                            </div>
                                        </a>
                                        <p>Circle of Hands</p>
                                        <h2>24 DEC 2014</h2>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="video-gallery text-center">
                                        <a href="#">
                                            <div class="iframe-img">
                                                <img src="images/home/iframe3.png" alt="" />
                                            </div>
                                            <div class="overlay-icon">
                                                <i class="fa fa-play-circle-o"></i>
                                            </div>
                                        </a>
                                        <p>Circle of Hands</p>
                                        <h2>24 DEC 2014</h2>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="video-gallery text-center">
                                        <a href="#">
                                            <div class="iframe-img">
                                                <img src="images/home/iframe4.png" alt="" />
                                            </div>
                                            <div class="overlay-icon">
                                                <i class="fa fa-play-circle-o"></i>
                                            </div>
                                        </a>
                                        <p>Circle of Hands</p>
                                        <h2>24 DEC 2014</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="address">
                                    <img src="images/home/map.png" alt="" />
                                    <p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer-widget">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="single-widget">
                                    <h2>Service</h2>
                                    <ul class="nav nav-pills nav-stacked">
                                        <li><a href="">Online Help</a></li>
                                        <li><a href="">Contact Us</a></li>
                                        <li><a href="">Order Status</a></li>
                                        <li><a href="">Change Location</a></li>
                                        <li><a href="">FAQ’s</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="single-widget">
                                    <h2>Quock Shop</h2>
                                    <ul class="nav nav-pills nav-stacked">
                                        <li><a href="">T-Shirt</a></li>
                                        <li><a href="">Mens</a></li>
                                        <li><a href="">Womens</a></li>
                                        <li><a href="">Gift Cards</a></li>
                                        <li><a href="">Shoes</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="single-widget">
                                    <h2>Policies</h2>
                                    <ul class="nav nav-pills nav-stacked">
                                        <li><a href="">Terms of Use</a></li>
                                        <li><a href="">Privecy Policy</a></li>
                                        <li><a href="">Refund Policy</a></li>
                                        <li><a href="">Billing System</a></li>
                                        <li><a href="">Ticket System</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="single-widget">
                                    <h2>About Shopper</h2>
                                    <ul class="nav nav-pills nav-stacked">
                                        <li><a href="">Company Information</a></li>
                                        <li><a href="">Careers</a></li>
                                        <li><a href="">Store Location</a></li>
                                        <li><a href="">Affillate Program</a></li>
                                        <li><a href="">Copyright</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-3 col-sm-offset-1">
                                <div class="single-widget">
                                    <h2>About Shopper</h2>
                                    <form action="#" class="searchform">
                                        <input type="text" placeholder="Your email address" />
                                        <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                                        <p>Get the most recent updates from <br />our site and be updated your self...</p>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </footer><!--/Footer-->



            <script src="js/jquery.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/jquery.scrollUp.min.js"></script>
            <script src="js/jquery.prettyPhoto.js"></script>
            <script src="js/main.js"></script>
    </body>
</html>






