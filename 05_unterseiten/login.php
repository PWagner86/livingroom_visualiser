<?php

require_once('../04_includes/header_nav.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <?php require_once('../04_includes/font_links.php');?>
    <link rel="stylesheet" href="../02_styling/03_login/login_style.css">
</head>
<body>
    <header>
        <div class="back-to-main">
            <a href="../index.php"><i class="fas fa-caret-left"></i>zurück zur Hauptseite</a>
        </div>
        <?php echo createNav('#', '#', '#', '#');?>
    </header>
</body>
</html>