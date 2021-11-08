<?php
	require_once('../model/productModel.php');
	
	$result =getAllProducts();
	//$count = mysqli_num_rows($result);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Product List</title>
</head>
<body>
	<table border="1" align="center">
		<tr>
			<th>Name</th>
			<th>Profit</th>
			<th></th>
			
	
    <?php while($data =	mysqli_fetch_assoc($result)){ 
	   $profit = $data['sellingPrice'] - $data['buyingPrice'];
	?>	
     	<tr>
			<td> <?=$data['name']?> </td>
			<td> <?=$profit?> </td>
			
			<td>
				<a href="edit.php"> EDIT</a> | 
				<a href="delete.php> DELETE</a> 
			</td>
		</tr>
	
		
	<?php } ?>	
		
	</table>
</body>
</html>