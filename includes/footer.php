    <footer class="uk-section-secondary uk-light uk-margin-medium-top" >
        <div class="uk-container">
            <div class="uk-child-width-1-3@m uk-margin-small-top uk-margin-small-bottom" uk-grid>
                <div>
                    <p class="uk-text-small uk-text-muted"> &copy; 
                        <script>
                            var datum = new Date();
                            jaartal = datum.getFullYear();
                            document.write(jaartal);
                        </script>
                        &bull; Robert Callens </p>
                </div>
                <div>
                    <p class="uk-text-uppercase"> Sitemap </p>
                    <div class="uk-column-1-2">
                        <p> Foto-Video </p>
                        <p> Klasgenoten </p>
                        <p> BMI </p>
                        <p> Schermresolutie </p>
                        <p> Item </p>
                        <p> Item </p>
                        <p> Item </p>
                    </div>
                </div>
                <div>
                    <div> <a href="" class="uk-icon-button uk-margin-small-right " uk-icon="mail"></a> contact@6itn.be</div>
                    <div> <a href="" class="uk-icon-button uk-margin-small-right uk-margin-small-top" uk-icon="receiver"></a> 09/123.45.67</div>
                    <div class="uk-margin-small-top">
                        <a href="" class="uk-icon-button uk-margin-small-right " uk-icon="facebook"></a>
                        <a href="" class="uk-icon-button uk-margin-small-right " uk-icon="twitter"></a>
                        <a href="" class="uk-icon-button uk-margin-small-right " uk-icon="linkedin"></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div id="offcanvas-nav" uk-offcanvas="overlay: true">
        <div class="uk-offcanvas-bar">
            <div>
                <a href="index.html" class="uk-navbar-item uk-logo uk-margin-small-left">
                    <img src="images/home.png"
                         width="100"
                         alt="One page website"
                    >
                </a>
            </div>

            <div class="uk-margin-small-top uk-margin-medium-bottom uk-text-center">
                One page - 6 ITN
            </div>
            <ul class="uk-nav uk-nav-default">
                <li class="uk-nav-header">Eerste gedeelte</li>
                <li><a href="#foto" uk-scroll><span class="uk-margin-small-right" uk-icon="icon:  table"></span>Foto's & Video's</a></li>
                <li><a href="#klas" uk-scroll><span class="uk-margin-small-right" uk-icon="icon:  thumbnails"></span>Klasgenoten</a></li>
                <li class="uk-nav-divider"></li>
                <li><a href="#bmi" uk-scroll><span class="uk-margin-small-right" uk-icon="icon:  trash"></span>BMI</a></li>

                <li class="uk-nav-header">Tweede gedeelte</li>
                <li><a href="#res" uk-scroll><span class="uk-margin-small-right" uk-icon="icon:  table"></span>Schermresolutie</a></li>
                <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon:  thumbnails"></span>Item</a></li>
                <li class="uk-nav-divider"></li>
                <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon:  trash"></span>Item</a></li>
            </ul>
        </div>
    </div>
</body>
</html>