<?php
include("connect.php");

$emp_id=$_GET['emp_id'];	

$query="DELETE FROM employee WHERE emp_id='$emp_id'";

$data=mysqli_query($connect,$query);

if($data)
{

		echo"
			<script>
						alert('Record Deleted');
			</script>	
		";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=http://localhost/BMA/permanentEmp.php '>";		
		
}
else
{
	die("eroor: ".mysqli_connect_error());

}


?>