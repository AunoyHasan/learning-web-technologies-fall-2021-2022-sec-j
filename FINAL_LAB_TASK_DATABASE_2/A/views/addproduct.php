<html>
<head>
	<title>Adding Product</title>
</head>
<body>

	<form method="post" action="../controller/addproductcheck.php">
		<fieldset>
			<legend>Add Product</legend>
			<table>
				<tr>
					<td>Name:</td>
					<td><input type="text" name="name" value=""></td>
				</tr>
				<tr>
					<td>Buying Price:</td>
					<td><input type="text" name="buyingPrice" value=""></td>
				</tr>
				<tr>
					<td>Selling Price:</td>
					<td><input type="text" name="sellingPrice" value=""></td>
				</tr>
				
				<hr>
				
				<tr>
				    <td> <hr> </td>
					<td> </td>
				</tr>
				
				<tr>
				    <td><input type="checkbox" name="" value=""></td>
				    <td> Display</td>
					checkbox
				</tr>
				
				<tr>
				    <td> <hr> </td>
					<td> </td>
				</tr>
				
				<tr>
				    <td><input type="submit" name="submit" value="Save"></td>
					<td></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>