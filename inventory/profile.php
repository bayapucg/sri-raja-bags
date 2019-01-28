<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Profile
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li><a href="#">Profile</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="row">

            <div class="col-md-12">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <strong class="box-title">My Profile</strong>
                        <div class="pull-right">
                            <a href="edit_profile.php" class="btn btn-sm btn-info">
                                <i class="fa fa-edit"></i> Edit Profile
                            </a>
                            <a href="change_password.php" class="btn btn-sm btn-warning">
                                <i class="fa fa-wrench"></i> Change Password
                            </a>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <img class="profile-user-img img-responsive img-circle" src="img/user1-128x128.jpg" alt="User profile picture">
                                <h3 class="profile-username">Admin</h3>
                            </div>
                            <div class="col-md-8">
                                <table class="table table-bordered mb-0">
                                    <tbody>
                                        <tr>
                                            <td>Email Id</td>
                                            <td>johnleo@gmail.com</td>
                                        </tr>
                                        <tr>
                                            <td>Password</td>
                                            <td>qwerty@123</td>
                                        </tr>
                                        <tr>
                                            <td>Phone Number</td>
                                            <td>98xxxxxx56</td>
                                        </tr>
                                        <tr>
                                            <td>Location</td>
                                            <td>Delhi</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include('footer.php'); ?>