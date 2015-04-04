<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Project list</title>
	<link rel="icon" href="favicon.ico">
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<style>
		html{
			height: 100%;
			margin: 0;
			padding: 0;
		}
		body{
			font-family:arial,"Times New Roman",Bodoni,Garamond,"Minion Web","ITC Stone Serif","MS Georgia","Bitstream Cyberbit";
			background: #185a9d; /* Old browsers */
			background: -moz-linear-gradient(top,  #185a9d 10%, #43cea2 90%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(10%,#185a9d), color-stop(90%,#43cea2)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top,  #185a9d 10%,#43cea2 90%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top,  #185a9d 10%,#43cea2 90%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top,  #185a9d 10%,#43cea2 90%); /* IE10+ */
			background: linear-gradient(to bottom,  #185a9d 10%,#43cea2 90%); /* W3C */
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#185a9d', endColorstr='#43cea2',GradientType=0 ); /* IE6-9 */
		}
		.index-list{
			list-style-type: none;
			-webkit-column-count: 5;
			-moz-column-count: 5;
			column-count: 5;

		}
		.index-list li{
		/*	margin-bottom: 5px;*/
		}
		.index-list a{
			display: block;
			padding: 5px 0;
			font-weight: bold;
			text-decoration: none;
			color: #000;
			line-height: 1.3;
		}
		.index-list a:hover{
			color: #2e2828;
		}
		.sort-list-btn-wrapper ul{
			text-align: center;
			list-style: none;
			margin-bottom: 50px;
		}
		.sort-list-btn-wrapper li{
			display: inline-block;
			vertical-align: middle;
			padding: 0 15px;
		}
		.sort-list-btn-wrapper a{
			display: block;
			padding: 5px 3px;
			text-decoration: none;
			color: #fff;
			-webkit-transition: all 0.3s ease;
			-o-transition: all 0.3s ease;
			transition: all 0.3s ease;
		}
		.sort-list-btn-wrapper a:hover{
			color: #88caf8;
		}
	</style>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinysort/2.1.1/tinysort.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script>
	$('#sort').click(function(){
		tinysort('ul.index-list>li>a');
	})
</script>
</body>
</html>