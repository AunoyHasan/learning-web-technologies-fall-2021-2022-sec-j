<?php
	session_start();

	if(isset($_POST['submit'])){
		if($_POST['username'] != ""){
			if($_POST['password'] != ""){
				if($_POST['email'] != ""){

					/*
					//$_SESSION['username'] 	= $_POST['username'];
					//$_SESSION['password'] 	= $_POST['password'];
					$user = ['username'=> $_POST['username'], 'password'=> $_POST['password']];
					$_SESSION['user'] = $user;
					//print_r($_SESSION);
					header('location: login.html');
					*/
					
				   // $user = ['username'=> $_POST['username'], 'password'=> $_POST['password']];
			        //$_SESSION['user'] = $user;
					for($i=0; $i<10; $i++){
						$user = ['username'=> $_POST['username'], 'password'=> $_POST['password']];
						//$_SESSION_['i'] = ['username'=> $_POST['username'], 'password'=> $_POST['password']];
			            $_SESSION['user'] = $i;
					}
					header('location: login.html');
					
				}else{
					echo "Invalid email...";
				}	
			}else{
				echo "Invalid password...";
			}
		}else{
			echo "Invalid username...";
		}
	}
?>