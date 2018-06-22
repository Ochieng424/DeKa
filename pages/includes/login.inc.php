<?php
/**
 * Created by PhpStorm.
 * User: Ochieng_Derrick
 * Date: 6/16/2018
 * Time: 11:12 AM
 */

session_start();


if (isset($_POST['btn_LogIn'])) {
    include_once 'connect.php';

    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);

    $sql = "SELECT * FROM users WHERE email = '$email' OR username = '$email'";
    $result = mysqli_query($connect, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck < 1) {
        echo "User does not exist";
    } else {
        if ($row = mysqli_fetch_assoc($result)){
            //De-hash Password
             $hashedPasswordCheck = password_verify($password, $row['password']);
             if ($hashedPasswordCheck == false){
                 echo "Wrong Email or Password";
             }elseif ($hashedPasswordCheck == true){

                 $_SESSION['User_ID'] = $row['id'];
                 $_SESSION['first_Name'] = $row['firstname'];
                 $_SESSION['last_Name'] = $row['lastname'];
                 $_SESSION['Username'] = $row['username'];
                 $_SESSION['User_Email'] = $row['email'];

                 header("Location: ../../index.php?login=success");
                 exit();
             }
            }
}
}

?>