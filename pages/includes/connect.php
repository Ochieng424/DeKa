<?php
/**
 * Created by PhpStorm.
 * User: Ochieng_Derrick
 * Date: 6/13/2018
 * Time: 2:24 PM
 */
$host = "localhost";
$username = "root";
$password = "";
$database = "deka_db";


$connect = mysqli_connect($host, $username, $password, $database);

 if (mysqli_connect_errno()){
     echo "Failed to connect to database: " . mysqli_connect_errno();
 }
 ?>