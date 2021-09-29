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
	<title>Gender: Same file output </title>
</head>
<body>	
	<form method="get" action="#">
		<fieldset>
			<legend>Gender</legend>
			<table>
				<tr>
					<td>Gender</td>
					<td>
						<input type="radio" name="gender" value=""> Male
			            <input type="radio" name="gender" value=""> Female
			            <input type="radio" name="gender" value=""> Other
					<td>	
					<td>
					    <input type="submit" name="submit" value="Submit">
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>