<?php include('header.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Contacts
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="contacts_list.php">Contacts</a></li>
            <li class="active">Add Contacts</li>
        </ol>
    </section>

    <!-- Main content --> 
    <section class="content container-fluid">

        <div class="row">

            <div class="col-md-12">
                <div class="box box-success">
					<div class="box-header with-border">
						<h5 class="box-title">Add Contacts</h5>
					</div>
                    <!-- form start -->
                    <form id="addContactsForm" name="addContactsForm" action="" method="">
                        <div class="box-body">
                            <div class="col-md-12">

                                <div class="table-responsive">
                                    <table id="myTable" class="table contact-list">
                                        <thead>
                                            <tr>
												<th>Type</th>
                                                <th>Name</th>
                                                <th>Company Name</th>
                                                <th>Email</th>
                                                <th>Mobile Number</th>
                                                <th>Status</th>
                                                <th>&nbsp;</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <select name="category" class="form-control">
														<option value="0" selected disabled>Select</option>
														<option value="1">Manufacturer</option>
														<option value="2">Customer</option>
														<option value="3">Employee</option>
													</select>
                                                </td>
												<td>
                                                    <input type="text" name="name" placeholder="Name" class="form-control"/>
                                                </td>
                                                <td>
                                                    <input type="text" name="companyName" placeholder="Company Name" class="form-control"/>
                                                </td>
                                                <td>
                                                    <input type="email" name="mail" placeholder="Email Address" class="form-control"/>
                                                </td>
                                                <td>
                                                    <input type="text" name="mobile" placeholder="Phone Number" class="form-control"/>
                                                </td>
												<td>
                                                    <select name="status" class="form-control">
														<option value="0" selected disabled>Select</option>
														<option value="1">Active</option>
														<option value="2">Inactive</option>
													</select>
                                                </td>
                                                <td>&nbsp;</td>
                                            </tr>
                                        </tbody>
                                    </table>
									<a href="contacts_list.php" class="btn btn-info btn-md mr-10">
										<i class="fa fa-arrow-left mr-5"></i>Back
									</a>
                                    <button type="button" class="btn btn-md" id="addContactRow">Add Row</button>
									
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
        var counter = 0;

        $("#addContactRow").on("click", function() {
            var newRow = $("<tr>");
            var cols = "";

            cols += '<td><select class="form-control" name="category' + counter + '"><option value="0" selected disabled>Select</option><option value="1">Manufacturer</option><option value="2">Customer</option><option value="3">Employee</option></select></td>';
            
            cols += '<td><input type="text" class="form-control" placeholder="Name" name="name' + counter + '"/></td>';
            
            cols += '<td><input type="text" class="form-control" placeholder="Company Name" name="CompanyName' + counter + '"/></td>';
            
            cols += '<td><input type="email" class="form-control" placeholder="Email Address" name="mail' + counter + '"/></td>';
            
            cols += '<td><input type="text" class="form-control" placeholder="Phone Number" name="mobile' + counter + '"/></td>';
            
            cols += '<td><select class="form-control" name="status' + counter + '"><option value="0" selected disabled>Select</option><option value="1">Active</option><option value="2">Inactive</option></select></td>';

            cols += '<td><button type="button" class="ibtnDel btn btn-md btn-danger"><i class="fa fa-trash"></i></button></td>';
            newRow.append(cols);
            $("table.contact-list").append(newRow);
            counter++;
        });

        $("table.contact-list").on("click", ".ibtnDel", function(event) {
            $(this).closest("tr").remove();
            counter -= 1
        });
    });
</script>