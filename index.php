<?php
	include ('includes/functions.php');
    
    function displayFaces() {
        $faces = array();
        for($i = 0; $i < 4; $i++) {
            array_push($faces, "<img src='player_faces/$i.png'/>");
        }
        
        return $faces;
    }
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
        $faceArr = displayFaces();
        
        for($i = 0; $i < 4; $i++) { $hand = generateHand(); }
		



		$total = generateTotal($hand);

	?>


	<footer>
		Created By &copy; Cesaer Galvan, Dale Garcia, Maritza Abzun, Thane Fenton
	</footer>
</div>
</body>
</html>
