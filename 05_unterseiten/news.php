<?php

require('../04_includes/header_nav.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
    <?php require_once('../04_includes/font_links.php');?>
    <link rel="stylesheet" href="../02_styling/06_news/news_style.css">
</head>
<body>

    <!-- header ------------------------------------------------------------------>
    <?php echo createHeader('../index.php', './login.php', './registrieren.php', './über.php', '#');?>

    <!-- main -->
    <main>
        <div class="news-titel-wrapper">
            <h3>News</h3>
        </div>
        <div class="news-wrapper">
            <div class="news-container">
                <div class="pic-container">
                    <img src="../01_pics_&_logo/01_impressionen/imp0.jpg" alt="Testbild">
                </div>
                <div class="text-container">
                    <h6>Placeholder-Titel</h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id et explicabo aliquid expedita corporis vero quisquam exercitationem aperiam, nulla quae tenetur nesciunt doloribus officia excepturi ratione voluptatem. Ipsam, sapiente cumque!</p>
                </div>
            </div>
            <div class="news-container">
                <div class="pic-container">
                    <img src="../01_pics_&_logo/01_impressionen/imp1.jpg" alt="Testbild">
                </div>
                <div class="text-container">
                    <h6>Placeholder-Titel</h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id et explicabo aliquid expedita corporis vero quisquam exercitationem aperiam, nulla quae tenetur nesciunt doloribus officia excepturi ratione voluptatem. Ipsam, sapiente cumque!</p>
                </div>
            </div>
            <div class="news-container">
                <div class="pic-container">
                    <img src="../01_pics_&_logo/01_impressionen/imp6.jpg" alt="Testbild">
                    <img src="../01_pics_&_logo/01_impressionen/imp7.jpg" alt="Testbild">
                    <img src="../01_pics_&_logo/01_impressionen/imp8.jpg" alt="Testbild">
                </div>
                <div class="text-container">
                    <h6>Placeholder-Titel</h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id et explicabo aliquid expedita corporis vero quisquam exercitationem aperiam, nulla quae tenetur nesciunt doloribus officia excepturi ratione voluptatem. Ipsam, sapiente cumque!</p>
                </div>
            </div>
            <div class="news-container">
                <div class="pic-container">
                    <img src="../01_pics_&_logo/01_impressionen/imp0.jpg" alt="Testbild">
                    <img src="../01_pics_&_logo/01_impressionen/imp1.jpg" alt="Testbild">
                </div>
                <div class="text-container">
                    <h6>Placeholder-Titel</h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id et explicabo aliquid expedita corporis vero quisquam exercitationem aperiam, nulla quae tenetur nesciunt doloribus officia excepturi ratione voluptatem. Ipsam, sapiente cumque!</p>
                </div>
            </div>
            <div class="news-container">
                <div class="pic-container">
                    <img src="../01_pics_&_logo/01_impressionen/imp2.jpg" alt="Testbild">
                </div>
                <div class="text-container">
                    <h6>Placeholder-Titel</h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id et explicabo aliquid expedita corporis vero quisquam exercitationem aperiam, nulla quae tenetur nesciunt doloribus officia excepturi ratione voluptatem. Ipsam, sapiente cumque!</p>
                </div>
            </div>


        </div>
    </main>


    <!-- footer ------------------------------------------------------------------>
    <?php echo createFooter('#', '#')?>

</body>
</html>