<?php

//celsius kelvin
//celsius fahrenheit
$celsius;
$fahrenheit;
$kelvin=1;

function celsiusConversions(int $celsius){
    $fahrenheit = ($celsius * 1.8) + 32; 
    $kelvin = 0;
    return $fahrenheit;
}

?>
<h2>Temperature conversions: </h2>
<label for="celsius">Celsius</label>
<input type="number" id="celsius"/>
<div id="kelvin">Kelvin: <?=$kelvin?></div>
<div class="fahrenheit">Fahrenheit: <?=$fahrenheit?></div>
