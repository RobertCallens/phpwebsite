<?php
include 'includes/header.php';
include 'database/connectie.php'
?>
<?php
    $talen = array("engels", "nederlands");
    $taalkeuze = "nederlands";
    include("talen/". $taalkeuze .".lang.php");
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

                        <form action="" method="post">
                            <div uk-grid>
                                <div class="uk-width-1-2">
                                    <select class="uk-select" name="taalkeuze" aria-label="Select">
                                        <?php
                                            for ($i=0; $i < count($talen); $i++) 
                                            {
                                        ?>
                                            <option value="<?=$talen[$i];?>"><?=$talen[$i];?></option>
                                        <?php
                                            }
                                        ?>
                                    </select>
                                    <div class="uk-width-1-2">
                                        <div class="uk-inline">
                                            <input class="uk-button uk-button-secondary" type="submit" name="kiezen" value="Bevestig de taal!" aria-label="Not clickable icon">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <?php
                            if(isset($_POST['kiezen']))
                            {
                                $taalkeuze = $_POST['taalkeuze'];
                            }
                            include("talen/". $taalkeuze .".lang.php");
                            echo $taalkeuze .  '<br>';
                            echo $_LANG['schreeuw'];
                        ?>

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
                            <input class="uk-input" type="text" placeholder=" <?php echo $_LANG['voornaam'] ?>" name="gebruiker" aria-label="Not clickable icon">
                        </div>
                    </div>
                        <div class="uk-margin">
                            <div class="uk-inline">
                                <span class="uk-form-icon" uk-icon="icon: file-edit"></span>
                                <input class="uk-input uk-form-width-large" type="text" placeholder="<?php echo $_LANG['bericht'] ?>" name="bericht" aria-label="Not clickable icon">
                            </div>
                        </div>
                    <div class="uk-margin">
                        <div class="uk-inline">
                            <input type="submit" name="verzenden" class="uk-button uk-button-danger" value="<?php echo $_LANG['schreeuw'] ?>" aria-label="Not clickable icon">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
<?php
include 'includes/footer.php'
?>