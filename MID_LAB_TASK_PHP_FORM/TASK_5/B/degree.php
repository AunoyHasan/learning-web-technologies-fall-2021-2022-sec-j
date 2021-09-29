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
	<title>Degree: Same file output </title>
</head>
<body>	
	<form method="get" action="#">
		<fieldset>
			<legend>Degree</legend>
			<table>
				<tr>
					<td>Degree</td>
					<td>
						<input type="checkbox" name="degree" value=""> SSC
			            <input type="checkbox" name="degree" value=""> HSC
			            <input type="checkbox" name="degree" value=""> BSc
			            <input type="checkbox" name="degree" value=""> MSc
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