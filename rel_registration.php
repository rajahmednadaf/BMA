<?php

include("connect.php");
		session_start();
		
		
			if(isset($_POST['register']))
			{
					echo "hello";
					
				$empid=$_SESSION["emp_id"];
				//$taz=$_POST["taz"];
				$relation=$_POST["relation"];
				//"$salutation=$_POST["salutation"];
				$fname=$_POST["fname"];
				$lname=$_POST["lname"];
				$gender=$_POST["optionsRadiosInline"];
				$pvillage=$_POST["pvillage"];
				$pdistrict=$_POST["pdistrict"];
				$pprovences=$_POST["pprovences"];
				$tempvillage=$_POST["tempvillage"];
				$tempdistrict=$_POST["tempdistrict"];
				$tempprovences=$_POST["tempprovences"];
				$mobile=$_POST["mobile"];
				$renum=$_POST["resnum"];
		
				
		
				$query="INSERT INTO emp_relative values(null, '$empid', '$fname', '$lname', '$gender', '$mobile', '$relation','$pvillage', '$pdistrict','$pprovences','$tempvillage', '$tempdistrict', '$tempprovences'  )";
				$data=mysqli_query($connect,$query); // this function is to run the query it has two parameter 1 connection variable and query variable
				if($data)
				{
					echo"sucess";
					header('location:indivualInfo.php');
				
				}
				else
				{
					echo"error" . mysqli_error($connect);
				}  
				
			}
		
?>