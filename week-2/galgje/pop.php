<?php
    $letterArray = ['e','e','n','d'];
    $geussedArray = ['a','b','c','d','e'];
    $mistakeCounter = 0;
    echo 'Het woord <br>';
    print_r($letterArray);
    echo '<br>De geraade letetrs <br>';
    print_r($geussedArray);
    echo '<Br>Fouten gemaakt!<br>';
    mistake($letterArray, $mistakeCounter, $geussedArray);
    
    function mistake($letterArray, $mistakeCounter, $geussedArray){
        for($l =0;$l < count($geussedArray); $l++){
            if (!in_array($geussedArray, $letterArray)){
                $mistakeCounter++;
            }     
        }
        echo $mistakeCounter;
    }
