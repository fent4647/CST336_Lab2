<?php

/*
 * To change this template use Tools | Templates.
 */

function generateHand(){
    
    $arraySuits = array();
    $arraySuits = array("clubs","diamonds", "hearts", "spades");
    
    $arrayHand = array();
    
    while(count($arrayHand) < 4){
        $card = rand(1,13);

        if(!in_array($card, $arrayHand)){
            $arrayHand[] = $card;
        }
    }
    // display arrayhand
    foreach($arrayHand as $card){
        $suit = array_rand($arraySuits);
        $displaySuit = $arraySuits[$suit];
       echo "<img src='./img/cards/$displaySuit/$card.png'/>";
    }
    return $arrayHand;
}
function generateTotal($arrayHand){
    $total = 50;
    return $total;
}
?>