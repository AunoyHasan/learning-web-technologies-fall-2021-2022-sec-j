<?php 

	//print_r($_GET);
	
	if(isset($_REQUEST['submit']))
	{
		$gender = $_REQUEST['gender'];
		if($gender == ""){
			echo "null value...";
		}else{
			echo $gender;
		}	
	}else{
		echo "invalid request...";
	}
	
?>
?>