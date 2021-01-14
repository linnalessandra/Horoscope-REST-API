<?php
session_start();
if($_SERVER["REQUEST_METHOD"] === "DELETE") {
    

    if(isset($_SESSION["date"])) {

        unset($_SESSION["date"]); 

        echo json_encode(true);
        exit;
    } else {
        echo json_encode(false);
    
    }

}


?>