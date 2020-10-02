<div id="wrapper" style="background-color: #002642; ">
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0 ; background-color: #002642">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php" style="font-size:30px; color:#fff ">Cleanalya</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-message">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> <?php echo ' '. $userid  ?> </a>
                        </li>
                        <!--<li><a href="userprofile.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>-->
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
         <!--<div style="background-color: #002462"> -->
            <div class="navbar-default sidebar" role="navigation" style="background-color: #002642">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="home.php" style="font-size:20px; color:#fff" >
                            <style type="text/css">
                            .sidebar ul li a.active {background-color: #000080;}
                            .sidebar ul li a:hover {background-color: #000080;}
                            </style><i class="fa fa-dashboard fa-fw" style="font-size:20px; "></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="view-pin-request.php" style="font-size:20px ;color:#fff" >  
                            <style type="text/css">
                            .sidebar ul li a.active {background-color: #000080;}
                            .sidebar ul li a:hover {background-color: #000080;}
                            </style><i class="fa fa-adjust fa-fw" style="font-size:20px" ></i> View Pin Request</a>
                        </li>
                        <li>
                            <a href="income.php"  style="font-size:20px ;color:#fff">  
                            <style type="text/css">
                            .sidebar ul li a.active {background-color: #000080;}
                            .sidebar ul li a:hover {background-color: #000080;}
                            </style><i  class="fa fa-rupee fa-fw" style="font-size:20px" ></i>Income</a>
                        </li>
                        <li>
                            <a href="income-history.php"  style="font-size:20px ;color:#fff">  
                            <style type="text/css">
                            .sidebar ul li a.active {background-color: #000080;}
                            .sidebar ul li a:hover {background-color: #000080;}
                            </style><i  class="fa fa-rupee fa-fw" style="font-size:20px" ></i> Income History</a>
                        </li>

                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
       
        </nav>
        </div>