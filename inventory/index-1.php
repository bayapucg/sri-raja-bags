<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>

<style>
    .default{
        height: 34px;
        padding: 6px 12px;
        font-size: 14px;
        line-height: 1.42857143;
        color: #555;
        background-image: none;
        border: 1px solid #ccc;
    }
    
    .green1, 
    .red1,
    .orange1{
        color: white;
        height: 34px;
        padding: 6px 12px;
        font-size: 14px;
        line-height: 1.42857143;
        color: #fff;
        background-image: none;
        border: 0px solid #ccc;
    }
    
    .green1 {
        background-color: green;
    }
    
    .red1 {
        background-color: red;
    }

    .orange1 {
        background-color: orange;
    }
    
    .green1 option,
    .red1 option,
    .orange1 option{
        background-color: white;
        color: #555;
    }

</style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Sell
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li class="active">Sell</li>
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
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Customer Name</th>
                                            <th>Total Amount</th>
                                            <th>Product Availabilty</th>
                                            <th>Material Availabilty</th>
                                            <th>Production</th>
                                            <th>Delivery</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>12135</td>
                                            <td>Name of the category</td>
                                            <td>1230.00</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <select id="color_me" class="form-control" onchange="append_class(this.value)">
                                                    <option class="default" selected>Select</option>
                                                    <option class="green form-control">successful</option>
                                                    <option class="red">process failure</option>
                                                    <option class="orange">abandoned</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.tab-pane -->

                        <div class="tab-pane" id="tab_2">

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
    function append_class(val){
      $("#color_me").addClass("form-control", val);  
    }
</script>