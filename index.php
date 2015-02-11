<?php
	include ('includes/functions.php');

?>
<DOCTYPE! HTML>
<html>
<head>
<title>Lab 2 Team</title>
<link href="CSS/style.css" rel="stylesheet">
</head>
<body>
<div id="wrapper">
	<h1 id="title">Silver Jack</h1>

	<?php
		$hand = generateHand();
		$total = generateTotal($hand);

	?>


	<footer>
		Created By &copy; Cesaer Galvan, Dale Garcia, Maritza Abzun, Thane Fenton
	</footer>
</div>
</body>
</html>
