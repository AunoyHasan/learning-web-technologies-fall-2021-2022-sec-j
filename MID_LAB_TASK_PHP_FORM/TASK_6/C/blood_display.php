<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Blood: Display With Prev Value </title>
</head>
<body>	
	<form method="get" action="#">
		<fieldset>
			<legend>Blood</legend>
			<table>
				<tr>
					<td>Blood</td>
					<td>
						<input type="option" name="blood" value="
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
                                                ?> ">
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