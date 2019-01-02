<?php include('header.php'); ?>
	
	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="img/shop_background.jpg"></div>
		<div class="home_overlay"></div>
		<div class="home_content d-flex flex-column align-items-center justify-content-center">
			<h1 class="home_title">Cart</h1>
		</div>
	</div>
    
    <!-- Cart section -->
    
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row  mt-5 mb-4">
                <div class="col-md-12">
				    <form id="checkout-form">
					
						<div class="order-summary">
							<div class="section-title mb-5">
								<h3 class="title">Cart List</h3>
							</div>
                            <div class="table-responsive p-1">
							<table class="shopping-cart-table table">
								<thead>
									<tr>
										<th>Product</th>
										<th></th>
										<th class="text-center">Price</th>
										<th class="text-center">Quantity</th>
										<th class="text-center">Total</th>
										<th class="text-right">Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="thumb"><img src="img/featured_1.jpg" alt=""></td>
										<td class="details">
											<a href="#">Product Name Goes Here</a>
											<ul>
												<li><span>Size: XL</span></li>
												<li><span>Color: Camelot</span></li>
											</ul>
										</td>
										<td class="price text-center"><strong>₹ 32.50</strong><br><del class="font-weak"><small>₹ 40.00</small></del></td>
										<td class="qty text-center"><input class="input" type="number" min="1" max="100" value="1"></td>
										<td class="total text-center"><strong class="primary-color">₹ 32.50</strong></td>
										<td class="text-right"><button class="main-btn icon-btn"><i class="fa fa-trash"></i></button></td>
									</tr>
									<tr>
										<td class="thumb"><img src="img/featured_10.jpg" alt=""></td>
										<td class="details">
											<a href="#">Product Name Goes Here</a>
											<ul>
												<li><span>Size: XL</span></li>
												<li><span>Color: Camelot</span></li>
											</ul>
										</td>
										<td class="price text-center"><strong>₹ 32.50</strong></td>
										<td class="qty text-center"><input class="input" type="number" min="1" max="100" value="1"></td>
										<td class="total text-center"><strong class="primary-color">₹ 32.50</strong></td>
										<td class="text-right"><button class="main-btn icon-btn"><i class="fa fa-trash"></i></button></td>
									</tr>
									<tr>
										<td class="thumb"><img src="img/featured_11.jpg" alt=""></td>
										<td class="details">
											<a href="#">Product Name Goes Here</a>
											<ul>
												<li><span>Size: XL</span></li>
												<li><span>Color: Camelot</span></li>
											</ul>
										</td>
										<td class="price text-center"><strong>₹ 32.50</strong></td>
										<td class="qty text-center"><input class="input" type="number" min="1" max="100" value="1"></td>
										<td class="total text-center"><strong class="primary-color">₹ 32.50</strong></td>
										<td class="text-right"><button class="main-btn icon-btn"><i class="fa fa-trash"></i></button></td>
									</tr>
								</tbody>
							</table>
                            </div>
                            <div class="float-right mb-5">
								<a href="checkout.php" class="primary-btn">Buy Now</a>
							</div>
						</div>
                    </form>
                </div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
    
<?php include('footer.php'); ?>