<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Degree: Display With Prev Value </title>
</head>
<body>	
	<form method="get" action="#">
		<fieldset>
			<legend>Degree</legend>
			<table>
				<tr>
					<td>Degree</td>
					<td>
						<input type="checkbox" name="dergree" value="
					                               	<?php 
	                                                //print_r($_GET);
	                                                if(isset($_REQUEST['submit']))
	                                                {
		                                                $dergree = $_REQUEST['dergree'];
		                                                if($dergree == ""){
			                                                echo "null value...";
		                                                }else{
			                                            echo $dergree;
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