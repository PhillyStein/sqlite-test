<!DOCTYPE html>
<html lang="en">
<head>
	<title>SQLite Test</title>
</head>
<body>
	<h1>Testing...</h1>
	<!-- Connect to the database -->
	<?php
		$pdo = new PDO('sqlite:books.db');

		$statement = $pdo->query("SELECT * FROM books WHERE LOWER(title) LIKE lower('%HARRY POTTER%')");

		while($row = $statement->fetch(\PDO::FETCH_ASSOC))
		{
			echo "<p>" . htmlspecialchars($row['title']) . " | " . 
			htmlspecialchars($row['author']) . " | " .
			htmlspecialchars($row['genre']) . " | " . 
			htmlspecialchars($row['age']) . " </p>"; 
		}
	?>
	<!-- Reading Data from the Table 
	<?php
		$sql='SELECT * FROM table1 WHERE genre IS "fantasy"';
		$result = $db->query($sql) or die("Query failed");
		echo "<p>associative array: array uses named field</p>";
		while ($row = $result->fetchArray())
		{
			echo "<p>" . htmlspecialchars($row['title']) . " | " . 
			htmlspecialchars($row['author']) . " | " .
			htmlspecialchars($row['genre']) . " | " . 
			htmlspecialchars($row['age']) . " </p>"; 
		}
	?>
	<?php
		$statement = $pdo->query("SELECT * FROM books WHERE genre IS 'fantasy'");

		$rows = $statement->fetchAll(PDO::FETCH_ASSOC);

		echo "<pre>";
		print_r($rows);
		echo "</pre>";
	?> -->
</body>
</html>