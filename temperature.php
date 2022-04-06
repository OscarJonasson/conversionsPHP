<?php
$celsius=isset($_GET['celsius'])? $_GET['celsius']: 0;
?>

<h2>Temperature conversions: </h2>
<form>
    <label for="celsius">Celsius: </label>
    <input type="number" id="celsius" name="celsius" placeholder="Current temp is 0 °c" method="GET" action="temperature.php"/>
    <input type="submit">
</form>
<div class="celsius"><?="Current celsius is: ". $celsius . " °c"?></div>
<div id="kelvin">Kelvin: <?= $celsius + 273.15 . " K" ?></div>
<div class="fahrenheit">Fahrenheit: <?=(($celsius * 1.8) + 32)." °F"?></div>
