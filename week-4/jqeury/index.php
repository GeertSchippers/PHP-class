<html>
    <head>
        <script src="jquery.js"></script>

        <script>
            function roodkleuren(){
                $(".t1").add("span", hallo).css("background-color", "red");
            }
            function hallo(){
                alert ('hallo');
            }
            function meerkleuren(){
                $(".t1").css("background-color", "red")
                .add(".t2").css("color", "yellow")
                .add(".t3").css("border", "2px solid blue");
            }
            function naar4(){
                $("<tr><td>").add("<td>test 4<td>").appendTo(".tab");
            }        
        </script>
    </head>
    <body>
        <table class="tab">
            <tr class="extra">
                <td class="t1">test 1</td>
                <td class="t2">test 2</td>
                <td class="t3">test 3</td>                
            </tr>
            <tr>
                <td class="t1">test 1</td>
                <td class="t2">test 2</td>
                <td class="t3">test 3</td>                
            </tr><tr>
                <td class="t1">test 1</td>
                <td class="t2">test 2</td>
                <td class="t3">test 3</td>                
            </tr>            
        </table>
        <div class="voorbeeld">
            <p>test in div <span>tekst in span</span> test in div</p>
            <p>test in div <span>tekst in span</span> test in div</p>    
        </div>
        <input type="button" value="roodkleuren" onclick="roodkleuren()">
        <input type="button" value="meerkleuren" onclick="meerkleuren()">
        <input type="button" value="4" onclick="naar4()">
    </body>
</html>
