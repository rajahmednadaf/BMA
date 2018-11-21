<script>
		function check()
		{
				return corfirm("ARE YOU YOU WANT TOO DELETE");
		}
</script>


<?php

include("connect.php");

	session_start();
	
	$profile=$_SESSION["username"];
	if($profile==true)
	{
	}
	else
	{
		header('location:index.php');
	}
$query="SELECT * FROM employee where emp_type=0";

$data=mysqli_query($connect,$query);
if($data)
{
	echo"suceess";
}
else
{
 die("Connection failed becouse : ".mysqli_connect_error());
}

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Temporary Employee</title>
        
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
                                <img src="assets/img/user.jpg" alt="profile picture" class="center">
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
                    <li>
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
                            <li class="selected">
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
                            <h1 class="page-header">Temporary Employee Details</h1>
                        </div>
                        <!--End Page Header -->
                    </div>
                </div>
                <div class="container center">          
                    <table class="table table-hover">
                        <thead>
                            <tr>
								<th>Employee ID</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>    </th>
                                <th>    </th>
                                <th>    </th>
                            </tr>
                        </thead>
                        <tbody>
							<?php
							while($result=mysqli_fetch_assoc($data))
							{
								echo"
                            <tr>
								<td>".$result['emp_id']."</td>
                                <td>".$result['emp_gname']."</td>
                                <td>".$result['emp_lastname']."</td>
                                <td>
                                    <a href='display_details.php?emp_id=$result[emp_id]' class='btn btn-info'>Display&nbsp;&nbsp;<i class='fa fa-eye' aria-hidden='true'></i></a>
                                </td>
                                <td>
                                    <a href='edit.php?emp_id=$result[emp_id]' class='btn btn-success'>Edit&nbsp;&nbsp;<i class='fa fa-edit' aria-hidden='true'></i></a>
                                </td>
                                <td>
                                    <a href='delete_emp.php?emp_id=$result[emp_id] return onclick=check()' class='btn btn-danger'>Delete&nbsp;&nbsp;<i class='fa fa-times' aria-hidden='true'></i></a>
                                </td>
                              </tr>
								";
							}
							?>
                        </tbody>
                    </table>
                </div>
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

