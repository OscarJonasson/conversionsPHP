<?php
$celsius= isset($_GET['celsius'])? $_GET['celsius']: 0;
?>

<h2>Temperature conversions: </h2>
<form>
    <label for="celsius">Celsius: </label>
    <input type="number" id="celsius" name="celsius" placeholder="Current temp is 0 °c"/>
    <input type="submit" onclick="celsiusConversion()">
</form>
<div class="celsius"><?="Current celcius is: ". $celsius . " °c"?></div>
<div id="kelvin">Kelvin: <?= $celsius + 273.15 . " K" ?></div>
<div class="fahrenheit">Fahrenheit: <?=(($celsius * 1.8) + 32)." °F"?></div>
