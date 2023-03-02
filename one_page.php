<?php include './includes/header.php';?>
    <header>
            <nav class="uk-navbar-container uk-visible@m" uk-navbar>
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
                    <ul class="uk-navbar-nav">
                        <li><a href="#foto" uk-scroll>Foto-video</a></li>
                        <li><a href="#klas" uk-scroll>Klasgenoten</a></li>
                        <li><a href="#bmi" uk-scroll>BMI</a></li>
                    </ul>
                </div>
                <div class="uk-navbar-right uk-margin-large-right">
                    <ul class="uk-navbar-nav">
                        <li><a href="#res" uk-scroll>Schermresolutie</a></li>
                        <li><a href="#">Item</a></li>
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
    <main>
        <class="uk-section uk-section-muted uk-margin-medium-top">
            <div class="uk-container" id="photo">
                <div uk-slideshow="anitmation: push">
                <div class="uk-possition-relative uk-visible-toggle uk-light" tabindex="-1" uk-slidesho="ratio: 16:9">
                    <ul class="uk-slideshow-items">
                        <li>
                            <img src="https://cdn.pixabay.com/photo/2022/08/28/01/40/cyberpunk-city-7415576_960_720.jpg" alt="" uk-cover>
                        </li>
                        <li>
                            <img src="https://images.unsplash.com/photo-1580757468214-c73f7062a5cb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1932&q=80" alt="" uk-cover>
                        </li>
                        <li>
                            <img src="https://images.unsplash.com/photo-1594568284297-7c64464062b1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80" alt="" uk-cover>
                        </li>
                        <li>
                            <video src="https://www.shutterstock.com/shutterstock/videos/8848282/preview/stock-footage-sunset-time-lapse-of-busy-light-trail-traffic-with-kuala-lumpur-skyline-at-kuala-lumpur-city.webm" autoplay loop muted playsinline uk-cover></video>
                        </li>
                        <li>
                            <iframe src="https://www.youtube-nocookie.com/embed/6stlCkUDG_s? autoplay=1&amp;controls=0&amp;showinfo=0&amp;re1=0&amp;loop=1&amp;modestbranding=1&amp;wmode=transparent&amp;playsinline=1" width="1920" height="1080" allowfullscreen uk-cover></iframe> 
                        </li>
                    </ul>

                    <a class="uk-position-center-left uk-position-small uk-hidden-hover href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                    <a class="uk-position-center-left uk-position-small uk-hidden-hover href="#" uk-slidenav-next uk-slideshow-item="next"></a>

                </div>

                <div class="uk-text-right">
                    <a href="#" uk-totop uk-scroll></a>
                </div>
                <ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-margin"></ul>

            </div>
        </div>
        <div class="uk-section uk-section-muted uk-margin-medium-top">
            <div class="uk-container">
                <div class="uk-section uk-section-muted uk-margin-medium-top robert-callens-1">
                    <div class="uk-container">
                        <h3> Item </h3>
                        <div class="uk-text-right">
                            <a href="#" uk-totop uk-scroll></a>
                        </div>
                    </div>
                    
                </div>
                <div class="uk-section uk-section-muted uk-margin-medium-top robert-callens-2">
                    <div class="uk-container">
                        <h3> Item </h3>
                        <div class="uk-text-right">
                            <a href="#" uk-totop uk-scroll></a>
                        </div>
                    </div>
                    
                </div>
                <div class="uk-section uk-section-muted uk-margin-medium-top robert-callens-3">
                    <div class="uk-container">
                        <h3> Item </h3>
                        <div class="uk-text-right">
                            <a href="#" uk-totop uk-scroll></a>
                        </div>
                    </div>
                    
                </div>
                <div class="uk-section uk-section-muted uk-margin-medium-top robert-callens-4">
                    <div class="uk-container">
                        <h3> Item </h3>
                        <div class="uk-text-right">
                            <a href="#" uk-totop uk-scroll></a>
                        </div>
                    </div>
                    
                </div>
                <div class="uk-section uk-section-muted uk-margin-medium-top robert-callens-5">
                    <div class="uk-container">
                        <h3> Item </h3>
                        <div class="uk-text-right">
                            <a href="#" uk-totop uk-scroll></a>
                        </div>
                    </div>
                    
                </div>

            </div>
        </div>
    </div>

                <div class="uk-section robert-callens-1 uk-margin-medium-top" id="klas">
                    <div class="container">
                        <div class="uk-child-width-1-3@m uk-grid-match" uk-grid>
                            <div>
                                <div class="uk-card uk-card-default uk-card-small">
                                    <div class="uk-card-header">
                                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                                            <div class="uk-width-auto">
                                                <img class="uk-border-circle" width="40" height="40" src="https://images.unsplash.com/photo-1580757468214-c73f7062a5cb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8MTYlM0E5fGVufDB8fDB8fA%3D%3D&w=1000&q=80" alt="">
                                            </div>
                                            <div class="uk-width-expand">
                                                <h3 class="uk-card-title uk-margin-remove-bottom">Man</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-card-body">
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias veniam doloribus quo </p>
                                    </div>
                                    <div class="uk-card-footer uk-text-center">
                                        <a href="#" class="uk-button uk-button-text"> Zaventem</a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card-default uk-card-small">
                                    <div class="uk-card-header">
                                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                                            <div class="uk-width-auto">
                                                <img class="uk-border-circle" width="40" height="40" src="https://images.unsplash.com/photo-1580757468214-c73f7062a5cb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8MTYlM0E5fGVufDB8fDB8fA%3D%3D&w=1000&q=80" alt="">
                                            </div>
                                            <div class="uk-width-expand">
                                                <h3 class="uk-card-title uk-margin-remove-bottom">Man</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-card-body">
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias veniam doloribus quo </p>
                                    </div>
                                    <div class="uk-card-footer uk-text-center">
                                        <a href="#" class="uk-button uk-button-text"> Zaventem</a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card-default uk-card-small">
                                    <div class="uk-card-header">
                                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                                            <div class="uk-width-auto">
                                                <img class="uk-border-circle" width="40" height="40" src="https://images.unsplash.com/photo-1580757468214-c73f7062a5cb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8MTYlM0E5fGVufDB8fDB8fA%3D%3D&w=1000&q=80" alt="">
                                            </div>
                                            <div class="uk-width-expand">
                                                <h3 class="uk-card-title uk-margin-remove-bottom">Man</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-card-body">
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias veniam doloribus quo </p>
                                    </div>
                                    <div class="uk-card-footer uk-text-center">
                                        <a href="#" class="uk-button uk-button-text"> Zaventem</a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="uk-text-right">
                            <a href="#" uk-totop uk-scroll></a>
                        </div>

                    </div>
                </div>
    

                </div>
                <div class="uk-section robert-callens-4 uk-margin-medium-top " id="bmi">
                    <div class="uk-container uk-margin-medium-left">
                        <h3>Berekenen van de body mass index (BMI)</h3>
                        <form name="bmiform" class="uk-form-horizontal uk-grid-small">
                            <div class="uk-width-1-3@m">
                                <label class="uk-form-label" for="form-horizontal-text">Length (cm)</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" name="lengte" type="text" placeholder="Lengte in cm">
                                </div>
                                
                                <label class="uk-form-label" for="form-horizontal-text">Gewicht (Kg)</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" name="gewicht" type="text" placeholder="Gewicht in Kg">
                                </div>

                                <div>
                                    <input type="button" class="uk-button uk-button-secondary " value="Bereken de BMI" onclick="BerekenBMI()">
                                </div>

                                <label class="uk-form-label" for="form-horizontal-text">Je BMI is</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" name="bmi" type="text">
                                </div>

                                <label class="uk-form-label" for="form-horizontal-text">Betekenis</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" name="betekenis" type="text">
                                </div>
                            </div>
                        </form>
                        <div class="uk-text-right">
                            <a href="#" uk-totop uk-scroll></a>
                        </div>
                    </div>
                </div>
                <div class="uk-section robert-callens-1 uk-margin-medium-top " id="res">
                    <div class="uk-container uk-margin-medium-left">
                        <h3>Schermresolutie</h3>
                        <script>
                            var schermhoogte = screen.height;
                            var schermbreedte = screen.width;
                            var bericht = "De schermresolutie is " + schermbreedte + " x " + schermhoogte;
                            document.write(bericht);
                        </script>
                        <div class="uk-text-right">
                            <a href="#" uk-totop uk-scroll></a>
                        </div>
                    </div>
                </div>
            </div>
        
        
        </div>


        
    </main>

<?php include './includes/footer.php'; ?>