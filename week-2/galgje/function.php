<?php 
    $geussLetter = $_GET['geussLetter'];
    $geussWord = $_GET['geussWord'];
    
    $answer = "eend";    
    $letterArray = str_split($answer);

//    function checkLetter ($letterArray, $geussLetter){
        foreach( $letterArray as $letter){
            if ($geussLetter == $letter){
                echo $letter." ";
            }else{
                echo " _ ";
            }
        }
//    }
//    function checkWord($letterArray, $geussLetter){
        if($geussWord == $answer){
            echo "Je hebt het woord geraden!";
        }
//    }