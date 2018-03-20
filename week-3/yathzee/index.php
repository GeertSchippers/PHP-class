<?php
    $dice = [1,2,3,4,5,6];
    $session_start;

    $lockedDice = $_GET['Lockeddice'];

    echo 'De dice <br>';
    print_r($dice);
    echo '<br>';
    print_r(explode(",",$lockedDice));
?>
<html>
    <head>
        <title>Yathzee</title>
    </head>
    <style>
        .dice {
            display: inline-block;
            margin: 5px;
            line-height:1;
            text-align: center;
            height: 50px;
            width: 50px;
            border: 3px solid black;
            border-radius: 10px;
        }
    </style>
    <script>
        function locklDices (){
            var ld = document.getElementById("ld").value;
            document.location=""+"?Lockeddice="+ld;
        }
        function rollDices(){
            document.location="";
        }
    </script>
    <div>
        <?php

            for($d =0;$d < 5; $d++){
                if($lockedDice[4] == "y"){
                    echo '<div class="dice" id=dicey><p>'.$dice[0].'</p></div>';

                }else{
                    echo '<div class="dice" id=dicen><p>'.array_rand($dice,1).'</p></div>';

                }
            }

        ?>
    </div>
    <input type="input" id="ld" >
    <input type="submit" value="lock dice" onclick="lockDices()">
    <input type="submit" value="Roll dice" onclick="rollDices()">
</html>
