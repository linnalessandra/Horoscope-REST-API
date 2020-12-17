<?php

session_start();
if($_SERVER["REQUEST_METHOD"] === "POST") {
    // REQUEST_METHOD IS POST

    //Checks if date in body is set
    if(isset($_POST["date"])) {

        // Saved $_POST["date"] to the $_SESSION
        $_SESSION["date"] = serialize($_POST["date"]);

        echo json_encode(true);
        exit;
    } else {
        echo json_encode(false);
    
    }

}
    

?>