<?php
include 'includes/header.php';
include 'database/connectie.php'
?>
<?php

    $query = "SELECT * FROM shoutbox";
    $berichten = mysqli_query($con, $query);

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
                <ul class="uk-list">
                    <?php
                        while($rij = mysqli_fetch_assoc($berichten)):
                    ?>
                    <li>
                        <span class="uk-text-meta uk-margin-remove-top"><?php echo $rij['tijd'] ?> - </span>
                        <span class="uk-text-bold"><?php echo $rij['gebruiker'] ?>: </span>
                        <span class=".uk-text-normaal"><?php echo $rij['bericht'] ?></span>
                    </li>
                    <?php endwhile;?>
                </ul>
            </div>
            <div class="uk-card-footer uk-card-primary">
                <?php
                    if(isset($_GET['fout'])): ?>
                        <div class="uk-text-warning uk-text-right uk-animation-fade">
                            <?php echo $_GET['fout']; ?>
                        </div>
                    <?php endif; ?>

    
                <form method="post" action="shoutbox/process.php">
                    <div class="uk-margin"> 
                        <div class="uk-inline">
                            <span class="uk-form-icon" uk-icon="icon: user"></span>
                            <input class="uk-input" type="text" placeholder="Voornaam" name="gebruiker" aria-label="Not clickable icon">
                        </div>
                    </div>
                        <div class="uk-margin">
                            <div class="uk-inline">
                                <span class="uk-form-icon" uk-icon="icon: file-edit"></span>
                                <input class="uk-input uk-form-width-large" type="text" placeholder="Bericht" name="bericht" aria-label="Not clickable icon">
                            </div>
                        </div>
                    <div class="uk-margin">
                        <div class="uk-inline">
                            <input type="submit" name="verzenden" class="uk-button uk-button-danger" value="SCHREEUW HET UIT!!" aria-label="Not clickable icon">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
<?php
include 'includes/footer.php'
?>