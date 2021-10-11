<?php
	session_start();

	if(isset($_POST['submit'])){
		if($_POST['username'] != ""){
			if($_POST['password'] != ""){
				if($_POST['email'] != ""){
					if($_POST['confirmpassword'] != ""){
						
						
						if($_POST['confirmpassword'] == $_POST['password']){
							
							//$_SESSION['username'] 	= $_POST['username'];
					        //$_SESSION['password'] 	= $_POST['password'];
					        $user = ['username'=> $_POST['username'], 'password'=> $_POST['password']];
					        $_SESSION['user'] = $user;
					        //print_r($_SESSION);
					        header('location: login.html');
						}else{
							echo "Password are not correct";
						}
				    }else{
					    echo "Invalid confirmpassword...";
					}
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