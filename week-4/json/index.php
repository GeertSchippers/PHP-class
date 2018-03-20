<html>
    <head>
        <script>
            function goWithFlow(){
                var koffiezetapparaat = {
                    stroomsterkte: 220,
                    hoogte: 24,
                    pads: ['a','b'],
                    merk: 'senseo',
                    koffiezetten : function (){
                        return "mijn merk is"+this.merk;
                    }
                };
                
           toevoeganAanUitkomst("de hoogte: "+koffiezetapparaat.hoogte);
           koffiezetapparaat.hoogte = 55;
           toevoeganAanUitkomst("daarna: "+koffiezetapparaat.hoogte);
           toevoeganAanUitkomst("ennu "+koffiezetapparaat.koffiezetten());
           toevoeganAanUitkomst(koffiezetapparaat.pads[1]);
           var plein = new Plein('Amsterdam');
           toevoeganAanUitkomst(plein.rondlopen());
           toevoeganAanUitkomst(plein.hardlopen(20));
            }
            function toevoeganAanUitkomst(detekst){
                dediv = document.getElementById("uitkomst");
                dediv.innerHTML = dediv.innerHTML + "<br>" + detekst;
            }
            
            function Plein(stad){
                this.stad = stad;
                this.vorm = 'vierkant';
                this.begroeiing = true;
                this.rondlopen = function(){
                    return "in de stad: "+this.stad+" loop ik rond in een "+this.vorm;
                };
                this.hardlopen = function(snelheid){
                    return "in de stad: "+this.stad+" loop ik met een snelheid van "+snelheid+"km/h.";
                };
            }
            function functie2(){
                var gebouw = {
                    verdiepingen:6,
                    aantalramen:42,
                    straatnaam:'atoomweg'
                };
                var gebouws = JSON.stringify(gebouw);
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function(){
                    alert("yes:"+this.responseText);
                };
                xhttp.open("POST", 'verwerken.php', true);
                xhttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
                xhttp.send("denaam="+gebouws);
            }
            function verkrijgen(){{
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function(){
                    var hetkantoor = JSON.parse(this.responseText):
                        
                };
                xhttp.open("GET", 'object.php', true);
                xhttp.send(); 
            }
        </script>
    </head>
    <body>
        <input type="button" onclick="goWithFlow()" value="go">
        <input type="button" onclick="functie2()" value="versturenopject">
        <input type="button" onclick="verkrijgen()" value="verkrijgen">
        <div id="uitkomst">
            
        </div>
    </body>
</html>