<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Banner List
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li><a href="#">Banner</a></li>
            <li class="active">Banner List</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="row">

            <div class="col-md-12">
                <div class="box box-success">
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Banner Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><img src="img/user2-160x160.jpg" width="100px" height="auto"></td>
                                    <td>
                                        <a href="#" type="button" class="btn btn-info mr-10" data-toggle="tooltip" title="Active">
                                            <i class="fa fa-info-circle"></i>
                                        </a>
                                        <a href="#" type="button" class="btn btn-warning mr-10" data-toggle="tooltip" title="DeActive">
                                            <i class="fa fa-ban"></i>
                                        </a>
                                        <a href="#" type="button" class="btn btn-danger mr-10" data-toggle="tooltip" title="Delete">
                                            <i class="fa fa-trash-o"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include('footer.php'); ?>