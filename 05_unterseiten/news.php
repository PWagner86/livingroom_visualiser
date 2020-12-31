<?php

session_start();
require('../04_includes/mysql_connection.php');
require('../04_includes/header_nav.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once('../04_includes/meta_tag.php');?>
    <title>News</title>
    <?php require_once('../04_includes/font_links.php');?>
    <link rel="stylesheet" href="../02_styling/06_news/news_style.css">
    <script src="../03_code/04_news/ckeditor/ckeditor.js" defer></script>
    <script src="../03_code/04_news/edit.js" defer></script>
</head>
<body>

    <!-- header ------------------------------------------------------------------>
    <?php echo createHeader('../index.php', './login.php', '../04_includes/logout.php', './registrieren.php', './visualizer.php', './benutzer.php', './über.php', '#');?>

    <!-- main -------------------------------------------------------------------->
    <main>

        <!-- Container für Titel ------------------------------------------------->
        <div class="news-titel-wrapper">
            
            <?php
            /*
            ---------------------------------------------------------------------->
            Wenn der Admin sich einlogged, kann er hier neue
            Artikel schreiben oder alte editieren. Diese Optionen
            erscheinen nur für den Admin. Registrierte Besucher sehen
            hier nur den Titel "News".
            ---------------------------------------------------------------------->
            */
            if(!$_SESSION || $_SESSION['state'] && $_SESSION['state'] === 'Loged in as User'){
                echo "<h3>News</h3>";
            }elseif($_SESSION['state'] && $_SESSION['state'] === 'Loged in as Admin'){
                echo "<h3>News</h3>";
                echo "<h4><a href='./news_schreiben.php'>Neuer Artikel</a></h4>";
                echo "<h4><a href='./news_update.php'>Artikel editieren</a></h4>";
            }
            ?>
        </div>
        <div class="news-wrapper">

        </div>
    </main>


    <!-- footer ------------------------------------------------------------------>
    <?php echo createFooter('#', '#')?>

</body>
</html>