<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>chi tiet Book</title>
</head>
<body>
	<h2>chi tiet Book</h2>
	<?php 
	echo "<p><b>".$bookDetail->id."</p></b>";
	echo "<p><b>".$bookDetail->title."</p></b>";
	echo "<p><b>".$bookDetail->author."</p></b>";
	echo "<p><b>".$bookDetail->description."</p></b>";
	?>

	<p><a href="javascript:history.back()">Back</a></p>

</body>
</html>

