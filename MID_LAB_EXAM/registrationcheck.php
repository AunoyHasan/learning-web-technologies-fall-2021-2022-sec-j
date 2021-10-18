<?php
	session_start();
	
	if(isset($_POST['submit'])){
		if($_POST['id'] != ""){
			if($_POST['password'] != ""){
				if($_POST['confirmpassword'] != ""){
				    if($_POST['name'] != ""){
						$myfile = fopen('user.txt', 'a');
						$user = $_POST['id']."|".$_POST['password']."|".$_POST['name']."\r\n";
					    fwrite($myfile, $user);
					    fclose($myfile);

					    header('location: login.html');
					}else{
						echo "Invalid name";
					}
			    }else{
					echo "Invalid confirm password";
				}
			}else{
				"Invalid password";
			}
		}else{
			echo "Invalid ID...";
		}	
	}
?>