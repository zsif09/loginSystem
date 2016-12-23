<?php
require 'connect_to_db.php';

if(isset($_POST["submit"])){
    $first=$_POST["first"];
    $last=$_POST["last"];
    $un=$_POST["username"];
    $pass=($_POST["password"]);
}


// echo $first;
// echo $last;
// echo $un;
// echo $pass;

	$sql = "INSERT INTO `user`(`first`, `last`, `username`, `password`) VALUES ('$first','$last','$un','$pass')";
	$result=mysql_query($sql);
    header('Location: ../loginSystem/index.php');
 ?>