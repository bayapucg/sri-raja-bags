<?php include('header.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Products
        </h1>
        <ol class="breadcrumb">
            <li><i class="fa fa-dashboard"></i> Dashboard</li>
            <li>Products</li>
            <li class="active">Add Products</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="row">

            <div class="col-md-12">
                <div class="box box-success">
					<div class="box-header with-border">
						<h5 class="box-title">Add Products</h5>
					</div>
                    <!-- form start -->
                    <form id="addMaterialsForm" name="addMaterialsForm" action="" method="">
                        <div class="box-body">
                            <div class="col-md-12">

                                <div class="table-responsive">
                                    <table id="myTable" class="table product-list">
                                        <thead>
                                            <tr>
												<th>Product Id</th>
                                                <th>Category</th>
                                                <th>Product Name</th>
                                                <th>Sell Price</th>
                                                <th>List Price</th>
                                                <th>No.of Pieces Available</th>
                                                <th>Status</th>
                                                <th>&nbsp;</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <input type="text" name="productId" class="form-control" value="PID0" readonly/>
                                                </td>
												<td>
                                                    <select class="form-control" name="category">
                                                        <option value="0" selected disabled>Select</option>
                                                        <option value="1">Category 1</option>
                                                        <option value="2">Category 2</option>
                                                        <option value="3">Category 3</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="text" name="pname" placeholder="Product Name" class="form-control"/>
                                                </td>
                                                <td>
                                                    <input type="text" name="sellPrice" placeholder="Sell Price" class="form-control">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" placeholder="List Price" name="listPrice">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" placeholder="No.of Pieces Available" name="availablePieces">
                                                </td>
                                                <td>
                                                    <select class="form-control" name="status">
                                                        <option value="0" selected disabled>Select</option>
                                                        <option value="1" >Active</option>
                                                        <option value="2">Deactive</option>
                                                    </select>
                                                </td>
                                                <td>&nbsp;</td>
                                            </tr>
                                        </tbody>
                                    </table>
									<a href="products_list.php" class="btn btn-info btn-md mr-10">
										<i class="fa fa-arrow-left mr-5"></i>Back
									</a>
                                    <button type="button" class="btn btn-md" id="addProductRow">Add Row</button>
									
                                </div>
                                <hr class="mb-10">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-md btn-success btn-flat">Add</button>
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

<script>
    $(document).ready(function() {
        var counter = 0, namber = 1;

        $("#addProductRow").on("click", function() {
            var newRow = $("<tr>");
            var cols = "";
            
            cols += '<td><input type="text" class="form-control" name="productId' + counter + '" value="PID'+ namber +'" readonly/></td>';
            
            cols += '<td><select class="form-control" name="category' + counter + '"><option value="0" selected disabled>Select</option><option value="1">Category 1</option><option value="2">Category 2</option><option value="3">Category 3</option></select></td>';
            
            cols += '<td><input type="text" class="form-control" placeholder="Product Type" name="pname' + counter + '"/></td>';
            
            cols += '<td><input type="text" class="form-control" placeholder="Sell Price" name="sellPrice' + counter + '"/></td>';
            
            cols += '<td><input type="text" class="form-control" placeholder="List Price" name="listPrice' + counter + '"/></td>';
            
            cols += '<td><input type="text" class="form-control" placeholder="No.of Pieces Available" name="availablePieces' + counter + '"/></td>';
            
            cols += '<td><select class="form-control" name="status' + counter + '"><option value="0" selected disabled>Select</option><option value="1" >Active</option><option value="2">Deactive</option></select></td>';
            
            cols += '<td><button type="button" class="ibtnDel btn btn-md btn-danger"><i class="fa fa-trash"></i></button></td>';
            
            newRow.append(cols);
            $("table.product-list").append(newRow);
            counter++;
            namber++;
        });

        $("table.product-list").on("click", ".ibtnDel", function(event) {
            $(this).closest("tr").remove();
            counter -= 1
        });
    });
</script>