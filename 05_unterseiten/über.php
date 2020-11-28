<?php

require('../04_includes/header_nav.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Über</title>
    <?php require_once('../04_includes/font_links.php');?>
    <link rel="stylesheet" href="../02_styling/05_über/über_style.css">
</head>
<body>

    <!-- header ------------------------------------------------------------------>
    <?php echo createHeader('../index.php', './login.php', './registrieren.php', '#', './news.php');?>

    <!-- main -->
    <main>
        <div class="about-titel-wrapper">
            <h3>Über</h3>
        </div>
        <div class="about-wrapper">
            
        </div>
    </main>


    <!-- footer ------------------------------------------------------------------>
    <?php echo createFooter('#', '#')?>

</body>
</html>