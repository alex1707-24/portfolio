<!--
	Когда страница перезагружается вторая запись number из таблицы table1 увеличивается на 50
-->
<?php 
	$connect = mysqli_connect('MySQL-8.2','root','','sam');
	$query = mysqli_query($connect, "SELECT * FROM table1 WHERE id = 2");
	$stroka = $query -> fetch_assoc();
	$number = $stroka["number"]+50;
	mysqli_query($connect,"UPDATE table1 SET number = $number WHERE id =2");
 ?>