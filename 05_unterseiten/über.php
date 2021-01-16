<?php

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
    <link rel="stylesheet" href="../02_styling/05_über/über_style.css">
</head>
<body>

    <!-- header ------------------------------------------------------------------>
    <?=createHeader('../index.php', './login.php', '../04_includes/logout.php', './registrieren.php', './visualizer.php', './benutzer.php', '#', './news.php')?>

    <!-- main -->
    <main>
        <div class="about-titel-wrapper">
            <h3>Über</h3>
        </div>
        <div class="about-wrapper">

            <div class="pic-wrapper">

            </div>
            <h5>
                Mein Name ist <span>Peter Wagner </span> 
                <br>
                <br>
                Ich bin der Entwickler von <span>Livingroom Visualizer</span>, einem Schulprojekt, welches auf PHP,
                mySQL, HTML, Javascript und SASS basiert. Die Idee dahinter ist,
                ein CMS zu erstellen, bei dem der Benutzer verschiedene Änderungen,
                Benutzerverwaltungen, Ergänzungen usw. tätigen kann.
            </h5>
        </div>
    </main>


    <!-- footer ------------------------------------------------------------------>
    <?=createFooter('./agb.php', './kontakt.php')?>

</body>
</html>