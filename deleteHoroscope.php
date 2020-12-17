<?php
session_start();
if($_SERVER["REQUEST_METHOD"] === "DELETE") {
    // REQUEST_METHOD IS POST

    //Checks if date in body is set
    if(isset($_SESSION["date"])) {

        // Saved $_POST["date"] to the $_SESSION
        unset($_SESSION["date"]); 

        echo json_encode(true);
        exit;
    } else {
        echo json_encode(false);
    
    }

}



?>