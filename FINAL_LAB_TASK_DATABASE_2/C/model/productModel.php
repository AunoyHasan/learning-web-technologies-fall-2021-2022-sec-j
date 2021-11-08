<?php
    require_once('db.php');
	
	function editProduct($product){
		$con = getConnection();
		$sql= "update users set username='{$product['name']}', password='{$product['buyingPrice']}', email='{$product['sellingPrice']}' where id={$product['id']}";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}
	
	
?>