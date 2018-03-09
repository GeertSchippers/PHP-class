<?php 
    $session_start;
    $answer = "eend";
    $letterArray = str_split($answer);
    
    $geussLetter = $_GET['geussLetter'];
    
    $_SESSION['geussedLetters']= [];
    array_push($_SESSION['geussedLetters'], $_GET['geussLetter']);
//        $_SESSION['geussedLetters'] = ['a','b','c','d','e','n'];
    $geussedArray = $_SESSION['geussedLetters'];
        
    $mistakeCounter = 0;
    
    
    
  
    
    foreach( $letterArray as $letter){
        if (in_array($letter, $_SESSION['geussedLetters'])){
            echo " ".$letter." ";
        }else{
            echo " _ ";
        }
    }
    function mistake($letterArray, $mistakeCounter, $geussedArray){
        $dif = array_diff($geussedArray, $letterArray);
        for($l =0; $l < count($dif); $l++){
                $mistakeCounter++;   
        }
        echo $mistakeCounter;
    }

     
//   $_SESSION['geussedLetters']= $geussedArray;