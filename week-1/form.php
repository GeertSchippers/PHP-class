<?php
$type = ['text','checkbox','button'];
$name = ['firstname','secondname','check','submit'];
$value =['firstname','secondname','nieuwsbrief','submit'];

for($i = 0; $i < $_GET['aantal']; $i++ ){
   echo '<input type="'.$type[0].'" name="'.$name[0].'" value="'.$value[0].'">';
   echo '<input type="'.$type[0].'" name="'.$name[1].'" value="'.$value[1].'">';
   echo '<input type="'.$type[1].'" name="'.$name[3].'" value="'.$value[3].'"><br>'; 
}