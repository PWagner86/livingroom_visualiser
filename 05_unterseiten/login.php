<?php

require('../04_includes/header_nav.php');

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
    <!-- header ------------------------------------------------------------------>
    <?php echo createHeader('../index.php', '#', './registrieren.php', '#', '#');?>

    <!-- main -------------------------------------------------------------------->
    <main>

        <!-- form ---------------------------------------------------------------->
        <form action="login.php" method="post">
            <div class="login-titel-wrapper">
                <h3>Log In</h3>
            </div>
            <div class="email-wrapper">
                <div class="error">

                </div>
                <div class="email-input-wrapper input-wrapper">
                    <label for="email">E-Mail :</label>
                    <input type="text" name="benutzername" id="">
                </div>
            </div>
            <div class="password-wrapper">
                <div class="error">

                </div>
                <div class="password-input-wrapper input-wrapper">
                    <label for="passwort">Passwort :</label>
                    <input type="password" name="passwort" id="">
                </div>
            </div>
            <div class="submit-wrapper">
                <input type="submit" value="Log In">
            </div>
        </form>
    </main>

    <!-- footer ------------------------------------------------------------------>
    <?php echo createFooter('#', '#')?>
</body>
</html>