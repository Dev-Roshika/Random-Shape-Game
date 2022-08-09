<html>
<head></head>
<body>
	<center>
	<h2>Random Shape Game</h2>
	<div style = "height:350px"> <?php
	$shapes = array("circle.jpg","square.jpg","heart.jpg","star.jpg");
	
	if(isset($_GET["shape"])){
		echo "<img src = sqimg\\".$_GET['shape'].">";
	}
	?>
	</div>
	<p>
		<h1><a href="imgchange.php?shape=<?php echo $shapes[array_rand($shapes,1)];
		?>">
		<?php if(isset($_GET["shape"])) {echo "change shape";}
		else {echo "Create shape";}?>
		</a></h1>
	</p>
	</center>
</body>
</html>