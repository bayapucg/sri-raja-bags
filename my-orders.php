<?php include('header.php'); ?>
	
	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/shop_background.jpg"></div>
		<div class="home_overlay"></div>
		<div class="home_content d-flex flex-column align-items-center justify-content-center">
			<h1 class="home_title">My Orders</h1>
		</div>
	</div>
    
    <!-- Orders List -->
    
    <div class="orders-list">
        <div class="container">
        
            <div class="row mt-5 mb-5">
                <div class="col-md-12">
                    
                    <div class="section-title mb-5">
                        <h3 class="title">Orders List</h3>
                    </div>
                    <table id="dtBasicExample" class="table table-striped" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="th-sm">Order ID</th>
                                <th class="th-sm"></th>
                                <th class="th-sm">Product Name</th>
                                <th class="th-sm">Price</th>
                                <th class="th-sm">Ordered Date</th>
                                <th class="th-sm">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>142365</td>
                                <td class="thumb"><img src="images/featured_1.jpg" alt=""></td>
                                <td>D-cut Model1 Type Bag</td>
                                <td>₹ 32.50</td>
                                <td>2011/04/25</td>
                                <td class="text-danger">Cancelled</td>
                            </tr>
                            <tr>
                                <td>142365</td>
                                <td class="thumb"><img src="images/featured_10.jpg" alt=""></td>
                                <td>D-cut Model1 Type Bag</td>
                                <td>₹ 32.50</td>
                                <td>2011/04/25</td>
                                <td class="text-warning">Pending</td>
                            </tr>
                            <tr>
                                <td>142365</td>
                                <td class="thumb"><img src="images/featured_14.jpg" alt=""></td>
                                <td>D-cut Model1 Type Bag</td>
                                <td>₹ 32.50</td>
                                <td>2011/04/25</td>
                                <td class="text-success">Delivered</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
            
        </div>
    </div>
    
<?php include('footer.php'); ?>