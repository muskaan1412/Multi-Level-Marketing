<?php
include('php-includes/check-login.php');
include('php-includes/connect.php');
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

    <div id="wrapper" style="background-color: #002642">

        <!-- Navigation -->
        <?php include('php-includes/menu.php'); ?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header" style="font-size:45px">Welcome! <?php 
                         $q = mysqli_query($con,"select * from user where email='$userid'");
                         $r = mysqli_fetch_array($q);
                         echo $r['name'];
                         ?></h1><br />
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                	 <?php
						$query = mysqli_query($con,"select * from income where userid='$userid'");
						$result = mysqli_fetch_array($query);
					?>
                     <!--
                	<div class="col-lg-3">
                    	<div class="panel panel-info">
                        	<div class="panel-heading">
                            	<h4 class="panel-title">Today's Income</h4>
                            </div>
                            <div class="panel-body">
                            	<?php 
								//echo $result['day_bal']
								?>
                            </div>
                        </div>
                    </div>
                     -->
                    <div class="col-lg-3">
                    	<div class="panel panel-success">
                        	<div class="panel-heading" style="background-color: #E59500">
                            	<h4 class="panel-title" style="font-size:30px; color:#fff">Admin Dues </h4>
                            </div>
                            <div class="panel-body" style="font-size:25px">
                            <?php 
							        $q = mysqli_query($con,"select * from income where userid='$userid'");
                                    $r = mysqli_fetch_array($q);
                                    echo $r['current_bal'];
								?>
                            </div>
                        </div>
                    </div>
                  
                    <div class="col-lg-3">
                    	<div class="panel panel-danger">
                        	<div class="panel-heading"  style="background-color:#DC153C">
                            	<h4 class="panel-title" style="font-size:30px; color:#fff">Total Income</h4>
                            </div>
                            <div class="panel-body" style="font-size:25px">
                            	<?php 
							        $q = mysqli_query($con,"select * from income where userid='$userid'");
                                    $r = mysqli_fetch_array($q);
                                    echo $r['total_bal'];
								?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                    	<div class="panel panel-warning">
                        	<div class="panel-heading"  style="background-color: #1B98E0">
                            	<h4 class="panel-title" style="font-size:30px; color:#fff">Available Pin</h4>
                            </div>
                            <div class="panel-body" style="font-size:25px">
                            	<?php 
								echo  mysqli_num_rows(mysqli_query($con,"select * from pin_list where userid='$userid' and status='open'"));
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
