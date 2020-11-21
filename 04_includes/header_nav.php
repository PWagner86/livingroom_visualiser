<?php

function createNav($login, $register, $about, $news){

    $nav = '
        <nav id="header-nav-mobile">;
            <ul>
                <li class="login-link"><a href='.$login.'><i class="fas fa-lock"></i>Log In</a></li>
                <li><a href='.$register.'>Registrieren</a></li>
                <li><a href='.$about.'>Über</a></li>
                <li><a href='.$news.'>News</a></li>
            </ul>
        </nav>
    ';

    return $nav;
}
?>