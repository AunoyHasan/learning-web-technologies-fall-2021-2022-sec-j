<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>gender: Display With Prev Value </title>
</head>
<body>	
	<form method="get" action="#">
		<fieldset>
			<legend>Gender</legend>
			<table>
				<tr>
					<td>Genedr</td>
					<td>
						<input type="ratio" name="gender" value="<?php
													if (isset($_REQUEST['submit'])) {
														$gender = $_REQUEST['gender'];
														if ($gender == "") {
															echo "null value...";
														} else {
															echo $gender;
													      }
													}	  
													?>">
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