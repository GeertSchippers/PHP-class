
<?php
// Onze bankrekening app

$amount = 1000;

$product = 2;
$storting = 2;

$amount = afschrijving($amount, 300);
$amount = afschrijving($amount, 300);
$amount = afschrijving($amount, 300);
$amount = bijschrijving($amount, 6000);

echo "<br>TOTAAL :".$amount;
function afschrijving($amount, $productprice){
    $newamount = $amount - $productprice;
    if($newamount <= totaalCheck()){
        totaalCheck();
    }
    echo "New amount :" . $newamount ."<br>";
    return $newamount;
}

function bijschrijving($amount, $storting){
    $newamount = $amount + $storting;
    echo "New amount : ". $newamount ."<br>";
    return $newamount;
}
function totaalCheck($amount){
    if($amount <= 0){
        echo "STOP JE GEEFT TEVEEL UIT!";
    }
}
?>

