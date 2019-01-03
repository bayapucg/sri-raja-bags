<!DOCTYPE html>
<html lang="en">
    
<head>
    
    <title>Sri Raja Bags</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="OneTech shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap4/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap4/bootstrapValidator.min.css">
    <link rel="stylesheet" type="text/css" href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css">
    <link rel="stylesheet" type="text/css" href="css/login_register.css" >
    
</head>
<body>
	<div class="wrapper" style="background-image: url('img/banner11.jpg');">
        <div class="inner">
            <div class="image-holder">
                <img src="img/deals_3.jpg" alt="">
            </div>
            <form id="forgotPasswordForm" name="forgotPasswordForm" action="" method="">
                <h3>Forgot Password?</h3>
                <div class="form-group">
                    <label>Enter Your Email Address</label>
                    <input type="email" name="email_id" placeholder="Email Address" class="form-control input">
                </div>
                <button type="submit" class="primary-btn">Submit<i class="fas fa-arrow-right"></i></button>
            </form>
        </div>
    </div>
        
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrapValidator.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {

        $('#forgotPasswordForm').bootstrapValidator({
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
                }
            }
        });
    });
    </script>
</body>

</html>