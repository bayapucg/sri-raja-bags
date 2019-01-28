<?php include('header.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Stock
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li class="active">Stock</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="row">
            <div class="col-md-12">
                <!-- Custom Tabs -->
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">All</a></li>
                        <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Products</a></li>
                        <li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="false">Materials</a></li>
                    </ul>
                    <div class="tab-content">

                        <div class="tab-pane active" id="tab_1">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
											<th>ID</th>
											<th>Category</th>
                                            <th>Name</th>
                                            <th>Average Cost</th>
                                            <th>Value of Cost</th>
                                            <th>In Stock</th>
                                            <th>Expected</th>
											<th>Committed</th>
											<th>Missing / Excess</th>
											<th>&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										<tr>
											<td>12365</td>
											<td>Name of the Category</td>
											<td>Name of the Product</td>
											<td>1230</td>
											<td>4920</td>
											<td>4 Pcs</td>
											<td>1 Pcs</td>
											<td>2 Pcs</td>
											<td>3 Pcs</td>
											<td>
												<button class="btn bg-info btn-sm btn-flat" data-toggle="modal" data-target=".modal-default" style="font-size:13px;color:#3c8dbc;">
													<i class="fa fa-plus-square mr-5"></i> <span>Make</span>
												</button>
											</td>
										</tr>
										<tr>
											<td>12365</td>
											<td>Name of the Category</td>
											<td>Name of the Material</td>
											<td>1230</td>
											<td>4920</td>
											<td>4 Pcs</td>
											<td>1 Pcs</td>
											<td>2 Pcs</td>
											<td>3 Pcs</td>
											<td>
												<button class="btn bg-danger btn-sm btn-flat" data-toggle="modal" data-target=".buy-modal" style="font-size:13px;color:#3c8dbc;">
													<i class="fa fa-plus-square mr-5"></i> <span>Buy</span>
												</button>
											</td>
										</tr>
										<tr>
											<td>12365</td>
											<td>Name of the Category</td>
											<td>Name of the Material</td>
											<td>1230</td>
											<td>1230</td>
											<td>1 Pcs</td>
											<td>0 Pcs</td>
											<td>3 Pcs</td>
											<td class="text-danger">- 2 Pcs</td>
											<td>
												<button class="btn bg-danger btn-sm btn-flat" data-toggle="modal" data-target=".buy-modal" style="font-size:13px;color:#3c8dbc;">
													<i class="fa fa-plus-square mr-5"></i> <span>Buy</span>
												</button>
											</td>
										</tr>
										<tr>
											<td>12365</td>
											<td>Name of the Category</td>
											<td>Name of the Product</td>
											<td>1230</td>
											<td>1230</td>
											<td>1 Pcs</td>
											<td>0 Pcs</td>
											<td>3 Pcs</td>
											<td class="text-danger">- 2 Pcs</td>
											<td>
												<button class="btn bg-info btn-sm btn-flat" data-toggle="modal" data-target=".modal-default" style="font-size:13px;color:#3c8dbc;">
													<i class="fa fa-plus-square mr-5"></i> <span>Make</span>
												</button>
											</td>
										</tr>
										<tr>
											<td>12365</td>
											<td>Name of the Category</td>
											<td>Name of the Material</td>
											<td>1230</td>
											<td>3690</td>
											<td>3 Pcs</td>
											<td>1 Pcs</td>
											<td>4 Pcs</td>
											<td>0 Pcs</td>
											<td>
												<button class="btn bg-danger btn-sm btn-flat" data-toggle="modal" data-target=".buy-modal" style="font-size:13px;color:#3c8dbc;">
													<i class="fa fa-plus-square mr-5"></i> <span>Buy</span>
												</button>
											</td>
										</tr>
										<tr>
											<td>12365</td>
											<td>Name of the Category</td>
											<td>Name of the Product</td>
											<td>1230</td>
											<td>3690</td>
											<td>3 Pcs</td>
											<td>1 Pcs</td>
											<td>4 Pcs</td>
											<td>0 Pcs</td>
											<td>
												<button class="btn bg-info btn-sm btn-flat" data-toggle="modal" data-target=".modal-default" style="font-size:13px;color:#3c8dbc;">
													<i class="fa fa-plus-square mr-5"></i> <span>Make</span>
												</button>
											</td>
										</tr>
										<tr>
											<td>12365</td>
											<td>Name of the Category</td>
											<td>Name of the Material</td>
											<td>0</td>
											<td>0</td>
											<td>0 Pcs</td>
											<td>1 Pcs</td>
											<td>1 Pcs</td>
											<td>0 Pcs</td>
											<td>
												<button class="btn bg-danger btn-sm btn-flat" data-toggle="modal" data-target=".buy-modal" style="font-size:13px;color:#3c8dbc;">
													<i class="fa fa-plus-square mr-5"></i> <span>Buy</span>
												</button>
											</td>
										</tr>
										<tr>
											<td>12365</td>
											<td>Name of the Material</td>
											<td>Name of the Product</td>
											<td>1230</td>
											<td>4920</td>
											<td>4 Pcs</td>
											<td>1 Pcs</td>
											<td>4 Pcs</td>
											<td class="text-danger">- 1 Pcs</td>
											<td>
												<button class="btn bg-danger btn-sm btn-flat" data-toggle="modal" data-target=".buy-modal" style="font-size:13px;color:#3c8dbc;">
													<i class="fa fa-plus-square mr-5"></i> <span>Buy</span>
												</button>
											</td>
										</tr>
										<tr>
											<td>12365</td>
											<td>Name of the Category</td>
											<td>Name of the Product</td>
											<td>0</td>
											<td>0</td>
											<td>0 Pcs</td>
											<td>1 Pcs</td>
											<td>1 Pcs</td>
											<td>0 Pcs</td>
											<td>
												<button class="btn bg-info btn-sm btn-flat" data-toggle="modal" data-target=".modal-default" style="font-size:13px;color:#3c8dbc;">
													<i class="fa fa-plus-square mr-5"></i> <span>Make</span>
												</button>
											</td>
										</tr>
										<tr>
											<td>12365</td>
											<td>Name of the Category</td>
											<td>Name of the Product</td>
											<td>1230</td>
											<td>4920</td>
											<td>4 Pcs</td>
											<td>1 Pcs</td>
											<td>4 Pcs</td>
											<td class="text-danger">- 1 Pcs</td>
											<td>
												<button class="btn bg-info btn-sm btn-flat" data-toggle="modal" data-target=".modal-default" style="font-size:13px;color:#3c8dbc;">
													<i class="fa fa-plus-square mr-5"></i> <span>Make</span>
												</button>
											</td>
										</tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.tab-pane -->

                        <div class="tab-pane" id="tab_2">
							<div class="table-responsive">
                                <table id="example2" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
											<th>ID</th>
											<th>Category</th>
                                            <th>Name</th>
                                            <th>Average Cost</th>
                                            <th>Value of Cost</th>
                                            <th>In Stock</th>
                                            <th>Expected</th>
											<th>Committed</th>
											<th>Missing / Excess</th>
											<th>&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										<tr>
											<td>12365</td>
											<td>Name of the Category</td>
											<td>Name of the Product</td>
											<td>1230</td>
											<td>4920</td>
											<td>4 Pcs</td>
											<td>1 Pcs</td>
											<td>2 Pcs</td>
											<td>3 Pcs</td>
											<td>
												<button class="btn bg-info btn-sm btn-flat" data-toggle="modal" data-target=".make-modal" style="font-size:13px;color:#3c8dbc;">
													<i class="fa fa-plus-square mr-5"></i> <span>Make</span>
												</button>
											</td>
										</tr>
										<tr>
											<td>12365</td>
											<td>Name of the Category</td>
											<td>Name of the Product</td>
											<td>1230</td>
											<td>1230</td>
											<td>1 Pcs</td>
											<td>0 Pcs</td>
											<td>3 Pcs</td>
											<td class="text-danger">- 2 Pcs</td>
											<td>
												<button class="btn bg-info btn-sm btn-flat" data-toggle="modal" data-target=".make-modal" style="font-size:13px;color:#3c8dbc;">
													<i class="fa fa-plus-square mr-5"></i> <span>Make</span>
												</button>
											</td>
										</tr>
										<tr>
											<td>12365</td>
											<td>Name of the Category</td>
											<td>Name of the Product</td>
											<td>1230</td>
											<td>3690</td>
											<td>3 Pcs</td>
											<td>1 Pcs</td>
											<td>4 Pcs</td>
											<td>0 Pcs</td>
											<td>
												<button class="btn bg-info btn-sm btn-flat" data-toggle="modal" data-target=".make-modal" style="font-size:13px;color:#3c8dbc;">
													<i class="fa fa-plus-square mr-5"></i> <span>Make</span>
												</button>
											</td>
										</tr>
										<tr>
											<td>12365</td>
											<td>Name of the Category</td>
											<td>Name of the Product</td>
											<td>0</td>
											<td>0</td>
											<td>0 Pcs</td>
											<td>1 Pcs</td>
											<td>1 Pcs</td>
											<td>0 Pcs</td>
											<td>
												<button class="btn bg-info btn-sm btn-flat" data-toggle="modal" data-target=".make-modal" style="font-size:13px;color:#3c8dbc;">
													<i class="fa fa-plus-square mr-5"></i> <span>Make</span>
												</button>
											</td>
										</tr>
										<tr>
											<td>12365</td>
											<td>Name of the Category</td>
											<td>Name of the Product</td>
											<td>1230</td>
											<td>4920</td>
											<td>4 Pcs</td>
											<td>1 Pcs</td>
											<td>4 Pcs</td>
											<td class="text-danger">- 1 Pcs</td>
											<td>
												<button class="btn bg-info btn-sm btn-flat" data-toggle="modal" data-target=".make-modal" style="font-size:13px;color:#3c8dbc;">
													<i class="fa fa-plus-square mr-5"></i> <span>Make</span>
												</button>
											</td>
										</tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.tab-pane -->
						
						<div class="tab-pane" id="tab_3">
							<div class="table-responsive">
                                <table id="example3" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
											<th>ID</th>
											<th>Category</th>
                                            <th>Name</th>
                                            <th>Average Cost</th>
                                            <th>Value of Cost</th>
                                            <th>In Stock</th>
                                            <th>Expected</th>
											<th>Committed</th>
											<th>Missing / Excess</th>
											<th>&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										<tr>
											<td>12365</td>
											<td>Name of the Category</td>
											<td>Name of the Material</td>
											<td>1230</td>
											<td>4920</td>
											<td>4 Pcs</td>
											<td>1 Pcs</td>
											<td>2 Pcs</td>
											<td>3 Pcs</td>
											<td>
												<button class="btn bg-danger btn-sm btn-flat" data-toggle="modal" data-target=".buy-modal" style="font-size:13px;color:#3c8dbc;">
													<i class="fa fa-plus-square mr-5"></i> <span>Buy</span>
												</button>
											</td>
										</tr>
										<tr>
											<td>12365</td>
											<td>Name of the Category</td>
											<td>Name of the Material</td>
											<td>1230</td>
											<td>1230</td>
											<td>1 Pcs</td>
											<td>0 Pcs</td>
											<td>3 Pcs</td>
											<td class="text-danger">- 2 Pcs</td>
											<td>
												<button class="btn bg-danger btn-sm btn-flat" data-toggle="modal" data-target=".buy-modal" style="font-size:13px;color:#3c8dbc;">
													<i class="fa fa-plus-square mr-5"></i> <span>Buy</span>
												</button>
											</td>
										</tr>
										<tr>
											<td>12365</td>
											<td>Name of the Category</td>
											<td>Name of the Material</td>
											<td>1230</td>
											<td>3690</td>
											<td>3 Pcs</td>
											<td>1 Pcs</td>
											<td>4 Pcs</td>
											<td>0 Pcs</td>
											<td>
												<button class="btn bg-danger btn-sm btn-flat" data-toggle="modal" data-target=".buy-modal" style="font-size:13px;color:#3c8dbc;">
													<i class="fa fa-plus-square mr-5"></i> <span>Buy</span>
												</button>
											</td>
										</tr>
										<tr>
											<td>12365</td>
											<td>Name of the Category</td>
											<td>Name of the Material</td>
											<td>0</td>
											<td>0</td>
											<td>0 Pcs</td>
											<td>1 Pcs</td>
											<td>1 Pcs</td>
											<td>0 Pcs</td>
											<td>
												<button class="btn bg-danger btn-sm btn-flat" data-toggle="modal" data-target=".buy-modal" style="font-size:13px;color:#3c8dbc;">
													<i class="fa fa-plus-square mr-5"></i> <span>Buy</span>
												</button>
											</td>
										</tr>
										<tr>
											<td>12365</td>
											<td>Name of the Material</td>
											<td>Name of the Product</td>
											<td>1230</td>
											<td>4920</td>
											<td>4 Pcs</td>
											<td>1 Pcs</td>
											<td>4 Pcs</td>
											<td class="text-danger">- 1 Pcs</td>
											<td>
												<button class="btn bg-danger btn-sm btn-flat" data-toggle="modal" data-target=".buy-modal" style="font-size:13px;color:#3c8dbc;">
													<i class="fa fa-plus-square mr-5"></i> <span>Buy</span>
												</button>
											</td>
										</tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.tab-pane -->

                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- nav-tabs-custom -->
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<div class="modal fade modal-default make-modal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title">New Manufacturing Order</h4>
			</div>
            <div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label>Manufaturing Order ID</label>
							<input type="text" class="form-control" name="manufactureId" placeholder="12345" disabled/>
						</div>
						<div class="form-group">
							<label>Product Name</label>
							<input type="text" class="form-control" name="productName" placeholder="Name of the product you make to manufacture" disabled/>
						</div>
						<div class="form-group">
							<label>Quantity</label>
							<input type="text" class="form-control" name="makeQuantity" placeholder="Enter no.of pcs required"/>
						</div>
					</div>
				</div>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Done</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<div class="modal fade modal-primary buy-modal">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="" method="">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title">New Purchase Order</h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Supplier Name</label>
								<select class="form-control getSupplierNameValue" name="supplierName">
									<option value="0" disabled selected>Select</option>
									<option value="other">Create New</option>
									<option value="2">Supplier Name</option>
									<option value="3">Supplier Name</option>
									<option value="3">Supplier Name</option>
									<option value="3">Supplier Name</option>
								</select>
							</div>
							<div class="form-group manualCreateSupplierName">
								<input type="text" class="form-control" name="newSupplierName" placeholder="Create new supplier"/>
							</div>
							<div class="form-group">
								<label>Purchase Order ID</label>
								<input type="text" class="form-control" name="purshaseId" placeholder="12345" disabled/>
							</div>
							<div class="form-group">
								<label>Material Name</label>
								<input type="text" class="form-control" name="materialName" placeholder="Name of the material you ordering" disabled/>
							</div>
							<div class="form-group">
								<label>Quantity</label>
								<input type="text" class="form-control" name="quantity" placeholder="Enter no.of pcs required"/>
							</div>
							<div class="form-group">
								<label>Expected Arrival</label>
								<input type="text" class="form-control" name="expectedDate" id="datepicker" value="02/22/2019"/>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<button type="button" class="btn btn-primary">Done</button>
				</div>
			</form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<?php include('footer.php'); ?>

<script type="text/javascript">
$(document).ready(function(){
    $("select.getSupplierNameValue").change(function(){
        var a = $(this).children("option:selected").val();
		if(a == "other"){
			$(".manualCreateSupplierName").css("display","block");
		}
		else{
			$(".manualCreateSupplierName").css("display","none");
		}
    });
});
</script>