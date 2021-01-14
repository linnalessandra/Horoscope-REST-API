<?php

session_start();
if($_SERVER["REQUEST_METHOD"] === "POST") {
    
    if(isset($_POST["date"])) {
    if(isset($_SESSION["date"])) {
        echo json_encode(false);
        exit;
    } else { 

      
       $_DATE = $_POST["date"];
      $_RESULTAT = calcHoroscope($_DATE);
      $_SESSION["date"] = serialize($_RESULTAT);
        echo json_encode(true);
        exit;
     }
    } else {
        echo json_encode(false);
    
    }


}

function calcHoroscope($_DATE) {
    if(($_DATE <=419 && $_DATE>=321)){
        $_MYSIGN = "ARIES";
    }

    if(($_DATE <=520 && $_DATE>=420)){
        $_MYSIGN = ("TAURUS");
    }
    if(($_DATE <=620 && $_DATE>=521)){
            $_MYSIGN = "GEMINI";
    }
    if(($_DATE <=722 && $_DATE>=621)){
            $_MYSIGN = "CANCER";
    }
    if(($_DATE <=822 && $_DATE>=723)){
        $_MYSIGN = "LEO";
    }
    if(($_DATE <=922 && $_DATE>=823)){
        $_MYSIGN = "VIRGO";
    }
    if(($_DATE <=1022 && $_DATE>=923)){
        $_MYSIGN = "LIBRA";
    }
    if(($_DATE <=1121 && $_DATE>=1023)){
        $_MYSIGN = "SCORPIO";
    }
    if(($_DATE <=1221 && $_DATE>=1122)){
        $_MYSIGN = "SAGITTARIUS";
    }
    if(($_DATE <=1231 && $_DATE>=1222)){
        $_MYSIGN = "CAPRICORN";
    }
    if(($_DATE <=119)){
        $_MYSIGN = "CAPRICORN";
    }
    if(($_DATE <=218 && $_DATE>=120)){
        $_MYSIGN = "AQUARIUS";
    }
    if(($_DATE <=320 && $_DATE>=219)){
        $_MYSIGN = "PISCES";
    }


    
        return $_MYSIGN;
}
   

?>