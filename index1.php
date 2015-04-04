<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Project List</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php
		function dirToOptions($path = __DIR__, $level = 0){
			$items = scandir($path);
			foreach ($items as $item) {
				echo "<li><a href='$item'>$item</a></li>";
			}
		}
		echo '<ul class="index-list">';
		dirToOptions();
		echo '</ul>';
	?>
</body>
</html>