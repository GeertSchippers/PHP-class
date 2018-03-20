<?php
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

$plofkip = new broodje(3);
    $plofkip->naam = "Broodje plof kip";
    $plofkip->graansoort = "Tarwe";
    $plofkip->krokantheid = "krokante";
    $plofkip->beleg = "met een laag authentieke plofkip";
    $plofkip->happen = 6;
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