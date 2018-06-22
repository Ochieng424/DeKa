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
    <link rel="stylesheet" type="text/css" href="bootstrap/css/index.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/font-awesome-4.7.0/css/font-awesome.min.css">
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
                              <button class=\"btn btn-primary\" name=\"logOut\" style='margin: 8px;'>Log Out</button>
                          </form>";
                }else{
                    echo '<li><a href="pages/logs/sign_up.php">Sign Up</a></li>';
                }
                ?>
            </ul>
        </div>

    </div>
</div>

</body>
<script src="bootstrap/JQuery/jquery-3.3.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</html>
