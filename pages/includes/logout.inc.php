<?php
/**
 * Created by PhpStorm.
 * User: Ochieng_Derrick
 * Date: 6/16/2018
 * Time: 1:10 PM
 */



if (isset($_POST['logOut'])){
    session_start();
    session_unset();
    session_destroy();
    header("Location: ../../index.php");
    exit();
}