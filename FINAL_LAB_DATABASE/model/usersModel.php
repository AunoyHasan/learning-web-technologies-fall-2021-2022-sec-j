<?php
    require_once('db.php');
    
	function validate($username, $password){
		$con = getConnection();
		$sql = "select * from users where username='{$username}' and password = '{$password}'";
		
		$result = mysqli_query($con, $sql);
		$data = mysqli_fetch_assoc($result);
		
		if($data != null){
			return true;
		}else{
			return false;
		}
	}
	
	
	function addUsers($user){
		$con = getConnection();
	    $sql = "insert into users values ('', '{$user['username']}', '{$user['password']}', '{$user['email']}', '{$user['type']}')";
		if(mysqli_query($con, $sql)){
		    header('location: ../views/login.html');
		}else{
			echo "try again...";
		}
	}
	
	function getAllUsers(){
		$con = getConnection();
	    $sql = "select * from users";
		$result = mysqli_query($con, $sql);  
		return $result;
	}
	
	function getUserById($id){
		$con = getConnection();
	    $sql = "select * from users where is={$id}";
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
	
	
	
	
	
	
?>