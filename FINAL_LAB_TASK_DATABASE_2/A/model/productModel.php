<?php
    require_once('db.php');
	
	function addProducts($product){
		$con = getConnection();
	    $sql = "insert into product values ('', '{$product['name']}', '{$product['buyingPrice']}', '{$product['sellingPrice']}')";
		if(mysqli_query($con, $sql)){
		    header('location: ../views/productlist.php');
		}else{
			echo "try again...";
		}
	}
	
	function getAllProducts(){
		$con = getConnection();
	    $sql = "select * from product";
		$result = mysqli_query($con, $sql);  
		return $result;
	}
	
	
?>