<?php include('header.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Update Product Details
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li>Profile</li>
            <li class="active">Update Product Details</li>
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
                                    <label>Product ID</label>
                                    <input type="text" class="form-control" name="productId" id="productId" value="12135" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Category</label>
                                    <select class="form-control" name="cname" id="cname">
                                        <option value="0" disabled>Select</option>
                                        <option value="1" selected>Category 1</option>
                                        <option value="2">Category 2</option>
                                        <option value="3">Category 3</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Product Name</label>
                                    <input type="text" class="form-control" name="pname" id="pname" value="Name of the Product">
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" name="status" id="status">
                                        <option value="0" disabled>Select</option>
                                        <option value="1" selected>Active</option>
                                        <option value="2">Deactive</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Sell Price</label>
                                    <input type="text" class="form-control" name="sellPrice" id="sellPrice" value="1230">
                                </div>
                                <div class="form-group">
                                    <label>List Price</label>
                                    <input type="text" class="form-control" name="listPrice" id="listPrice" value="1000">
                                </div>
                                <div class="form-group">
                                    <label>No.of Pieces Available</label>
                                    <input type="text" class="form-control" name="availablePieces" id="availablePieces" value="23">
                                </div>
                                <div class="form-group">
                                    <label>No.of Pieces On-hold</label>
                                    <input type="text" class="form-control" name="onholdPieces" id="onholdPieces" value="23">
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                <a href="products_list.php" class="btn btn-info btn-md pull-right">
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
                            message: 'Category Name is required'
                        }
                    }
                },
                pname: {
                    validators: {
                        notEmpty: {
                            message: 'Product Name is required'
                        }
                    }
                },
                status: {
                    validators: {
                        notEmpty: {
                            message: 'Status is required'
                        }
                    }
                },
                sellPrice: {
                    validators: {
                        notEmpty: {
                            message: 'Sell Price is required'
                        }
                    }
                },
                listPrice: {
                    validators: {
                        notEmpty: {
                            message: 'List Price is required'
                        }
                    }
                },
                availablePieces: {
                    validators: {
                        notEmpty: {
                            message: 'Available Pieces is required'
                        }
                    }
                },
                onholdPieces: {
                    validators: {
                        notEmpty: {
                            message: 'On-hold Pieces is required'
                        }
                    }
                }
            }
        })

    });
</script>