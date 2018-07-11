<?php
/**
 * Created by PhpStorm.
 * User: Ochieng_Derrick
 * Date: 6/13/2018
 * Time: 7:32 AM
 */
session_start();

?>

<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/index.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/carousel.css">
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">DeKa</a>
        </div>
        <div class="navbar-collapse collapse">

            <ul class="nav navbar-nav navbar-left">
                <li><a href="index.php">HOME</a></li>
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle">CATEGORIES<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="Categories/dresses.php">Dresses</a></li>
                        <li><a href="Categories/skirts.php">Skirts</a></li>
                        <li><a href="Categories/tops.php">Tops</a></li>
                        <li><a href="Categories/shoes.php">Shoes</a></li>
                    </ul>
                </li>
                <li><a href="about.html">ABOUT</a></li>
                <li><a href="contact.html">CONTACT</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php
                if (isset($_SESSION['User_ID'])){
                    echo "<form method=\"post\" action=\"pages/includes/logout.inc.php\">
                              <button class=\"btn btn-info\" name=\"logOut\" style='margin-top: 13px; border-radius: 25px'>Log Out</button>
                          </form>";
                }else{
                    echo '<li><a href="pages/logs/sign_up.php">SIGN UP</a></li>';
                }
                ?>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li style="margin: 0">
                    <a href="" id="cart_icon"><i class="fa fa-2x fa-shopping-cart"></i>
                        <span class="badge" style="margin: -28px 0px 0 -10px;"><?php
                            if (isset($_SESSION["shopping_cart"])){
                                echo count($_SESSION['shopping_cart']);
                            }else{
                                echo '0';
                            }
                            ?>
                    </span></a>
                </li>
            </ul>
        </div>

    </div>
</div>
<div class="container-fluid">
    <div class="carousel slide" id="slider" data-ride="carousel">
        <ol class="carousel-indicators">
            <li class="active" data-slide-to="0" data-target="#slider"></li>
            <li data-slide-to="1" data-target="#slider"></li>
            <li data-slide-to="2" data-target="#slider"></li>
        </ol>
       <div class="carousel-inner" role="listbox">
           <div class="item active" id="slide1">
               <div class="carousel-caption">
                   <h3 class="lead">DeKa Collections</h3>
               </div>
           </div>

           <div class="item" id="slide2">
               <div class="carousel-caption">
                   <h3 class="lead">DeKa Collections</h3>
               </div>
           </div>

           <div class="item" id="slide3">
               <div class="carousel-caption">
                   <h3 class="lead">DeKa Collections</h3>
               </div>
           </div>
       </div>
        <a class="left carousel-control" href="#slider" data-slide="prev" role="button"><span class="icon-prev"></span> </a>
        <a class="right carousel-control" href="#slider" data-slide="next" role="button"><span class="icon-next"></span> </a>
    </div>
</div>

</body>
<script src="bootstrap/JQuery/jquery-3.3.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</html>
