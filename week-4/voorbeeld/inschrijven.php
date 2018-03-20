<?php
    header("Content-type: application/json; charset=UTF-8");
    $obj = json_decode($_POST["test"],false);
       
    echo $obj->voornaam;
    echo $obj->achternaam;
    
    if(isset($_GET['voornaam'])){
        echo "De voornaam is : ". $_GET['voornaam'];
        zetVoornaam($_GET['voornaam']);
    }else{
        echo "er is geen voornaam opgegeven";
    }
    
    function zetVoornaam($devoornaam){
        $conn = mysqli_connect("localhost", "root", "", "voorbeelddb");
        $sql = "INSERT INTO `personen`(`voornaam`) VALUES ('$devoornaam')";
        $conn->query($sql);        
    }
