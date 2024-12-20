<!--В table2 все вещи у которых gender мужской вычти по 500 у каждого товара-->
<?php 
	$connect = mysqli_connect('MySQL-8.2','root','','sam');
	$query = mysqli_query($connect,"SELECT * FROM table2 WHERE gender="мужской"");
	$stroka = $query -> fetch_assoc();
 ?>