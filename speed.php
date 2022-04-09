<?php

$kmh = isset($_GET["kmh"])? $_GET["kmh"]: 0;

$kmh;
$ms;
$knots;



function kmhToMs(int $kmh = 0) {
    $ms = (5 / 18) * $kmh;
    return $ms;
}

function kmhToKnots(int $kmh = 0) {
    $knots = $kmh * 0.539957;
    return $knots;
}



?>

<h2>Speed conversions</h2> 
<form action="speed.php" method="get">
    <label for="speed">Speed (km/h):</label>
    <input type="number" name="kmh" placeholder="Insert speed here"> <br> 
    <input type="submit">
</form>
    <div class="ms">m/s: <?=kmhToMs($kmh) ?></div>
    <div class="knots">Knots: <?=kmhToKnots($kmh) ?></div>
    
