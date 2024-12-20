<!--
	Из таблицы table1, сделать вывод столбца text, только второй строки
-->
<?php 		
	$connect = mysqli_connect('MySQL-8.2','root','','sam');
	$query = mysqli_query($connect,"SELECT * FROM table1 WHERE id=2");
	$stroka = $query -> fetch_assoc();
	echo $stroka["text"]
 ?>

