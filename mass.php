<?php
$kilograms = isset($_GET["kilograms"])? $_GET["kilograms"]: 0;

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
       <form method="get">
            <label for="kilograms">Kilograms</label>
            <input type="number" name="kilograms"/>
            <input type="submit">
        </form>
        <form method="get">
        <label for="grams">Grams</label>
            <input type="number" name="grams"/>
            <input type="submit">
        </form>
        <div>
            <label for="grams">Grams</label>
            <input type="number" name="grams"/>
            <p><?php echo $_POST["name"]; ?></p>
        </div>
</div>