<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Danh sach hoc sinh</title>
</head>
<body>
	<h2>Danh sach hoc sinh</h2>
	<?php 
	// for ($i=1; $i < sizeof($bookList); $i++) { 
	// 	echo "<tr>".$i."<a href='?sid=".$bookList[$id]->id."></a>".'<td>'.$bookList[$id]->title.'</td>'."<td>".$bookList[$id]->author."</td><td>".$bookList[$id]->description."</td></tr>";
	// }
	?>
	<table>
		<tbody><tr><td>id</td><td>Title</td><td>Author</td><td>Description</td></tr></tbody>
		<?php 
		$i=1;
		foreach ($bookList as $title => $book)
		{
			echo '<tr><td>'.$i++.'</td><td><a href="?sid='.$book->id.'">'.$book->title.'</a></td><td>'.$book->author.'</td><td>'.$book->description.'</td></tr>';
		}

		?>
	</table> 
	<br>
	<p><a href="../index.php">Home page</a></p>
</body>
</html>