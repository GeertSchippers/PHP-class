<html>
<head>
<script>
function go(){
	var depagina = document.getElementsByTagName("html");
	console.log(depagina);	
        // HIER DE DOMCONCATENATIE EN VOOR 7 DE hoi() toewijzing SCHRIJVEN
        document.children[1].children[1].innerText.onclick = hoi();
}   
function hoi(){
	alert("hoi");
}
</script>
</head>
<body>
<input type=button onclick=go()>
<p><span>dezetekst</span></p>

</body>
</html>
<!--document.["0"].children[1].innerText =--> 