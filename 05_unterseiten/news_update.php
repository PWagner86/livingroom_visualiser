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
Hier wird die ID "desinfiziert", um die
Seite vor Hackerangriffen zu schützen.
--------------------------------------------------------------------------------------------------------------------------------------->
*/

if(isset($_GET['id'])){
    $cleanId = sanitizing($_GET['id'], 'string');
}elseif(isset($_POST['hiddenID'])){
    $cleanId = sanitizing($_POST['hiddenID'], 'string');
}else{
    die("Seite konnte nicht gefunden werden!");
}

// Beitrag wird upgedatet
if(isset($_POST['enter'])){
    $idUpdate = $_POST['hiddenID'];
    $title = $_POST['title'];
    $date = $_POST['date']; 
    $article = $_POST['article'];

    if($title != ''){
        $query2 = "UPDATE news SET titel='".$title."', datum='".$date."', artikel='".$article."' WHERE ID = $idUpdate";
        mysqli_query($conn, $query2);
        header('location: ./news.php');
    }
}

// Daten zum Beitrag werden aus Datenbank geholt
$query1 = "SELECT * FROM news WHERE ID=".$cleanId;
$result1 = mysqli_query($conn, $query1);
if(mysqli_num_rows($result1) > 0){
    while($row = mysqli_fetch_assoc($result1)){
        $idDB = $row['ID'];
        $titleDB = $row['titel'];
        $dateDB = $row['datum'];
        $articleDB = $row['artikel'];
    }
}else{
    die("Beitrag konnte nicht gefunden werden!");
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
    <script src="../03_code/03_news/ckeditor/ckeditor.js" defer></script>
    <script src="../03_code/03_news/edit.js" defer></script>
</head>
<body>

    <!-- header ------------------------------------------------------------------>
    <?=createHeader('../index.php', './login.php', '../04_includes/logout.php', './registrieren.php', './visualizer.php', './benutzer.php', './über.php', './news.php');?>

    <!-- main -------------------------------------------------------------------->
    <main>
        <div class="news-titel-wrapper">
            <h3>Artikel editieren</h3>
        </div>
        <div class="news-wrapper write-wrapper">
            <form class="write" action="news_update.php" method="post">
                
                <div class="title-wrapper">
                    <label for="title">Titel :</label>
                    <input type="text" name="title" id="titel" value="<?=$titleDB?>">
                    <input type="hidden" name="hiddenID" value="<?=$idDB?>">
                </div>

                <div class="date-wrapper">
                    <label for="date">Datum :</label>
                    <input type="date" name="date" id="datum" value="<?=$dateDB?>">
                </div>

                <div class="text-wrapper">
                    <label for="article">Artikel :</label>
                    <textarea name="article" id="article"><?=$articleDB?></textarea>
                </div>

                <div class="btn-wrapper">
                    <input type="submit" name="enter" value="Enter">
                </div>
            
            </form>
        </div>
    </main>


    <!-- footer ------------------------------------------------------------------>
    <?=createFooter('./agb.php', './kontakt.php')?>

</body>
</html>