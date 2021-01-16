<?php
session_start();
require_once('../04_includes/access.php');
require('../04_includes/header_nav.php');
require('../04_includes/mysql_connection.php');
require('../04_includes/favicon.php');

function createBtnWrapper($wrapp, $name){
    $wrapper = '
        <div class="'.$wrapp.'-wrapper btn-wrapper">
            <button class="'.$wrapp.'-btn spawn">'.$name.'</button>
            <button class="'.$wrapp.'-ctr controlle">'.$name.'<br>Controlle</button>
        </div>
    ';

    return $wrapper;
}

function createCtrWrapper($wrapp, $titel){
    $ctr = '
        <div class="move-wrapper '.$wrapp.'">
            <div class="title-wrapper">
                <h6>'.$titel.'</h6>
            </div>
            <div class="button-wrapper">
                <button class="remove-model"><i class="fas fa-times-circle"></i></button>
                <button class="right"><i class="fas fa-arrow-alt-circle-right"></i></button>
                <button class="front"><i class="fas fa-arrow-alt-circle-down"></i></button>
                <button class="rotate"><i class="fas fa-undo-alt"></i></button>
                <button class="left"><i class="fas fa-arrow-alt-circle-left"></i></button>
                <button class="back"><i class="fas fa-arrow-alt-circle-up"></i></button>
            </div>
        </div>
    ';

    return $ctr;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once('../04_includes/meta_tag.php');?>
    <?=createFavicon("../01_pics_&_logo/02_favicon")?>
    <title>Visualizer</title>
    <?php require_once('../04_includes/font_links.php');?>
    <link rel="stylesheet" href="../02_styling/07_visualizer/visualizer_style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js" defer></script>
    <script type="module" src="../03_code/02_visualizer/code.js"></script>
</head>
<body>
    <!-- header ------------------------------------------------------------------>
    <?=createHeader('../index.php', '#', '../04_includes/logout.php', '#', '#', './benutzer.php', './über.php', './news.php')?>

    <div class="scene">

        <div class="spawn-wrapper">

            <?=createBtnWrapper("gaming", "Gaming Stuhl")?>
            <?=createBtnWrapper("scify", "Sci-Fy Möbel")?>
            <?=createBtnWrapper("lounge", "Lounge")?>
            <?=createBtnWrapper("bar", "Bar")?>
            <?=createBtnWrapper("wohn", "Wohnwand")?>
            <?=createBtnWrapper("kaffee", "Kaffee-Shop")?>
            <?=createBtnWrapper("sofa", "Liege-Sofa")?>
            <?=createBtnWrapper("fort", "Kinder-Fort")?>



        </div>

        <?=createCtrWrapper("gaming", "Gaming Stuhl")?>
        <?=createCtrWrapper("sci-fy", "Sci-Fy")?>
        <?=createCtrWrapper("lounge", "Lounge")?>
        <?=createCtrWrapper("bar", "Bar")?>
        <?=createCtrWrapper("wohn", "Wohnwand")?>
        <?=createCtrWrapper("kaffee", "Kaffee-Shop")?>
        <?=createCtrWrapper("sofa", "Liege-Sofa")?>
        <?=createCtrWrapper("fort", "Kinder-Fort")?>

        <div class="mobile">
            <div class="text-wrapper">
                <h5>
                    Bildbreite nicht ausreichend.
                    Bitte drehen Sie ihr Gerät und 
                    aktualisieren Sie die Seite,
                    um den Visualizer 
                    zu sehen.
                </h5>
            </div>
            <div class="icon-wrapper">
                <i class="fas fa-mobile-alt mobile-icon"></i>
            </div>
        </div>

    </div>

    <!-- footer ------------------------------------------------------------------>
    <?=createFooter('./agb.php', './kontakt.php')?>
</body>
</html>