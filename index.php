<?php



?>


<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livingroom Visualizer</title>
    <?php require_once('./04_includes/font_links.php');?>
    <link rel="stylesheet" href="./02_styling/02_startseite/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js" defer></script>
    <script src="./03_code/01_startseite/start_code.js" defer></script>
</head>
<body>

    <!-- header mit Titel ------------------------------------------------------------------------------------------------------------>
    <header>
        <div class="fade">

            <!-- navigation ---------------------------------------------------------------------------------------------------------->      
            <nav>
                <ul>
                    <li>Platzhalter</li>
                    <li>Platzhalter</li>
                    <li>Platzhalter</li>
                    <li>Platzhalter</li>
                </ul>
            </nav>

            <!-- Titel-Container ----------------------------------------------------------------------------------------------------->
            <div class="titel-wrapper">
                <h1>Livingroom Viszalizer</h1>
            </div>
        </div>
    </header>

    <!-- main ------------------------------------------------------------------------------------------------------------------------>
    <main>

        <!-- Logo-Container ---------------------------------------------------------------------------------------------------------->
        <div class="logo-wrapper">
            <img src="./01_pics_&_logo/logo.png" alt="Logo der Seite">
        </div>

        <!-- Text-Container ---------------------------------------------------------------------------------------------------------->
        <div class="intro-text-wrapper">
            <h5>
                Wir sind Livingroom Visualizer. Mit unserer App können Sie Ihr Wohnzimmer in einer 3D Umgebung 
                gestallten und einrichten. Der Fantasie sind keine Grenzen gesetzt. Ihre Vision wird auf Ihrem Profil 
                gespeichert und Sie können genau bestimmen, wie Sie Ihr künftiges Wohnzimmer einrichten wollen. Melden Sie sich noch heute an.
            </h5>
        </div>
    </main>

    <!-- Impressionen ----------------------------------------------------------------------------------------------------------------->
    <section class="impressions-wrapper">

        <!-- Titel-Container von Impressionen ----------------------------------------------------------------------------------------->
        <div class="imp-titel-wrapper">
            <h2>Impressionen</h2>
        </div>

        <!-- Bilder-Gallerie-Container ----------------------------------------------------------------------------------------------->
        <div class="carusell-container">

            <div class="carusell-left">
                <button class="left"><</button>
            </div>

            <div class="carusell-wrapper">
                <div class="carusell">

                </div>
            </div>

            <div class="carusell-left">
                <button class="right">></button>
            </div>

        </div>

    </section>


    <!-- footer ---------------------------------------------------------------------------------------------------------------------->
    <footer>

    </footer>

</body>
</html>