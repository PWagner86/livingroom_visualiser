<?php

session_start();
require('../04_includes/mysql_connection.php');
require('../04_includes/header_nav.php');
require('../04_includes/favicon.php');

$query = "SELECT * FROM news";
$result = mysqli_query($conn, $query);
$news = array();
// print_r($result);
if($result != false){
    $news = mysqli_fetch_all($result, MYSQLI_ASSOC);
}

if(isset($_POST['delete'])){
    $cleanId = sanitizing($_POST['delete'], 'string');
    // echo $cleanId;
    $sqldelete = "DELETE FROM news WHERE id=".$cleanId;
    $resultDelete = mysqli_query($conn, $sqldelete);
    header('location: news.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once('../04_includes/meta_tag.php');?>
    <?=createFavicon("../01_pics_&_logo/02_favicon")?>
    <title>News</title>
    <?php require_once('../04_includes/font_links.php');?>
    <link rel="stylesheet" href="../02_styling/06_news/news_style.css">
    <script src="../03_code/04_news/news.js" defer></script>
</head>
<body>

    <!-- header ------------------------------------------------------------------>
    <?=createHeader('../index.php', './login.php', '../04_includes/logout.php', './registrieren.php', './visualizer.php', './benutzer.php', './über.php', '#')?>

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
            }

            ?>
        </div>
        <div class="news-wrapper">
            <?php
            if(count($news) > 0){
                foreach($news as $article){
                    if(!$_SESSION || $_SESSION['state'] && $_SESSION['state'] === 'Loged in as User'){?>
                        <div class="article">
                            <form action="news.php" method="post">
                                <div class="news-title-wrapper">
                                    <h6><?=$article['titel']?></h6>
                                </div>
                                <div class="news-date-wrapper">
                                    <h6><?=$article['datum']?></h6>
                                </div>
                                <div class="news-text">
                                    <?=$article['artikel']?>
                                </div>
                            </form>
                        </div>
                    <?php
                    }elseif($_SESSION['state'] && $_SESSION['state'] === 'Loged in as Admin'){
                    ?>
                        <div class="article">
                            <form action="news.php" method="post">
                                <div class="news-title-wrapper">
                                    <input type="hidden" name="hiddenID" value="<?=$article['ID']?>">
                                    <h6><?=$article['titel']?></h6>
                                </div>
                                <div class="news-date-wrapper">
                                    <h6><?=$article['datum']?></h6>
                                </div>
                                <div class="news-text">
                                    <?=$article['artikel']?>
                                </div>
                                <div class="edit">
                                    <a href="./news_update.php?id=<?=$article['ID']?>"><i class='fas fa-edit'></i></a>
                                    <button value="<?=$article['ID']?>" class="delete-btn" type='submit' name='delete'><i class='fas fa-trash-alt'></i></button>
                                </div>
                            </form>
                        </div>
                    <?php
                    }
                }
            }
            ?>
        </div>
    </main>

    <!-- footer ------------------------------------------------------------------>
    <?=createFooter('#', '#')?>
    
</body>
</html>