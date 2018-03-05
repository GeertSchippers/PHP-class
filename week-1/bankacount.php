
<?php
// Onze bankrekening app

    $amount = 1000;
    $product = 400;
    $storting = 400;
    
    
    $amount = afschrijving($amount, 200);
    $amount = afschrijving($amount, 500);
    $amount = bijschrijving($amount, 5000);
    $amount = afschrijving($amount, 4000);
     $amount = afschrijving($amount, 4000);
     $amount = bijschrijving($amount, 5000);
    

    echo "<br>TOTAAL :".$amount;
    
    
    
    
//geld van de rekening af halen
    function afschrijving($amount, $productprice){
        if ($amount <= $productprice){
           echo "STOP JE GEEFT TEVEEL UIT!<br>"; 
        } else {
            $newamount = $amount - $productprice;
            echo "New amount :" . $newamount ."<br>";
            return $newamount;
        }
            
    }
    
//geld op de rekening storten
    function bijschrijving($amount, $storting){
        $newamount = $amount + $storting;
        echo "New amount : ". $newamount ."<br>";
        return $newamount;
    }
    

