<?php
	
	
	
		$connect=mysqli_connect("localhost","root","","bma_hrims");
		
		if($connect)
		{
			//echo"connected";
		}
		else
		{
				die("Connection failed becouse".mysqli_connect_error());
		}

?>


