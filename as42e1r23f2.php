<?php
/*
   +----------------------------------------------------------------------+
   | Sobak User System 2                                                  |
   +----------------------------------------------------------------------+
   | www.forumweb.pl/a/b/487677                                           |
   +----------------------------------------------------------------------+
   | Ten plik jest częścią skryptu Sobak User System 2 <sobak.pl>         |
   | Integrowanie w treść tego komentarza stanowi naruszenie zasad, na    |
   | których udostępniono kod.                                            |
   +----------------------------------------------------------------------+
*/

require 'includes/config.php';
require 'includes/header.php';


if ($user->check()) { // Tylko dla użytkowników zalogowanych
    // Pobierz dane o użytkowniku i zapisz je do zmiennej $userData
    $userData = $user->data();
    
    require 'success.php';
   
} else {
    // Widok dla użytkownika niezalogowanego
    echo '<p>Nie jesteś zalogowany.<br><a href="login.php">Zaloguj</a> się lub <a href="register.php">zarejestruj</a> jeśli jeszcze nie masz konta.</p>';
}

require 'includes/footer.php';
