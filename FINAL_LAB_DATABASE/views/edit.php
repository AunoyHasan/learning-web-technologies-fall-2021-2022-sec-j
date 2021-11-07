<html>
<head>
	<title>Edit New User</title>
</head>
<body>
	<center>	
		<a href="home.php">Back </a> |
		<a href="../controller/logout.php"> logout</a>
	</center>


</body>
</html>

<?php 
	include('header.php');
	
	require_once('../model/usersModel.php');
	
	
	if(isset($_POST['userId'])){
		$recId = $_POST['userId'];
		$result = showById($recId);
		
		while($data = mysqli_fetch_assoc(result)){
			
?>
    	<form method="post" action="editcheck.php">
		<fieldset>
			<legend>Edit </legend>
			<table>
				<tr>
					<td><input type="text" name="username" value="<?=$data['username']?>"></td>
				</tr>
				<tr>
					<td><input type="password" name="password" value="<?=$data['password']?>"></td>
				</tr>
				<tr>
					<td><input type="email" name="email" value="<?=$data['email']?>"></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="Update"></td>
				</tr>
			</table>
		</fieldset>
	</form>
	
<?php	
			
		}
	}
?>