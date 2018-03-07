<?php 
    $geuss = $_GET['geuss'];
    
    $answer = 'word';
    
    
    $wordArray = str_split($answer);


    if (in_array($geuss, $wordArray)) {
        echo "yes!";
    }else{
        echo "nope";
    }