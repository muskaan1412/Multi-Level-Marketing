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

    <title>Mlm Website  - Home</title>

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

    <div id="wrapper" style="background-color: #002642">

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
                        	<div class="panel-heading" style="color:#fff; background-color:#002642">
                            	<h4 class="panel-title" style="font-size:30px">Total User</h4>
                            </div>
                            <div class="panel-body" style="font-size: 25px">
                            	<?php 
								echo  mysqli_num_rows(mysqli_query($con,"select * from user"));
								?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                    	<div class="panel panel-info">
                        	<div class="panel-heading" style="color:#fff; background-color:#4CC9F0">
                            	<h4 class="panel-title"  style="font-size:30px">Total Pin Request</h4>
                            </div>
                            <div class="panel-body" style="font-size: 25px">
                            	<?php 
								echo  mysqli_num_rows(mysqli_query($con,"select * from pin_request"));
								?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                    	<div class="panel panel-success">
                        	<div class="panel-heading" style="color:#fff; background-color:#88D18A">
                            	<h4 class="panel-title"  style="font-size:30px">Total Pin</h4>
                            </div>
                            <div class="panel-body" style="font-size: 25px">
                            	<?php 
								echo  mysqli_num_rows(mysqli_query($con,"select * from pin_list"));
								?>
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-lg-3">
                    	<div class="panel panel-danger">
                        	<div class="panel-heading" style="color:#fff; background-color:#DC143C">
                            	<h4 class="panel-title"  style="font-size:30px">Total No of Payout </h4>
                            </div>
                            <div class="panel-body" style="font-size: 25px">
                            	<?php 
                                echo  mysqli_num_rows(mysqli_query($con,"select * from income_received"));
								?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                    	<div class="panel panel-danger">
                        	<div class="panel-heading" style="color:#fff; background-color:#E59500">
                            	<h4 class="panel-title"  style="font-size:30px">Total Income</h4>
                            </div>
                            <div class="panel-body" style="font-size: 25px">
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

    <?php 
        $query = mysqli_query($con, "select * from date");
        $date_array = mysqli_fetch_array($query);
        $date = $date_array['permanentdate'];
        
        $today_date = date("Y-m-d", strtotime("0 days"));

        echo $today_date;
        
        if($date == $today_date){        
            $query = mysqli_query($con,"select * from income where current_bal>0");
            if(mysqli_num_rows($query)>0){
                $date = date("Y-m-d", strtotime("15 days"));
                $query = mysqli_query($con,"update date set permanentdate='$date'");
    
                echo '<script>alert("Please pay your pending dues!");window.location.assign("income.php");</script>';   
            }

            $date = date("Y-m-d", strtotime("15 days"));
            $query = mysqli_query($con,"update date set permanentdate='$date'");
        }

    ?>
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
