<html>
    <head>
        <title>galgje</title>
        <script src="script.js"></script>
        
    </head>
    <body>
        <div>
            <p>
                <?php 
                    include 'function.php';
                    print_r( $_SESSION['geussLetters']);
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

