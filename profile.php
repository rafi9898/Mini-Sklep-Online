<?php
require 'includes/config.php';
require 'includes/header.php';

// Upewnij się że użytkownik jest zalogowany
if (!$user->check()) {
    echo '<p class="error">Przykro nam, ale ta strona jest dostępna tylko dla zalogowanych użytkowników.</p>';
    require 'includes/footer.php';
    die;
}

$id = intval($_GET['id']);
$profile = $user->data($id);

// Upewnij się, że użytkownik istnieje
if (empty($profile)) {
    echo '<p class="error">Przykro nam, ale użytkownik o podanym identyfikatorze nie istnieje.</p>';
    require 'includes/footer.php';
    die;
}

// Jeżeli skrypt doszedł do tego miejsca, to wszystko jest w porządku i można pokazać profil
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
    
    <body class="bg-profile">
        
        <!--Nawigacja-->
                <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php">JackpotCsGo.Eu</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav">
                <li><a href="index.php">Strona Główna</a></li>
                <li class="dropdown">
                  <a href="index2.php">Pobieranie</a>
                </li>
                <li><a href="index3.php">Kontakt</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
               <li class="active">
                   <a href="#"><span class="glyphicon glyphicon-user"></span> Profil</a>
                    </li>
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Wyloguj</a></li>
              </ul>
            </div>
          </div>
        </nav>

        <!--Koniec Nawigacji-->
        
        <!--Dział Profilu-->
 <div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <img src="img/avatar.jpeg" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h4>
                            Użytkownik: <?php echo $profile['login'] ?></h4>
                        <p>
                            <i class="glyphicon glyphicon-envelope"></i>E-mail: <?php echo $profile['email'] ?>
                            <br />
                            
                        
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <!--Koniec Działu Profilu-->
        
        <!--Połączenie Jquery i Javascript-->
        <script src="jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.js"></script>
        
    </body>

</html>


<?php
require 'includes/footer.php';
