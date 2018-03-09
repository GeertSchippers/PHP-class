<?php
class gevleugelde{
    public function voorbewegen(vogel $vogel){
        echo $vogel->naam."'s zwemmen";
    }
}

abstract class vogel extends gevleugelde{
    public $naam;
}

class pinquin extends vogel implements bedreigt{
    public function bedreigt(){
        echo ' en is een bedreigde diersoort!';
    }
    
}

interface bedreigt{
    public function bedreigt();
}

$keizerpinquin = new pinquin();
$keizerpinquin->naam = 'Keizer Pinquin';
$keizerpinquin->voorbewegen($keizerpinquin);
$keizerpinquin->bedreigt();