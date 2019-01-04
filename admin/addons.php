<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Addons
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li class="active">Addons</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="row">

            <div class="col-md-12">
                <div class="box box-success">
                    <!-- form start -->
                    <form id="addProductForm" name="addProductForm" action="" method="">
                        <div class="box-body">

                            <div class="row">

                                <!-- col -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Material Type</label>
                                        <input type="text" class="form-control" name="mtype" id="mtype">
                                    </div>
                                    <div class="form-group">
                                        <label>Quality</label>
                                        <input type="text" class="form-control" name="quality" id="quality">
                                    </div>
                                    <div class="form-group">
                                        <label>Layout</label>
                                        <input type="text" class="form-control" name="layout" id="layout">
                                    </div>
                                    <div class="form-group">
                                        <label>Stitching Type</label>
                                        <input type="text" class="form-control" name="stitchtype" id="stitchtype">
                                    </div>
                                    <div class="form-group">
                                        <label>Stitching Thread Color</label>
                                        <input type="text" class="form-control" name="stitchcolor" id="stitchcolor">
                                    </div>
                                    <div class="form-group">
                                        <label>Suggested Printing color</label>
                                        <input type="text" class="form-control" name="sugprintcolor" id="sugprintcolor">
                                    </div>
                                    <div class="form-group">
                                        <label>Model Numbers</label>
                                        <input type="text" class="form-control" name="modelnumbers" id="modelnumbers">
                                    </div>
                                    <div class="form-group">
                                        <label>Others</label>
                                        <input type="text" class="form-control" name="others" id="others">
                                    </div>
                                </div>

                                <!-- col -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Bag Size</label>
                                        <input type="text" class="form-control" name="bsize" id="bsize">
                                    </div>
                                    <div class="form-group">
                                        <label>Bag Color</label>
                                        <input type="text" class="form-control" name="bcolor" id="bcolor">
                                    </div>
                                    <div class="form-group">
                                        <label>Bag GSM</label>
                                        <input type="text" class="form-control" name="bgsm" id="bgsm">
                                    </div>
                                    <div class="form-group">
                                        <label>Zip Color</label>
                                        <input type="text" class="form-control" name="zipcolor" id="zipcolor">
                                    </div>
                                    <div class="form-group">
                                        <label>Zip Size</label>
                                        <input type="text" class="form-control" name="zipsize" id="zipsize">
                                    </div>
                                    <div class="form-group">
                                        <label>Zip Quality</label>
                                        <input type="text" class="form-control" name="zipquality" id="zipquality">
                                    </div>
                                    <div class="form-group">
                                        <label>Printing Method</label>
                                        <input type="text" class="form-control" name="printmethod" id="printmethod">
                                    </div>
                                    <div class="form-group">
                                        <label>Printing Color Type</label>
                                        <input type="text" class="form-control" name="printcolor" id="printcolor">
                                    </div>
                                    <div class="form-group">
                                        <label>Printing Style</label>
                                        <input type="text" class="form-control" name="printstyle" id="printstyle">
                                    </div>
                                </div>

                                <!-- col -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Handle Type</label>
                                        <input type="text" class="form-control" name="handletype" id="handletype">
                                    </div>
                                    <div class="form-group">
                                        <label>Handle Size</label>
                                        <input type="text" class="form-control" name="handlesize" id="handlesize">
                                    </div>
                                    <div class="form-group">
                                        <label>Handle Color</label>
                                        <input type="text" class="form-control" name="handlecolor" id="handlecolor">
                                    </div>
                                    <div class="form-group">
                                        <label>Handle GSM</label>
                                        <input type="text" class="form-control" name="handlegsm" id="handlegsm">
                                    </div>
                                    <div class="form-group">
                                        <label>Sidepatty Type</label>
                                        <input type="text" class="form-control" name="sidepattytype" id="sidepattytype">
                                    </div>
                                    <div class="form-group">
                                        <label>Sidepatty Size</label>
                                        <input type="text" class="form-control" name="sidepattysize" id="sidepattysize">
                                    </div>
                                    <div class="form-group">
                                        <label>Sidepatty Color</label>
                                        <input type="text" class="form-control" name="sidepattycolor" id="sidepattycolor">
                                    </div>
                                    <div class="form-group">
                                        <label>Sidepatty GSM</label>
                                        <input type="text" class="form-control" name="sidepattygsm" id="sidepattygsm">
                                    </div>
                                </div>
                            </div>

                            <div class="clearfix">&nbsp;</div>

                            <div class="col-md-12 text-center">
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