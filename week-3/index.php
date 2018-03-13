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
                dt.onclick = change;
            }
            function change(){
                
            }
        </script>
        <Style>
            .cell{
                display: inline-block;
            }
            .cell > input{
                height: 80px;
                width: 80px;
                background-color: cornflowerblue;
            }
        </style>
    </head>
    <body>
        <div class="cell">
           <input type="button" onclick="zoek(this)" value="a1"> 
        </div>
        
        <div class="cell">
           <input type="button" onclick="zoek(this)" value="a2"> 
        </div>
        
        <div class="cell">
           <input type="button" onclick="zoek(this)" value="a3"> 
        </div>
        <div id="demo"> </div>
    </body>
</html>