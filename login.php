<?php
require 'connect_to_db.php';
session_start();
$un="";
$pass="";
$count=0;


if(!empty($_POST["submit"])){
			// if(!empty($_POST["email"])){
			// 	$email=$_POST["email"];
			// 	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			// 	echo "Invalid email format"; 
			// 	die();
			// 	}else{
			// 		$count++;
			// 	}
			// }
			if(!empty($_POST["username"])){
				$un=$_POST["username"];
				$count++;
				}
			
			if(!empty($_POST["password"])){
				$pass=$_POST["password"];
				$count++;
				}
			}

			
if($count==2){
		$sql = mysql_query("SELECT * FROM user WHERE username='$un' AND password='$pass'");	
		
		$result=mysql_num_rows($sql);

		
		if ($result==1) {
			echo "welcome niggah";
			// $_SESSION["e"]=$email;
			// header('Location: ../admin/index.php');
		}else{
			echo "Something went wrong or check your Status";
			//$_SESSION["alert"]="Invalid email and password";
			//header('Location: login.php');
			
		}
		}

?>