<?php include('header.php'); ?>

    <!-- My-Profile -->
    <div class="my-profile">
        <div class="container">
        
            <div class="row">
                <div class="col-md-3">
                    <div class="col-md-12 profile-sidebar">
                        <div class="p-user-img">
                            <img src="img/user.jpg">
                        </div>
                        <div class="p-welcome-msg">
                            <small>Hello</small>
                            <h4>Rana Prathap</h4>
                        </div>
                    </div>
                    
                    <div class="col-md-12 profile-sidebar-2">
                        <a href="my-orders.php">My Orders</a>
                        <a href="my-wishlist.php">My Wishlist</a>
                        <a href="edit-profile.php">Edit Profile</a>
                        <a href="change-password.php">Change Password</a>
                        <a href="login.php">Logout</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="col-md-12 profile-body">
                        <div class="cp-info">
                    
                            <form id="">
                                <div class="billing-details">
                                    <div class="section-title mb-4">
                                        <h3 class="title">Change Password</h3>
                                    </div>
                                    <div class="form-group">
                                        <label>Old Password</label>
                                        <input class="input" type="text" name="oldpassword" placeholder="Enter Old Password">
                                    </div>
                                    <div class="form-group">
                                        <label>New Password</label>
                                        <input class="input" type="text" name="newpassword" placeholder="Enter New Password">
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input class="input" type="text" name="confirmpassword" placeholder="Confirm Password">
                                    </div>
                                </div>
                                <div class="float-right">
                                    <button type="submit" class="primary-btn">Save Changes</button>
                                </div>
                                <div class="clearfix">&nbsp;</div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
<?php include('footer.php'); ?>