<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Name: Display With Prev Value </title>
</head>
<body>	
	<form method="get" action="#">
		<fieldset>
			<legend>DateOfBirth</legend>
			<table>
				<tr>
					<td>DateOfBirth</td>
					<td>
						<input type="date" name="birth" value="<?php
													if (isset($_REQUEST['submit'])) {
														$birth = $_REQUEST['myname'];
														if ($birth == "") {
															echo "null value...";
														} else {
															echo $birth;
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