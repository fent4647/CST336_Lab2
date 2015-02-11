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
    

    function findWinner($totalHands) {
        $max = abs(($totalHands[0] - 42));
        $loc = 0;
        for($i = 0; $i < count($totalHands); $i++) {
            if($max <= abs($totalHands[$i] - 42)) {
                $max = $totalHands[$i];
                $loc = $i;
            }
        }
        
        switch($loc) {
            case 0:
                return "Maritza";
                break;
            case 1:
                return "Cesaer";
                break;
            case 2:
                return "Dale";
                break;
            case 3:
                return "Thane";
                break;
            default:
                echo "No Won is a Winner";
        }
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
            addToHand($sum); // add to the array hand of totals
            echo "<span>" . $sum . "</span><br/>"; // print the total
        }

	?>

    <p>And the Winner Is : <p>
    <?= findWinner(getHand()); ?>

	<footer>
		Created By &copy; Cesaer Galvan, Dale Garcia, Maritza Abzun, Thane Fenton
	</footer>
</div>
</body>
</html>
