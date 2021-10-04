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
	}
	
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Blood</title>
</head>
<body>	
	<form method="get" action="#">
		<fieldset>
			<legend>Blood</legend>
			<select name="">
	            <option value="">A+</option>
                <option value="">A-</option>			            
			    <option value="">O+</option> 
  	            <option value="">O-</option>
                <option value="" selected>B+</option>
		        <option value="">B-</option>
                <option value="">AB+</option>
			    <option value="">AB-</option>
	            </select>	
	        <hr>	
	        <input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>