<?php 

	//print_r($_GET);
	
	if(isset($_REQUEST['submit']))
	{
		$degree = $_REQUEST['degree'];
		if($degree == ""){
			echo "null value...";
		}else{
			echo $degree;
		}	
	}
	
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Degree</title>
</head>
<body>	
	<form method="get" action="#">
		<fieldset>
			<legend>Degree</legend>
				<input type="checkbox" name="degree" value="" checked> SSC
			    <input type="checkbox" name="degree" value="" checked> HSC
			    <input type="checkbox" name="degree" value=""> BSc
	            <input type="checkbox" name="degree" value=""> MSc
			    <hr>						
				<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>