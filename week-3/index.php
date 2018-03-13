<html>
    <head>

        <script>
            function zoek(co){
                var cordinaat = co.value;

                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    // Typical action to be performed when the document is ready:
                    document.getElementById("demo").innerHTML = xhttp.responseText;
                }
                };
                xhttp.open("GET", "ajaxtest.php?jojo="+co.value, true);
                xhttp.send();
            }
        </script>
        <Style>
            .raak{
                background-color:  coral;
            }
            input{
                display: inline-block;
                height: 80px;
                width: 80px;
                background-color: cornflowerblue;
            }            
        </style>
    </head>
    <body>
            <input type="button" id="a1" onclick="zoek(this)" value="a1"> 
            <input type="button" onclick="zoek(this)" value="a2"> 
            <input type="button" onclick="zoek(this)" value="a3"> 
        <div id="demo"> </div>
    </body>
</html>