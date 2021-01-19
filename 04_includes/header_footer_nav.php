<?php

// Navigation für unregistrierte User auf Startseite.
function createNav($login, $logout, $register, $visualizer, $benutzer, $about, $news){
    if(!$_SESSION){
        $nav = '
            <nav id="header-nav-mobile">
                <ul>
                    <li class="login-link"><a href='.$login.'><i class="fas fa-lock"></i>Log In</a></li>
                    <li class="registrieren-link"><a href='.$register.'>Registrieren</a></li>
                    <li class="about-link"><a href='.$about.'>Über</a></li>
                    <li class="news-link"><a href='.$news.'>News</a></li>
                </ul>
            </nav>
        ';
    // Navigation für registrierte User auf Startseite.
    }else if($_SESSION['state'] && $_SESSION['state'] === 'Loged in as User'){
        $nav = '
            <nav id="header-nav-mobile">
                <ul>
                    <li class="login-link"><a href='.$logout.'><i class="fas fa-lock-open"></i></i>Log Out</a></li>
                    <li class="visualizer-link"><a href='.$visualizer.'>Visualizer</a></li>
                    <li class="about-link"><a href='.$about.'>Über</a></li>
                    <li class="news-link"><a href='.$news.'>News</a></li>
                </ul>
            </nav>
        ';
    // Navigation für Admin-Ansicht auf Startseite.
    }else if($_SESSION['state'] && $_SESSION['state'] === 'Loged in as Admin'){
        $nav = '
            <nav id="header-nav-mobile">
                <ul>
                    <li class="login-link"><a href='.$logout.'><i class="fas fa-lock-open"></i></i>Log Out</a></li>
                    <li class="visualizer-link"><a href='.$visualizer.'>Visualizer</a></li>
                    <li class="benutzer-link"><a href='.$benutzer.'>Benutzer</a></li>
                    <li class="about-link"><a href='.$about.'>Über</a></li>
                    <li class="news-link"><a href='.$news.'>News</a></li>
                </ul>
            </nav>
        ';
    }

    return $nav;
}


function createHeader($main, $login, $logout, $register, $visualizer, $benutzer, $about, $news){

    // Header für unregistrierte User.
    if(!$_SESSION){
        $header = '
            <header>
                <div class="fade">
                    <div class="back-to-main">
                        <a href="'.$main.'"><i class="fas fa-caret-left"></i>Startseite</a>
                    </div>
                    <nav id="header-nav-mobile">;
                        <ul>
                            <li class="login-link"><a href='.$login.'><i class="fas fa-lock"></i>Log In</a></li>
                            <li class="registrieren-link"><a href='.$register.'>Registrieren</a></li>
                            <li class="about-link"><a href='.$about.'>Über</a></li>
                            <li class="news-link"><a href='.$news.'>News</a></li>
                        </ul>
                    </nav>
                </div>
            </header>
        ';
    // Header für registrierte User.
    }else if($_SESSION['state'] && $_SESSION['state'] === 'Loged in as User'){
        $header = '
            <header>
                <div class="fade">
                    <div class="back-to-main">
                        <a href="'.$main.'"><i class="fas fa-caret-left"></i>Startseite</a>
                    </div>
                    <nav id="header-nav-mobile">;
                        <ul>
                            <li class="login-link"><a href='.$logout.'><i class="fas fa-lock-open"></i></i>Log Out</a></li>
                            <li class="visualizer-link"><a href='.$visualizer.'>Visualizer</a></li>
                            <li class="about-link"><a href='.$about.'>Über</a></li>
                            <li class="news-link"><a href='.$news.'>News</a></li>
                        </ul>
                    </nav>
                </div>
            </header>
        ';
    // Header für Admin-Ansicht.
    }else if($_SESSION['state'] && $_SESSION['state'] === 'Loged in as Admin'){
        $header = '
            <header>
                <div class="fade">
                    <div class="back-to-main">
                        <a href="'.$main.'"><i class="fas fa-caret-left"></i>Startseite</a>
                    </div>
                    <nav id="header-nav-mobile">;
                        <ul>
                            <li class="login-link"><a href='.$logout.'><i class="fas fa-lock-open"></i></i>Log Out</a></li>
                            <li class="visualizer-link"><a href='.$visualizer.'>Visualizer</a></li>
                            <li class="benutzer-link"><a href='.$benutzer.'>Benutzer</a></li>
                            <li class="about-link"><a href='.$about.'>Über</a></li>
                            <li class="news-link"><a href='.$news.'>News</a></li>
                        </ul>
                    </nav>
                </div>
            </header>
        ';
    }


    return $header;
}


function createFooter($agb, $kontakt){
    
    // Footer für alle User und Admin
    $footer = '
        <footer>
            <div class="social-media-wrapper">
                <a href="https://www.linkedin.com/in/peter-wagner-925a32145/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                <a href="https://github.com/PWagner86" target="_blank"><i class="fab fa-github"></i></a>
            </div>
            <nav>
                <ul>
                    <li class="agb-link"><a href="'.$agb.'">AGB</a></li>
                    <li class="kontakt-link"><a href="'.$kontakt.'">Kontakt</a></li>
                </ul>
            </nav>
            <div class="copyright-wrapper">
                <i class="far fa-copyright"></i>
                <p>Copyright by Peter Wagner</p>
            </div>
        </footer>
    ';

    return $footer;
}

?>