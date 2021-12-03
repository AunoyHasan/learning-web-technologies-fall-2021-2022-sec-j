<?php 

	$json = json_decode($_REQUEST['data']);

	$data = ['name'=>'alamin', 'age'=>11, 'email'=>'alamin@aiub.edu'];
	echo json_encode($data);
?>