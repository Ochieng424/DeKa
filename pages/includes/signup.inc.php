<?php
/**
 * Created by PhpStorm.
 * User: Ochieng_Derrick
 * Date: 6/16/2018
 * Time: 10:49 AM
 */


if (isset($_POST['btn_SignUp'])){
    include_once 'connect.php';

    $firstname = mysqli_real_escape_string($connect, $_POST['first_Name']);
    $lastname = mysqli_real_escape_string($connect, $_POST['last_Name']);
    $username = mysqli_real_escape_string($connect, $_POST['username']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);

    $sqlUsername = "SELECT * FROM users WHERE username = '$username'";
    $sqlEmail = "SELECT * FROM users WHERE email = '$email'";

    $resultUsername = mysqli_query($connect, $sqlUsername);
    $resultEmail = mysqli_query($connect, $sqlEmail);

    $usernameCheck = mysqli_num_rows($resultUsername);
    $emailCheck = mysqli_num_rows($resultEmail);

    if ($usernameCheck > 0){
        echo "Username already taken";
    }elseif ($emailCheck > 0){
        echo "Email exist";
    }else{
        $passwordHash = password_hash($password, PASSWORD_BCRYPT);
        $sql = "INSERT INTO `users`(`firstname`, `lastname`, `username`, `email`, `password`) VALUES ('$firstname',
                  '$lastname', '$username', '$email', '$passwordHash');";
        $result = mysqli_query($connect, $sql);

        if (!$result){
            echo "Unable to add user";
        }else{
            echo "User added successfully";

        }
    }
}

?>
