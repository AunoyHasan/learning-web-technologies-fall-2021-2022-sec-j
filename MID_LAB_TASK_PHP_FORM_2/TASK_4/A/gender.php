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
	}
	
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Gender</title>
</head>
<body>	
	<form method="get" action="#">
		<fieldset>
			<legend>Gender</legend>
				<input type="radio" name="gender" value="" checked> Male
	            <input type="radio" name="gender" value=""> Female
	            <input type="radio" name="gender" value=""> Other
			    <hr>
			    <input type="submit" name="submit" value="Submit">
			</table>
		</fieldset>
	</form>
</body>
</html>