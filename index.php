<?php
	include ('includes/functions.php');
    static $totalHand = array();

    function displayFaces() {
        $faces = array();
        for($i = 0; $i < 4; $i++) {
            array_push($faces, "<img src='img/player_faces/$i.png'/>");
        }
        
        return $faces;
    }
    
    function addToHand($hand) {
        global $totalHand;
        $totalHand[] = $hand;
        
    }
    
    function getHand() {
        global $totalHand;
        return $totalHand;
    }

?>
<DOCTYPE! HTML>
<html>
<head>
<title>Lab 2 Team</title>
<link href="CSS/styles.css" rel="stylesheet">
</head>
<body>
<div id="wrapper">
	<h1 id="title">Silver Jack</h1>

	<?php
        $faceArr = displayFaces();
       
        for($i = 0; $i < 4; $i++) {
            echo $faceArr[$i]; // display face
            $hand = generateHand(); // generate the players hand
            $sum = generateTotal($hand); // get the total of the hand
            addToHand($sum);
            echo $sum . "<br/>";
        }
		

	?>


	<footer>
		Created By &copy; Cesaer Galvan, Dale Garcia, Maritza Abzun, Thane Fenton
	</footer>
</div>
</body>
</html>
