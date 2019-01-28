<?php include('header.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Items
        </h1>
        <ol class="breadcrumb">
            <li><i class="fa fa-dashboard"></i> Dashboard</li>
            <li>Items</li>
            <li class="active">Product Details</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="row">

            <div class="col-md-12">
                <div class="box box-success">
					<div class="box-header with-border">
						<h4 class="box-title">Product <b>(Product Name)</b></h4>
					</div>

                    <!-- form start -->
                    <form id="addProductForm" name="addProductForm" action="" method="">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Category</label>
                                        <input type="text" class="form-control" name="name" id="category" value="Name of the Category" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Product Name</label>
                                        <input type="text" class="form-control" name="name" id="name" value="Name of the Product" readonly>
                                    </div>
                                </div>
								<div class="col-md-4">
                                    <div class="form-group">
                                        <label>Sales Price</label>
                                        <input type="text" class="form-control" name="price" id="price" value="1230" readonly>
                                    </div>
                                </div>
                            </div>
                            
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
									<h4 class="text-info"><b>Ingredients</b></h4>
									<div class="table-responsive">
										<table class="table table-bordered">
											<thead class="bg-head">
												<tr>
													<th class="w-50">Material Name</th>
													<th class="w-25">Quanity</th>
													<th class="w-25">Cost (in ₹​)</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Plastic</td>
													<td>x gr</td>
													<td>10</td>
												</tr>
												<tr>
													<td>White Color</td>
													<td>x ltr</td>
													<td>10</td>
												</tr>
												<tr>
													<td>Ivory Color</td>
													<td>x ltr</td>
													<td>10</td>
												</tr>
												<tr>
													<td>R.Green Color</td>
													<td>x ltr</td>
													<td>10</td>
												</tr>
												<tr>
													<td>Red Color</td>
													<td>x ltr</td>
													<td>10</td>
												</tr>
												<tr>
													<td>Black Color</td>
													<td>x ltr</td>
													<td>10</td>
												</tr>
												<tr>
													<td>Lays</td>
													<td>x cents</td>
													<td>10</td>
												</tr>
											</tbody>
										</table>
									</div>
									
									<h4 class="text-info"><b>Operations Steps</b></h4>
									<div class="table-responsive">
										<table class="table table-bordered">
											<thead class="bg-head">
												<tr>
													<th class="w-50">Operation</th>
													<th class="w-25">Time</th>
													<th class="w-25">Cost (in ₹​)</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Stitching</td>
													<td>4 hrs</td>
													<td>10</td>
												</tr>
												<tr>
													<td>Designing</td>
													<td>2 hrs</td>
													<td>10</td>
												</tr>
												<tr>
													<td>Printing</td>
													<td>3 hrs</td>
													<td>10</td>
												</tr>
											</tbody>
										</table>
									</div>
									
									<div class="table-responsive pull-right p-total">
										<table class="table table-bordered">
											<tr>
												<td><h4>Total Cost</h4></td>
												<td class="text-info text-right"><h4><b>1000.00</b></h4></td>
												
											</tr>
											<tr>
												<td><h4>Total Time</h4></td>
												<td class="text-info text-right"><h4><b>10 hrs</b></h4></td>
											</tr>
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

<script type="text/javascript">
    $(document).ready(function() {
        $('#addProductForm').bootstrapValidator({

            fields: {

                name: {
                    validators: {
                        notEmpty: {
                            message: 'Name is required'
                        },
                        regexp: {
                            regexp: /^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
                            message: 'Question wont allow <> [] = % '
                        }
                    }
                }
            }
        })

    });
</script>