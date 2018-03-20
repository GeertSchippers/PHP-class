<html>
    <head>
        <script>
            function mijnFunctie(dt){
                var dehtml = document.getElementsByTagName("html");
                console.log(dehtml);
                dt.onclick = tweedeFunctie;
                if(dt.value == "groen"){
                    dt.style.backgroundColor = "green";
                }
                if(dt.value == "rood"){
                    dt.style.backgroundColor = "red";

                }
            }
            function tweedeFunctie(){
                alert("In de tweedeFunctie");
            }

        </script>
    </head>
    <body>        
        <input type="button" onclick="mijnFunctie(this)" value="rood">
        <input type="button" onclick="mijnFunctie(this)" value="groen">
        <input type="button" onclick="mijnFunctie(this)" value="rood">
        <input type="button" onclick="mijnFunctie(this)" value="groen">
        <input type="button" onclick="mijnFunctie(this)" value="rood">
        <input type="button" onclick="mijnFunctie(this)" value="groen">
    </body>    
</html>
