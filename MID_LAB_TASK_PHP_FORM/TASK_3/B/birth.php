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
	}
	
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Name: Same file output </title>
</head>
<body>	
	<form method="get" action="#">
		<fieldset>
			<legend>DateOfBirth</legend>
			<table>
				<tr>
					<td>DateOfBirth</td>
					<td>
						<input type="date" name="birth" value="">
					</td>
					<td>
						<input type="submit" name="submit" value="Submit">
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>