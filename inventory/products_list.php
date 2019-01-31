<?php include('header.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Products
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li class="active">Products</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="row">
            <div class="col-md-12">
                <!-- Custom Tabs -->
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">Available</a></li>
                        <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">No Stock</a></li>
                        <button class="btn btn-info btn-md btn-flat pull-right mr-10 mt-10" data-toggle="modal" data-target="#bulk-upload-modal">
                            <i class="fa fa-plus-square mr-5"></i> <span>Bulk Upload</span>
                        </button>
                        <a href="add_products.php" class="btn btn-primary btn-flat btn-md pull-right mr-10 mt-10">
							<i class="fa fa-plus mr-5"></i>Add Products
						</a>
                    </ul>
                    <div class="tab-content">

                        <div class="tab-pane active" id="tab_1">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Product ID</th>
											<th>Category</th>
                                            <th>Product Name</th>
											<th>No.of Pieces Available</th>
											<th>No.of Pieces On-hold</th>
                                            <th>Sell Price</th>
                                            <th>List Price</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>12135</td>
                                            <td>Name of the category</td>
                                            <td>Name of the Product</td>
											<td>15</td>
                                            <td>15</td>
											<td>2400</td>
											<td>2400</td>
                                            <td>Active</td>
                                            <td>
                                                <a href="update_product_details.php" class="btn btn-primary" data-toggle="tooltip" title="Update"><i class="fa fa-refresh"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>12135</td>
                                            <td>Name of the category</td>
                                            <td>Name of the Product</td>
											<td>15</td>
                                            <td>15</td>
											<td>2400</td>
											<td>2400</td>
                                            <td>Active</td>
                                            <td>
                                                <a href="update_product_details.php" class="btn btn-primary" data-toggle="tooltip" title="Update"><i class="fa fa-refresh"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>12135</td>
                                            <td>Name of the category</td>
                                            <td>Name of the Product</td>
											<td>15</td>
                                            <td>15</td>
											<td>2400</td>
											<td>2400</td>
                                            <td>Active</td>
                                            <td>
                                                <a href="update_product_details.php" class="btn btn-primary" data-toggle="tooltip" title="Update"><i class="fa fa-refresh"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>12135</td>
                                            <td>Name of the category</td>
                                            <td>Name of the Product</td>
											<td>15</td>
                                            <td>15</td>
											<td>2400</td>
											<td>2400</td>
                                            <td>Active</td>
                                            <td>
                                                <a href="update_product_details.php" class="btn btn-primary" data-toggle="tooltip" title="Update"><i class="fa fa-refresh"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>12135</td>
                                            <td>Name of the category</td>
                                            <td>Name of the Product</td>
											<td>15</td>
                                            <td>15</td>
											<td>2400</td>
											<td>2400</td>
                                            <td>Active</td>
                                            <td>
                                                <a href="update_product_details.php" class="btn btn-primary" data-toggle="tooltip" title="Update"><i class="fa fa-refresh"></i></a>
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
                                            <th>Product ID</th>
											<th>Category</th>
                                            <th>Product Name</th>
											<th>No.of Pieces Needed</th>
											<th>No.of Pieces Expected</th>
                                            <th>Sell Price</th>
                                            <th>List Price</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										<tr>
                                            <td>12135</td>
                                            <td>Name of the category</td>
                                            <td>Name of the Product</td>
											<td>15</td>
                                            <td>15</td>
											<td>2400</td>
											<td>2400</td>
                                            <td>Active</td>
                                            <td>
                                                <button class="btn bg-danger btn-sm btn-flat" data-toggle="modal" data-target=".order-modal" style="font-size:15px;color:#3c8dbc;">
													<i class="fa fa-plus-square mr-5"></i> <span>Order</span>
												</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>12135</td>
                                            <td>Name of the category</td>
                                            <td>Name of the Product</td>
											<td>15</td>
                                            <td>15</td>
											<td>2400</td>
											<td>2400</td>
                                            <td>Active</td>
                                            <td>
                                                <button class="btn bg-danger btn-sm btn-flat" data-toggle="modal" data-target=".order-modal" style="font-size:15px;color:#3c8dbc;">
													<i class="fa fa-plus-square mr-5"></i> <span>Order</span>
												</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>12135</td>
                                            <td>Name of the category</td>
                                            <td>Name of the Product</td>
											<td>15</td>
                                            <td>15</td>
											<td>2400</td>
											<td>2400</td>
                                            <td>Active</td>
                                            <td>
                                                <button class="btn bg-danger btn-sm btn-flat" data-toggle="modal" data-target=".order-modal" style="font-size:15px;color:#3c8dbc;">
													<i class="fa fa-plus-square mr-5"></i> <span>Order</span>
												</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>12135</td>
                                            <td>Name of the category</td>
                                            <td>Name of the Product</td>
											<td>15</td>
                                            <td>15</td>
											<td>2400</td>
											<td>2400</td>
                                            <td>Active</td>
                                            <td>
                                                <button class="btn bg-danger btn-sm btn-flat" data-toggle="modal" data-target=".order-modal" style="font-size:15px;color:#3c8dbc;">
													<i class="fa fa-plus-square mr-5"></i> <span>Order</span>
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


<!-- Bulk Upload Modal-->
<div class="modal fade modal-primary" id="bulk-upload-modal">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="" method="">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title">Add Products</h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Upload Products List</label>
								<input type="file" class="form-control" name="productsList"/>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-success">Upload</button>
				</div>
			</form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<!-- Order Modal-->
<div class="modal fade modal-primary order-modal">
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
								<label>Manufacturer Name</label>
								<select class="form-control getSupplierNameValue" name="supplierName">
									<option value="0" disabled selected>Select</option>
									<option value="other">Create New</option>
									<option value="1">Name 1</option>
									<option value="2">Name 2</option>
									<option value="3">Name 3</option>
									<option value="4">Name 4</option>
								</select>
							</div>
							<div class="form-group manualCreateSupplierName">
								<input type="text" class="form-control" name="newSupplierName" placeholder="Create new Manufacturer"/>
							</div>
							<div class="form-group">
								<label>Product ID</label>
								<input type="text" class="form-control" name="purshaseId" placeholder="12345" readonly/>
							</div>
							<div class="form-group">
								<label>Product Name</label>
								<input type="text" class="form-control" name="materialName" placeholder="Name of the product you ordering" readonly/>
							</div>
							<div class="form-group">
								<label>Quantity</label>
								<input type="text" class="form-control" name="quantity" placeholder="Enter no.of pcs required"/>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-success">Order</button>
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