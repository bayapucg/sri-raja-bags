<?php include('header.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Payments
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li class="active">Payments</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="row">
            <div class="col-md-12">
                <!-- Custom Tabs -->
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">All Orders</a></li>
                        <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Pending Payments</a></li>
                    </ul>
                    <div class="tab-content">

                        <div class="tab-pane active" id="tab_1">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
											<th>Order ID</th>
											<th>Customer Name</th>
                                            <th>Contact Number</th>
                                            <th>Total Amount</th>
                                            <th>Paid Amount</th>
                                            <th>Balance Amount</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										<tr>
											<td>12365</td>
											<td>Name of the Customer</td>
											<td>98******20</td>
											<td>1230</td>
											<td>1000</td>
											<td>230</td>
                                            <td>
                                                <a href="update_payment_details.php" class="btn btn-primary" data-toggle="tooltip" title="Update"><i class="fa fa-refresh"></i></a>
                                                <a href="view_payment_details.php" class="btn btn-info" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                            </td>
										</tr>
                                        <tr>
											<td>12365</td>
											<td>Name of the Customer</td>
											<td>98******20</td>
											<td>1230</td>
											<td>1230</td>
											<td>0</td>
                                            <td>
                                                <a href="update_payment_details.php" class="btn btn-primary" data-toggle="tooltip" title="Update"><i class="fa fa-refresh"></i></a>
                                                <a href="view_payment_details.php" class="btn btn-info" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                            </td>
										</tr>
                                        <tr>
											<td>12365</td>
											<td>Name of the Customer</td>
											<td>98******20</td>
											<td>1230</td>
											<td>1000</td>
											<td>230</td>
                                            <td>
                                                <a href="update_payment_details.php" class="btn btn-primary" data-toggle="tooltip" title="Update"><i class="fa fa-refresh"></i></a>
                                                <a href="view_payment_details.php" class="btn btn-info" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                            </td>
										</tr>
                                        <tr>
											<td>12365</td>
											<td>Name of the Customer</td>
											<td>98******20</td>
											<td>1230</td>
											<td>1230</td>
											<td>0</td>
                                            <td>
                                                <a href="update_payment_details.php" class="btn btn-primary" data-toggle="tooltip" title="Update"><i class="fa fa-refresh"></i></a>
                                                <a href="view_payment_details.php" class="btn btn-info" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
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
											<th>Order ID</th>
											<th>Customer Name</th>
                                            <th>Contact Number</th>
                                            <th>Total Amount</th>
                                            <th>Paid Amount</th>
                                            <th>Balance Amount</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										<tr>
											<td>12365</td>
											<td>Name of the Customer</td>
											<td>98******20</td>
											<td>1230</td>
											<td>1000</td>
											<td>230</td>
                                            <td>
                                                <a href="update_payment_details.php" class="btn btn-primary" data-toggle="tooltip" title="Update"><i class="fa fa-refresh"></i></a>
                                                <a href="view_payment_details.php" class="btn btn-info" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                            </td>
										</tr>
                                        <tr>
											<td>12365</td>
											<td>Name of the Customer</td>
											<td>98******20</td>
											<td>1230</td>
											<td>1000</td>
											<td>230</td>
                                            <td>
                                                <a href="update_payment_details.php" class="btn btn-primary" data-toggle="tooltip" title="Update"><i class="fa fa-refresh"></i></a>
                                                <a href="view_payment_details.php" class="btn btn-info" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
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