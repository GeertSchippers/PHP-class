<?php
 

 
function recursie($num){

    echo $num, '<br>';

    if($num < 20){
        return recursie($num + 1);
    }
}
 


recursie(1);