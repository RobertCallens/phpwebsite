<?php
// connectie - verbinding met MySQL-database
    $con = mysqli_connect("dedi7339.your-server.de","b05robert_75","eaVnTQk6hqeeTG4n","b05robert_db");

    // de connectie testen met foutmelding als de verbinding niet is gelukt
    if(mysqli_connect_errno()){
        echo "Geen connectie met de database:" .$mysql_connect_error();
    }
    ?>