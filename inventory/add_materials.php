<?php include('header.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Materials
        </h1>
        <ol class="breadcrumb">
            <li><i class="fa fa-dashboard"></i> Dashboard</li>
            <li>Material</li>
            <li class="active">Add Materials</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="row">

            <div class="col-md-12">
                <div class="box box-success">
					<div class="box-header with-border">
						<h5 class="box-title">Add Materials</h5>
					</div>
                    <!-- form start -->
                    <form id="addMaterialsForm" name="addMaterialsForm" action="" method="">
                        <div class="box-body">
                            <div class="col-md-12">

                                <div class="table-responsive">
                                    <table id="myTable" class="table material-list">
                                        <thead>
                                            <tr>
												<th>Material Id</th>
                                                <th>Material Name</th>
                                                <th>Material Type</th>
                                                <th>Stock Available (Number)</th>
                                                <th>&nbsp;</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <input type="text" name="materialId" class="form-control" value="MN0" readonly/>
                                                </td>
												<td>
                                                    <input type="text" name="mname" placeholder="Material Name" class="form-control"/>
                                                </td>
                                                <td>
                                                    <input type="text" name="mtype" placeholder="Material Type" class="form-control"/>
                                                </td>
                                                <td>
                                                    <input type="text" name="available" placeholder="No.of Available" class="form-control"/>
                                                </td>
                                                <td>&nbsp;</td>
                                            </tr>
                                        </tbody>
                                    </table>
									<a href="material_list.php" class="btn btn-info btn-md mr-10">
										<i class="fa fa-arrow-left mr-5"></i>Back
									</a>
                                    <button type="button" class="btn btn-md" id="addMaterialRow">Add Row</button>
									
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

        $("#addMaterialRow").on("click", function() {
            var newRow = $("<tr>");
            var cols = "";
            
            cols += '<td><input type="text" class="form-control" name="materialId' + counter + '" value="MN'+ namber +'" readonly/></td>';
            
            cols += '<td><input type="text" class="form-control" placeholder="Material Name" name="mname' + counter + '"/></td>';
            
            cols += '<td><input type="text" class="form-control" placeholder="Material Type" name="mtype' + counter + '"/></td>';
            
            cols += '<td><input type="text" class="form-control" placeholder="No.of Available" name="available' + counter + '"/></td>';
            
            cols += '<td><button type="button" class="ibtnDel btn btn-md btn-danger"><i class="fa fa-trash"></i></button></td>';
            
            newRow.append(cols);
            $("table.material-list").append(newRow);
            counter++;
            namber++;
        });

        $("table.material-list").on("click", ".ibtnDel", function(event) {
            $(this).closest("tr").remove();
            counter -= 1
        });
    });
</script>