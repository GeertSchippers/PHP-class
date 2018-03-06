<script>
    function opslaan(){
        var naam = document.getElementById("verander").value;
        document.location = "object.php?verander="+naam;
    }
</script>

<html>
    <input type=text id=verander value=verander>
    <input type=button value=opslaan onclick=opslaan()><br><br><br>
</html>

<?php

//1x class
//3x opject
//2x methoden

//class aanmaken met properties voor de objecten
class koekje{
    public $id;
    public $naam;
    public $prijs;
    public $extras;
    public $happen;
    public $verstopplek;
    
    public function overzicht(){
        echo 'id: '.$this->id.'<br>'.
             'naam: '.$this->naam.'<br>'.
             'prijs: '.$this->prijs.'<br>'.
             'extras: '.$this->extras.'<br>'.
             'happen: '.$this->happen.'<br>'.
             'verstopplek: '.$this->verstopplek.'<br>';
    }
}
//opmaak objecten
$bitterkoekje = new koekje;
    $bitterkoekje->id=1;
    $bitterkoekje->naam='bitterkoekje';
    $bitterkoekje->prijs=3.00;
    $bitterkoekje->extras='chocolade';
    $bitterkoekje ->happen=3;
    $bitterkoekje->verstopplek='boven op de kast!';
    
$stroopwaffel = new koekje;
    $stroopwaffel->id=3;
    $stroopwaffel->naam='stroopwaffel';
    $stroopwaffel->prijs=2.50;
    $stroopwaffel->extras='XL';
    $stroopwaffel->happen=7;
    $stroopwaffel->verstopplek='in de koelkast achter de groente!';
  
$eierkoek = new koekje;
    $eierkoek->id=2;
    $eierkoek->naam='eierkoek';
    $eierkoek->prijs=1.50;
    $eierkoek->extras='naturel';
    $eierkoek->happen=5;
    $eierkoek->verstopplek='in het kippenhok!';


$koekjes = [$bitterkoekje, $stroopwaffel,  $eierkoek];

$session_start;
$S_SESSION['verander'] = $_GET['verander'];

$eierkoek->naam = $S_SESSION['verander'];

$eierkoek->overzicht();
