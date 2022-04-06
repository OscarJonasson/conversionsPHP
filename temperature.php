<?php

$celsius=isset($_GET['celsius'])? $_GET['celsius']: 0;


// if(isset($_GET['celsius'])){
//     $celsius = $_GET['celsius'];
// }else{
//     $celsius = 0;
// }

function celsiusFahr(int $celsius){ 
    $fahr = (($celsius * 1.8) + 32);
    echo $fahr;
}

function celsiusKelv(int $celsius){ 
    $kelv = (($celsius + 273.15));
    echo $kelv;
}


?>

<h2>Temperature conversions: </h2>
<form  method="GET" action="temperature.php">
    <label for="celsius">Celsius: </label>
    <input type="number" id="celsius" name="celsius" placeholder="Current temp is 0 °c"/>
    <input type="submit" onclick="">
</form>
<div class="celsius"><?="Current celsius is: ". $celsius . " °c"?></div>
<div id="kelvin">Kelvin: <?= celsiusKelv($celsius) . " K" ?></div>
<div class="fahrenheit">Fahrenheit: <?= celsiusFahr($celsius) . "°F"?></div>
