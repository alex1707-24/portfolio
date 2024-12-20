<?php
    $connect = mysqli_connect('MySQL-8.2','root','','obedinit');
    $query = mysqli_query($connect,"SELECT books.id, books.book, authors.author
        FROM books
        INNER JOIN authors ON authors.id = books.authors_id");
?>
<?php while ($books = $query->fetch_assoc()){?>
    <div>
        <h3><?php echo $books['book'] ?></h3>
        <p><?php echo $books['author'] ?></p>
    </div>

<?php } ?>