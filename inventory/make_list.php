<?php include('header.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Make
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li class="active">Make</li>
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
                                            <th>Manufacturing Order ID</th>
											<th>Category</th>
                                            <th>Product Name</th>
											<th>Quantity</th>
                                            <th>Total Amount</th>
                                            <th>Production Time</th>
                                            <th>Material Availabilty</th>
                                            <th>Production</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>12135</td>
                                            <td>Name of the category</td>
                                            <td>Name of the Product</td>
											<td>1</td>
                                            <td>1230.00</td>
											<td>9 h</td>
                                            <td>
												<button class="btn bg-maroon btn-block btn-flat">Not Available</button>
											</td>
											<td>
                                                <select id="color_me1" class="form-control default1">
                                                    <option class="default">Not started</option>
                                                    <option class="orange">Work in progress</option>
                                                    <option class="green">Done</option>
                                                </select>
                                            </td>
                                        </tr>
										<tr>
                                            <td>12135</td>
                                            <td>Name of the category</td>
                                            <td>Name of the Product</td>
											<td>1</td>
                                            <td>1230.00</td>
											<td>9 h</td>
                                            <td>
												<button class="btn bg-orange btn-block btn-flat">Expected (25/05/2018)</button>
											</td>
											<td>
                                                <select id="color_me2" class="form-control default1">
                                                    <option class="default">Not started</option>
                                                    <option class="orange">Work in progress</option>
                                                    <option class="green">Done</option>
                                                </select>
                                            </td>
                                        </tr>
										<tr>
                                            <td>12135</td>
                                            <td>Name of the category</td>
                                            <td>Name of the Product</td>
											<td>1</td>
                                            <td>1230.00</td>
											<td>9 h</td>
                                            <td>
												<button class="btn bg-olive btn-block btn-flat">In Stock</button>
											</td>
											<td>
                                                <select id="color_me3" class="form-control default1">
                                                    <option class="default">Not started</option>
                                                    <option class="orange">Work in progress</option>
                                                    <option class="green">Done</option>
                                                </select>
                                            </td>
                                        </tr>
										<tr>
                                            <td>12135</td>
                                            <td>Name of the category</td>
                                            <td>Name of the Product</td>
											<td>1</td>
                                            <td>1230.00</td>
											<td>9 h</td>
                                            <td>
												<button class="btn bg-olive btn-block btn-flat">In Stock</button>
											</td>
											<td>
                                                <select id="color_me4" class="form-control orange1">
                                                    <option class="default">Not started</option>
                                                    <option class="orange" selected>Work in progress</option>
                                                    <option class="green">Done</option>
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
                                            <th>Manufacture Order ID</th>
											<th>Category</th>
                                            <th>Product Name</th>
											<th>Quantity</th>
                                            <th>Total Amount</th>
                                            <th>Done Date</th>
                                            <th>Production</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										<tr>
                                            <td>12135</td>
                                            <td>Name of the category</td>
                                            <td>Name of the Product</td>
											<td>1</td>
                                            <td>1230.00</td>
											<td>02/23/2019</td>
                                            <td>
												<button class="btn bg-olive btn-block btn-flat">Done</button>
											</td>
                                        </tr>
										<tr>
                                            <td>12135</td>
                                            <td>Name of the category</td>
                                            <td>Name of the Product</td>
											<td>1</td>
                                            <td>1230.00</td>
											<td>02/23/2019</td>
                                            <td>
												<button class="btn bg-olive btn-block btn-flat">Done</button>
											</td>
                                        </tr>
										<tr>
                                            <td>12135</td>
                                            <td>Name of the category</td>
                                            <td>Name of the Product</td>
											<td>1</td>
                                            <td>1230.00</td>
											<td>02/23/2019</td>
                                            <td>
												<button class="btn bg-olive btn-block btn-flat">Done</button>
											</td>
										</tr>
										<tr>
                                            <td>12135</td>
                                            <td>Name of the category</td>
                                            <td>Name of the Product</td>
											<td>1</td>
                                            <td>1230.00</td>
											<td>02/23/2019</td>
                                            <td>
												<button class="btn bg-olive btn-block btn-flat">Done</button>
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
    });
</script>