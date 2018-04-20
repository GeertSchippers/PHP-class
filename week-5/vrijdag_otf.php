<?php
//  4 letter woorden
//  4 bit comandos => 0 of 1
//  tip : controller bits 
// paariteit: als het even is hoef ik niks toe te voegen.

$msg = [1,1,1,0];
//      0,1,2,3
function maakControle($msg){
    $ctrl1 = $msg[0]+$msg[1]+$msg[3]; 
    $ctrl2 = $msg[2]+$msg[3]+$msg[1];
    $ctrl3 = $msg[0]+$msg[2]+$msg[3];
    
    if ($ctrl1 % 2 == 0){
        array_push($msg, 0);
    }else{
        array_push($msg, 1);
    }
    if ($ctrl2 % 2 == 0){
        array_push($msg, 0);
    }else{
        array_push($msg, 1);
    }
    if ($ctrl3 % 2 == 0){
        array_push($msg, 0);
    }else{
        array_push($msg, 1);
    }
    print_r($msg);
}
echo 'de verzonden ';
maakControle($msg);
echo'<br>';
$msg = [1,1,1,0,0,0,1];
//      0,1,2,3,4,5,6
echo'de ontvangen ';
print_r($msg);
echo'<br>';

function controleerCtrl($msg){
   $ctrl1 = $msg[0]+$msg[1]+$msg[3]; 
   $ctrl2 = $msg[2]+$msg[3]+$msg[1];
   $ctrl3 = $msg[0]+$msg[2]+$msg[3];
   if($ctrl1 % 2 == 0 && $msg[4] == 0 || $ctrl1 % 2 == 2 && $msg[4] == 1 ){
       echo 'true ';
   }else{
       echo 'false ';    
   }
   if($ctrl2 % 2 == 0 && $msg[5] == 0 || $ctrl2 % 2 == 2 && $msg[5] == 1 ){
       echo 'true ';  
   }else{
       echo 'false ';
   }
   if($ctrl3 % 2 == 0 && $msg[6] == 0 || $ctrl3 % 2 == 1 && $msg[6] == 1 ){
       echo 'true ';
   }else{
       echo 'false ';
   }
//   echo'<br> de oplossing ';
//   print_r($msg);
}
controleerCtrl($msg);