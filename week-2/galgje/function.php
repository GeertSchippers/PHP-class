<?php 
    $geussLetter = $_GET['geussLetter'];
//    $geussWord = $_GET['geussWord'];
    if (empty($_SESSION['geussLetters'])){
        $_SESSION['geussLetters']=array();
    }
    
    array_push($_SESSION['geussLetters'], $_GET['geussLetter']);
    
    
    
    $answer = "eend";
    $letterArray = str_split($answer);

    foreach( $letterArray as $letter){
        if (in_array($letter, $_SESSION['geussLetters'])){
            echo " ".$letter." ";
        }else{
            echo " _ ";
        }
    }
   
//        if($geussWord == $answer){
//            echo "Je hebt het woord geraden!";
//        }