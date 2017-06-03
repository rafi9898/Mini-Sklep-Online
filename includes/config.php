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

$config['db_host'] = 'localhost'; // Serwer bazy danych
$config['db_user'] = ''; // Nazwa użytkownika
$config['db_pass'] = ''; // Hasło
$config['db_name'] = ''; // Nazwa bazy danych


// Kodu znajdującego się poniżej prawdopodobnie nie powinieneś dotykać
$db = new mysqli($config['db_host'], $config['db_user'], $config['db_pass'], $config['db_name']);

if ($db->errno) {
    die ('<p class="error">Nie udało się połączyć z bazą danych.</p>');
}

session_start();

require 'password.php';
require 'User.php';

$user = new User($db);
