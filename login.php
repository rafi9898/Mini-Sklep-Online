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

// Zabezpiecz zmienne odebrane z formularza, przed atakami SQL Injection
$login = $db->real_escape_string(htmlspecialchars(trim($_POST['login'])));
$password = $_POST['password'];

/*if ($_POST) {
    // Podstawowa walidacja formularza
    $errors = array();

    if (empty($login) || empty($password)) {
        $errors[] = 'Wypełnij wszystkie pola';
    }

    $auth = $user->auth($login, $password);
    if (!$auth) {
        $errors[] = 'Użytkownik o podanym loginie i haśle nie istnieje';
    }


    if (empty($errors)) {
        // Jeżeli nie ma błędów to przechodzimy dalej
        // Zapisujemy ID użytkownika do sesji i tym samym oznaczamy go jako zalogowanego
        $_SESSION['user_id'] = $auth;

        echo '<p class="success">Zostałeś zalogowany. Możesz przejść na <a href="index.php">stronę główną</a></p>';
    } else {
        foreach ($errors as $error) {
            echo '<p class="error">'.$error.'</p>';
        }
    }
}*/
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
                <li class="active"><a href="login.php"><span class="glyphicon glyphicon-user"></span> Zaloguj</a></li>
                <li><a href="register.php"><span class="glyphicon glyphicon-log-in"></span> Zarejestruj</a></li>
              </ul>
            </div>
          </div>
        </nav>

        <!--Koniec Nawigacji-->
        
        <!--Dział Logowania-->
        <div class="odstep-l">
        
        <div class="container">
    <div class="row">
        
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
         <div class="container">
    <div class="row">
		<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Zaloguj się</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form accept-charset="UTF-8" role="form" method="post" action="login.php">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="Login" type="text" name="login" maxlength="32" id="login" required>
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Hasło" type="password" name="password" id="password" required value="">
			    		</div>
			    		
			    		<input class="btn btn-lg btn-success btn-block" type="submit" value="Zaloguj">
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
        
        <?php
         if ($_POST) {
    // Podstawowa walidacja formularza
    $errors = array();

    if (empty($login) || empty($password)) {
        $errors[] = 'Wypełnij wszystkie pola';
    }

    $auth = $user->auth($login, $password);
    if (!$auth) {
        $errors[] = 'Użytkownik o podanym loginie lub haśle nie istnieje';
    }


    if (empty($errors)) {
        // Jeżeli nie ma błędów to przechodzimy dalej
        // Zapisujemy ID użytkownika do sesji i tym samym oznaczamy go jako zalogowanego
        $_SESSION['user_id'] = $auth;

        header('Location: index.php');
    } else {
        foreach ($errors as $error) {
            echo '<p class="error">'.$error.'</p>';
        }
    }
}
        ?>
        
        <!--Koniec Działu Pobierania-->
        
        <!--Połączenie Jquery i Javascript-->
        <script src="jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.js"></script>
        
    </body>

</html>


<?php
require 'includes/footer.php';
