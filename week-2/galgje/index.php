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
                echo $answer.'<br>';
                echo $geuss.'<br>'; 
//                print_r($wordArray);
                ?> 
            </p>
        </div>
        <div>
            <input type="text" id="word">
            <input type=button value=check onclick=geuss()>
<!--            <input type=button value=insert onclick=sendAnswer()>-->
        </div>
    </body>
</html>

