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
    <title>Visualizer</title>
    <?php require_once('../04_includes/font_links.php');?>
    <link rel="stylesheet" href="../02_styling/07_visualizer/visualizer_style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js" defer></script>
    <script type="module" src="../03_code/03_visualizer/code.js"></script>
</head>
<body>
    <!-- header ------------------------------------------------------------------>
    <?php echo createHeader('../index.php', '#', '../04_includes/logout.php', '#', '#','./über.php', './news.php');?>

    <div class="scene">
        <select name="möbel">
            <option value="text">Hier Möbel auswählen</option>
            <option value="Gaming Stuhl">Gaming Stuhl</option>
            <option value="Lounge">Lounge</option>
            <option value="Sci-Fy">Sci-Fy</option>
            <option value="Bar">Bar</option>
        </select>

        <div class="move-wrapper">
            <div class="title-wrapper">
                <h6>Lounge</h6>
            </div>
            <div class="button-wrapper">
                <button class="right"><i class="fas fa-arrow-alt-circle-right"></i></button>
                <button class="front"><i class="fas fa-arrow-alt-circle-down"></i></button>
                <button class="rotate"><i class="fas fa-undo-alt"></i></button>
                <button class="left"><i class="fas fa-arrow-alt-circle-left"></i></button>
                <button class="back"><i class="fas fa-arrow-alt-circle-up"></i></button>
            </div>
        </div>

        <ul class="remove">
        
        </ul>

    </div>
    <!-- footer ------------------------------------------------------------------>
    <?php echo createFooter('#', '#')?>
</body>
</html>