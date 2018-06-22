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
    <title>DeKa | sign up</title>
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

<div class="container">
    <div class="row">

        <div class="col-md-6 col-md-offset-3"
             style="padding: 20px 50px 20px 50px; background-color: rgba(255,255,255,.8); border-radius: 5px; margin-top: 140px; display: block;">
            <div class="text-center" style="margin-bottom: 20px">
                <span class=" lead text-info" style="font-size: 160%;">DeKa</span>
            </div>
            <div class="text-center">
                <form id="sign_up" method="post" action="../includes/signup.inc.php" autocomplete="off">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="first_Name" id="first_Name"
                                       placeholder="First Name" style="margin-bottom: 5px;">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="last_Name" id="last_Name"
                                       placeholder="Last Name" style="margin-bottom: 5px;">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" name="password" id="password"
                               placeholder="Password">
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" name="confirm_password" id="confirm_password"
                               placeholder="Confirm Password">
                    </div>

                    <div class="input-group text-center" style="margin-top: 20px; width: 100%;">
                        <button type="submit" class="btn btn-info col-xs-12" name="btn_SignUp"><span style="font-family: roboto-medium;"> SIGN
                            UP</span>
                        </button>
                    </div>
                </form>
                <div class="input-group text-center" style="margin-top: 10px;">
                    <p class="lead" style="font-size: 16px;">Already have an account? <a href="log_in.php">Log In</a> here </p>
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
