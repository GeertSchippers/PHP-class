<!--<script>
    function sendAnswer(){
        var answer = document.getElementById("word").value;
        document.location = "galgje.php?answer="+answer;
    }
</script>-->
<?php
//
//session_start();
//$_SESSION['answer'] = $_GET['answer'];
//
//$answer = $_SESSION['answer'];
//$splitAnswer = str_split($_SESSION['answer']);
//
//for($a = 0; $a < count($splitAnswer); $a++){
//    echo $splitAnswer[$a].'&nbsp;';
//}
//
//echo '<input type=text id=word placeholder="with what word do you wanna play?">';
//echo '<input type=button id=start value=Send onclick=sendAnswer()>';
//echo '<input type=button id=check value=check >';

$answer = 'word';
$geuss = 'z';

$checker = strpos($answer, $geuss);
    

    if ($checker == true){
        echo 'deze zit erin!';
    }else{
        echo 'helaas probeer opnieuw';
    }