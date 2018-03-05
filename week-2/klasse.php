<?php

//class student{
//    public $voornaam;
//    public $achternaam;
//    public $leeftijd = "Nog te bepalen"; //default waarde
//
//    function voorstellen(){
//        echo "Hoi, mijn naam is ".$this->voornaam." ".$this->achternaam." en ik ben ".$this->leeftijd." jaar.<br>";
//    }
//}

class broodje{
    public $naam;
    public $broodsoort;
    public $krokantheid;
    public $beleg;
    public $prijs;
    public $happen;
            
    public function verkooppraatje(){
        echo $this->naam." is bereid met ".$this->graansoort." brood en heeft een ".$this->krokantheid."korst,<br> Belegd met ".$this->beleg.". Je kunt hem un kopen voor maar <b>€".$this->prijs."</b> euro.<br><br>";
    }
}