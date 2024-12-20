<!--
	В table2 все вещи у которых gender женский поменять текст на "крутая вещь"
-->
<?php 
	$connect = mysqli_connect('MySQL-8.2','root','','sam');
	$query = mysqli_query($connect,"UPDATE table2 SET text='крутая вешь' WHERE gender='женский'");
 ?>