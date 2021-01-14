<?php
session_start();

if($_SERVER["REQUEST_METHOD"] === "GET") {
    
    if(isset($_SESSION["date"])) {

       $_RESULTAT = unserialize($_SESSION["date"]);
       echo json_encode($_RESULTAT);
        exit;
    } else {

		echo json_encode(false);
        exit;
    }

}

	
?> 



