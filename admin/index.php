<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Logo
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li class="active">Logo</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="row">

            <div class="col-md-12">
                <div class="box box-success">
                    <!-- form start -->
                    <form id="logoForm" name="logoForm" action="" method="">
                        <div class="box-body">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Upload Logo</label>
                                    <input type="file" class="form-control" name="image" id="image">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Upload Favicon</label>
                                    <input type="file" class="form-control" name="favicon" id="favicon">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="title" id="title">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Keywords</label>
                                    <input type="text" name="keywords" id="keywords" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Description</label>
                                    <input type="text" name="description" id="description" class="form-control">
                                </div>
                            </div>
                            <div class="clearfix">&nbsp;</div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">Add</button>
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
        $('#logoForm').bootstrapValidator({

            fields: {

                image: {
                    validators: {
                        notEmpty: {
                            message: 'Image is required'
                        },
                        regexp: {
                            regexp: "(.*?)\.(png|jpeg|jpg|gif)$",
                            message: 'Uploaded file is not a valid. Only png,jpg,jpeg,gif files are allowed'
                        }
                    }
                },
                favicon: {
                    validators: {
                        notEmpty: {
                            message: 'Favicon is required'
                        },
                        regexp: {
                            regexp: "(.*?)\.(png|jpeg|jpg|gif|ico)$",
                            message: 'Uploaded file is not a valid. Only png,jpg,jpeg,ico,gif files are allowed'
                        }
                    }
                },
                title: {
                    validators: {
                        notEmpty: {
                            message: 'Title is required'
                        }
                    }
                },
                keywords: {
                    validators: {
                        notEmpty: {
                            message: 'Keywords is required'
                        }
                    }
                },
                description: {
                    validators: {
                        notEmpty: {
                            message: 'Description is required'
                        }
                    }
                }
            }
        })

    });
</script>