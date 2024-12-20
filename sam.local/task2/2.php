<!--
	Обновить всем товарам цену в таблице table2: установить 1000
-->
<?php 
	$connect = mysqli_connect('MySQL-8.2','root','','sam');
	$query = mysqli_query($connect,"UPDATE table2 SET price=1000");
 ?>