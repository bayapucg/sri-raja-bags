<?php include('header.php'); ?>
	
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
								<h3 class="title">Wishlist</h3>
							</div>
                            <div class="table-responsive p-1">
							<table class="shopping-cart-table table">
								<thead>
									<tr>
										<th>Product</th>
										<th></th>
										<th>Category</th>
										<th class="text-center">Price</th>
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
                                        <td class="category"><span>D-cut Bags</span></td>
										<td class="price text-center"><strong>₹ 32.50</strong><br><del class="font-weak"><small>₹ 40.00</small></del></td>
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
                                        <td class="category"><span>Handle Bags</span></td>
										<td class="price text-center"><strong>₹ 32.50</strong></td>
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
                                        <td class="category"><span>U-cut Bags</span>/td>
										<td class="price text-center"><strong>₹ 32.50</strong></td>
										<td class="text-right"><button class="main-btn icon-btn"><i class="fa fa-trash"></i></button></td>
									</tr>
								</tbody>
							</table>
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