<?php
/**
 * Created by PhpStorm.
 * User: Ochieng_Derrick
 * Date: 7/9/2018
 * Time: 8:56 AM
 */

$msg = "";

if (isset($_POST['addSkirt'])){
    include_once '../includes/connect.php';

    $skirtID = mysqli_real_escape_string($connect, $_POST['skirtId']);
    $skirtModel = mysqli_real_escape_string($connect, $_POST['skirtModel']);
    $image = $_FILES['image']['name'];
    $skirtSize = mysqli_real_escape_string($connect, $_POST['skirtSize']);
    $skirtPrice = mysqli_real_escape_string($connect, $_POST['skirtPrice']);

    $fileSize = $_FILES['image']['size'];
    $fileExt = explode('.', $image);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png');

    if (in_array($fileActualExt, $allowed)){
        $target = "../../products/skirt/".basename($image);

        $sql = "SELECT * FROM `skirt` WHERE skirt_ID = '$skirtID'";
        $results = mysqli_query($connect, $sql);
        $resultCheck = mysqli_num_rows($results);

        if ($resultCheck > 0){
            echo "<script>
                       window.location.href='upload.adm.php';
                       alert('Product already exist');
                       </script>";
        }else{
            $sqlProd = "INSERT INTO `skirt`(`skirt_ID`, `model`, `image`, `size`, `price`) VALUES ('$skirtID',
                      '$skirtModel','$image','$skirtSize','$skirtPrice')";
            $result = mysqli_query($connect, $sqlProd);
            $upload = move_uploaded_file($_FILES['image']['tmp_name'], $target);

            if (!$result || !$upload){
                echo "<script>
                       window.location.href='upload.adm.php';
                       alert('Something went wrong');
                       </script>";
            }else{
                echo "<script>
                       window.location.href='upload.adm.php';
                       alert('Upload Successful');
                       </script>";
            }
        }
    }else{
        echo "<script>
                       window.location.href='upload.adm.php';
                       alert('Cannot upload file of such kind');
                       </script>";
    }
}
?>
<html>
<head>
    <title>Deka | skirts</title>
    <link href="../../bootstrap/css/bootstrap.css" type="text/css">
</head>
<body>
<script src="../../bootstrap/JQuery/jquery-3.3.1.min.js"></script>
<script src="../../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>