<?php

include("connect.php");
//error_reporting(0);



$query="select * from employee where emp_id=1 "; 

$data=mysqli_query($connect,$query);

if($data)
{
	echo"sucess";
}
else
{
	echo"error";
}

	$row=mysqli_fetch_assoc($data);

			
			echo $row['emp_gname'];
	

		
?>