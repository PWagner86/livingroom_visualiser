<?php

session_start();
require('../04_includes/header_nav.php');
require_once('../04_includes/mysql_connection.php');
require_once('../04_includes/favicon.php');

$loginErr = "";
/*
-------------------------------------------------------------------------------------------->
Login Prozess wird hier gestartet
-------------------------------------------------------------------------------------------->
*/

if(isset($_POST['login'])){

    /*
    -------------------------------------------------------------------------------------------->
    Userinput wird desinfiziert und mit 
    Datenbank verglichen
    -------------------------------------------------------------------------------------------->
    */
    
    $email = trim($_POST['email']);
    $password = trim($_POST['passwort']);
    sanitizing($email, 'email');
    sanitizing($password, 'string');

    if($email == "admin@lrv.com"){
        $query = "SELECT * FROM `admin` WHERE `email` = '$email'";
        $rs = mysqli_query($conn, $query);
        $numRows = mysqli_num_rows($rs);
        // Adminpasswort ist Admin-lrv-123;
        if($numRows == 1){
            $row = mysqli_fetch_assoc($rs);
            if(password_verify($password, $row['passwort'])){
                $_SESSION['state'] = 'Loged in as Admin';
                header("Location: ../index.php");
            }else{
                $loginErr = "E-Mail oder Passwort ist falsch";
            }
        }else{
            $loginErr = "E-Mail oder Passwort ist falsch";
        }
    }else{
        $query = "SELECT * FROM `user` WHERE `email` = '$email'";
        $rs = mysqli_query($conn, $query);
        $numRows = mysqli_num_rows($rs);

        if($numRows == 1){
            $row = mysqli_fetch_assoc($rs);
            if(password_verify($password, $row['passwort'])){
                $_SESSION['state'] = 'Loged in as User';
                header("Location: ../index.php");
            }else{
                $loginErr = "E-Mail oder Passwort ist falsch";
            }
        }else{
            $loginErr = "E-Mail oder Passwort ist falsch";
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once('../04_includes/meta_tag.php');?>
    <?=createFavicon("../01_pics_&_logo/02_favicon")?>
    <title>Log In</title>
    <?php require_once('../04_includes/font_links.php');?>
    <link rel="stylesheet" href="../02_styling/03_login/login_style.css">
</head>
<body>
    <!-- header ------------------------------------------------------------------>
    <?=createHeader('../index.php', '#', '#', './registrieren.php', '#', '#', '#','./über.php', './news.php')?>

    <!-- main -------------------------------------------------------------------->
    <main>
        <?="<p class='error-msg'>$loginErr</p>";?>
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
                    <input type="email" name="email" id="">
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
                <input type="submit" name="login" value="Log In">
            </div>
        </form>
    </main>

    <!-- footer ------------------------------------------------------------------>
    <?=createFooter('./agb.php', './kontakt.php')?>
</body>
</html>