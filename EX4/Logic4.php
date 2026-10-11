<?php

if (isset($_POST["estilo"])) {

$opt = $_POST["estilo"];  

switch ($opt) {
    case "Cumbia":  
        echo "Cumbia cumbiosa";
        break; 
    case "Metal": 
        echo "DEP Ozzy Osbourne"; 
        break; 
    case "Rock":
        echo "Rock & Roll, yeah !"; 
        break; 
    case "Jazz":
        echo "Miles Davis es el meu preferit"; 
        break; 
    case "Pop":
        echo "El rei del Pop es Michael Jackson"; 
        break; 
    default: 
        echo "no has escollit res"; 

}}

    else {
        echo "No has escollit cap estil"; 
    }

echo "<form action ='Index4.html' method= 'post'><button>Tornar</button></form>"; 

?>