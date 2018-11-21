<?php

	session_start();
	include("connect.php");

if(isset($_POST['signin']))
		{
		echo "HI";
			$user=$_POST["username"];
			$pass=$_POST["password"];
			$query="SELECT emp_id, user_name, password FROM USERS WHERE user_name='$user' && password='$pass' ";
			
			$_SESSION["username"]=$user;
			
			$data=mysqli_query($connect,$query);
			$userrow=mysqli_fetch_assoc($data);
			$userid=$userrow["emp_id"];
			$total=mysqli_num_rows($data);  // this fun will return the num of rows matching this query
			echo "$total";
			if($total==1)
			{
				$_SESSION["user_id"]=$userid;
				header('location:index.php');//header function is used to redirect the page 
				
			}
			else
			{
				echo"login failed";
				
				header('location:login.html');//header function is used to redirect the page 
			}
		}	
		
		
?>
