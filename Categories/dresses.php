<?php
/**
 * Created by PhpStorm.
 * User: Ochieng_Derrick
 * Date: 6/13/2018
 * Time: 8:28 AM
 */

 session_start();
 $product_ids = array();

if (filter_input(INPUT_POST, 'add_to_cart')){
    include "../pages/includes/connect.php";
    if (isset($_SESSION['shopping_cart'])){
        $count = count($_SESSION['shopping_cart']);
        $product_ids = array_column($_SESSION['shopping_cart'], 'dress_ID');

        if (!in_array(filter_input(INPUT_GET, 'dress_ID'), $product_ids)){
            $_SESSION['shopping_cart'][$count] = array(
                'id' =>filter_input(INPUT_GET, 'dress_ID'),
                'model' => filter_input(INPUT_POST,'dress_model'),
                'size' => filter_input(INPUT_POST,'dress_size'),
                'price' => filter_input(INPUT_POST,'dress_price')
            );
        }else{
            echo "Product already in cart";
        }
    }else{
        $_SESSION['shopping_cart'][0] = array(
          'id' =>filter_input(INPUT_GET, 'dress_ID'),
          'model' => filter_input(INPUT_POST,'dress_model'),
            'size' => filter_input(INPUT_POST,'dress_size'),
            'price' => filter_input(INPUT_POST,'dress_price')
        );
    }
}

?>

<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/index.css">
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
                             echo '<li><a href="../pages/logs/sign_up.php">Sign Up</a></li>';
                         }
                         ?>
                     </ul>
                 </div>

             </div>
         </div>
     </div>
     <div class="container" style="margin-top: 50px;">
         <div class="text-center" style="padding: 10px; margin-bottom: 20px;">
             <h2 class="lead">DRESSES</h2>
         </div>

         <?php
         include "../pages/includes/connect.php";
         $query = "SELECT * FROM dress;";
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
                         <form action="dresses.php?action=add&dress_ID=<?php echo $row["dress_ID"]?>" method="post">
                             <input type="hidden" name="dress_model" value="<?php echo $row["model"];?>">
                             <input type="hidden" name="dress_size" value="<?php echo $row["size"];?>">
                             <input type="hidden" name="dress_price" value="<?php echo $row["price"];?>">

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
