<?php
    require_once('db.php');
	
	function deleteUser($id){
		$con = getConnection();
		$sql = "delete from product where id={$id}";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}
	
	
?>