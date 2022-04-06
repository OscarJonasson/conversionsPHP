<?php
$grams;
$kilograms;

function toGrams(float $kilograms){
    $grams = $kilograms / 1000;
    return $grams;
}

function toKilos(float $grams){
    $kilograms = $grams * 1000;
    return $kilograms;
}

?>

<div>
    <h2>Mass Conversion</h2>
        <div>
            <label for="kilograms">Kilograms</label>
            <input type="number" id="kilograms"/>
            <p><?php echo $_POST["name"]; ?></p>
        </div>
        <div>
            <label for="grams">Grams</label>
            <input type="number" id="grams"/>
            <p></p>
        </div>
</div>