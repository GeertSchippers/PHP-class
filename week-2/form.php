<html>
    <head>
        <style>
            @keyframes round{
                0% {transform: rotate(0deg);};
                25% {transform: rotate(90deg);};
                50% {transform: rotate(90deg);};
                100% {transform: rotate(90deg);};
                
            }
            @keyframes round2{
                0% {transform: rotate(0deg);};
                25% {transform: rotate(-90deg);};
                50% {transform: rotate(-90deg);};
                100% {transform: rotate(-90deg);};
                
            }
            ul li{
                list-style: none;
                transform: rotate(360deg);
                animation-name: round;
                animation-duration: 2s;
            }
            form{
                background-color : #abacad;
                padding: 15px;
                width: 350px;
                height: 400px;
            }
            input{
                float: right;
                background-color: #e8e8e8;
                width: 200px;
                padding: 3px;
                border: none;
                border-radius: 2px;
                margin: 4px 0px;
            }
            input:focus{
                background-color: darkorange;
            }
            li span{
               float: left;
               align-content: flex-end;
               padding-top: 9px; 
            }
            #button{
                margin-top: 20px;
                width: 100px;
                float: right;
                transform: rotate(-360deg);
                animation-name: round2;
                animation-duration: 2s;
            }
            #button:hover{
                cursor: pointer;
                background-color: blueviolet;
            }
/*            .links{
                transform: rotate(7deg);
            }
            .rechts{
                transform: rotate(-7deg);
            }*/
        </style>
    </head>
    <body>
        <form>
            <ul>
                <li class="links"><span>Voornaam: </span><input type="input" placeholder="voornaam"></li><br><br><br><br>
                <li class="rechts"><span>Achternaam: </span><input type="input" placeholder="achternaam"></li><br><br><br><br>
                <li class="links"><span>E-mail: </span><input type="input" placeholder="e-mail@gmail.com"></li><br><br><br><br>
                <li class="rechts"><span>geboortejaar: </span><input type="date" placeholder="dd/mm/yyyy"></li><br><br><br><br>
                <li class="links"><span>Nieuwsbrief: </span><input type="checkbox"></li>
                <input id="button" type="submit" name="Send">
            </ul>
        </form>
    </body>    
</html>
