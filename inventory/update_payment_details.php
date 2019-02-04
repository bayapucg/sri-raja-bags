<?php include('header.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Update Payment Details
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li><a href="payments_list.php">Payment</a></li>
            <li class="active">Update Payment Details</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="row">

            <div class="col-md-12">
                <div class="box box-success">
                    <!-- form start -->
                    <form id="updatePaymentsForm" name="updatePaymentsForm" action="" method="">
                        <div class="box-body">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Order ID</label>
                                    <input type="text" class="form-control" name="orderId" id="orderId" value="123456" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Customer Name</label>
                                    <input type="text" class="form-control" name="cname" id="cname" value="Name of the Customer">
                                </div>
                                <div class="form-group">
                                    <label>Contact Number</label>
                                    <input type="text" class="form-control" name="contactNumber" id="contactNumber" value="98******20">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Total Amount</label>
                                    <input type="text" class="form-control" name="totalAmount" id="totalAmount" value="1230">
                                </div>
                                <div class="form-group">
                                    <label>Paid Amount</label>
                                    <input type="text" class="form-control" name="paidAmount" id="paidAmount" value="1000">
                                </div>
                                <div class="form-group">
                                    <label>Balance Amount</label>
                                    <input type="text" class="form-control" name="balanceAmount" id="balanceAmount" value="230">
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                <a href="payments_list.php" class="btn btn-info btn-md pull-right">
								    <i class="fa fa-arrow-left mr-5"></i>Back
								</a>
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
        $('#updatePaymentsForm').bootstrapValidator({

            fields: {

                cname: {
                    validators: {
                        notEmpty: {
                            message: 'Name is required'
                        },
                        regexp: {
                            regexp: /^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
                            message: 'Name wont allow <> [] = % '
                        }
                    }
                },
                contactNumber: {
                    validators: {
                        notEmpty: {
                            message: 'Mobile Number is required'
                        },
                        regexp: {
                            regexp: /^[0-9]{10,14}$/,
                            message: 'Mobile Number must be 10 to 14 digits'
                        }

                    }
                },
                totalAmount: {
                    validators: {
                        notEmpty: {
                            message: 'Total Amount is required'
                        }
                    }
                },
                paidAmount: {
                    validators: {
                        notEmpty: {
                            message: 'Paid Amount is required'
                        }
                    }
                },
                balanceAmount: {
                    validators: {
                        notEmpty: {
                            message: 'Balance Amount is required'
                        }
                    }
                }
            }
        })

    });
</script>