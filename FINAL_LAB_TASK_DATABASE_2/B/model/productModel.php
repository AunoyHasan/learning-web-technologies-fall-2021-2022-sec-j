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
	
	/*
	function getUserById($id){
		$con = getConnection();
	    $sql = "select * from users where id={$id}";
		$result = mysqli_query($con, $sql);  
		$data = mysqli_fetch_assoc($result);
		return $data;
	}
	
	function editUser($user){
		$con = getConnection();
	    $sql = "update users set username='{$user['username']}', 
		            password='{$user['password']}', 
					email='{$user['emal']}', 
					type='{$user['type']}'  
				";
		if(mysqli_query($con, $sql)){
		    return true;
		}else{
			return false;
		}
	}
	
	function showById($id){
		$con = getConnection();
	    $sql = "select * from users where id = {$id}";
		if(mysqli_query($con, $sql)){
		    return true;
		}else{
			return false;
		}
	}
	
	function deleteUser($id){
		$con = getConnection();
	    $sql = "delete from users where id = {$id}";
		if(mysqli_query($con, $sql)){
		    return true;
		}else{
			return false;
		}
	}
	
	*/
?>