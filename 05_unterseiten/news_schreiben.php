<?php

session_start();
require_once('../04_includes/access_admin.php');
require('../04_includes/mysql_connection.php');
require('../04_includes/header_nav.php');

if(isset($_POST['enter'])){

    $title = $_POST['title'];
    $date = $_POST['date'];
    $text = $_POST['article'];

    if(!empty($title) || !empty($date) ||!empty($text)){

        mysqli_query($conn, "INSERT INTO news(titel, datum, artikel) VALUES('".$title."','".$date."','".$text."')");
    }

    header('location: news.php');
}

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
            <h3>Neuer Artikel schreiben</h3>
        </div>
        <div class="news-wrapper write-wrapper">
            <form class="write" action="news_schreiben.php" method="post">
                
                <div class="title-wrapper">
                    <label for="title">Titel :</label>
                    <input type="text" name="title" id="titel">
                </div>

                <div class="date-wrapper">
                    <label for="date">Datum :</label>
                    <input type="date" name="date" id="datum">
                </div>

                <div class="text-wrapper">
                    <label for="article">Artikel :</label>
                    <textarea name="article" id="article"></textarea>
                </div>

                <div class="btn-wrapper">
                    <input type="submit" name="enter" value="Enter">
                </div>
            
            </form>

        </div>
    </main>


    <!-- footer ------------------------------------------------------------------>
    <?php echo createFooter('#', '#')?>

</body>
</html>