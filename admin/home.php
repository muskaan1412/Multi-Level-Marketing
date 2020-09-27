<?php
include('php-includes/check-login.php');
require('php-includes/connect.php');
$userid = $_SESSION['userid'];
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mlml Website  - Home</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

 

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include('php-includes/menu.php'); ?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Admin Home</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                	<div class="col-lg-3">
                    	<div class="panel panel-primary">
                        	<div class="panel-heading">
                            	<h4 class="panel-title">Total User</h4>
                            </div>
                            <div class="panel-body">
                            	<?php 
								echo  mysqli_num_rows(mysqli_query($con,"select * from user"));
								?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                    	<div class="panel panel-info">
                        	<div class="panel-heading">
                            	<h4 class="panel-title">Total Pin Request</h4>
                            </div>
                            <div class="panel-body">
                            	<?php 
								echo  mysqli_num_rows(mysqli_query($con,"select * from pin_request"));
								?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                    	<div class="panel panel-success">
                        	<div class="panel-heading">
                            	<h4 class="panel-title">Total Pin</h4>
                            </div>
                            <div class="panel-body">
                            	<?php 
								echo  mysqli_num_rows(mysqli_query($con,"select * from pin_list"));
								?>
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-lg-3">
                    	<div class="panel panel-danger">
                        	<div class="panel-heading">
                            	<h4 class="panel-title">Total No of Payout </h4>
                            </div>
                            <div class="panel-body">
                            	<?php 
                                echo  mysqli_num_rows(mysqli_query($con,"select * from income_received"));
								?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                    	<div class="panel panel-danger">
                        	<div class="panel-heading">
                            	<h4 class="panel-title">Total Income</h4>
                            </div>
                            <div class="panel-body">
                            	<?php 
							        $q = mysqli_query($con,"select * from user");
                                    $r = mysqli_fetch_array($q);
                                    echo $r['amount'];
								?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
        
  
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
