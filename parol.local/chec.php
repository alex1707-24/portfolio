<?php 
	$connect = mysqli_connect('MySQL-8.2','root','','parol');
	$query = mysqli_query($connect, "SELECT * FROM posts 
		WHERE email = '{$_POST["email"]}' AND password = '{$_POST["password"]}'");
	$result = $query -> fetch_assoc();
	if(mysqli_num_rows($query)==0){
		header("Location: auto.php?error=Нет такого пользователя");
	} else {
		header("Location: posts.php?name". $result["name"]. "&username=".$result["username"]);
	}
?>