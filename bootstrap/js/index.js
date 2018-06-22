/**
 * Created by Ochieng_Derrick on 6/13/2018.
 */

$(document).ready(function () {
    $("#sign_up").validate({
        rules:{
            first_Name: "required",
            last_Name: "required",
            username:{
                required: true,
                minlength: 4
            },
            email:{
                required: true,
                email: true
            },
            password:{
                required: true,
                minlength: 8
            },
            confirm_password:{
                required: true,
                minlength: 8,
                equalTo: "#password"
            }
        },
        messages:{
            first_Name: "Please enter your first name",
            last_Name: "Please enter your last name",
            username:{
                required: "Please provide a username",
                minlength: "Username must have atleast 4 characters"
            },
            email:{
                required: "Please enter your email address",
                email: "Please enter a valid email address"
            },
            password:{
                required: "Please provide a password",
                minlength: "Password must be atleast 8 characters"
            },
            confirm_password:{
                required: "Please re-enter your password",
                minlength: "Password must be atleast 8 characters",
                equalTo: "Passwords does not match"
            }
        }
    });
});
