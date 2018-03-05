<script>
    function kleurkiezerBlue(){
        var blue = document.getElementById("blue").value;
        document.location = "probeer.php?kleur="+blue;
    }
    function kleurkiezerRed(){
        var red = document.getElementById("red").value;
        document.location = "probeer.php?kleur="+red;
    }
    function kleurkiezerYellow(){
        var yellow = document.getElementById("yellow").value;
        document.location = "probeer.php?kleur="+yellow;
    }
    window.onload = function(){
        document.body.style.backgroundColor = "<?php echo $_GET['kleur']; ?>";    
    }
</script>
<?php
session_start();

echo '<input type=button id=blue name=blue value=blue onclick=kleurkiezerBlue()><br>';
echo '<input type=button id=red name=red value=red onclick=kleurkiezerRed()><br>';
echo '<input type=button id=yellow name=yellow value=yellow onclick=kleurkiezerYellow()><br>';

