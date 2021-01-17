<?php

/*
--------------------------------------------------------------------------------------------------------------------------------------->
Hier wird die Session gestartet und 
die Includes geladen
--------------------------------------------------------------------------------------------------------------------------------------->
*/
session_start();
require('../04_includes/header_nav.php');
require('../04_includes/favicon.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once('../04_includes/meta_tag.php');?>
    <?=createFavicon("../01_pics_&_logo/02_favicon")?>
    <title>Über</title>
    <?php require_once('../04_includes/font_links.php');?>
    <link rel="stylesheet" href="../02_styling/10_kontakt/kontakt_style.css">
</head>
<body>
    <!-- header ------------------------------------------------------------------>
    <?=createHeader('../index.php', './login.php', '../04_includes/logout.php', './registrieren.php', './visualizer.php', './benutzer.php', './über.php', './news.php')?>
    
    <!-- main -->
    <main>
        <div class="kontakt-title-wrapper">
            <h3>Kontakt</h3>
        </div>

        <div class="kontakt-wrapper">
            <h5>
               <span>Livingroom Visualizer AG</span> <br>
                <br>
                Peter Wagner <br>
                <br>
                +00 0123 45 67 89 <br>
                <br>
                Reicheleutestrasse $$$ <br>
                <br>
                9000 Richcity
            </h5>
        </div>
    </main>

    <!-- footer ------------------------------------------------------------------>
    <?=createFooter('./agb.php', '#')?>

</body>
</html>