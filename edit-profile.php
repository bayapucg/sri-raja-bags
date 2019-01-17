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
                        <div class="ep-info">
                    
                            <form id="">
                                <div class="billing-details">
                                    <div class="section-title mb-4">
                                        <h3 class="title">Edit Profile</h3>
                                    </div>
                                    <div class="form-group">
                                        <input class="input" type="text" name="firstname" placeholder="First Name" value="Rana">
                                    </div>
                                    <div class="form-group">
                                        <input class="input" type="text" name="lastname" placeholder="Last Name" value="Prathap">
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control input" name="gender">
                                            <option value="">Select Gender</option>
                                            <option value="" selected>Male</option>
                                            <option value="">Female</option>
                                            <option value="">Others</option>
                                        </select>
                                        <div class="caret"></div>
                                    </div>
                                    <div class="form-group">
                                        <input class="input" type="email" name="email" placeholder="Email" value="rana@gmail.com">
                                    </div>
                                    <div class="form-group">
                                        <input class="input" type="mobilenumber" name="mobilenumber" placeholder="Mobile Number" value="98xx23xx45">
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