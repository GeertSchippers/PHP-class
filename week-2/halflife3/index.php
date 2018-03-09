<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        

        
        



        
        <footer>
            
        </footer>
    </body>
</html>
<script> 
    var i=60;
    
    function Timer(){
    
        document.getElementById("mycounter").innerHTML = i;
        i--;
        if(i===-1){
            alert("Game Over, Check Score Below");
        }
        else{setTimeout(Timer, 1000);
        }
    };
    function bang(){
        clearTimeout();
        alert("You Win!!");
    }
    

</script>
<?php 
    if(!isset($_POST['name'])){
       echo '
            <form method="post" action="http://localhost/qien/week-2/halflife3/">
                <input type="text" placeholder="Your name" name="name">
                <input type="text" placeholder="How many bullets?" name="bullets">
                <input type="submit" name="Submit">
            </form>';
    }
    
    if (isset($_POST['name'])){
        echo "<h1>" . $_POST['name'] . "</h1>";
        echo "<button onclick=Timer()>Start Game</button>"; 
        echo "<div id=mycounter></div>";
        echo "<div class=schijf10 onclick=bang()>
            <p>10</p>
        </div>";
    }
    
        if (isset($_POST['bullets'])){
        echo "Bullets: " . $_POST['bullets'];
    }





    $bullets = 5;
  
    
    
    class schietschijf{
        public $points;
        public $class;
    }
    
    $schijf10 = new schietschijf;
    $schijf10->points = 10;
    $schijf10->class = 'schijf10';
    
    //echo $schijf10->class;
    
//    echo '<h1>'.$name.'</h1>'
?>