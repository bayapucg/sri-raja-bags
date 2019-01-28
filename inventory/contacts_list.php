<?php include('header.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Contacts
        </h1>
        <ol class="breadcrumb">
            <li><i class="fa fa-dashboard"></i> Dashboard</li>
            <li class="active">Contacts</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="row">
            <div class="col-md-12">
                <!-- Custom Tabs -->
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">Customers</a></li>
                        <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Suppliers</a></li>
						<a href="add_contacts.php" class="btn btn-primary btn-flat btn-md pull-right mr-10 mt-10">
							<i class="fa fa-plus mr-5"></i>Add Contacts
						</a>
                    </ul>
                    <div class="tab-content">

                        <div class="tab-pane active" id="tab_1">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email Address</th>
                                            <th>Phone Number</th>
                                            <th>Comment</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Name of the Customer</td>
                                            <td>example@media.extension</td>
                                            <td>98*******9</td>
                                            <td>Brief about the customer.</td>
                                        </tr>
										<tr>
                                            <td>Name of the Customer</td>
                                            <td>example@media.extension</td>
                                            <td>98*******9</td>
                                            <td>Brief about the customer.</td>
                                        </tr>
										<tr>
                                            <td>Name of the Customer</td>
                                            <td>example@media.extension</td>
                                            <td>98*******9</td>
                                            <td>Brief about the customer.</td>
                                        </tr>
										<tr>
                                            <td>Name of the Customer</td>
                                            <td>example@media.extension</td>
                                            <td>98*******9</td>
                                            <td>Brief about the customer.</td>
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
                                            <th>Name</th>
                                            <th>Email Address</th>
                                            <th>Phone Number</th>
                                            <th>Comment</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Name of the Supplier</td>
                                            <td>example@media.extension</td>
                                            <td>98*******9</td>
                                            <td>Brief about the supplier like delay atleast one day, supplies on time with qaulity, material quality is not worth for the money, etc.,</td>
                                        </tr>
										<tr>
                                            <td>Name of the Supplier</td>
                                            <td>example@media.extension</td>
                                            <td>98*******9</td>
                                            <td>Brief about the supplier like delay atleast one day, supplies on time with qaulity, material quality is not worth for the money, etc.,</td>
                                        </tr>
										<tr>
                                            <td>Name of the Supplier</td>
                                            <td>example@media.extension</td>
                                            <td>98*******9</td>
                                            <td>Brief about the supplier like delay atleast one day, supplies on time with qaulity, material quality is not worth for the money, etc.,</td>
                                        </tr>
										<tr>
                                            <td>Name of the Supplier</td>
                                            <td>example@media.extension</td>
                                            <td>98*******9</td>
                                            <td>Brief about the supplier like delay atleast one day, supplies on time with qaulity, material quality is not worth for the money, etc.,</td>
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