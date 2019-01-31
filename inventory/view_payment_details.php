<?php include('header.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header container">
        <h1>
            Payment Details
        </h1>
        <ol class="breadcrumb">
            <li><i class="fa fa-dashboard"></i> Dashboard</li>
            <li>Payment</li>
            <li class="active">Payment Details</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container">

        <div class="row">

            <div class="col-md-12">
                <div class="box box-success">
					<div class="box-header with-border">
						<h4 class="box-title"><b>Order</b> Details</h4>
                        <a href="payments_list.php" class="btn btn-info btn-sm pull-right">
                            <i class="fa fa-arrow-left mr-5"></i>Back
                        </a>
					</div>

                    <!-- form start -->
                    <form id="addProductForm" name="addProductForm" action="" method="">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Order ID</label>
                                        <input type="text" class="form-control" name="orderId" id="orderId" value="123456" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Customer Name</label>
                                        <input type="text" class="form-control" name="cname" id="cname" value="Name of the Customer" readonly>
                                    </div>
                                </div>
								<div class="col-md-4">
                                    <div class="form-group">
                                        <label>Contact Number</label>
                                        <input type="text" class="form-control" name="contactNumber" id="contactNumber" value="98******20" readonly>
                                    </div>
                                </div>
                            </div>
                            
							<div class="row">
                                <div class="col-md-2"></div>
								<div class="col-md-8">
									<h4 class="text-info"><b></b></h4>
									<div class="table-responsive">
										<table class="table table-bordered">
											<thead class="bg-head">
												<tr>
													<th>Total Amount (in ₹)</th>
													<th>Paid Amount (in ₹)</th>
													<th>Balance Amount (in ₹)</th>
													<th>Invoice</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1230</td>
													<td>1000</td>
													<td>230</td>
                                                    <td class="text-center"><a href="#" class="btn btn-primary btn-sm"><i class="fa fa-download mr-5"></i> Download</a></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								
							</div>							
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include('footer.php'); ?>

<script type="text/javascript">
    $(document).ready(function() {
        $('#addProductForm').bootstrapValidator({

            fields: {

                name: {
                    validators: {
                        notEmpty: {
                            message: 'Name is required'
                        },
                        regexp: {
                            regexp: /^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
                            message: 'Question wont allow <> [] = % '
                        }
                    }
                }
            }
        })

    });
</script>