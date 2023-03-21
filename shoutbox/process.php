<?php

include '../database/connectie.php';

    if(isset($_POST['verzenden'])){
        $gebruiker = mysqli_real_escape_string($con, $_POST['gebruiker']);
        $bericht = mysqli_real_escape_string($con, $_POST['bericht']);


        if (!isset($gebruiker) || $gebruiker == '' || !isset($bericht) || $bericht == '') {
            $error = "Vul alle velden in!";
            header("Location: ../shoutbox.php?fout=".urlencode($error));
            exit();
        } else {

            if($bericht == '/clear'){
                $query = "TRUNCATE TABLE shoutbox";
                
                if (!mysqli_query($con, $query)) {
                    die('Fout: ' . mysqli_error($con));
                } else {
                    header("Location: ../shoutbox.php");
                    exit();
                }
            }

            $query = "INSERT INTO shoutbox (gebruiker, bericht) VALUES ('$gebruiker', '$bericht')";

            if (!mysqli_query($con, $query)) {
                die('Fout: ' . mysqli_error($con));
            } else {
                header("Location: ../shoutbox.php");
                exit();
            }
        }
    }
?>