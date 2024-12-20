<!--
	Сделать вывод второй строки number из таблицы Table1
	и прибивать к нему 50
 -->
<?php 
	$connect = mysqli_connect('MySQL-8.2','root','','sam');
	$query = mysqli_query($connect, "SELECT * FROM table1 WHERE id = 2");
	$stroka = $query -> fetch_assoc();
	$donate = $stroka["number"]+50;
	mysqli_query($connect,"UPDATE table1 SET number = $donate WHERE id =2");	 		
 ?>