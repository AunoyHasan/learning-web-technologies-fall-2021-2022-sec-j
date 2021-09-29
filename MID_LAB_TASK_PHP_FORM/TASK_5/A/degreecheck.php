<?php 

	//print_r($_GET);
	
	if(isset($_REQUEST['submit']))
	{
		$dergree = $_REQUEST['dergree'];
		if($dergree == ""){
			echo "null value...";
		}else{
			echo $dergree;
		}	
	}else{
		echo "invalid request...";
	}
?>