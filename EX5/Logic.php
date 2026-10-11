<?php

$Preu = $_GET ['Preu']; 

$Iva = $_GET ['Iva']; 

$Resultat = $Preu * $Iva / 100 + $Preu;  


echo "quantitat amb Iva:" . $Resultat ; 
echo "<form action ='index5.html' method= 'get'><button>Tornar</button></form>";


?>