<?php
include 'includes/header.php';
include 'database/connectie.php'
?>
    <main>

        <div class="uk-card uk-card-default uk-width-2-3@m uk-align-center">
            <h1 class="uk-padding-large uk-padding-remove-bottom uk-position-relative">Adressboek</h1>
            <button class="uk-button uk-button-default uk-margin-large-left robert-callens-5" type="button">Contact Toevoegen</button>
            <div class="uk-card-header">
                <table class="uk-table uk-table-middle uk-table-divider">
                    <thead>
                        <tr class="uk-background-muted">
                            <th class="uk-width-small ">Naam</th>
                            <th>Telefoon/Gsm</th>
                            <th>Email</th>
                            <th>Adres</th>
                            <th>Groep</th>
                            <th>Actie</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Joske</td>
                            <td>+32471054146</td>
                            <td>z9903@zavo.be</td>
                            <td>Bruul Leuven</td>
                            <td>Vrienden</td>
                            <td class="uk-flex-inline"><button class="uk-button uk-button-default uk-margin-small-right uk-background-primary" type="button">Aanpassen</button><button class="uk-button uk-button-default robert-callens-1 " type="button">Verwijderen</button></td>
                        </tr>
                        <tr>
                            <td>Joske</td>
                            <td>+32471054146</td>
                            <td>z9903@zavo.be</td>
                            <td>Bruul Leuven</td>
                            <td>Vrienden</td>
                            <td class="uk-flex-inline"><button class="uk-button uk-button-default uk-margin-small-right uk-background-primary" type="button">Aanpassen</button><button class="uk-button uk-button-default robert-callens-1 " type="button">Verwijderen</button></td>
                        </tr>
                        <tr>
                            <td>Joske</td>
                            <td>+32471054146</td>
                            <td>z9903@zavo.be</td>
                            <td>Bruul Leuven</td>
                            <td>Vrienden</td>
                            <td class="uk-flex-inline"><button class="uk-button uk-button-default uk-margin-small-right uk-background-primary" type="button">Aanpassen</button><button class="uk-button uk-button-default robert-callens-1 " type="button">Verwijderen</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
<?php
include 'includes/footer.php'
?>