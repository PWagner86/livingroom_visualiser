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
    <?php echo createHeader('../index.php', './login.php', '../04_includes/logout.php', './registrieren.php', './visualizer.php', './benutzer.php', './über.php', './news.php');?>

    <!-- main -->
    <main>
        <div class="news-titel-wrapper">
            <h3>Artikel editieren</h3>
        </div>
        <div class="news-wrapper">


        </div>
    </main>


    <!-- footer ------------------------------------------------------------------>
    <?php echo createFooter('#', '#')?>

</body>
</html>