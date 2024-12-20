<!--Вставить в table3 первую строку из таблицы table1-->
<?php 
	$connect = mysqli_connect('MySQL-8.2','root','','sam');
	$query = mysqli_query($connect,"SELECT * FROM table1");
	$stroka = $query ->fetch_assoc();
	mysqli_query($connect,"INSERT INTO table3 (text,number,id)VALUES('{$stroka["text"]}','{$stroka["number"]}','{$stroka["id"]}')");
 ?>