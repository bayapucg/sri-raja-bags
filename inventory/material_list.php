<?php include('header.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Material
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li class="active">Material</li>
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
                        <a href="add_materials.php" class="btn btn-primary btn-flat btn-md pull-right mr-10 mt-10">
							<i class="fa fa-plus mr-5"></i>Add Materials
						</a>
                    </ul>
                    <div class="tab-content">

                        <div class="tab-pane active" id="tab_1">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Material ID</th>
                                            <th>Material Name</th>
                                            <th>Material Type</th>
											<th>Available Stock</th>
											<th>On Hold</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>12135</td>
                                            <td>Name of the Material</td>
                                            <td>Name of the Type (Raw)</td>
                                            <td>15 bags</td>
                                            <td>10 bags</td>
                                            <td>
                                                <a href="update_material_details.php" class="btn btn-primary" data-toggle="tooltip" title="Update"><i class="fa fa-refresh"></i></a>
                                            </td>
                                        </tr>
										<tr>
                                            <td>12135</td>
                                            <td>Name of the Material</td>
                                            <td>Name of the Type (Raw)</td>
                                            <td>15 bags</td>
                                            <td>10 bags</td>
                                            <td>
                                                <a href="update_material_details.php" class="btn btn-primary" data-toggle="tooltip" title="Update"><i class="fa fa-refresh"></i></a>
                                            </td>
                                        </tr>
										<tr>
                                            <td>12135</td>
                                            <td>Name of the Material</td>
                                            <td>Name of the Type (Raw)</td>
                                            <td>15 bags</td>
                                            <td>10 bags</td>
                                            <td>
                                                <a href="update_material_details.php" class="btn btn-primary" data-toggle="tooltip" title="Update"><i class="fa fa-refresh"></i></a>
                                            </td>
                                        </tr>
										<tr>
                                            <td>12135</td>
                                            <td>Name of the Material</td>
                                            <td>Name of the Type (Raw)</td>
                                            <td>15 bags</td>
                                            <td>10 bags</td>
                                            <td>
                                                <a href="update_material_details.php" class="btn btn-primary" data-toggle="tooltip" title="Update"><i class="fa fa-refresh"></i></a>
                                            </td>
                                        </tr>
										<tr>
                                            <td>12135</td>
                                            <td>Name of the Material</td>
                                            <td>Name of the Type (Raw)</td>
                                            <td>15 bags</td>
                                            <td>10 bags</td>
                                            <td>
                                                <a href="update_material_details.php" class="btn btn-primary" data-toggle="tooltip" title="Update"><i class="fa fa-refresh"></i></a>
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
                                            <th>Material ID</th>
                                            <th>Material Name</th>
                                            <th>Material Type</th>
											<th>Needed</th>
											<th>Expected</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>12135</td>
                                            <td>Name of the Material</td>
                                            <td>Name of the Type (Raw)</td>
                                            <td>15 bags</td>
                                            <td>10 bags</td>
                                            <td>
                                                <a href="#" class="btn bg-danger btn-sm btn-flat" style="font-size:15px;" data-toggle="tooltip" title="Order Manufacturer">
													<i class="fa fa-plus-square mr-5"></i> <span>Buy</span>
												</a>
                                            </td>
                                        </tr>
										<tr>
                                            <td>12135</td>
                                            <td>Name of the Material</td>
                                            <td>Name of the Type (Raw)</td>
                                            <td>15 bags</td>
                                            <td>10 bags</td>
                                            <td>
                                                <a href="#" class="btn bg-danger btn-sm btn-flat" style="font-size:15px;" data-toggle="tooltip" title="Order Manufacturer">
													<i class="fa fa-plus-square mr-5"></i> <span>Buy</span>
												</a>
                                            </td>
                                        </tr>
										<tr>
                                            <td>12135</td>
                                            <td>Name of the Material</td>
                                            <td>Name of the Type (Raw)</td>
                                            <td>15 bags</td>
                                            <td>10 bags</td>
                                            <td>
                                                <a href="#" class="btn bg-danger btn-sm btn-flat" style="font-size:15px;" data-toggle="tooltip" title="Order Manufacturer">
													<i class="fa fa-plus-square mr-5"></i> <span>Buy</span>
												</a>
                                            </td>
                                        </tr>
										<tr>
                                            <td>12135</td>
                                            <td>Name of the Material</td>
                                            <td>Name of the Type (Raw)</td>
                                            <td>15 bags</td>
                                            <td>10 bags</td>
                                            <td>
                                                <a href="#" class="btn bg-danger btn-sm btn-flat" style="font-size:15px;" data-toggle="tooltip" title="Order Manufacturer">
													<i class="fa fa-plus-square mr-5"></i> <span>Buy</span>
												</a>
                                            </td>
                                        </tr>
										<tr>
                                            <td>12135</td>
                                            <td>Name of the Material</td>
                                            <td>Name of the Type (Raw)</td>
                                            <td>15 bags</td>
                                            <td>10 bags</td>
                                            <td>
                                                <a href="#" class="btn bg-danger btn-sm btn-flat" style="font-size:15px;" data-toggle="tooltip" title="Order Manufacturer">
													<i class="fa fa-plus-square mr-5"></i> <span>Buy</span>
												</a>
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