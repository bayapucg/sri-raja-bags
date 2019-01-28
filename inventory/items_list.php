<?php include('header.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Items
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li class="active">Items</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="row">
            <div class="col-md-12">
                <!-- Custom Tabs -->
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">Products</a></li>
                        <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Materials</a></li>
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
                                            <th>Sales Price</th>
                                            <th>Cost</th>
                                            <th>Profit</th>
                                            <th>Production Time</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										<tr>
											<td>12365</td>
											<td>Name of the Category</td>
											<td>Name of the Product</td>
											<td>1230</td>
											<td>1000</td>
											<td>230</td>
											<td>13hrs</td>
											<td>
												<a href="view_product_details.php" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
												<a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
											</td>
										</tr>
										<tr>
											<td>12365</td>
											<td>Name of the Category</td>
											<td>Name of the Product</td>
											<td>1230</td>
											<td>1000</td>
											<td>230</td>
											<td>13hrs</td>
											<td>
												<a href="view_product_details.php" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
												<a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
											</td>
										</tr>
										<tr>
											<td>12365</td>
											<td>Name of the Category</td>
											<td>Name of the Product</td>
											<td>1230</td>
											<td>1000</td>
											<td>230</td>
											<td>13hrs</td>
											<td>
												<a href="view_product_details.php" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
												<a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
											</td>
										</tr>
										<tr>
											<td>12365</td>
											<td>Name of the Category</td>
											<td>Name of the Product</td>
											<td>1230</td>
											<td>1000</td>
											<td>230</td>
											<td>13hrs</td>
											<td>
												<a href="view_product_details.php" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
												<a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
											</td>
										</tr>
										<tr>
											<td>12365</td>
											<td>Name of the Category</td>
											<td>Name of the Product</td>
											<td>1230</td>
											<td>1000</td>
											<td>230</td>
											<td>13hrs</td>
											<td>
												<a href="view_product_details.php" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
												<a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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
                                            <th>Name</th>
                                            <th>Default Supplier</th>
                                            <th>Default Price</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										<tr>
											<td>12365</td>
											<td>Name of the Material</td>
											<td>Supplier Name</td>
											<td>1230</td>
											<td>
												<a href="" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
												<a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
											</td>
										</tr>
										<tr>
											<td>12365</td>
											<td>Name of the Material</td>
											<td>Supplier Name</td>
											<td>1230</td>
											<td>
												<a href="" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
												<a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
											</td>
										</tr>
										<tr>
											<td>12365</td>
											<td>Name of the Material</td>
											<td>Supplier Name</td>
											<td>1230</td>
											<td>
												<a href="" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
												<a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
											</td>
										</tr>
										<tr>
											<td>12365</td>
											<td>Name of the Material</td>
											<td>Supplier Name</td>
											<td>1230</td>
											<td>
												<a href="" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
												<a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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

<?php include('footer.php'); ?>