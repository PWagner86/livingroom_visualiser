<?php

session_start();
require('../04_includes/mysql_connection.php');
require('../04_includes/header_nav.php');

$query = "SELECT * FROM news";
$result = mysqli_query($conn, $query);
$news = array();
// print_r($result);
if($result != false){
    $news = mysqli_fetch_all($result, MYSQLI_ASSOC);
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
            <?php
            if(count($news) > 0){
                foreach($news as $article){
            ?>
            <div class="article">
                <div class="news-title-wrapper">
                    <h6><?=$article['titel']?></h6>
                </div>
                <div class="news-date-wrapper">
                    <h6><?=$article['datum']?></h6>
                </div>
                <div class="news-text">
                    <?=$article['artikel']?>
                </div>
            </div>
            <?php
                }
            }
            ?>

        </div>
    </main>


    <!-- footer ------------------------------------------------------------------>
    <?php echo createFooter('#', '#')?>
    
    <!-- script ------------------------------------------------------------------>
    <script>

        let news = document.querySelector(".news-wrapper");
        let newsDate = document.querySelectorAll(".news-date-wrapper h6");
        let year = [];
        let month = [];
        let day = [];
        // console.log(newsDate);
        // Dieser Code stellt das Datum in die richtige Reihenfolge -------------->
        newsDate.forEach(date => {
            let dateInfo = date.innerHTML
            dateInfo = dateInfo.split('');
            // console.log(dateInfo);
            year = dateInfo.splice(0, 4);
            month = dateInfo.splice(0, 4);
            day = dateInfo.splice(0, 2);
            // console.log(year);
            // console.log(month);
            // console.log(day);

            dateInfo = day.concat(month, year).join('');
            // console.log(dateInfo);
            date.innerHTML = dateInfo;
        })



    </script>
</body>
</html>