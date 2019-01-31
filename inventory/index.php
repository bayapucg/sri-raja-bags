<?php include('header.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Orders
        </h1>
        <ol class="breadcrumb">
            <li><a href="view_order_details.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li class="active">Orders</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="row">
            <div class="col-md-12">
                <!-- Custom Tabs -->
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">New</a></li>
                        <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Done</a></li>
                    </ul>
                    <div class="tab-content">

                        <div class="tab-pane active" id="tab_1">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Customer Name</th>
                                            <th>Total Amount</th>
                                            <th>Ordered Date</th>
                                            <th>Product Availabilty</th>
                                            <th>Material Availabilty</th>
                                            <th>Production</th>
                                            <th>Delivery Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>12135</td>
                                            <td>Name of the category</td>
                                            <td>1230.00</td>
                                            <td>25/05/2018</td>
                                            <td><button class="btn bg-orange btn-block btn-flat">Expected</button></td>
                                            <td><button class="btn bg-maroon btn-block btn-flat">Not Available</button></td>
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
                                            <td>
                                                <a href="view_order_details.php" class="btn btn-info" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                            </td>
                                        </tr>
										<tr>
                                            <td>12135</td>
                                            <td>Name of the category</td>
                                            <td>1230.00</td>
                                            <td>25/05/2018</td>
                                            <td><button class="btn bg-orange btn-block btn-flat">Expected</button></td>
                                            <td><button class="btn bg-orange btn-block btn-flat">Expected</button></td>
                                            <td>
                                                <select id="change_me2" class="form-control default1">
                                                    <option class="default">Not started</option>
                                                    <option class="orange">Assign to Designer</option>
                                                    <option class="green">Assign to Factory</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select id="color_me2" class="form-control default1">
                                                    <option class="default">Not shipped</option>
                                                    <option class="orange">Shipped</option>
                                                    <option class="green">Delivered</option>
                                                </select>
                                            </td>
                                            <td>
                                                <a href="view_order_details.php" class="btn btn-info" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                            </td>
                                        </tr>
										<tr>
                                            <td>12135</td>
                                            <td>Name of the category</td>
                                            <td>1230.00</td>
                                            <td>25/05/2018</td>
                                            <td><button class="btn bg-orange btn-block btn-flat">Expected</button></td>
                                            <td><button class="btn bg-olive btn-block btn-flat">In Stock</button></td>
                                            <td>
                                                <select id="change_me3" class="form-control default1">
                                                    <option class="default">Not started</option>
                                                    <option class="orange">Assign to Designer</option>
                                                    <option class="green">Assign to Factory</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select id="color_me3" class="form-control default1">
                                                    <option class="default">Not shipped</option>
                                                    <option class="orange">Shipped</option>
                                                    <option class="green">Delivered</option>
                                                </select>
                                            </td>
                                            <td>
                                                <a href="view_order_details.php" class="btn btn-info" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                            </td>
                                        </tr>
										<tr>
                                            <td>12135</td>
                                            <td>Name of the category</td>
                                            <td>1230.00</td>
                                            <td>25/05/2018</td>
                                            <td><button class="btn bg-olive btn-block btn-flat">In Stock</button></td>
                                            <td><button class="btn bg-olive btn-block btn-flat">In Stock</button></td>
                                            <td>
                                                <select id="change_me4" class="form-control orange1">
                                                    <option class="default">Not started</option>
                                                    <option class="orange" selected>Assign to Designer</option>
                                                    <option class="green">Assign to Factory</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select id="color_me4" class="form-control default1">
                                                    <option class="default">Not shipped</option>
                                                    <option class="orange">Shipped</option>
                                                    <option class="green">Delivered</option>
                                                </select>
                                            </td>
                                            <td>
                                                <a href="view_order_details.php" class="btn btn-info" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                            </td>
                                        </tr>
										<tr>
                                            <td>12135</td>
                                            <td>Name of the category</td>
                                            <td>1230.00</td>
                                            <td>25/05/2018</td>
                                            <td><button class="btn bg-olive btn-block btn-flat">Picked</button></td>
                                            <td><button class="btn bg-olive btn-block btn-flat">In Stock</button></td>
                                            <td>
                                                <select id="change_me5" class="form-control green1">
                                                    <option class="default">Not started</option>
                                                    <option class="orange">Assign to Designer</option>
                                                    <option class="green" selected>Assign to Factory</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select id="color_me5" class="form-control orange1">
                                                    <option class="default">Not shipped</option>
                                                    <option class="orange" selected>Shipped</option>
                                                    <option class="green">Delivered</option>
                                                </select>
                                            </td>
                                            <td>
                                                <a href="view_order_details.php" class="btn btn-info" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
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
                                            <th>Total Amount</th>
                                            <th>Paid Amount</th>
                                            <th>Pending Amount</th>
                                            <th>Assign</th>
                                            <th>Delivered Date</th>
											<th>Delivery Status</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										<tr>
                                            <td>12135</td>
                                            <td>Name of the category</td>
                                            <td>1230.00</td>
                                            <td>1000.00</td>
                                            <td>200.00</td>
											<td>Name of the Sales person</td>
                                            <td>23/02/2019</td>
                                            <td>
                                                <button class="btn bg-olive btn-block btn-flat">Delivered</button>
                                            </td>
                                            <td>
                                                <a href="view_order_details.php" class="btn btn-info" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                            </td>
                                        </tr>
										<tr>
                                            <td>12135</td>
                                            <td>Name of the category</td>
                                            <td>1230.00</td>
                                            <td>1000.00</td>
                                            <td>200.00</td>
											<td>Name of the Sales person</td>
                                            <td>23/02/2019</td>
                                            <td>
                                                <button class="btn bg-olive btn-block btn-flat">Delivered</button>
                                            </td>
                                            <td>
                                                <a href="view_order_details.php" class="btn btn-info" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                            </td>
                                        </tr>
										<tr>
                                            <td>12135</td>
                                            <td>Name of the category</td>
                                            <td>1230.00</td>
                                            <td>1000.00</td>
                                            <td>200.00</td>
											<td>Name of the Sales person</td>
                                            <td>23/02/2019</td>
                                            <td>
                                                <button class="btn bg-olive btn-block btn-flat">Delivered</button>
                                            </td>
                                            <td>
                                                <a href="view_order_details.php" class="btn btn-info" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
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

<script>
    $(document).ready(function(){
        $("#change_me1").change(function() {
            var color = $("option:selected", this).attr("class");
            $("#change_me1").attr("class", color + 1);
            $("#change_me1").addClass("form-control");
        });
		
		$("#color_me2").change(function() {
            var color = $("option:selected", this).attr("class");
            $("#change_me2").attr("class", color + 1);
            $("#change_me2").addClass("form-control");
        });
		
		$("#change_me3").change(function() {
            var color = $("option:selected", this).attr("class");
            $("#change_me3").attr("class", color + 1);
            $("#change_me3").addClass("form-control");
        });
		
		$("#change_me4").change(function() {
            var color = $("option:selected", this).attr("class");
            $("#change_me4").attr("class", color + 1);
            $("#change_me4").addClass("form-control");
        });
		
		$("#change_me5").change(function() {
            var color = $("option:selected", this).attr("class");
            $("#change_me5").attr("class", color + 1);
            $("#change_me5").addClass("form-control");
        });
    });
</script>

<script>
    $(document).ready(function(){
        $("#color_me1").change(function() {
            var color = $("option:selected", this).attr("class");
            $("#color_me1").attr("class", color + 1);
            $("#color_me1").addClass("form-control");
        });
		
		$("#color_me2").change(function() {
            var color = $("option:selected", this).attr("class");
            $("#color_me2").attr("class", color + 1);
            $("#color_me2").addClass("form-control");
        });
		
		$("#color_me3").change(function() {
            var color = $("option:selected", this).attr("class");
            $("#color_me3").attr("class", color + 1);
            $("#color_me3").addClass("form-control");
        });
		
		$("#color_me4").change(function() {
            var color = $("option:selected", this).attr("class");
            $("#color_me4").attr("class", color + 1);
            $("#color_me4").addClass("form-control");
        });
		
		$("#color_me5").change(function() {
            var color = $("option:selected", this).attr("class");
            $("#color_me5").attr("class", color + 1);
            $("#color_me5").addClass("form-control");
        });
    });
</script>