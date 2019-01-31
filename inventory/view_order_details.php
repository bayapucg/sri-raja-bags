<?php include('header.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Orders
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="index.php">Orders</a></li>
            <li class="active">Order Details</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="row">

            <div class="col-md-12">
                <div class="box box-success">
					<div class="box-header with-border">
						<h4 class="box-title">Product <b>(Product Name)</b></h4>
                        <a href="index.php" class="btn btn-info btn-sm pull-right">
                            <i class="fa fa-arrow-left mr-5"></i>Back
                        </a>
					</div>

                    <!-- form start -->
                    <form id="addProductForm" name="addProductForm" action="" method="">
                        <div class="box-body">
                                                    
							<div class="row">
								<div class="col-md-4">
									<h4 class="text-info"><b>Variants</b></h4>
									<div class="table-responsive">
										<table class="table table-bordered">
											<tbody>
												<tr>
													<td><b>Material Type</b></td>
													<td>Plastic</td>
												</tr>
												<tr>
													<td><b>Quality</b></td>
													<td>Dotted</td>
												</tr>
												<tr>
													<td><b>Layout</b></td>
													<td>Horizontal</td>
												</tr>
												<tr>
													<td><b>Bag Size</b></td>
													<td>9x11</td>
												</tr>
												<tr>
													<td><b>Bag Color</b></td>
													<td>White</td>
												</tr>
												<tr>
													<td><b>Bag GSM</b></td>
													<td>70</td>
												</tr>
												<tr>
													<td><b>Handle Type</b></td>
													<td>Plastic</td>
												</tr>
												<tr>
													<td><b>Handle Size</b></td>
													<td>10x30</td>
												</tr>
												<tr>
													<td><b>Handle Color</b></td>
													<td>Ivory</td>
												</tr>
												<tr>
													<td><b>Handle GSM</b></td>
													<td>90</td>
												</tr>
												<tr>
													<td><b>Sidepatty Type</b></td>
													<td>Pipping</td>
												</tr>
												<tr>
													<td><b>Sidepatty Size</b></td>
													<td>4</td>
												</tr>
												<tr>
													<td><b>Sidepatty Color</b></td>
													<td>R.Green</td>
												</tr>
												<tr>
													<td><b>Sidepatty GSM</b></td>
													<td>110</td>
												</tr>
												<tr>
													<td><b>Zip Color</b></td>
													<td>Red</td>
												</tr>
												<tr>
													<td><b>Zip Size</b></td>
													<td>50</td>
												</tr>
												<tr>
													<td><b>Others</b></td>
													<td>First</td>
												</tr>
												<tr>
													<td><b>Zip Quality</b></td>
													<td>Lays</td>
												</tr>
												<tr>
													<td><b>Stitching type</b></td>
													<td>Single Side</td>
												</tr>
												<tr>
													<td><b>Stitching thread color</b></td>
													<td>Red</td>
												</tr>
												<tr>
													<td><b>Printing Method</b></td>
													<td>Offset</td>
												</tr>
												<tr>
													<td><b>Printing Color Type</b></td>
													<td>Four</td>
												</tr>
												<tr>
													<td><b>Printing Style</b></td>
													<td>One Side Printing</td>
												</tr>
												<tr>
													<td><b>Suggested Printing color</b></td>
													<td>Black Blue</td>
												</tr>
												<tr>
													<td><b>Model Numbers</b></td>
													<td>D11</td>
												</tr>
												<tr>
													<td><b>Priority</b></td>
													<td>xxxxxx</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								
								<div class="col-md-8">
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Order ID</label>
                                                <input type="text" class="form-control" name="orderId" value="12315" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label>Customer Name</label>
                                                <input type="text" class="form-control" name="cname" value="Name of the Customer" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Ordered Date</label>
                                                <input type="text" class="form-control" name="orderedDate" value="28/02/2019" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label>Delivered Date</label>
                                                <input type="text" class="form-control" name="orderedDate" value="30/02/2019" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    
									<h4 class="text-info"><b>Product Details</b></h4>
									<div class="table-responsive mb-30">
										<table class="table table-bordered">
											<thead class="bg-head">
												<tr>
													<th>Category</th>
													<th>Product Name</th>
													<th>Quanity</th>
													<th>Total Amount (in ₹)</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Name of the Category</td>
													<td>Name of the Product</td>
													<td>1</td>
													<td>1230</td>
												</tr>
											</tbody>
										</table>
									</div>
									
									<h4 class="text-info"><b>Operation Process</b></h4>
									<div class="table-responsive mb-30">
										<table class="table table-bordered">
											<thead class="bg-head">
												<tr>
													<th>Product Availability</th>
													<th>Material Availability</th>
													<th>Production</th>
													<th>Delivery Status</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
                                                        <button class="btn bg-orange btn-block btn-flat">Expected</button>
                                                    </td>
													<td><button class="btn bg-maroon btn-block btn-flat">Not Available</button>
                                                    </td>
													<td>
                                                        <select id="change_me1" class="form-control default1">
                                                            <option class="default">Not started</option>
                                                            <option class="orange">Assign to Designer</option>
                                                            <option class="green">Assign to Factory</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select id="color_me1" class="form-control default1">
                                                            <option class="default">Not shipped</option>
                                                            <option class="orange">Shipped</option>
                                                            <option class="green">Delivered</option>
                                                        </select>
                                                    </td>
												</tr>
											</tbody>
										</table>
									</div>
									
                                    <h4 class="text-info"><b>Images</b></h4>
									<div class="table-responsive">
										<table class="table table-bordered">
											<thead class="bg-head">
												<tr>
													<th>Product Image</th>
													<th>Designed Image</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="text-center">
                                                        <img src="img/bag.jpg" alt="Product Image" height="150px">
                                                    </td>
													<td class="text-center">
                                                        <img src="img/logo.png" alt="Logo Image" height="100px">
                                                    </td>
												</tr>
											</tbody>
										</table>
									</div>
									
								</div>
								
							</div>							
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include('footer.php'); ?>

<script>
    
    $(document).ready(function(){
        $("#change_me1").change(function() {
            var color = $("option:selected", this).attr("class");
            $("#change_me1").attr("class", color + 1);
            $("#change_me1").addClass("form-control");
        });
    });
    
    $(document).ready(function(){
        $("#color_me1").change(function() {
            var color = $("option:selected", this).attr("class");
            $("#color_me1").attr("class", color + 1);
            $("#color_me1").addClass("form-control");
        });
    });
</script>