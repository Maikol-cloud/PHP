<?php

$t = date ("H"); 


if ($t >= 5 && $t < 14)
    { 
    echo "Bon dia, son les ".date ("H:i:s");
    }

    elseif ($t >= 14 && $t < 20)
    {
    echo "Bona tarda, son les ".date ("H:i:s"); 
    }

        else
        {
        echo "Bona nit son les " .date ("H:i:s");
        }
?>

