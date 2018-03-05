<?php
include 'klasse.php';

//$student1 = new student(); //constructor
//    $student1->voornaam = "Alexander"; //properties
//    $student1->achternaam = "Lexis";
//    $student1->leeftijd = 29;
//
//$student2 = new student();
//    $student2->voornaam = "Steven";
//    $student2->achternaam = "Visser";
//    $student2->leeftijd = 30;
//
//
//$student1->voorstellen();
//$student2->voorstellen();
//
//    $studenten =[$student1, $student2]; //objecten kunnen ook in een Array
//    
//    function administreren($destudent){
//        echo "De student ".$destudent->voornaam." is geadminstreerd";
//    }
//    
//    administreren($student2);
//    
//    for($s = 0; $s < count($studenten); $s++){ //De variabele s staat gelijk aan 0. Zolang s kleiner is dan het aantal studenten (Dit word getelt door de count();. na het doorlopen van de loop die er 1 bij s.
//        $studenten[$s]->voorstellen();
//    }
//    
//    foreach($studenten as $student){ //for each loop versie
//        $student->voorstellen();
//    }

$plofkip = new broodje(3);
    $plofkip->naam = "Broodje plof kip";
    $plofkip->graansoort = "Tarwe";
    $plofkip->krokantheid = "krokante";
    $plofkip->beleg = "met een laag authentieke plofkip";
    $plofkip->happen = 9;
    $plofkip->prijs = 3;

$sandswitch = new broodje();
    $sandswitch->naam = "Sandswitch";
    $sandswitch->graansoort = "Volkoren";
    $sandswitch->krokantheid = "zachte";
    $sandswitch->beleg = "met tomaat, kaas, ham";
    $sandswitch->happen = 9;
    $sandswitch->prijs = 3.95;    

$broodjes = [$plofkip, $sandswitch];
    
function broodjekopen($broodjes){
    for($b = 0; $b < count($broodjes); $b++){
       $broodjes[$b]->verkooppraatje();

    }
}

function broodjeEten($broodjes){
    for($b =0; $b < $broodjes->happen; $b++){
        echo 'nom <br>';
    }
    echo 'en nu is je buikje vol!';
}

broodjekopen($broodjes);

broodjeeten($plofkip);