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
              <a class="navbar-brand" href="index.php">JackpotCsGo.Eu</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav">
                <li><a href="index.php">Strona Główna</a></li>
                <li class="dropdown active">
                  <a href="index2.php">Pobieranie</a>
                </li>
                <li><a href="index3.php">Kontakt</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><?php
                    echo '<a href="profile.php?id='.$userData['id'].'"><span class="glyphicon glyphicon-user"></span> Profil</a>'
                    ?></li>
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Wyloguj</a></li>
              </ul>
            </div>
          </div>
        </nav>

        <!--Koniec Nawigacji-->
        
        <script language="JavaScript" type="text/javascript">
            setTimeout(function () {
            window.location.href = "Jackpot-CS-GO.rar";
            }, 1300); // Czas, po którym nastąpi przekierowanie
            

        </script>
        
        <!--Płatność Anulowana-->
        <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="offer offer-success">
                    <div class="shape">
                        <div class="shape-text">Success</div>
                    </div>
                    <div class="offer-content">
                        <h3 class="lead text-center">
                            <div class="success-m">Transakcja została zakończona powodzenie!</div> 
                            
                            <p class="first">Za chwilę nastąpi pobieranie pliku, w którym będzie znajdował się cały skrypt jackpot csgo.</p>
                            <p>Jeśli pobieranie nie nastąpi prosimy kliknąć w ten link: <a href="Jackpot-CS-GO.rar">Kliknij Tutaj!</a></p>
                            <p>Dziękujemy za zakup!</p>
                        </h3>
                    </div>
                </div>
		  </div>
        </div>
        </div>
        <!--Koniec Płatności Anulowanej-->
        
        <!--Połączenie Jquery i Javascript-->
        <script src="jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.js"></script>
        
    </body>

</html>