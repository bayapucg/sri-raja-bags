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
                        <div class="p-info">
                            <div class="section-title mb-4">
                                <h3 class="title">Personal Information</h3>
                            </div>
                            <h4>Name</h4>
                            <div class="p-name">
                                <input type="text" name="" id="" value="Rana" disabled>
                                <input type="text" name="" id="" value="Prathap" disabled>
                            </div>
                            
                            <h4>Gender</h4>
                            <div class="p-gender">
                                <span class="p-gender-type">
                                    <input type="radio" name="p-gender" id="" value="" checked disabled>Male
                                </span>
                                <span class="p-gender-type">
                                    <input type="radio" name="p-gender" id="" value="" disabled>Female
                                </span>
                                <span class="p-gender-type">
                                    <input type="radio" name="p-gender" id="" value="" disabled>Others
                                </span>
                            </div>
                            
                            <h4>Email Address</h4>
                            <div class="p-email">
                                <input type="text" name="" id="" value="rana@gmail.com" disabled>
                            </div>
                            
                            <h4>Mobile Number</h4>
                            <div class="p-number">
                                <input type="text" name="" id="" value="98xx23xx45" disabled>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
<?php include('footer.php'); ?>