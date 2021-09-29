<?php 

	//print_r($_GET);
	
	if(isset($_REQUEST['submit']))
	{
		$blood = $_REQUEST['blood'];
		if($blood == ""){
			echo "null value...";
		}else{
			echo $blood;
		}	
	}else{
		echo "invalid request...";
	}
?>