<?php
//comprobacion 
if  (isset($_GET["nom"]) &&
    isset($_GET["cognoms"]) &&
    isset($_GET["email"]) &&
    isset($_GET["missatge"])) {
    
    $nom = $_GET["nom"];
    $cognoms = $_GET["cognoms"];
    $email = $_GET["email"];
    $missatge = $_GET["missatge"];


    
    //espacio las dos comillas sueltas de aqui
    echo "Missatge rebut " . $nom . ", Gracies per contactar. Et respondrem a " . $email ;   
    echo "<form action ='index.html' method= 'get'><button>Tornar</button></form>"; 
    }
    
    else { 
    echo "No has emplenat tots els camps de manera correcta, torna a fer el formulari"; 
    echo "<form action ='index.html' method= 'get'><button>Tornar</button></form>";
    }
?>