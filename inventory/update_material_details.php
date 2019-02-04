<?php include('header.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Update Material Details
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li><a href="material_list.php">Material</a></li>
            <li class="active">Update Material Details</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="row">

            <div class="col-md-12">
                <div class="box box-success">
                    <!-- form start -->
                    <form id="updateMaterialForm" name="updateMaterialForm" action="" method="">
                        <div class="box-body">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Material ID</label>
                                    <input type="text" class="form-control" name="materialId" id="materialId" value="123456" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Material Name</label>
                                    <input type="text" class="form-control" name="mname" id="mname" value="Name of the Material">
                                </div>
                                <div class="form-group">
                                    <label>Material Type</label>
                                    <input type="text" class="form-control" name="mtype" id="mtype" value="Name of the Type">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Available Stock</label>
                                    <input type="text" class="form-control" name="availableStock" id="availableStock" value="15">
                                </div>
                                <div class="form-group">
                                    <label>On-hold Stock</label>
                                    <input type="text" class="form-control" name="onholdStock" id="onholdStock" value="10">
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                <a href="material_list.php" class="btn btn-info btn-md pull-right">
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
        $('#updateMaterialForm').bootstrapValidator({

            fields: {

                mname: {
                    validators: {
                        notEmpty: {
                            message: 'Material Name is required'
                        },
                        regexp: {
                            regexp: /^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
                            message: 'Name wont allow <> [] = % '
                        }
                    }
                },
                mtype: {
                    validators: {
                        notEmpty: {
                            message: 'Material Type is required'
                        },
                        regexp: {
                            regexp: /^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
                            message: 'Name wont allow <> [] = % '
                        }
                    }
                },
                availableStock: {
                    validators: {
                        notEmpty: {
                            message: 'Stock is required'
                        }
                    }
                },
                onholdStock: {
                    validators: {
                        notEmpty: {
                            message: 'On-hold Stock is required'
                        }
                    }
                }
            }
        })

    });
</script>