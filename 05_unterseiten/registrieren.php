<?php

require('../04_includes/header_nav.php');
require_once('../04_includes/mysql_connection.php');


if( isset($_POST['vorname']) &&
    isset($_POST['nachname']) &&
    isset($_POST['adresse']) &&
    isset($_POST['plz']) &&
    isset($_POST['ort']) &&
    isset($_POST['email']) &&
    isset($_POST['passwort'])
){
    $vorname = $_POST['vorname'];
    $nachname = $_POST['nachname'];
    $adresse = $_POST['adresse'];
    $plz = $_POST['plz'];
    $ort = $_POST['ort'];
    $email = $_POST['email'];
    $passwort_hash = password_hash($_POST['passwort'], PASSWORD_DEFAULT);

    $query = "INSERT INTO `user` (`vorname`, `nachname`, `adresse`, `plz`, `ort`, `email`, `passwort`) VALUES (?, ?, ?, ?, ?, ?, ?)";

    $statement = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($statement, 'sssisss', $vorname, $nachname, $adresse, $plz, $ort, $email, $passwort_hash);
    mysqli_stmt_execute($statement);

    // header('Location: login.php');

    echo 'Sie sind registriert und können sich nun einloggen.';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrieren</title>
    <?php require_once('../04_includes/font_links.php');?>
    <link rel="stylesheet" href="../02_styling/04_registrieren/registrieren_style.css">
</head>
<body>

    <!-- header ------------------------------------------------------------------>
    <?php echo createHeader('../index.php', './login.php', '#', './über.php', './news.php');?>

    <!-- main -------------------------------------------------------------------->
    <main>

        <form action="registrieren.php" method="post">

            <div class="register-titel-wrapper" id="mobile-register-titel">
                <h3>Registrieren</h3>
            </div>
            <div class="first-name-wrapper reg-wrapper" id="mobile-first-name">
                <div class="error">

                </div>
                <div class="first-name-input-wrapper input-wrapper">
                    <label for="vorname">Vorname :</label>
                    <input type="text" name="vorname">
                </div>
            </div>
            </div>
            <div class="last-name-wrapper reg-wrapper" id="mobile-last-name">
                <div class="error">

                </div>
                <div class="last-name-input-wrapper input-wrapper">
                    <label for="nachname">Nachname :</label>
                    <input type="text" name="nachname">
                </div>
            </div>
            <div class="placeholder-wrapper reg-wrapper" id="mobile-placeholder"></div>
            </div>
            <div class="adresse-wrapper reg-wrapper" id="mobile-adresse">
                <div class="error">

                </div>
                <div class="adresse-input-wrapper input-wrapper">
                    <label for="adresse">Adresse :</label>
                    <input type="text" name="adresse">
                </div>
            </div>
            </div>
            <div class="plz-wrapper reg-wrapper" id="mobile-plz">
                <div class="error">

                </div>
                <div class="plz-name-input-wrapper input-wrapper">
                    <label for="plz">PLZ :</label>
                    <input type="number" name="plz">
                </div>
            </div>
            </div>
            <div class="city-wrapper reg-wrapper" id="mobile-city">
                <div class="error">

                </div>
                <div class="city-input-wrapper input-wrapper">
                    <label for="ort">Ort :</label>
                    <input type="text" name="ort">
                </div>
            </div>
            </div>
            <div class="email-wrapper reg-wrapper" id="mobile-email">
                <div class="error">
              
                </div>
                <div class="email-input-wrapper input-wrapper">
                    <label for="email">E-Mail :</label>
                    <input type="email" name="email">
                </div>
            </div>
            </div>
            <div class="password-wrapper reg-wrapper" id="mobile-password">
                <div class="error">

                </div>
                <div class="password-input-wrapper input-wrapper">
                    <label for="passwort">Passwort :</label>
                    <input type="password" name="passwort">
                </div>
            </div>
            <div class="second-password-wrapper reg-wrapper" id="mobile-second-password">
                <div class="error">

                </div>
                <div class="second-password-input-wrapper input-wrapper">
                    <label for="passwort2">Passwort <br> wiederholen :</label>
                    <input type="password" name="passwort2">
                </div>
            </div>
            <div class="agb-wrapper reg-wrapper" id="mobile-agb">
                <div class="error">

                </div>
                <div class="agb-input-wrapper input-wrapper">
                    <label for="agb">Ich habe die AGB gelesen :</label>
                    <input type="checkbox" name="agb">
                </div>
            </div>
            <div class="submit-wrapper reg-wrapper" id="mobile-submit">
                <input type="submit" value="Registrieren">
            </div>

        </form>

    </main>



    <!-- footer ------------------------------------------------------------------>
    <?php echo createFooter('#', '#')?>
    
</body>
</html>