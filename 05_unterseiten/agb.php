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
    <link rel="stylesheet" href="../02_styling/09_agb/agb_style.css">
</head>
<body>
    <!-- header ------------------------------------------------------------------>
    <?=createHeader('../index.php', './login.php', '../04_includes/logout.php', './registrieren.php', './visualizer.php', './benutzer.php', './über.php', './news.php')?>
    
    <!-- main -->
    <main>
    
    </main>

    <!-- footer ------------------------------------------------------------------>
    <?=createFooter('#', './kontakt.php')?>

</body>
</html>