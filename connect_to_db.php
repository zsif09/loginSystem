<?php 
$host='localhost';
$user='root';
$pass='';
$db='logintest';
$error='error';

if(@mysql_connect($host, $user, $pass) && @mysql_select_db($db)){
	
} else {
	die ($error);
}

 

?>