<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Email: Display With Prev Value </title>
</head>
<body>	
	<form method="get" action="#">
		<fieldset>
			<legend>Email</legend>
			<table>
				<tr>
					<td>Email</td>
					<td>
						<input type="email" name="email" value="
					                               	<?php 
	                                                //print_r($_GET);
	                                                if(isset($_REQUEST['submit']))
	                                                {
		                                                $email = $_REQUEST['email'];
		                                                if($email == ""){
			                                                echo "null value...";
		                                                }else{
			                                            echo $email;
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