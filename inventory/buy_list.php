<?php include('header.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Buy
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li class="active">Buy</li>
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
                                            <th>Purchase Order ID</th>
                                            <th>Supplier Name</th>
                                            <th>Material Name</th>
											<th>Quantity</th>
											<th>Piece Cost</th>
                                            <th>Total Amount</th>
                                            <th>Expected Date</th>
                                            <th>Delivery Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>12135</td>
                                            <td>Name of the Supplier</td>
                                            <td>Name of the Material</td>
                                            <td>1</td>
                                            <td>1230.00</td>
                                            <td>1230.00</td>
                                            <td>02/22/2019</td>
											<td>
                                                <select id="color_me1" class="form-control default1">
                                                    <option class="default">Not received</option>
                                                    <option class="green">Received</option>
                                                </select>
                                            </td>
                                        </tr>
										<tr>
                                            <td>12135</td>
                                            <td>Name of the Supplier</td>
                                            <td>Name of the Material</td>
                                            <td>1</td>
                                            <td>1230.00</td>
                                            <td>1230.00</td>
                                            <td>02/22/2019</td>
											<td>
                                                <select id="color_me2" class="form-control default1">
                                                    <option class="default">Not received</option>
                                                    <option class="green">Received</option>
                                                </select>
                                            </td>
                                        </tr>
										<tr>
                                            <td>12135</td>
                                            <td>Name of the Supplier</td>
                                            <td>Name of the Material</td>
                                            <td>1</td>
                                            <td>1230.00</td>
                                            <td>1230.00</td>
                                            <td>02/22/2019</td>
											<td>
                                                <select id="color_me3" class="form-control default1">
                                                    <option class="default">Not received</option>
                                                    <option class="green">Received</option>
                                                </select>
                                            </td>
                                        </tr>
										<tr>
                                            <td>12135</td>
                                            <td>Name of the Supplier</td>
                                            <td>Name of the Material</td>
                                            <td>1</td>
                                            <td>1230.00</td>
                                            <td>1230.00</td>
                                            <td>02/22/2019</td>
											<td>
                                                <select id="color_me4" class="form-control default1">
                                                    <option class="default">Not received</option>
                                                    <option class="green">Received</option>
                                                </select>
                                            </td>
                                        </tr>
										<tr>
                                            <td>12135</td>
                                            <td>Name of the Supplier</td>
                                            <td>Name of the Material</td>
                                            <td>1</td>
                                            <td>1230.00</td>
                                            <td>1230.00</td>
                                            <td>02/22/2019</td>
											<td>
                                                <select id="color_me5" class="form-control default1">
                                                    <option class="default">Not received</option>
                                                    <option class="green">Received</option>
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
                                            <th>Purchase Order ID</th>
                                            <th>Supplier Name</th>
                                            <th>Material Name</th>
											<th>Quantity</th>
											<th>Piece Cost</th>
                                            <th>Total Amount</th>
                                            <th>Received Date</th>
                                            <th>Delivery Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										<tr>
                                            <td>12135</td>
                                            <td>Name of the Supplier</td>
                                            <td>Name of the Material</td>
                                            <td>1</td>
                                            <td>1230.00</td>
                                            <td>1230.00</td>
                                            <td>02/22/2019</td>
                                            <td>
                                                <button class="btn bg-olive btn-block btn-flat">Received</button>
                                            </td>
                                        </tr>
										<tr>
                                            <td>12135</td>
                                            <td>Name of the Supplier</td>
                                            <td>Name of the Material</td>
                                            <td>1</td>
                                            <td>1230.00</td>
                                            <td>1230.00</td>
                                            <td>02/22/2019</td>
                                            <td>
                                                <button class="btn bg-olive btn-block btn-flat">Received</button>
                                            </td>
                                        </tr>
										<tr>
                                            <td>12135</td>
                                            <td>Name of the Supplier</td>
                                            <td>Name of the Material</td>
                                            <td>1</td>
                                            <td>1230.00</td>
                                            <td>1230.00</td>
                                            <td>02/22/2019</td>
                                            <td>
                                                <button class="btn bg-olive btn-block btn-flat">Received</button>
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