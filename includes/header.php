<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>PhpWebsite</title>
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="./css/css/uikit.min.css" />
    <script src="css/js/uikit.min.js"></script>
    <script src="css/js/uikit-icons.min.js"></script>
    <link href="./css/styles.css" rel="stylesheet" type="text/css">

    <script>
        function BerekenBMI() {

            var gewicht = document.bmiform.gewicht.value
            var lengte = document.bmiform.lengte.value

            if(gewicht > 0 && lengte > 0) {
                var BMI = Math.round(gewicht/(lengte/100*lengte/100)*100)/100;
                document.bmiform.bmi.value = BMI;
                if(BMI < 18.5){
                    document.bmiform.betekenis.value = "Ondergewicht";
                }
                if(BMI >= 18.5 && BMI <= 24.9){
                    document.bmiform.betekenis.value = "Normaal";
                }
                if(BMI >= 25 && BMI <= 29.9){
                    document.bmiform.betekenis.value = "Overgewicht";
                }

            }
            else {
                alert("Gelieve een geldig gewicht en lengte in te geven");
            }
        }
    </script>

</head>
<body>
    <header>
            <nav class="uk-navbar-container uk-visible@m" uk-navbar>
                <div class="uk-navbar-left">
                    <ul class="uk-navbar-nav">
                        <li>
                           <a href="index.php" class="uk-navbar-item uk-logo uk-margin-large-left">
                               <img src="images/home.png"
                                    width="100"
                                    alt="One page website"
                               >
                           </a>
                        </li>
                    </ul>
                </div>
                <div class="uk-navbar-center">
                    <ul class="uk-navbar-nav">
                        <li><a href="#foto" uk-scroll>Foto-video</a></li>
                        <li><a href="#klas" uk-scroll>Klasgenoten</a></li>
                        <li><a href="#bmi" uk-scroll>BMI</a></li>
                    </ul>
                </div>
                <div class="uk-navbar-right uk-margin-large-right">
                    <ul class="uk-navbar-nav">
                        <li><a href="#res" uk-scroll>Schermresolutie</a></li>
                        <li><a href="one_page.php">One page</a></li>
                        <li><a href="#">Item</a></li>
                    </ul>
                </div>
            </nav>
    
            <!-- voor mobile (smartphone) -->
            <nav class="uk-navbar-container uk-hidden@m" uk-navbar>
                <div class="uk-navbar-left">
                    <ul class="uk-navbar-nav">
                        <li>
                            <a href="index.html" class="uk-navbar-item uk-logo uk-margin-large-left">
                                <img src="images/home.png"
                                     width="100"
                                     alt="One page website"
                                >
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="uk-navbar-center">
                    One page - 6 ITN
                </div>
                <div class="uk-navbar-right uk-margin-large-right">
                    <button class="uk-button uk-button-default uk-hidden@m" type="button"
                            uk-icon="icon: menu; ratio: 1.2"
                            uk-toggle="target: #offcanvas-nav"
                    ></button>
                </div>
            </nav>
    
    
    </header>