<?php
/**
 * Created by PhpStorm.
 * User: Ochieng_Derrick
 * Date: 6/13/2018
 * Time: 10:37 AM
 */

?>

<html>
<head>
    <title>deka | sign up</title>
    <link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../bootstrap/css/index.css">
    <style type="text/css">
        .error{
            color: red;
        }

        .valid{
            border: 1px solid green;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">

        <div class="col-md-4 col-md-offset-4"
             style="padding: 10px 50px 20px 50px; background-color: rgba(255, 255, 255, .9); border-radius: 5px; margin-top: 140px;">
            <div class="text-center" style="margin-bottom: 20px;">
                <span class=" lead text-info" style="font-size: 18px; font-size: 160%;">DeKa</span>
            </div>
            <div class="text-center">
                <form id="sign_up" autocomplete="off" method="post" action="../includes/login.inc.php">

                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" name="password" id="password"
                               placeholder="Password">
                    </div>

                    <div class="input-group text-center" style="margin-top: 30px; width: 100%;">
                        <button type="submit" class="btn btn-info col-xs-12" name="btn_LogIn"><span style="font-family: roboto-medium;"> Sign In </span>
                        </button>
                    </div>
                </form>
                <div class="input-group text-center" style="margin-top: 10px;">
                    <p class="lead" style="font-size: 16px;">Not a member? <a href="sign_up.php" >Join Now</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script src="../../bootstrap/JQuery/jquery-3.3.1.min.js" type="text/javascript"></script>
<script src="../../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../../bootstrap/JQuery/jquery.validate.js" type="text/javascript"></script>
<script src="../../bootstrap/js/index.js"></script>
</html>
