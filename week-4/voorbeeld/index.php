<html>
    <head>
        <script>
            function schrijfmein(){
                var data = {};
                data.voornaam = document.getElementById("voornaam").value;
                data.achternaam = document.getElementById("achternaam").value;
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function(){
                    if(this.readyState === 4 && this.status === 200){
                        console.log(this.responseText);
//                        document.getElementById("response").value = "go";
                    
                    }
                }
                data = JSON.stringify(data);                
                xhttp.open("POST", 'inschrijven.php', true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send("test="+data);
            }
            function uitschrijven(){
                var xh = new XMLHttpRequest();
                xh.onreadystatechange = function(){
                    if(this.readyState === 4 && this.status === 200){
                        console.log(this.responseText);
                    }
                }
                xh.open("GET", 'testmetobject.php', true);
                xh.send();
            }
        </script>
    </head>
    <body>
        Register:<br>
        <table>
            <tr>
                <td>
                    Voornaam:
                </td>
                <td>
                    <input type="text" id="voornaam">
                </td>
            </tr>
            <tr>
                <td>
                    Achternaam:
                </td>
                <td>
                    <input type="text" id="achternaam">
                </td>
            </tr>
            <tr>
                <td>
                    Leeftijd:
                </td>
                <td>
                    <input type="text" id="leeftijd">
                </td>
            </tr>
            <tr>
                <td>
                    Klas:
                </td>
                <td>
                    <input type="text" id="klas">
                </td>
            </tr>
            <tr>
                <td>
                    Wachtwoord:
                </td>
                <td>
                    <input type="text" id="wachtwoord">
                </td>
            </tr>
            <tr>
                <td>
                </td>
                <td>
                    <input type="button" value="schrijf in" onclick="schrijfmein()">
                </td>
            </tr>
            <tr>
                <td>
                </td>
                <td>
                    <input type="button" value="schrijf in" onclick="uitschrijven()">
                </td>
            </tr>
    </body>
</html>
