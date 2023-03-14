<?php
// connectie - verbinding met MySQL-database
    $con = mysqli_connect("78.47.104.170:3309","root","03bb1f1adbd842f34f41","school");

    // de connectie testen met foutmelding als de verbinding niet is gelukt
    if(mysqli_connect_errno()){
        echo "Geen connectie met de database:" .$mysql_connect_error();
    }
    ?>