<?php include('header.php'); ?>

<!-- Contact Form -->

<div class="">
    <div class="container">
        <div class="row mt-5 mb-5">

            <div class="col-lg-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15221.04333118881!2d78.388422!3d17.495058!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9ab8c5c20aa5ec5a!2sPracha+Technologies+Pvt.+Ltd.!5e0!3m2!1sen!2sin!4v1547717415998" width="100%" height="400" frameborder="0" style="border:0; padding-top: 15px;" allowfullscreen></iframe>
            </div>

            <div class="col-lg-6">
                <form id="checkout-form">
                    <div class="billing-details">
                        <div class="section-title">
                            <h3 class="title">Send Us Your Message</h3>
                        </div>
                        <div class="form-group mt-4">
                            <input class="form-control input" type="text" name="name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input class="form-control input" type="mobilenumber" name="mobilenumber" placeholder="Mobile Number">
                        </div>
                        <div class="form-group">
                            <input class="form-control input" type="email" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control input" name="address" placeholder="Address" rows="5"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="primary-btn">Submit</button>
                </form>
            </div>

        </div>
    </div>
</div>

<?php include('footer.php'); ?>