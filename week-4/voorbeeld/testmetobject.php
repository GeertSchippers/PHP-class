<?php
$zomaarobject = new \stdClass();
$zomaarobject->voornaam = "frits";
$zomaarobject->achternaam = "go";
$zomaarobject->klas = "deklas";

$myJSON = json_encode($zomaarobject);
echo $myJSON;
