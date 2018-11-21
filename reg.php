

<!DOCTYPE html>
<?php

include("connect.php");
//error_reporting(0);



$branch_query="SELECT * FROM branch ";
$dept_query="SELECT * FROM department ";
$man_query="SELECT distinct emp_gname, dept_manager, dept_id from department inner join employee on dept_manager=emp_id  ";


$branch_data=mysqli_query($connect,$branch_query); 
$dept_data=mysqli_query($connect,$dept_query); 
$emp_data=mysqli_query($connect,$man_query); 

if($branch_data && $dept_data && $man_query)
{
	echo"sucess";
}
else
{
	echo"error";
}
?>


<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Registration Form</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />

</head>

<body>
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
                                <div>Akhib<!--<?php echo "$profile"; ?>--> <strong>--Manager</strong></div>
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
                        <a href="index.html"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
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
                    <h1 class="page-header">Employee Registration Form</h1>
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
                                        <!--<div class="form-group">
                                            <label for="employeeId">ID number </label>
                                            <input type="text" id="employeeId" class="form-control" placeholder="Employee id number"  required="required" autofocus="autofocus" name="empid">
                                        </div>-->
                                        <div class="form-group">
                                            <div class="form-row">                  
                                                <div class="col-md-6">  
                                                    <div class="form-label-group">
                                                        <label for="firstName">First name</label>
                                                        <input type="text" id="firstName" class="form-control" placeholder="First name" required="required" autofocus="autofocus" name="firstname">
                                                    </div>
                                                </div>  
                                                <div class="col-md-6">
                                                    <div class="form-label-group">
                                                        <label for="lastName">Last Name</label>    
                                                        <input type="text" id="lastName" class="form-control" placeholder="Last name" required="required" name="lastname">       
                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label>Gender </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="gender" id="male" value="1" checked>Male
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="gender" id="female" value="0">Female
                                            </label>
                                        </div>

										<div class="form-group">
                                            <div class="form-row">                  
                                                <div class="col-md-6">  
                                                    <div class="form-label-group">
                                                        <label for="fatherName">Father's Name</label>
                                                        <input type="text" id="fatherName" class="form-control" placeholder="Father's Name" required="required" autofocus="autofocus" name="fatherName">
                                                    </div>
                                                </div>  
                                                <div class="col-md-6">
                                                    <div class="form-label-group">
                                                        <label for="grandfatherName">Grandfather's Name</label>    
                                                        <input type="text" id="grandfatherName" class="form-control" placeholder="Grandfather's Name" required="required" name="grandfatherName">       
                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
										<!--- start of branch , Department & designation-->
                                        <div class="form-group">
                                            <div class="form-row">                  
                                                <div class="col-md-4">  
                                                    <div class="form-label-group">
                                                        <label>Branch Name</label>
														<?php
														
                                                        echo"<select class='form-control' name='branchname'>";
															while($branch_row=mysqli_fetch_assoc($branch_data))
															{
																	$branch_id=$branch_row['branch_id'];
																    $branch_name=$branch_row['branch_name'];
																	echo"<option id='$branch_name' value='$branch_id'>$branch_name</option>";
															}
                                                        echo"</select> ";
															
														?>
                                                      </div>
                                                </div>
                                                <div class="col-md-4">  
                                                    <div class="form-label-group">
                                                        <label>Department Name</label>
														<?php
                                                        echo"<select class='form-control' name='departmentname'>";
															while($dept_row=mysqli_fetch_assoc($dept_data))
															{
																	$dep_id= $dept_row['dept_id'];
																    $dept_name=$dept_row['dept_name'];
																	echo" <option id='$dept_name' value='$dep_id'>$dept_name</option>";
															}
                                                           
                                                           
                                                        echo"</select>";
														?>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">          
                                                    <div class="form-label-group">
                                                        <label for="designation">Designation</label>    
                                                        <input type="text" id="designation" class="form-control" placeholder="Designation" required="required" name="designation">       
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
                                                        <select class="form-control" name="emptype">
                                                            <option id="empTypePermanent" value="1">Permanent</option>
                                                            <option id="empTypeTemporary" value="0">Temporary</option>
                                                        </select>                                                
                                                    </div>
                                                </div>
                                                <div class="col-md-6">  
                                                    <div class="form-label-group">
                                                        <label>Manager</label>
														<?php
                                                       echo" <select class='form-control'  name='man'>";
																while($man_row=mysqli_fetch_assoc($emp_data))
																{
																	$dept_manager=$man_row['dept_manager'];
																    $man_name=$man_row['emp_gname'];
																	echo"<option id='$man_name' value='$dept_manager'>$man_name</option>";
																}
                                                            
                                                        echo"</select>";
														?>	
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
                                                        <input type="text" id="dateOfJoining" class="form-control" placeholder="Date Of Joining" required="required" autofocus="autofocus" name="doj">
                                                    </div>
                                                </div>        
                                                <div class="col-md-6">
                                                    <div class="form-label-group">
                                                        <label for="salaryPerMonth">Salary</label>    
                                                        <input type="text" id="salaryPerMonth" class="form-control" placeholder="Salary per month" required="required" name="salary">       
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
                                                        <input type="text" id="tempVillage" class="form-control" placeholder="Village Name" required="required" autofocus="autofocus" name="tempvillage">
                                                    </div>
                                                </div>  
                                                <div class="col-md-4">  
                                                    <div class="form-label-group">
                                                        <label for="tempDistrict">District</label>
                                                        <input type="text" id="tempDistrict" class="form-control" placeholder="District name" required="required" autofocus="autofocus" name="tempdistrict">
                                                    </div>
                                                </div>                                                
                                                <div class="col-md-4">
                                                    <div class="form-label-group">
                                                        <label for="tempProvences">Provences</label>    
                                                        <input type="text" id="tempProvences" class="form-control" placeholder="Address provences" required="required" name="tempprovences">       
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
                                                        <input type="text" id="PerVillage" class="form-control" placeholder="Village Name" required="required" autofocus="autofocus" name="village">
                                                    </div>
                                                </div>  
                                                <div class="col-md-4">  
                                                    <div class="form-label-group">
                                                        <label for="perDistrict">District</label>
                                                        <input type="text" id="perDistrict" class="form-control" placeholder="District name" required="required" autofocus="autofocus" name="district">
                                                    </div>
                                                </div>                                                
                                                <div class="col-md-4">
                                                    <div class="form-label-group">
                                                        <label for="perProvences">Provences</label>    
                                                        <input type="text" id="perProvences" class="form-control" placeholder="Address provences" required="required" name="provences">       
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
                                                        <input type="text" id="mobileNumber" class="form-control" placeholder="Mobile Number" required="required" autofocus="autofocus" name="mobile">
                                                    </div>
                                                </div>                                                
                                                <div class="col-md-6">
                                                    <div class="form-label-group">
                                                        <label for="residenceNumber">Residence Number</label>    
                                                        <input type="text" id="residenceNumber" class="form-control" placeholder="Residence Number" required="required" name="resno">       
                                                    </div>  
                                                    <br>                                                      
                                                </div>
                                            </div>
                                        </div>

                                        <!--div for emailID-->
                                        <div class="form-group">
                                            <label>Email Id</label>
                                            <input type="email" id="emailID" class="form-control" placeholder="Email ID" required="required" name="email">       
                                        </div>
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
                                        <label for="tazkera">Tazkera Number</label>
                                        <input type="text" id="tazkeraNumber" class="form-control" placeholder="Tazkera Unique Identification Number" required="required" autofocus="autofocus" name="taz">        
                                    </div>

                                    <!--div for Birth place,date & age-->
                                    <div class="form-group">
                                        <div class="form-row">
                                            <div class="col-md-4">  
                                                <div class="form-label-group">
                                                    <label for="birthPlace">Birth Place</label>
                                                    <input type="text" id="birthPlace" class="form-control" placeholder="Name of the Place" required="required" autofocus="autofocus" name="birthplace">
                                                </div>
                                            </div>  
                                            <div class="col-md-4">  
                                                <div class="form-label-group">
                                                    <label for="dateOfBirth">Date of Birth</label>
                                                    <input type="text" id="dateOfBirth" class="form-control" placeholder="Date of Birth" required="required" autofocus="autofocus" name="dob">
                                                </div>
                                            </div>                                                
                                            <div class="col-md-4">
                                                <div class="form-label-group">
                                                    <label for="Age">Age as on 1st January</label>    
                                                    <input type="text" id="Age" class="form-control" placeholder="Age as on 1st January" required="required" name="age">       
                                                </div>                                                        
                                            </div>
                                        </div>
                                    </div>

                                    <!--div for profile picture & signature-->
                                    <div class="form-group">
                                        <div class="form-row"> 
                                            <div class="col-md-6">  
                                                <div class="form-label-group">
                                                <br>
                                                    <label for="profilePicture">Profile Picture</label>
                                                    <input type="file" name="photo">
                                                </div>
                                            </div>                                                
                                            <div class="col-md-6">
                                                <div class="form-label-group">
                                                <br>
                                                    <label for="signaturePicture">Signature</label>
                                                    <input type="file" name="signature">
                                                </div>  
                                                <br>                                                      
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <!--submit & reset Button-->
                                    <button type="submit" class="btn btn-primary" name="register">Submit Button</button>
                                    <button type="reset" class="btn btn-success">Reset Button</button>
                                        
                                    <br>
                                   
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
