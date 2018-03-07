<html>
    <head>
        <title>galgje</title>
        <script src="script.js"></script>
        <?php include 'function.php';?>
    </head>
    <body>
        <div>
            <p>
                <?php 
                echo $geuss.'<br>'; 
//                print_r($wordArray);
                ?> 
            </p>
        </div>
        <div>
            <input type="text" id="word">
            <input type=button value='check letter'onclick=geussLetter()>
            <input type=button value='check word'onclick=geussWord()>
<!--            <input type=button value=insert onclick=sendAnswer()>-->
        </div>
    </body>
</html>

