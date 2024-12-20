<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
  </head>
</html>
<body>
	<?php 
		$connect = mysqli_connect("MySQL-8.2","root","","delete");
		$delete = 'DELETE FROM contacts WHERE id="' . $_GET["id"] . '"';
		mysqli_query($connect,$delete);
		$select = 'SELECT * FROM contacts';
		$query = mysqli_query($connect,$select);	
	?>
	<div class="container">
		<form action="index.php" method="GET">
			<input type="" name="id">
		</form>
	</div>	
	<div>
		<h1>Контакты</h1>
	</div>
	<?php 
		for ($i=0; $i <10 ; $i++) { 
			$res1 = $query -> fetch_assoc();

			echo "<h4>" . $res1["name"] . "</h4>";
			echo "<p>" . $res1["number"] . "</p>";
		}

	?>

</body>
