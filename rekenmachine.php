<?php
// getal_1=10&getal_2=20&optellen
session_start();

$getal_1 = $_GET['getal_1'];
$getal_2 = $_GET['getal_2'];
$rekenen = $_GET['rekenen'];

echo "getal 1 = ".$getal_1.'<br>';
echo "getal 2 = ".$getal_2.'<br>';
echo "wat gaan we ermee doen? ".$rekenen.'<br>';

function rekenen($getal_1, $getal_2, $rekenen){
    if($rekenen == 'optellen'){
        $uitkomst = $getal_1 + $getal_2;
        
        echo 'de uitkomst ='.$uitkomst;
        
    }elseif($rekenen == 'aftreken'){
        $uitkomst = $getal_1 - $getal_2;
        
        echo 'de uitkomst ='.$uitkomst;
    }
}
