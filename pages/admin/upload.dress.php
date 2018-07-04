<?php
/**
 * Created by PhpStorm.
 * User: Ochieng_Derrick
 * Date: 6/21/2018
 * Time: 1:17 PM
 */
$msg = "";

if (isset($_POST['addDress'])){
    include_once '../includes/connect.php';

    $dressID = mysqli_real_escape_string($connect, $_POST['dressId']);
    $dressModel = mysqli_real_escape_string($connect, $_POST['dressModel']);
    $image = $_FILES['image']['name'];
    $dressSize = mysqli_real_escape_string($connect, $_POST['dressSize']);
    $dressPrice = mysqli_real_escape_string($connect, $_POST['dressPrice']);

    $fileSize = $_FILES['image']['size'];
    $fileExt = explode('.', $image);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png');

    if (in_array($fileActualExt, $allowed)){
        $target = "../../products/dress/".basename($image);

        $sql = "SELECT * FROM `dress` WHERE dress_ID = '$dressID'";
        $results = mysqli_query($connect, $sql);
        $resultCheck = mysqli_num_rows($results);

        if ($resultCheck > 0){
            $msg = "Product already exist";
        }else{
            $sqlProd = "INSERT INTO `dress`(`dress_ID`, `model`, `image`, `size`, `price`) VALUES ('$dressID',
                      '$dressModel','$image','$dressSize','$dressPrice')";
            $result = mysqli_query($connect, $sqlProd);
            $upload = move_uploaded_file($_FILES['image']['tmp_name'], $target);

            if (!$result || !$upload){
                echo "Failed to add to database".mysqli_error($connect,$upload);
            }else{
                header("Location: upload.adm.php");
                $msg = "Upload successful";
               $success= '<div class="alert alert-success">';
                           echo '<a href="#" class="close" data-dismiss="alert">&times;</a>';
                           echo '<strong><?php echo $msg; ?></strong>';
               echo '</div>';
            }
        }
    }else{
        echo 'Cannot upload file of such kind';
    }
}
?>
<html>
<head>
    <title>

    </title>
    <link href="../../bootstrap/css/bootstrap.css" type="text/css">
</head>
<body>
<script src="../../bootstrap/JQuery/jquery-3.3.1.min.js"></script>
<script src="../../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
