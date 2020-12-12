<?php

require('../04_includes/header_nav.php');
require('../04_includes/mysql_connection.php');
session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizer</title>
    <?php require_once('../04_includes/font_links.php');?>
    <link rel="stylesheet" href="../02_styling/07_visualizer/visualizer_style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js" defer></script>
    <script src="../03_code/03_visualizer/GLTFLoader.js" defer></script>
    <script src="../03_code/03_visualizer/OrbitControls.js" defer></script>
    <script src="../03_code/03_visualizer/code.js" defer></script>
</head>
<body>
    <!-- header ------------------------------------------------------------------>
    <?php echo createHeader('../index.php', '#', '../04_includes/logout.php', '#', '#','./über.php', './news.php');?>
    <div class="scene">
    </div>
    <!-- footer ------------------------------------------------------------------>
    <?php echo createFooter('#', '#')?>
</body>
</html>