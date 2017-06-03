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

if ($_POST) {
    // Zabezpiecz dane z formularza przed kodem HTML i ewentualnymi atakami SQL Injection
    // Nie ma konieczności filtrowania haseł, bo one i tak zostaną zahashowane przed wstawieniem
    // do bazy danych
    $login = $db->real_escape_string(htmlspecialchars(trim($_POST['login'])));
    $password = $_POST['password'];
    $passwordVerify = $_POST['password_v'];
    $email = $db->real_escape_string(htmlspecialchars(trim($_POST['email'])));
    $emailVerify = $db->real_escape_string(htmlspecialchars(trim($_POST['email_v'])));

    // Sprawdź czy podane przez użytkownika email lub login nie są zajęte
    $checkLogin = $db->query("SELECT COUNT(*) FROM users WHERE login = '$login'")->fetch_row();
    $checkEmail = $db->query("SELECT COUNT(*) FROM users WHERE email = '$email'")->fetch_row();

    // Podstawowa walidacja formularza
    $errors = array();

    if (empty($login) || empty($email) || empty($emailVerify) || empty($password) || empty($passwordVerify)) {
        $errors[] = 'Proszę wypełnić wszystkie pola';
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Podany adres e-mail jest niepoprawny';
    }

    if ($checkLogin[0] > 0) {
        $errors[] = 'Ten login jest już zajęty';
    }
    if ($checkEmail[0] > 0) {
        $errors[] = 'Ten e-mail jest już używany';
    }

    if ($password != $passwordVerify) {
        $errors[] = 'Podane hasła się nie zgadzają';
    }
    if ($email != $emailVerify) {
        $errors[] = 'Podane adresy e-mail się nie zgadzają';
    }

    // Jeśli wystąpiły jakieś błędy, to je pokaż
    if (!empty($errors)) {
        /*foreach ($errors as $error) {
            echo '<p class="error">'.$error.'</p>';
        }*/
    } else {
        // Blędów nie ma, możemy kontynuować rejestrację

        $password = password_hash($password, PASSWORD_BCRYPT); // hashowanie hasła

        // Zapisz dane do bazy
        $result = $db->query("INSERT INTO users (login, email, password) VALUES('$login', '$email', '$password')");

        if (!$result) {
           /* echo '<p class="error">Wystąpił błąd przy rejestrowaniu użytkownika.<br>'.$db->error.'</p>';*/
        } else {
           header('Location: login.php');
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Jak zrobić własnego Jackpota CS:GO na swoją stronę. Skrypt jackpot cs:go za darmo.">
    <meta name="keywords" content="Własny, jackpot, CS:GO, jak, zrobić, poradnik, darmowy">
    <meta name="author" content="jackpotcsgo.eu">
    <link rel="icon" href="img/favicon.ico">
    <title>JackpotCSGO.eu - Stwórz własnego Jackpota</title>
    
    <!--Połączenie CSS-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    
    <!--Połączenie własnego JS-->
    <script src="script.js"></script>
    
</head>
    
    <body>
        
        <!--Nawigacja-->
                <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.html">JackpotCsGo.Eu</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav">
                <li><a href="index.html">Strona Główna</a></li>
                <li class="dropdown">
                  <a href="page2.html">Pobieranie</a>
                </li>
                <li><a href="page3.html">Kontakt</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="login.php"><span class="glyphicon glyphicon-user"></span> Zaloguj</a></li>
                <li class="active"><a href="register.php"><span class="glyphicon glyphicon-log-in"></span> Zarejestruj</a></li>
              </ul>
            </div>
          </div>
        </nav>

        <!--Koniec Nawigacji-->
        
        <!--Dział Rejestracji-->
        <div class="container">
    <div class="row">
        
        
        
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="container">
    <div class="row">
		<div class="col-md-4 col-md-offset-4">
            <div class="odstep-r">
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Zarejestruj się</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form accept-charset="UTF-8" role="form" method="post" action="register.php">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="Login" maxlength="32" type="text" name="login" id="login" required>
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Hasło" type="password" name="password" id="password" required value="">
			    		</div>
                        
                        <div class="form-group">
			    			<input class="form-control" placeholder="Powtórz Hasło" type="password" name="password_v" id="password_v" required value="">
			    		</div>
                        
                        <div class="form-group">
			    			<input class="form-control" placeholder="Email"  type="email" name="email" maxlength="255" id="email" required  value="">
			    		</div>
                        
                        <div class="form-group">
			    			<input class="form-control" placeholder="Powtórz Email"  ttype="email" name="email_v" maxlength="255" id="email_v" required  value="">
			    		</div>
                        
			    		<input class="btn btn-lg btn-success btn-block" type="submit" value="Zarejestruj">
			    	</fieldset>
			      	</form>
			    </div>
			</div>
		</div>
	</div>
</div>
        </div>
	</div>
        </div>
</div>
        <div class="row">
        <div class="col-xs-12">
        
        <?php
         if (!empty($errors)) {
        foreach ($errors as $error) {
            echo '<p class="error">'.$error.'</p>';
        }
    } else {
        // Blędów nie ma, możemy kontynuować rejestrację

        $password = password_hash($password, PASSWORD_BCRYPT); // hashowanie hasła

        // Zapisz dane do bazy
        $result = $db->query("INSERT INTO users (login, email, password) VALUES('$login', '$email', '$password')");

        if (!$result) {
            
        } else {
            echo '<p class="success">'.$login.', zostałeś zarejestrowany.
            <br><a href="login.php">Logowanie</a></p>';
        }
    }
        ?>
        </div>
            </div>
        <!--Koniec Działu Pobierania-->
        
        <!--Połączenie Jquery i Javascript-->
        <script src="jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.js"></script>
       
    </body>

</html>


<?php
require 'includes/footer.php';
