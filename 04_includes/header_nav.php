<?php

function createNav($login, $register, $about, $news){

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

    return $nav;
}


function createHeader($main, $login, $register, $about, $news){

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

    return $header;
}


function createFooter($agb, $kontakt){

    $footer = '
        <footer>
            <div class="social-media-wrapper">
                <a href="https://www.linkedin.com/in/peter-wagner-925a32145/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                <a href="https://github.com/PWagner86" target="_blank"><i class="fab fa-github"></i></a>
            </div>
            <nav>
                <ul>
                    <li><a href="'.$agb.'">AGB</a></li>
                    <li><a href="'.$kontakt.'">Kontakt</a></li>
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