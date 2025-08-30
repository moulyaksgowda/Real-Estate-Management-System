<?php
session_start();
require("config.php");
////code
 
if(!isset($_SESSION['auser']))
{
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Ventura - Data Tables</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="assets/css/feathericon.min.css">
		
		<!-- Datatables CSS -->
		<link rel="stylesheet" href="assets/plugins/datatables/dataTables.bootstrap4.min.css">
		<link rel="stylesheet" href="assets/plugins/datatables/responsive.bootstrap4.min.css">
		<link rel="stylesheet" href="assets/plugins/datatables/select.bootstrap4.min.css">
		<link rel="stylesheet" href="assets/plugins/datatables/buttons.bootstrap4.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
		
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>
	
		<!-- Main Wrapper -->
		
		
			<!-- Header -->
				<?php include("header.php"); ?>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">User</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">User</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Default Datatable</h4>
									<p class="card-text">
										This is the most basic example of the datatables with zero configuration. Use the <code>.datatable</code> class to initialize datatables.
									</p>
								</div>
								<div class="card-body">

									<table id="basic-datatable" class="table dt-responsive nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Age</th>
                                                    <th>Start date</th>
                                                    <th>Salary</th>
                                                </tr>
                                            </thead>                                        
                                            <tbody>
                                            <td>Manu Mahesh</td>
                                                    <td>System Architect</td>
                                                    <td>Mysore</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                    <td>₹3,20,800</td>
                                                </tr>
                                                <tr>
                                                    <td>Abhi Rajesh</td>
                                                    <td>Accountant</td>
                                                    <td>Chamarajanagar</td>
                                                    <td>63</td>
                                                    <td>2011/07/25</td>
                                                    <td>₹1,70,750</td>
                                                </tr>
                                                <tr>
                                                    <td>Pramod Mahesh</td>
                                                    <td>Junior Technical Author</td>
                                                    <td>Nanjangud</td>
                                                    <td>66</td>
                                                    <td>2009/01/12</td>
                                                    <td>₹86,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Roshith Shetty</td>
                                                    <td>Senior Javascript Developer</td>
                                                    <td>Kundapura</td>
                                                    <td>22</td>
                                                    <td>2012/03/29</td>
                                                    <td>₹4,33,060</td>
                                                </tr>
                                                <tr>
                                                    <td>Sadgun Aithal</td>
                                                    <td>Accountant</td>
                                                    <td>Mangalore</td>
                                                    <td>33</td>
                                                    <td>2008/11/28</td>
                                                    <td>₹1,62,700</td>
                                                </tr>
                                                <tr>
                                                    <td>Kenson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>Kasaragod</td>
                                                    <td>61</td>
                                                    <td>2012/12/02</td>
                                                    <td>₹3,72,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Prajwal</td>
                                                    <td>Sales Assistant</td>
                                                    <td>Kunigal</td>
                                                    <td>59</td>
                                                    <td>2012/08/06</td>
                                                    <td>₹1,37,500</td>
                                                </tr>
                                                
                                                <tr>
                                                    <td>Avinash Poojary</td>
                                                    <td>Javascript Developer</td>
                                                    <td>Udupi</td>
                                                    <td>29</td>
                                                    <td>2011/06/27</td>
                                                    <td>₹1,83,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Bharath Kumar</td>
                                                    <td>Customer Support</td>
                                                    <td>Bhatkal</td>
                                                    <td>27</td>
                                                    <td>2011/01/25</td>
                                                    <td>₹1,12,000</td>
                                                </tr>
                                            </tbody>
                                        </table>
								</div>
							</div>
						</div>
					</div>
					
					
					
					<div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title mt-0 mb-1">Buttons example</h4>
                                        <p class="sub-header">
                                            The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page
                                            that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                                        </p>


                                        <table id="datatable-buttons" class="table table-striped dt-responsive nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Age</th>
                                                    <th>Start date</th>
                                                    <th>Salary</th>
                                                </tr>
                                            </thead>
                                        
                                        
                                            <tbody>
                                                <tr>
                                                <td>Manu Mahesh</td>
                                                    <td>System Architect</td>
                                                    <td>Mysore</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                    <td>₹3,20,800</td>
                                                </tr>
                                                <tr>
                                                    <td>Abhi Rajesh</td>
                                                    <td>Accountant</td>
                                                    <td>Chamarajanagar</td>
                                                    <td>63</td>
                                                    <td>2011/07/25</td>
                                                    <td>₹1,70,750</td>
                                                </tr>
                                                <tr>
                                                    <td>Pramod Mahesh</td>
                                                    <td>Junior Technical Author</td>
                                                    <td>Nanjangud</td>
                                                    <td>66</td>
                                                    <td>2009/01/12</td>
                                                    <td>₹86,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Roshith Shetty</td>
                                                    <td>Senior Javascript Developer</td>
                                                    <td>Kundapura</td>
                                                    <td>22</td>
                                                    <td>2012/03/29</td>
                                                    <td>₹4,33,060</td>
                                                </tr>
                                                <tr>
                                                    <td>Sadgun Aithal</td>
                                                    <td>Accountant</td>
                                                    <td>Mangalore</td>
                                                    <td>33</td>
                                                    <td>2008/11/28</td>
                                                    <td>₹1,62,700</td>
                                                </tr>
                                                <tr>
                                                    <td>Kenson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>Kasaragod</td>
                                                    <td>61</td>
                                                    <td>2012/12/02</td>
                                                    <td>₹3,72,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Prajwal</td>
                                                    <td>Sales Assistant</td>
                                                    <td>Kunigal</td>
                                                    <td>59</td>
                                                    <td>2012/08/06</td>
                                                    <td>₹1,37,500</td>
                                                </tr>
                                                
                                                <tr>
                                                    <td>Avinash Poojaray</td>
                                                    <td>Javascript Developer</td>
                                                    <td>Udupi</td>
                                                    <td>29</td>
                                                    <td>2011/06/27</td>
                                                    <td>₹1,83,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Bharath Kumar</td>
                                                    <td>Customer Support</td>
                                                    <td>Bhatkal</td>
                                                    <td>27</td>
                                                    <td>2011/01/25</td>
                                                    <td>₹1,12,000</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        
                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>
                        <!-- end row-->
					
					
					<div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title mt-0 mb-1">Multi item selection</h4>
                                        <p class="sub-header">
                                            This example shows the multi option. Note how a click on a row will toggle its selected state without effecting other rows,
                                            unlike the os and single options shown in other examples.
                                        </p>

                                        <table id="selection-datatable" class="table dt-responsive nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Age</th>
                                                    <th>Start date</th>
                                                    <th>Salary</th>
                                                </tr>
                                            </thead>
                                        
                                        
                                            <tbody>
                                                <tr>
                                                    <td>Manu Mahesh</td>
                                                    <td>System Architect</td>
                                                    <td>Mysore</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                    <td>₹3,20,800</td>
                                                </tr>
                                                <tr>
                                                    <td>Abhi Rajesh</td>
                                                    <td>Accountant</td>
                                                    <td>Chamarajanagar</td>
                                                    <td>63</td>
                                                    <td>2011/07/25</td>
                                                    <td>₹1,70,750</td>
                                                </tr>
                                                <tr>
                                                    <td>Pramod Mahesh</td>
                                                    <td>Junior Technical Author</td>
                                                    <td>Nanjangud</td>
                                                    <td>66</td>
                                                    <td>2009/01/12</td>
                                                    <td>₹86,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Roshith Shetty</td>
                                                    <td>Senior Javascript Developer</td>
                                                    <td>Kundapura</td>
                                                    <td>22</td>
                                                    <td>2012/03/29</td>
                                                    <td>₹4,33,060</td>
                                                </tr>
                                                <tr>
                                                    <td>Sadgun Aithal</td>
                                                    <td>Accountant</td>
                                                    <td>Mangalore</td>
                                                    <td>33</td>
                                                    <td>2008/11/28</td>
                                                    <td>₹1,62,700</td>
                                                </tr>
                                                <tr>
                                                    <td>Kenson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>Kasaragod</td>
                                                    <td>61</td>
                                                    <td>2012/12/02</td>
                                                    <td>₹3,72,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Prajwal</td>
                                                    <td>Sales Assistant</td>
                                                    <td>Kunigal</td>
                                                    <td>59</td>
                                                    <td>2012/08/06</td>
                                                    <td>₹1,37,500</td>
                                                </tr>
                                                
                                                <tr>
                                                    <td>Avinash Poojaray</td>
                                                    <td>Javascript Developer</td>
                                                    <td>Udupi</td>
                                                    <td>29</td>
                                                    <td>2011/06/27</td>
                                                    <td>₹1,83,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Bharath Kumar</td>
                                                    <td>Customer Support</td>
                                                    <td>Bhatkal</td>
                                                    <td>27</td>
                                                    <td>2011/01/25</td>
                                                    <td>₹1,12,000</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    
                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                    </div>
                    <!-- end row-->
					
					
					
				
				</div>			
			</div>
			<!-- /Main Wrapper -->

		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<!-- Datatables JS -->
		<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
		<script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
		<script src="assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
		
		<script src="assets/plugins/datatables/dataTables.select.min.js"></script>
		
		<script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
		<script src="assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
		<script src="assets/plugins/datatables/buttons.html5.min.js"></script>
		<script src="assets/plugins/datatables/buttons.flash.min.js"></script>
		<script src="assets/plugins/datatables/buttons.print.min.js"></script>
		
		<!-- Custom JS -->
		<script  src="assets/js/script.js"></script>
		
    </body>
</html>
