<?php
//BLAUW = ((X-2)*(X-2)) - 3
//ROOD = (-1/3 * X) + 4
//X0 = LINKS
//X1000 = RECHTS
//LINKS = ROOD > BLAUW
//RECHTS = BLAUW > ROOD
//
//(RECHTS-LINKS)/2 +LINKS = CHECK    
//IS BLAUW > ROOD
//DAN WORD CHECK DE NIEUWE RECHTS
//ZO NIET WORD CHECK DE NIEUWE LINKS
//REPEAT TOTDAT HET VERSCHIL TUSSEN ROOD == BLAUW BINNEN DE TOLERANTIE VALT

//---------------------- | START  | ----------------------
$left = 0;
$right = 1000;
$check = ($right-$left)/2 +$left;
$blue = (($check-2)*($check-2))-3;
$red = ( -0.33 * $check) + 4;
$tolerantie = 0.00001;

echo 'left ->'.$left.'<br>right-> '.$right;
echo '<br>check->'.$check;
echo '<br>blue ->'.$blue.'<br>red-> '.$red;
echo '<hr>';
//---------------------- |  EERSTE CHECK  | ----------------------
if( $blue > $red){
    $right = $check;
}elseif ($blue < $red){
    $left = $check;
}else{
    echo 'klaar';
}
//---------------------- |  UITSLAG CHECK-1  | ----------------------
$check = ($right-$left)/2 +$left;
$blue = (($check-2)*($check-2))-3;
$red = ( -0.33 * $check) + 4;
echo 'left ->'.$left.'<br>right-> '.$right;
echo '<br>check->'.$check;
echo '<br>blue ->'.$blue.'<br>red-> '.$red;
echo '<hr>';

