<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add Category
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li><a href="#">Category</a></li>
            <li class="active">Add Category</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="row">

            <div class="col-md-12">
                <div class="box box-success">
                    <!-- form start -->
                    <form id="addCategoryForm" name="addCategoryForm" action="" method="">
                        <div class="box-body">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Category Name</label>
                                    <input type="text" class="form-control" name="name" id="name">
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
        $('#addCategoryForm').bootstrapValidator({

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