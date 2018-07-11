<?php
/**
 * Created by PhpStorm.
 * User: Ochieng_Derrick
 * Date: 6/13/2018
 * Time: 8:28 AM
 */
session_start();
?>

<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/index.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container-fluid">
    <div class="container-fluid">
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
                        <li><a href="../index.php">HOME</a></li>
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle">CATEGORIES<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="dresses.php">Dresses</a></li>
                                <li><a href="skirts.php">Skirts</a></li>
                                <li><a href="tops.php">Tops</a></li>
                                <li><a href="shoes.php">Shoes</a></li>
                            </ul>
                        </li>
                        <li><a href="about.html">ABOUT</a></li>
                        <li><a href="contact.html">CONTACT</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <?php
                        if (isset($_SESSION['User_ID'])){
                            echo "<form method=\"post\" action=\"../pages/includes/logout.inc.php\">
                              <button class=\"btn btn-primary\" name=\"logOut\" style='margin: 8px;'>Log Out</button>
                          </form>";
                        }else{
                            echo '<li><a href="../pages/logs/sign_up.php">SIGN UP</a></li>';
                        }
                        ?>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
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
    </div>
    <div class="container" id="productsContainer">
        <div class="text-center" id="productsHeader">
            <h2 class="lead">SKIRTS</h2>
        </div>

        <?php
        include "../pages/includes/connect.php";
        $query = "SELECT * FROM skirt;";
        $result = mysqli_query($connect, $query);

        if (mysqli_num_rows($result) > 0){
            while ($row = mysqli_fetch_array($result)){
                ?>
                <div class="col-sm-4 col-md-3">
                    <div class="well">
                        <?php echo "<img style='height: 200px; border-radius:5px; margin: 0px auto;' src='../products/dress/".$row['image']."' class='img-responsive'>"?>
                        <h4 class="text-info" style="margin: 6px; font-size: 15px;"><?php echo $row["model"];?></h4>
                        <h4 class="text-success" style="margin: 6px; font-size: 14px;"><?php echo $row["size"];?></h4>
                        <h4 class="text-danger" style="margin: 6px; font-size: 13px;">Ksh.<?php echo $row["price"];?></h4>

                        <form action="skirts.php?action=add&dress_ID=<?php echo $row["skirt_ID"]?>" method="post">
                            <input type="hidden" name="skirt_model" value="<?php echo $row["model"];?>">
                            <input type="hidden" name="skirt_size" value="<?php echo $row["size"];?>">
                            <input type="hidden" name="skirt_price" value="<?php echo $row["price"];?>">

                            <button class="btn btn-success" type="submit" name="add_to_cart" style="margin: 6px;">Add to Cart</button>
                        </form>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </div>
</div>
</body>
<script src="../bootstrap/JQuery/jquery-3.3.1.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
</html>
