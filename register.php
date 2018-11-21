<?php
		include("connect.php");
		//error_reporting(0);
		if($empid!=true)
		{
			//redirect the page (need to coded)
		}
	
		
		
	if(isset($_POST['register']))
	{
	
	
				session_start();
				
			
			echo"u r in";
			
			$firstname=$_POST["firstname"];
			$lastname=$_POST["lastname"];
			$gender=$_POST["gender"];
			$fathersname=$_POST["fatherName"];
			$grandfathersname=$_POST["grandfatherName"];
			
			
			
			$designation=$_POST["designation"];
			$doj=$_POST["doj"];
			$salary=$_POST["salary"];
		
			$mobile=$_POST["mobile"];
			$res_mobile=$_POST["resno"];
			$email=$_POST["email"];
			$taz=$_POST["taz"];
			
			$birthplace=$_POST["birthplace"];
			$dob=$_POST["dob"];
			$age=$_POST["age"]; 
			$branchname=$_POST["branchname"];
			$dept=$_POST["departmentname"];
			$emptype=$_POST["emptype"];
			$manager=$_POST["man"];
			$tempaddvillage=$_POST["tempvillage"];
			$tempadddistrit=$_POST["tempdistrict"];
			$tempaddprovences=$_POST["tempprovences"];
			
			$peraddvillage=$_POST["village"];
			$peradddistrict=$_POST["district"];
			$peraddprovences=$_POST["provences"];
			
			/*===============================*/
			
		/*	echo "firsname: ".$firstname."<br>";
			echo "lastname: ".$lastname."<br>";
			echo "Gender: ".$gender."<br>";
			
			
			echo "Designation".$designation."<br>";
			echo "Date of Join: ".$doj."<br>";
			echo "Salary".$salary."<br>";
		
			echo "Mobile".$mobile."<br>";
			echo "Resd-Mobile".$res_mobile."<br>";
			echo "mail: ".$email."<br>";
			echo "Tazkera".$taz."<br>";
			
			echo "POB".$birthplace."<br>";
			echo "Dob".$dob."<br>";
			echo "Age".$age."<br>";
			echo "Branch".$branchname."<br>";
			echo "Dept".$dept."<br>";
			echo "Emptype: ".$emptype."<br>"; 
			echo "Manager: ".$manager."<br>";
			
			echo "Tvillage".$tempaddvillage."<br>";
			echo "TDistrict".$tempadddistrit."<br>";
			echo "Tprovince".$tempaddprovences."<br>";
			
			echo "Pvillage: ".$peraddvillage."<br>";
			echo "Pdistrict: ".$peradddistrict."<br>";
			echo "PProvince".$peraddprovences."<br>";  */
			
			
			/*photo and signature */
			$photo=$_FILES['photo']['name'];
			$phototempfile=$_FILES['photo']['tmp_name'];
			$photofolder="photo/".$photo;
			move_uploaded_file($phototempfile,$photofolder);
	
		
		$signature=$_FILES['signature']['name'];
		$tempsignature=$_FILES['signature']['tmp_name'];
		$signfolder="signature/".$signature;
		
		move_uploaded_file($tempsignature,$signfolder);
			/*   end photo and signature */
		
		echo $photofolder;
		echo $signfolder;
		
		
			$query="INSERT INTO employee(emp_gname, emp_lastname, emp_fname,emp_gfname, emp_dob,emp_pob, emp_gender, emp_desig, emp_salary, emp_phoneNo, emp_emailAdd, emp_profilePic, emp_sigature,emp_Tazkera, emp_accountn, emp_Pvillage, emp_Pdistrict, emp_Pprovince, emp_Tvillage, emp_Tdistrict, emp_Tprovince, emp_DOJ, emp_DOR, emp_type, emp_branch_id, emp_mgr, emp_dep ) values('$firstname','$lastname','$fathersname', '$grandfathersname', '$dob','$birthplace','$gender', '$designation', '$salary', '$mobile', '$email','$photofolder', '$signfolder','$taz', null ,'$peraddvillage', '$peradddistrict', '$peraddprovences', '$tempaddvillage', '$tempadddistrit', '$tempaddprovences', '$doj', null ,'$emptype', '$branchname', '$manager', '$dept')";
			//$query="INSERT INTO employee(emp_gname, emp_lastname, emp_fname,emp_gfname, emp_dob,emp_pob, emp_gender, emp_desig, emp_salary, emp_phoneNo, emp_emailAdd, emp_profilePic, emp_sigature,emp_Tazkera, emp_accountn, emp_Pvillage, emp_Pdistrict, emp_Pprovince, emp_Tvillage, emp_Tdistrict, emp_Tprovince, emp_DOJ, emp_DOR, emp_type, emp_branch_id, emp_mgr, emp_dep ) values('Farid','ahmadi','Zafar', 'shi Ahmad', '2014-02-02','Doshi',1, 'Audit Officer', 36000, '0798564687', 'ahamd@gmail.com','IMG/dweer/sd', 'IMG/sing/34','345398', null ,'Doshi', 'Baghlan', 'Pulkhumry', 'Kapisa', 'parawan', 'Jabolsarj', '2014-07-06', null,1, 'bma-main-br', 2, 4)";
			//$data=mysqli_query($connect,$query); // this function is to run the query it has two parameter 1 connection variable and query variable
			if(mysqli_query($connect, $query))
			{
				$last_id=mysqli_insert_id($connect);
				echo"sucess";
				//echo "Last ID: ".$last_id."<br>";
				$_SESSION["emp_id"]=$last_id;
				
				header('location:relative.php');
				
			}
			else
			{
				echo"error" . mysqli_error($connect);
				
			}  
		
			
	}
?>