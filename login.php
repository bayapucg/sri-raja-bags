<!DOCTYPE html>
<html lang="en">
    
<head>
    
    <title>Sri Raja Bags</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap4/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap4/bootstrapValidator.min.css">
    <link rel="stylesheet" type="text/css" href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css">
    <link rel="stylesheet" type="text/css" href="css/login_register.css" >
    
</head>
<body>
	<div class="wrapper" style="background-image: url('img/banner02.jpg');">
        <div class="inner">
            <div class="image-holder">
                <img src="img/deals_1.jpg" alt="">
            </div>
            <form id="loginForm" name="loginForm" action="" method="">
                <h3>Login Form</h3>
                <div class="form-group">
                    <input type="email" name="email_id" placeholder="Email Address" class="form-control input">
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Password" class="form-control input">
                </div>
                <div class="form-group">
                    <label class="float-left"><input type="checkbox"> Remember Password</label>
                    <span class="float-right">
                        <a href="forgotpassword.php" class="">Forgot Password?</a>
                    </span>
                </div>
                <div class="clearfix mb-2">&nbsp;</div>
                <div class="text-center">
                    <button type="submit" class="primary-btn">Login<i class="fas fa-arrow-right"></i></button>
                </div>
                <hr>
                <div class="text-center">
                    <p>Don't have an Account? <a href="register.php">Register Now</a></p>
                </div>
            </form>
        </div>
    </div>
        
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrapValidator.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {

        $('#loginForm').bootstrapValidator({
            fields: {
                email_id: {
                   validators: {
                        notEmpty: {
                            message: 'Email is required'
                        },
                        regexp: {
                        regexp: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
                        message: 'Please enter a valid email address. For example johndoe@domain.com.'
                        }
                    }
                },
                password: {
                   validators: {
                        notEmpty: {
                            message: 'Password is required'
                        },
                        regexp: {
                        regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
                        message:'Password wont allow <> [] = % '
                        }
                    }
                }
            }
        });
    });
    </script>
</body>

</html>