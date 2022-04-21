<?php
$celsius=isset($_GET['celsius'])? $_GET['celsius']: 0;

function celsiusFahr(int $celsius=0){ 
    $fahr = (($celsius * 1.8) + 32);
    echo $fahr . "°F";
}

function celsiusKelv(int $celsius=0){
    $kelv = (($celsius + 273.15));
    echo $kelv . " K";
}


?>

<h2>Temperature conversions: </h2>
<form  method="GET" action="index.php">
    <label for="celsius">Celsius: </label>
    <input type="number" id="celsius" name="celsius" placeholder="Insert temperature"
    required/>
    <input type="submit">
</form>
<div class="celsius"><?="Current celsius is: ". $celsius . " °C"?></div>
<div id="kelvin">Kelvin: <?= celsiusKelv($celsius) ?></div>
<div class="fahrenheit">Fahrenheit: <?= celsiusFahr($celsius)?></div>
