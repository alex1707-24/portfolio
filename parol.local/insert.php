<?php 
	$connect = mysqli_connect('MySQL-8.2','root','','parol');
	$query = mysqli_query($connect, "INSERT INTO posts(email,name,username,password) VALUES ('{$_POST["email"]}', '{$_POST["name"]}','{$_POST["username"]}','{$_POST["password"]}')");
	header("location: posts.php?name"."{$_POST["name"]}". "&username" ."{$_POST[""]}")
?>
