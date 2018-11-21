<!DOCTYPE html>
<?php

	error_reporting(0);
	session_start();
	include("connect.php");
	
		
		$profile=$_SESSION["username"];
		$userid=$_SESSION["user_id"];
		if($profile==true)
		{
		}
		else
		{
				header('location:index.php');
		}
		$query="select emp_profilePic from employee where emp_id ='$userid' ";
		$data=mysqli_query($connect,$query);
		
		$array=mysqli_fetch_assoc($data); //return an array
		$img=$array['emp_profilePic'];
		//echo "$img";
		
			
		
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Dashboard</title>
        
        <!-- Core CSS - Include with every page -->
        <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
        <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
        <link href="assets/css/style.css" rel="stylesheet" />
        <link href="assets/css/main-style.css" rel="stylesheet" />
        <!-- Page-Level CSS -->
        <link href="assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
    </head>

    <body>
    <!--  wrapper -->
        <div id="wrapper">
        <!-- navbar top -->
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="assets/img/BMA_Logo_.png" alt="Company Logo" width="280" height="500" />
                </a>
            </div>
            <!-- end navbar-header -->


            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-warning">5</span>  <i class="fa fa-bell fa-3x"></i>
                    </a>
                    <!-- dropdown alerts-->
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i>New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i>Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- end dropdown-alerts -->
                </li>


                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i>User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i>Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
                
            </ul>
            <!-- end navbar-top-links -->

        </nav>
        <!-- end navbar top -->

        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            <div class="user-section-inner align-center">
                                <img src=<?php echo" $img "?> alt="profile picture" class="center">
                            </div>
                            <div class="user-info">
                                <div><?php echo $profile ;?> <strong>--Manager</strong></div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    <li class="sidebar-search">
                        <!-- search section-->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search here....">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!--end search section-->
                    </li>
                    <li class="selected">
                        <a href="index.php"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Reports</a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-table fa-fw"></i>Notifications</a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-user fa-fw"></i>Employee<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="permanentEmp.php">Permanent</a>
                            </li>
                            <li>
                                <a href="tempEmp.php">Temprary</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-gear fa-fw"></i>Settings</a>
                    </li>
                    <li>
                        <a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>

                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->

        <!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="container-fluid">
            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!--End Page Header -->
            </div>

            <div>
                <div class="row">
                    <!-- Welcome -->
                   <div class="col-lg-12">
                        <div class="alert alert-info">
                            <i class="fa fa-folder-open"></i><b>&nbsp;Hello !</b><br> Welcome Back ....... Happy to see you
                        </div>
                    </div>           
                    <!--end  Welcome -->
                </div>
            </div>

            <div class="row">
                <!--quick add employee section -->
                <div class="col-lg-4">
                    <div class="alert alert-danger text-center">
                        <a href="reg.php"><i class="fa fa-user fa-user-plus fa-3x"></i>&nbsp;<b>Add </b></a>New Employee
                    </div>
                </div>
                <!--quick update employee section -->
                <div class="col-lg-4">
                    <div class="alert alert-info text-center">
                        <a href="editReg.html"><i class="fa fa-user fa-3x"></i>&nbsp;<b>Update </b></a>Existing Employee    
                    </div>
                </div>
                <!--quick delete employee section -->
                <div class="col-lg-4">
                    <div class="alert alert-warning text-center">
                        <a href="#"><i class="fa fa-user fa-user-times fa-3x"></i>&nbsp;<b>Delete </b></a>Employee
                    </div>
                </div>
                <!--end section -->
            </div>
    
            <!--chart for meeting attendance-->
            <div class="panel panel-primary">
                <!--chart heading-->
                <div class="panel-heading">
                    <i class="fa fa-bar-chart-o fa-fw"></i>Meeting Attendance
                    <div class="pull-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                    Employee type
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu pull-right" role="menu">
                                <li><a href="reg.html">Permanent</a></li>
                                <li><a href="reg.html">Temprary</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--chart structure-->
                <div class="panel-body">
                    <div id="morris-area-chart"></div>
                </div>
                <!--end chart div-->
            </div>
        </div>
        <!-- end page-wrapper -->

        
        </div>
    </div>
    <!-- end wrapper -->



    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="assets/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/plugins/morris/morris.js"></script>
    <script src="assets/scripts/dashboard-demo.js"></script>

</body>

</html>
