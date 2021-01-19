<?php

/*
--------------------------------------------------------------------------------------------------------------------------------------->
Hier wird die Session gestartet und 
die Includes geladen.
--------------------------------------------------------------------------------------------------------------------------------------->
*/
session_start();
require('../04_includes/mysql_connection.php');
require('../04_includes/header_footer_nav.php');
require('../04_includes/favicon.php');

/*
--------------------------------------------------------------------------------------------------------------------------------------->
Dieser Code sorgt dafür, dass diese Seite
nur durch den Admin aufgerufen werden kann.
--------------------------------------------------------------------------------------------------------------------------------------->
*/

if(!$_SESSION){
    header('Location: login.php');
}elseif($_SESSION['state'] !== 'Loged in as Admin'){
    die('Seite konnte nicht gefunden werden!');
}

/*
--------------------------------------------------------------------------------------------------------------------------------------->
Hier werden die User-Daten aus der Datenbank
herausgeholt.
--------------------------------------------------------------------------------------------------------------------------------------->
*/

$queryUser = "SELECT * FROM `user`";
$resultatUser = mysqli_query($conn, $queryUser);
$datenUser = array();

if($resultatUser != false){
    $datenUser = mysqli_fetch_all($resultatUser, MYSQLI_ASSOC);
}

// print_r($datenUser);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once('../04_includes/meta_tag.php');?>
    <?=createFavicon("../01_pics_&_logo/02_favicon")?>
    <title>Benutzer</title>
    <?php require_once('../04_includes/font_links.php');?>
    <link rel="stylesheet" href="../02_styling/08_benutzer/benutzer_style.css">
</head>
<body>
    <!-- header ------------------------------------------------------------------>
    <?=createHeader('../index.php', '#', '../04_includes/logout.php', '#', './visualizer.php', '#', './über.php', './news.php')?>

    <!-- main -------------------------------------------------------------------->
    <main>

        <!-- Container für Titel ------------------------------------------------->
        <div class="user-title-wrapper" id="mobile-user-title">
            <h3>Registrierte Benutzer</h3>
        </div>

        <!-- Container für versch. Kategorien ------------------------------------>
        <div class="user-wrapper" id="mobile-user-wrapper">

            <div class="title-container" id="mobile-title">
                <div class="info small"><p>ID</p></div>
                <div class="info"><p>Vorname</p></div>
                <div class="info"><p>Nachname</p></div>
                <div class="info"><p>Adresse</p></div>
                <div class="info small"><p>PLZ</p></div>
                <div class="info"><p>Ort</p></div>
                <div class="info"><p>E-Mail</p></div>
                <div class="info"><p>Registriert</p></div>
            </div>

            <!-- Container welcher die registrierten Benutzer anzeigt ----------->
            <div class="user-container-wrapper">

                <?php

                /*
                ----------------------------------------------------------------->
                Hier werden alle Benutzer aus der Datenbank in
                eine Liste eingetragen.
                ----------------------------------------------------------------->
                */
                if(count($datenUser) > 0){
                    foreach($datenUser as $user){
                ?>
                <div class="user-container" id="mobile-user">
                    <div class="user-info id-info"><p><?=$user['ID']?></p></div>
                    <div class="user-info firstname-info"><p><?=$user['vorname']?></p></div>
                    <div class="user-info lastname-info"><p><?=$user['nachname']?></p></div>
                    <div class="user-info adresse-info"><p><?=$user['adresse']?></p></div>
                    <div class="user-info plz-info"><p><?=$user['plz']?></p></div>
                    <div class="user-info ort-info"><p><?=$user['ort']?></p></div>
                    <div class="user-info email-info"><p><?=$user['email']?></p></div>
                    <div class="user-info time-info"><p><?=$user['registriert']?></p></div>
                </div>  
                <?php    
                    }
                }
                ?>
            </div>
        </div>
    </main>

    <!-- footer ------------------------------------------------------------------>
    <?=createFooter('./agb.php', './kontakt.php')?>
</body>
</html>