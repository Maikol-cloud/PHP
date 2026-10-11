<?php
//comprobacion 
if  (isset($_POST["nom"]) &&
    isset($_POST["cognoms"]) &&
    isset($_POST["email"]) &&
    isset($_POST["missatge"])) {
    
    $nom = $_POST["nom"];
    $cognoms = $_POST["cognoms"];
    $email = $_POST["email"];
    $missatge = $_POST["missatge"];


    
    //espacio las dos comillas sueltas de aqui
    echo "Missatge rebut " . $nom . ", Gracies per contactar. Et respondrem a " . $email ;   
    echo "<form action ='index.html' method= 'get'><button>Tornar</button></form>"; 
    }
    
    else { 
    echo "No has emplenat tots els camps de manera correcta, torna a fer el formulari"; 
    echo "<form action ='index.html' method= 'get'><button>Tornar</button></form>";
    }
?>