<?php
$kilograms = isset($_GET["kilograms"])? $_GET["kilograms"]: 0;
$grams = isset($_GET["grams"])? $_GET["grams"]: 0;

$grams;
$kilograms;

function toGrams(float $kilograms = 0){
    $grams = $kilograms * 1000;
    return $grams;
}

function toKilos(float $grams = 0){
    $kilograms = $grams / 1000;
    return $kilograms;
}

?>

<div>
    <h2>Mass Conversion</h2>
       <form method="get">
            <label for="kilograms">Kilograms</label>
            <input type="number" name="kilograms"/>
            <input type="submit">
        </form>
        <p>Grams: <?= toGrams($kilograms) ?></p>
        <form method="get">
        <label for="grams">Grams</label>
            <input type="number" name="grams"/>
            <input type="submit">
        </form>
        <p>Kilograms: <?= toKilos($grams) ?></p>
</div>