<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Project list</title>
	<link rel="icon" href="favicon.ico">
	<meta name="viewport" content="width=device-width initial-scale=1.0">
</head>
<?php
$rootDir = opendir(".");
$dirArray = [];
while($element = readdir($rootDir)) {
  if (is_dir($element) && (substr($element, 0, 1) != ".")) {
	$dirArray[] = $element;
  }
}



closedir($rootDir);
$projectCount = count($dirArray) ;
if ($projectCount > 0) { sort($dirArray); }
?>
<body>
<div class="main-container">
	<span> <?php echo ($projectCount > 0)? $projectCount : "No"; ?> Projects</span>
	<div class="sort-list-btn-wrapper">
		<ul id="sort">
			<li><a href="#0">By name</a></li>
			<li><a href="#0">By data modifie</a></li>
		</ul>
	</div>
	<ul class="index-list">
	<?php if ($projectCount > 0) : ?>
		<?php foreach ($dirArray as $dir):?>
		<li><a href="<?php echo $dir ;?>"><?php echo $dir ;?></a></li>
		<?php endforeach; ?>
	<?php else: ?>
		<li><a href="#">Nothing here, start adding projects to your server.</a></li>
	<?php endif; ?>
	</ul>
</div>
</body>
</html>
