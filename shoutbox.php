<?php
include 'includes/header.php';
include 'database/connectie.php'
?>
    <main>
        <div class="uk-card uk-card-default uk-width-1-2@m uk-align-center">
            <div class="uk-card-header">
                <div class="uk-grid-small uk-flex-middle" uk-grid>
                    <div class="uk-width-expand ">
                        <h3 class="uk-card-title uk-margin-remove-bottom uk-text-center">Shout it!</h3>
                    </div>
                </div>
            </div>
            <div class="uk-card-body">
                <p class="uk-text-meta uk-margin-remove-top"><time datetime="2023-03-07T11:00"> 7-03-2023 - 11:00 - </time><strong>naam: </strong>Dag allemaal</p>
                <p class="uk-text-meta uk-margin-remove-top"><time datetime="2023-03-07T11:00"> 7-03-2023 - 11:00 - </time><strong>naam: </strong>Dag allemaal</p>
                <p class="uk-text-meta uk-margin-remove-top"><time datetime="2023-03-07T11:00"> 7-03-2023 - 11:00 - </time><strong>naam: </strong>Dag allemaal</p>
                <p class="uk-text-meta uk-margin-remove-top"><time datetime="2023-03-07T11:00"> 7-03-2023 - 11:00 - </time><strong>naam: </strong>Dag allemaal</p>
            </div>
            <div class="uk-card-footer uk-card-primary">
                <form>
                    <div class="uk-margin">
                        <div class="uk-inline">
                            <span class="uk-form-icon" uk-icon="icon: user"></span>
                            <input class="uk-input" type="text" placeholder="Voornaam" aria-label="Not clickable icon">
                        </div>
                        <div class="uk-margin">
                            <div class="uk-inline">
                                <span class="uk-form-icon" uk-icon="icon: file-edit"></span>
                                <input class="uk-input uk-form-width-large" type="text" placeholder="Bericht" aria-label="Not clickable icon">
                            </div>
                    </div>
                        <div>
                            <input type="button" class="uk-button uk-button-danger" value="SCHREEUW HET UIT!!">
                        </div>
                </form>
            </div>
        </div>
    </main>
<?php
include 'includes/footer.php'
?>