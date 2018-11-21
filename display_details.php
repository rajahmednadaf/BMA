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
		
		
		/*==============================================================*/
			$emp_id=$_GET['emp_id'];
			
			$emp_query="select * from employee where emp_id='$emp_id'"; 

			//$branch_query="SELECT * FROM branch ";
			//$dept_query="SELECT * FROM department ";
			//$man_query="SELECT distinct emp_gname, dept_manager, dept_id from employee left outer join department on emp_id = dept_manager ";

			$emp_data=mysqli_query($connect,$emp_query);
			//$branch_data=mysqli_query($connect,$branch_query); 
			//$dept_data=mysqli_query($connect,$dept_query); 
			//$emp_data=mysqli_query($connect,$man_query); 
			$row=mysqli_fetch_assoc($emp_data);
			if($row['emp_type']=='1')
			{
					$type="Perminant";
			}
			elseif($row['emp_type']=='0')
			{
				$type="Temporary";
			}
			else
			{
					$type="Unknown";
			}
/*
			if($branch_data && $dept_data && $man_query && $data)
			{
				echo"sucess";
	
			}
			else
			{
				echo"error";
			}
		
	*/	
		/*==============================================================*/
			
		
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Employee details</title>
        
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
            <div class="row">
                 <!-- page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Employee Details</h1>
                </div>
                <!--end page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        
                        <div class="panel-heading">
                           Basic Information
                        </div>

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
								<!---------------------- Basic Information form----------------->
                                    <form role="form" action="register.php" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <div class="form-row">                  
                                                <div class="col-md-6">  
                                                    <div class="form-label-group">
                                                        <label for="firstName">First name</label>
                                                        <input type="text" id="firstName" class="form-control" value="<?php echo $row['emp_gname']; ?>" required="required" autofocus="autofocus" name="firstname" disabled>
                                                    </div>
                                                </div>  
                                                <div class="col-md-6">
                                                    <div class="form-label-group">
                                                        <label for="lastName">Last Name</label>    
                                                        <input type="text" id="lastName" class="form-control" value="<?php echo $row['emp_lastname']; ?>"  required="required" name="lastname" disabled>       
                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
										
										<div class="form-group">
                                            <div class="form-row">                  
                                                <div class="col-md-6">  
                                                    <div class="form-label-group">
                                                        <label for="fatherName">Father's Name</label>
                                                        <input type="text" id="fatherName" class="form-control" required="required" value="<?php echo $row['emp_fname']; ?>" autofocus="autofocus" name="fatherName" disabled>
                                                    </div>
                                                </div>  
                                                <div class="col-md-6">
                                                    <div class="form-label-group">
                                                        <label for="grandfatherName">Grandfather's Name</label>    
                                                        <input type="text" id="grandfatherName" class="form-control" value="<?php echo $row['emp_gfname']; ?>" required="required" name="grandfatherName" disabled>       
                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
										
										<!--- start of branch , Department & designation-->
                                        <div class="form-group">
                                            <div class="form-row">                  
                                                <div class="col-md-4">  
                                                    <div class="form-label-group">
                                                        <label>Branch Name</label>
                                                        <input type="text" id="branchname" class="form-control" placeholder="Branch Name" required="required" autofocus="autofocus" name="branchname" disabled>
                                                      </div>
                                                </div>
                                                <div class="col-md-4">  
                                                    <div class="form-label-group">
                                                        <label>Department Name</label>
                                                        <input type="text" id="Departmentname" class="form-control" placeholder="Department Name" required="required" autofocus="autofocus" name="Departmentname" disabled>                                            
                                                    </div>
                                                </div>
                                                <div class="col-md-4">          
                                                    <div class="form-label-group">
                                                        <label for="designation">Designation</label>    
                                                        <input type="text" id="designation" class="form-control" value="<?php echo $row['emp_desig']; ?>" required="required" disabled>                                                       
                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!--- start of employee Type & manager-->
                                        <div class="form-group">
                                            <div class="form-row">                  
                                                <div class="col-md-6">  
                                                    <div class="form-label-group">
                                                        <label>Employee Type</label>
                                                        <input type="text" id="Employeetype" class="form-control" value="<?php echo $type; ?>" required="required" disabled>                                                                                                    
                                                    </div>
                                                </div>
                                                <div class="col-md-6">  
                                                    <div class="form-label-group">
                                                        <label>Manager</label>
                                                        <input type="text" id="managertype" class="form-control" placeholder="Managertype" required="required" disabled>                                                                                                                                                  
                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                            
                                        <!--- start of DOJ & Salary-->
                                        <div class="form-group">
                                            <div class="form-row">                  
                                                <div class="col-md-6">  
                                                    <div class="form-label-group">
                                                        <label for="dateOfJoining">Date Of Joining</label>
                                                        <input type="text" id="dateOfJoining" class="form-control" value="<?php echo $row['emp_DOJ']; ?>" required="required" autofocus="autofocus" name="doj" disabled>
                                                    </div>
                                                </div>        
                                                <div class="col-md-6">
                                                    <div class="form-label-group">
                                                        <label for="salaryPerMonth">Salary</label>    
                                                        <input type="text" id="salaryPerMonth" class="form-control" value="<?php echo $row['emp_salary']; ?>" required="required" name="salary" disabled>       
                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                    </div>            
                                </div>
                            </div>
                            <br>

                            <!--next form starts here-->
                            <div class="panel-heading">
                            Contact Information
                            </div>

                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <!--div for (temprary)place of village, district & provensesn-->
                                        <div class="form-group">
                                            <div class="form-row">
                                                <h4><label for="tempAddress">Temparary Address</label></h4>
                                                <div class="col-md-4">  
                                                    <div class="form-label-group">
                                                        <label for="tempVillage">Village</label>
                                                        <input type="text" id="tempVillage" class="form-control" value="<?php echo $row['emp_Tvillage']; ?>" required="required" autofocus="autofocus" disabled>
                                                    </div>
                                                </div>  
                                                <div class="col-md-4">  
                                                    <div class="form-label-group">
                                                        <label for="tempDistrict">District</label>
                                                        <input type="text" id="tempDistrict" class="form-control" value="<?php echo $row['emp_Tdistrict']; ?>" required="required" autofocus="autofocus" disabled>
                                                    </div>
                                                </div>                                                
                                                <div class="col-md-4">
                                                    <div class="form-label-group">
                                                        <label for="tempProvences">Provences</label>    
                                                        <input type="text" id="tempProvences" class="form-control" value="<?php echo $row['emp_Tprovince']; ?>" required="required" disabled>       
                                                    </div>
                                                    <br>                                                        
                                                </div>
                                            </div>
                                        </div>

                                        <!--div for (Permanent)place of village, district & provensesn-->
                                        <div class="form-group">
                                            <div class="form-row">
                                                <h4><label for="perAddress">Permanent Address</label></h4>
                                                <div class="col-md-4">  
                                                    <div class="form-label-group">
                                                        <label for="PerVillage">Village</label>
                                                        <input type="text" id="PerVillage" class="form-control" value="<?php echo $row['emp_Pvillage']; ?>" required="required" autofocus="autofocus" disabled>
                                                    </div>
                                                </div>  
                                                <div class="col-md-4">  
                                                    <div class="form-label-group">
                                                        <label for="perDistrict">District</label>
                                                        <input type="text" id="perDistrict" class="form-control" value="<?php echo $row['emp_Pdistrict']; ?>" required="required" autofocus="autofocus" disabled>
                                                    </div>
                                                </div>                                                
                                                <div class="col-md-4">
                                                    <div class="form-label-group">
                                                        <label for="perProvences">Provences</label>    
                                                        <input type="text" id="perProvences" class="form-control" value="<?php echo $row['emp_Pprovince']; ?>" required="required" disabled>       
                                                    </div>
                                                    <br>                                                        
                                                </div>
                                            </div>
                                        </div>

                                        <!--div for mobile & residence number-->
                                        <div class="form-group">
                                            <div class="form-row"> 
                                                <div class="col-md-6">  
                                                    <div class="form-label-group">
                                                        <label for="mobileNumber">Mobile Number</label>
                                                        <input type="text" id="mobileNumber" class="form-control" value="<?php echo $row['emp_phoneNo']; ?>" required="required" autofocus="autofocus" name="mobile" disabled>
                                                    </div>
                                                </div>                                                
                                                <div class="col-md-6">
                                                    <div class="form-label-group">
                                                        <label for="residenceNumber">Residence Number</label>    
                                                        <input type="text" id="residenceNumber" class="form-control" placeholder="Residence Number" required="required" name="resno" disabled>       
                                                    </div>  
                                                    <br>                                                      
                                                </div>
                                            </div>
                                        </div>

                                        <!--div for emailID-->
                                        <div class="form-group">
										<div class="col-md-12"> 
                                            <label>Email Id</label>
                                            <input type="email" id="emailID" class="form-control" value="<?php echo $row['emp_emailAdd']; ?>" required="required" name="email" disabled>       
                                        </div></div>
                                        <br>
                                    </div>
                                </div>
                            </div>

                        <!--next form starts here-->
                        <div class="panel-heading">
                                Detailed Information
                        </div>
    
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">

                                    <!--div for tazkera number-->
                                    <div class="form-group">
									<div class="col-md-12">  
                                        <label for="tazkera">Tazkera Number</label>
                                        <input type="text" id="tazkeraNumber" class="form-control" value="<?php echo $row['emp_Tazkera']; ?>" required="required" autofocus="autofocus" name="taz" disabled>        
                                    </div><br></div>

                                    <!--div for Birth place,date & age-->
                                    <div class="form-group">
                                        <div class="form-row">
                                            <div class="col-md-6">  
                                                <div class="form-label-group">
                                                    <label for="birthPlace">Birth Place</label>
                                                    <input type="text" id="birthPlace" class="form-control" value="<?php echo $row['emp_pob']; ?>" required="required" autofocus="autofocus" name="birthplace" disabled>
                                                </div>
                                            </div>  
                                            <div class="col-md-6">  
                                                <div class="form-label-group">
                                                    <label for="dateOfBirth">Date of Birth</label>
                                                    <input type="text" id="dateOfBirth" class="form-control" value="<?php echo $row['emp_dob']; ?>" required="required" autofocus="autofocus" name="dob" disabled>
                                                </div>
                                            </div>                                                
         
                                        </div>
                                    </div>

                                    
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--Ends here-->
                </div>
            </div>
        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>

</body>

</html>
