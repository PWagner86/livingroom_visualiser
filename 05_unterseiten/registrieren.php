<?php

require('../04_includes/header_nav.php');
require_once('../04_includes/mysql_connection.php');

$vorname = "";
$nachname = "";
$adresse = "";
$plz = "";
$ort = "";
$email = "";
$errors = array(
    'vorname'=>'',
    'nachname'=>'',
    'adresse'=>'',
    'plz'=>'',
    'ort'=>'',
    'email'=>'',
    'passwort'=>'',
    'passwort2'=>'',
    'agb'=>''
);

if( isset($_POST['registrieren'])){

    if(empty($_POST['vorname'])){
        $errors['vorname'] = 'Bitte Vornamen eingeben';
    }else{
        $vorname = $_POST['vorname'];
        if(!trim(preg_match('/^[a-zA-Z]+$/', $vorname))){
            $errors['vorname'] = 'Bitte gültigen Vornamen eingeben';
        }
    }

    if(empty($_POST['nachname'])){
        $errors['nachname'] = 'Bitte Nachname eingeben';
    }else{
        $nachname = $_POST['nachname'];
        if(!trim(preg_match('/^[a-zA-Z]+$/', $nachname))){
            $errors['nachname'] = 'Bitte gültigen Nachnamen eingeben';
        }
    }

    if(empty($_POST['adresse'])){
        $errors['adresse'] = 'Bitte Adresse eingeben';
    }else{
        $adresse = $_POST['adresse'];
        if(!trim(filter_var($adresse, FILTER_SANITIZE_FULL_SPECIAL_CHARS))){
            $errors['adresse'] = 'Bitte gültigen Adresse eingeben';
        }
    }

    if(empty($_POST['plz'])){
        $errors['plz'] = 'Bitte Postleitzahl eingeben';
    }else{
        $plz = $_POST['plz'];
        if(!trim(filter_var($plz, FILTER_VALIDATE_INT, FILTER_SANITIZE_FULL_SPECIAL_CHARS))){
            $errors['plz'] = 'Bitte gültigen Postleitzahl eingeben';
        }
    }

    if(empty($_POST['ort'])){
        $errors['ort'] = 'Bitte Wohnort eingeben';
    }else{
        $ort = $_POST['ort'];
        if(!trim(preg_match('/^[a-zA-Z]+$/', $ort))){
            $errors['ort'] = 'Bitte gültigen Wohnort eingeben';
        }
    }

    if(empty($_POST['email'])){
        $errors['email'] = 'Bitte E-Mail eingeben';
    }else{
        $email = $_POST['email'];
        if(!trim(filter_var($email, FILTER_VALIDATE_EMAIL))){
            $errors['email'] = 'Bitte gültigen E-Mail eingeben';
        }
    }

    if(empty($_POST['passwort'])){
        $errors['passwort'] = 'Bitte Passwort eingeben';
    }else{
        $passwort_hash = trim($_POST['passwort']);
        if(!trim(($passwort_hash))){
            $errors['passwort'] = 'Bitte gültiges Passwort eingeben';
        }
    }

    if(empty($_POST['passwort2'])){
        $errors['passwort2'] = 'Bitte Passwort wiederholen';
    }else{
        $passwort2 = trim($_POST['passwort2']);
        if($passwort2 !== $passwort_hash){
            $errors['passwort2'] = 'Passwort stimmt nicht überein';
        }else{
            $passwort_hash = password_hash($passwort_hash, PASSWORD_DEFAULT);
            $passwort2 = password_hash($passwort2, PASSWORD_DEFAULT);
        }
    }

    if(!isset($_POST['agb'])){
        $errors['agb'] = 'Bitte AGB bestätigen';
    }

    if(array_filter($errors)){
        echo 'Etwas ist schief gelaufen';
    }else{
        $query = "INSERT INTO `user` (`vorname`, `nachname`, `adresse`, `plz`, `ort`, `email`, `passwort`) VALUES (?, ?, ?, ?, ?, ?, ?)";

        $statement = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($statement, 'sssisss', $vorname, $nachname, $adresse, $plz, $ort, $email, $passwort_hash);
        mysqli_stmt_execute($statement);
    
        header('Location: login.php');
    }
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
                    <?php echo '<p>'.$errors["vorname"].'</p>'?>
                </div>
                <div class="first-name-input-wrapper input-wrapper">
                    <label for="vorname">Vorname :</label>
                    <input type="text" name="vorname" value="<?php echo $vorname?>">
                </div>
            </div>
            </div>
            <div class="last-name-wrapper reg-wrapper" id="mobile-last-name">
                <div class="error">
                    <?php echo '<p>'.$errors["nachname"].'</p>'?>
                </div>

                <div class="last-name-input-wrapper input-wrapper">
                    <label for="nachname">Nachname :</label>
                    <input type="text" name="nachname" value="<?php echo $nachname?>">
                </div>
            </div>
            <div class="placeholder-wrapper reg-wrapper" id="mobile-placeholder"></div>
            </div>
            <div class="adresse-wrapper reg-wrapper" id="mobile-adresse">
                <div class="error">
                    <?php echo '<p>'.$errors["adresse"].'</p>'?>
                </div>

                <div class="adresse-input-wrapper input-wrapper">
                    <label for="adresse">Adresse :</label>
                    <input type="text" name="adresse" value="<?php echo $adresse?>">
                </div>
            </div>
            </div>
            <div class="plz-wrapper reg-wrapper" id="mobile-plz">
                <div class="error">
                    <?php echo '<p>'.$errors["plz"].'</p>'?>
                </div>

                <div class="plz-name-input-wrapper input-wrapper">
                    <label for="plz">PLZ :</label>
                    <input type="number" name="plz" value="<?php echo $plz?>">
                </div>
            </div>
            </div>
            <div class="city-wrapper reg-wrapper" id="mobile-city">
                <div class="error">
                    <?php echo '<p>'.$errors["ort"].'</p>'?>
                </div>

                <div class="city-input-wrapper input-wrapper">
                    <label for="ort">Ort :</label>
                    <input type="text" name="ort" value="<?php echo $ort?>">
                </div>
            </div>
            </div>
            <div class="email-wrapper reg-wrapper" id="mobile-email">
                <div class="error">
                    <?php echo '<p>'.$errors["email"].'</p>'?>
                </div>

                <div class="email-input-wrapper input-wrapper">
                    <label for="email">E-Mail :</label>
                    <input type="email" name="email" value="<?php echo $email?>">
                </div>
            </div>
            </div>
            <div class="password-wrapper reg-wrapper" id="mobile-password">
                <div class="error">
                    <?php echo '<p>'.$errors["passwort"].'</p>'?>
                </div>
                <div class="password-input-wrapper input-wrapper">
                    <label for="passwort">Passwort :</label>
                    <input type="password" name="passwort">
                </div>
            </div>
            <div class="second-password-wrapper reg-wrapper" id="mobile-second-password">
                <div class="error">
                    <?php echo '<p>'.$errors["passwort2"].'</p>'?>
                </div>
                <div class="second-password-input-wrapper input-wrapper">
                    <label for="passwort2">Passwort <br> wiederholen :</label>
                    <input type="password" name="passwort2">
                </div>
            </div>
            <div class="agb-wrapper reg-wrapper" id="mobile-agb">
                <div class="error">
                    <?php echo '<p>'.$errors["agb"].'</p>'?>
                </div>
                <div class="agb-input-wrapper input-wrapper">
                    <label for="agb">Ich habe die AGB gelesen :</label>
                    <input type="checkbox" name="agb">
                </div>
            </div>
            <div class="submit-wrapper reg-wrapper" id="mobile-submit">
                <input type="submit" name="registrieren" value="Registrieren">
            </div>

        </form>

    </main>



    <!-- footer ------------------------------------------------------------------>
    <?php echo createFooter('#', '#')?>
    
</body>
</html>