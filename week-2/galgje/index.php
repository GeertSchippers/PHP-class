<html>
    <head>
        <title>galgje</title>
        <script src="script.js"></script>
        
    </head>
    <body>
        <div>
                <?php 
                    include 'function.php';
                    echo '<br><br>het woord:<br>';
                    print_r($letterArray);
                    echo '<br> de geprobeerde letters:<br>';
                    print_r($geussedArray);
                ?>
            <div>
                <p>
                    <?php 
                        mistake($letterArray, $mistakeCounter, $geussedArray);
                    ?>
                </p>
            </div>
        </div>
        <div>
            <input type="text" id="word" placeholder="type een letter">
            <input type=button value='check letter' onclick=geussLetter()>
<!--            <input type=button value='check word'onclick=geussWord()>-->
<!--            <input type=button value=insert onclick=sendAnswer()>-->
        </div>
    </body>
</html>

