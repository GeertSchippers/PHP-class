/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//function sendAnswer(){
//    var word = document.getElementById("word").value;
//    document.location = "index.php?answer="+word;
//}
function geussLetter(){
    var geuss = document.getElementById("word").value;
    document.location = "index.php?geussLetter="+geuss;
}
function geussWord(){
    var geuss = document.getElementById("word").value;
    document.location = "index.php?geussWord="+geuss;
}


