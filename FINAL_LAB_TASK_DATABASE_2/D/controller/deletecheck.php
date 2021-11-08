<?php
	session_start();
	require_once('../model/productModel.php');

	if(isset($_POST['submit'])){
		
		$name = $_POST['name'];
		$buyingPrice = $_POST['buyingPrice'];
		$sellingPrice = $_POST['sellingPrice'];
		
		if($_POST['name'] != ""){
			if($_POST['buyingPrice'] != ""){
				if($_POST['sellingPrice'] != ""){

                   
					$product = ['name' => $name, 'buyingPrice'=>$buyingPrice, 'sellingPrice'=>$sellingPrice];
					
					$status = addProducts($product);
					
					if($status){
						header('location: ../views/productlist.php');
					}else{
						echo "try again...";
					}
				
				}else{
					echo "Invalid selling price...";
				}	
			}else{
				echo "Invalid buying price...";
			}
		}else{
			echo "Invalid product name...";
		}
	}
?>