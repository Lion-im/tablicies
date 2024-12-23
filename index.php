<?php
	$connect = mysqli_connect("MySQL-8.2", "root", "", "tablices");
	$query = mysqli_query($connect, "
		SELECT books.id, books.book, authors.author
		FROM books
		INNER JOIN authors ON authors.id = books.author_id
		");
	
	while ($stroka = $query->fetch_assoc()) { ?>
		<h1><?php echo $stroka["author"] ?></h1>
		<h3><?php echo $stroka["book"] ?></h3>

<?php
	}
?>