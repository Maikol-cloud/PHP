<?php
if (isset($_GET["euros_quant"]))
    {

    $euros_quant = $_GET["euros_quant"]; 
    $dolares =  1.12; 
    $res = $euros_quant * $dolares; 


    echo "$euros_quant euros son $res dolars"; 
    echo "<form action ='index2.html' method= 'get'><button>Tornar a la conversio</button></form>";    
    
    }

    elseif (isset($_GET["dolares_quant"]))
            {

            $dolares_quant = $_GET["dolares_quant"];
            $euros = 0.89;
            $res = $dolares_quant * $euros; 
            
            echo "$dolares_quant dolars son $res euros "; 
            echo "<form action ='index2.html' method= 'get'><button>Tornar a la conversio</button></form>";    
    
            }

?>