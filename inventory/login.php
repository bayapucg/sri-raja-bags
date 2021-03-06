<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sri Raja Bags</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrapValidator.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="css/AdminLTE.min.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page" style="background:url('img/banner-2-1920x1280.jpg');background-size:cover;">
    <div class="login-box">
        <div class="login-logo">
            <a href="index.html"><b style="color: white;">Login</b></a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <form name="loginForm" id="loginForm" action="index.php" method="">
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" id="email_id" name="email_id" placeholder="Email">
                    <span class="fa fa-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    <span class="fa fa-lock form-control-feedback"></span>
                </div>
                <div class="row pull-right">
                    <div class="col-md-12">
                        <a href="forgot_password.php">I forgot my password</a>
                    </div>
                </div>
                <div class="clearfix">&nbsp;</div>
                <br>
                <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </form>

        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery 3 -->
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
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