<?php

$cor = $_GET['jojo'];

if($cor == 'a1'){
    echo "BOEM".
          "<style>
              #".$cor."{
                background-color: red;
              }
           </style>";
}else{
    echo "plons";
}
?>
