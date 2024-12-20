<!--
	Из таблицы table1 получить первую строку столбца text
	и изменить во второй таблице table2 значение text на запись из первой таблицы
-->
<?php 
	$connect = mysqli_connect('MySQL-8.2','root','','sam');
	$query = mysqli_query($connect,"SELECT * FROM table1 WHERE id=1");
	$stroka = $query -> fetch_assoc();
	mysqli_query($connect,"UPDATE table2 SET text="$stroka['text']"WHERE id=1");  
?>																