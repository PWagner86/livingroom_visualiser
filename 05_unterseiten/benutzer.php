<?php
session_start();
require_once('../04_includes/access.php');
require('../04_includes/header_nav.php');
require('../04_includes/mysql_connection.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once('../04_includes/meta_tag.php');?>
    <title>Benutzer</title>
    <?php require_once('../04_includes/font_links.php');?>
    <link rel="stylesheet" href="../02_styling/08_benutzer/benutzer_style.css">
</head>
<body>
    <!-- header ------------------------------------------------------------------>
    <?php echo createHeader('../index.php', '#', '../04_includes/logout.php', '#', './visualizer.php', '#', './über.php', './news.php');?>

    <main>
    
    </main>

    <!-- footer ------------------------------------------------------------------>
    <?php echo createFooter('#', '#')?>
</body>
</html>