<?php 

	//print_r($_GET);
	
	if(isset($_REQUEST['submit']))
	{
		$birth = $_REQUEST['birth'];
		if($birth == ""){
			echo "null value...";
		}else{
			echo $birth;
		}	
	}else{
		echo "invalid request...";
	}
	
?>
?>