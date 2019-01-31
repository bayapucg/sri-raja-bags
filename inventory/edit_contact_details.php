<?php include('header.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Edit Contact Details
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li><a href="contacts_list.php">Contacts</a></li>
            <li class="active">Edit Contact Details</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="row">

            <div class="col-md-12">
                <div class="box box-success">
                    <!-- form start -->
                    <form id="editContactForm" name="editContactForm" action="" method="">
                        <div class="box-body">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Type</label>
                                    <select name="category" class="form-control">
                                        <option value="0" disabled>Select</option>
                                        <option value="1" selected>Manufacturer</option>
                                        <option value="2">Customer</option>
                                        <option value="3">Employee</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" placeholder="Name" class="form-control" value="Name of the Manufacturer"/>
                                </div>
                                <div class="form-group">
                                    <label>Company Name</label>
                                    <input type="text" name="companyName" placeholder="Company Name" class="form-control" value="Name of the Company"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="mail" placeholder="Email Address" class="form-control" value="example@gmail.com"/>
                                </div>
                                <div class="form-group">
                                    <label>Mobile Number</label>
                                    <input type="text" name="mobile" placeholder="Phone Number" class="form-control" value="98******20"/>
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control">
                                        <option value="0" disabled>Select</option>
                                        <option value="1" selected>Active</option>
                                        <option value="2">Inactive</option>
                                    </select>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                <a href="contacts_list.php" class="btn btn-info btn-md pull-right">
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
        $('#editContactForm').bootstrapValidator({

            fields: {

                category: {
                    validators: {
                        notEmpty: {
                            message: 'Type is required'
                        }
                    }
                },
                name: {
                    validators: {
                        notEmpty: {
                            message: 'Name is required'
                        }
                    }
                },
                companyName: {
                    validators: {
                        notEmpty: {
                            message: 'Company Name is required'
                        }
                    }
                },
                mail: {
                    validators: {
                        notEmpty: {
                            message: 'Email is required'
                        }
                    }
                },
                mobile: {
                    validators: {
                        notEmpty: {
                            message: 'Mobile Number is required'
                        }
                    }
                },
                status: {
                    validators: {
                        notEmpty: {
                            message: 'Status is required'
                        }
                    }
                }
            }
        })

    });
</script>