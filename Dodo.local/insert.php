<?php
    $connect = mysqli_connect('MySQL-8.2','root','','Dodo');
    $query = "INSERT INTO cart (name, ingredients, prici, img) 
        VALUES (
            '{$_GET["name"]}',
            '{$_GET["ingredients"]}',
            '{$_GET["prici"]}',
            '{$_GET["img"]}')";

    mysqli_query($connect, $query);

    header('Location: index.php');
?>