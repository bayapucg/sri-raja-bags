<?php include('header.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Sell
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li class="active">Sell</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="row">
            <div class="col-md-12">
                <!-- Custom Tabs -->
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">Open</a></li>
                        <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Done</a></li>
                    </ul>
                    <div class="tab-content">

                        <div class="tab-pane active" id="tab_1">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Customer Name</th>
                                            <th>Total Amount</th>
                                            <th>Product Availabilty</th>
                                            <th>Material Availabilty</th>
                                            <th>Production</th>
                                            <th>Delivery Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>12135</td>
                                            <td>Name of the category</td>
                                            <td>1230.00</td>
                                            <td>
												<button class="btn bg-orange btn-block btn-flat">Expected (25/05/2018)</button>
											</td>
                                            <td>
												<button class="btn bg-maroon btn-block btn-flat">Not Available</button>
											</td>
                                            <td><button class="btn bg-default btn-block btn-flat">Not Started</button></td>
                                            <td>
                                                <select id="color_me1" class="form-control default1">
                                                    <option class="default">Not shipped</option>
                                                    <option class="orange">Packed</option>
                                                    <option class="green">Delivered</option>
                                                </select>
                                            </td>
                                        </tr>
										<tr>
                                            <td>12135</td>
                                            <td>Name of the category</td>
                                            <td>1230.00</td>
                                            <td>
												<button class="btn bg-orange btn-block btn-flat">Expected  (25/05/2018)</button>
											</td>
                                            <td>
												<button class="btn bg-orange btn-block btn-flat">Expected  (25/05/2018)</button>
											</td>
                                            <td><button class="btn bg-default btn-block btn-flat">Not Started</button></td>
                                            <td>
                                                <select id="color_me2" class="form-control default1">
                                                    <option class="default">Not shipped</option>
                                                    <option class="orange">Packed</option>
                                                    <option class="green">Delivered</option>
                                                </select>
                                            </td>
                                        </tr>
										<tr>
                                            <td>12135</td>
                                            <td>Name of the category</td>
                                            <td>1230.00</td>
                                            <td>
												<button class="btn bg-orange btn-block btn-flat">Expected (25/05/2018)</button>
											</td>
                                            <td><button class="btn bg-olive btn-block btn-flat">In Stock</button></td>
                                            <td><button class="btn bg-default btn-block btn-flat">Not Started</button></td>
                                            <td>
                                                <select id="color_me3" class="form-control default1">
                                                    <option class="default">Not shipped</option>
                                                    <option class="orange">Packed</option>
                                                    <option class="green">Delivered</option>
                                                </select>
                                            </td>
                                        </tr>
										<tr>
                                            <td>12135</td>
                                            <td>Name of the category</td>
                                            <td>1230.00</td>
                                            <td>
												<button class="btn bg-orange btn-block btn-flat">Expected (25/05/2018)</button>
											</td>
                                            <td><button class="btn bg-olive btn-block btn-flat">In Stock</button></td>
                                            <td><button class="btn bg-orange btn-block btn-flat">Work in Progress</button></td>
                                            <td>
                                                <select id="color_me4" class="form-control default1">
                                                    <option class="default">Not shipped</option>
                                                    <option class="orange">Packed</option>
                                                    <option class="green">Delivered</option>
                                                </select>
                                            </td>
                                        </tr>
										<tr>
                                            <td>12135</td>
                                            <td>Name of the category</td>
                                            <td>1230.00</td>
                                            <td>
												<button class="btn bg-olive btn-block btn-flat">Picked</button>
											</td>
                                            <td><button class="btn bg-olive btn-block btn-flat">In Stock</button></td>
                                            <td><button class="btn bg-olive btn-block btn-flat">Done</button></td>
                                            <td>
                                                <select id="color_me5" class="form-control orange1">
                                                    <option class="default">Not shipped</option>
                                                    <option class="orange" selected>Packed</option>
                                                    <option class="green">Delivered</option>
                                                </select>
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
                                            <th>Tax</th>
                                            <th>Cost of the product sold</th>
                                            <th>Profit</th>
                                            <th>Picked Date</th>
											<th>Delivery Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										<tr>
                                            <td>12135</td>
                                            <td>Name of the category</td>
                                            <td>1230.00</td>
                                            <td>30.00</td>
                                            <td>1000.00</td>
                                            <td>200.00</td>
											<td>23/02/2019</td>
                                            <td>
                                                <button class="btn bg-olive btn-block btn-flat">Delivered</button>
                                            </td>
                                        </tr>
										<tr>
                                            <td>12135</td>
                                            <td>Name of the category</td>
                                            <td>1230.00</td>
                                            <td>30.00</td>
                                            <td>1000.00</td>
                                            <td>200.00</td>
											<td>23/02/2019</td>
                                            <td>
                                                <button class="btn bg-olive btn-block btn-flat">Delivered</button>
                                            </td>
                                        </tr>
										<tr>
                                            <td>12135</td>
                                            <td>Name of the category</td>
                                            <td>1230.00</td>
                                            <td>30.00</td>
                                            <td>1000.00</td>
                                            <td>200.00</td>
											<td>23/02/2019</td>
                                            <td>
                                                <button class="btn bg-olive btn-block btn-flat">Delivered</button>
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