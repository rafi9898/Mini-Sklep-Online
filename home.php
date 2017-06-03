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
                <li class="active"><a href="index.php">Strona Główna</a></li>
                <li class="dropdown">
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
        
        <!--Slider-->
        <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
          <!-- Overlay -->
          <div class="overlay"></div>

          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#bs-carousel" data-slide-to="1"></li>
            <li data-target="#bs-carousel" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item slides active">
              <div class="slide-1"></div>
              <div class="hero">
                <hgroup>
                    <h1>Własny Jackpot</h1>        
                    <h3>Z nami zbudujesz swojego własnego jackpota!</h3>
                </hgroup>
                <button class="btn btn-hero btn-lg" role="button">Pobierz Teraz</button>
              </div>
            </div>
            <div class="item slides">
              <div class="slide-2"></div>
              <div class="hero">        
                <hgroup>
                    <h1>Oferujemy Pomoc</h1>        
                    <h3>Oferujemy możliwość pomocy przy instalacji</h3>
                </hgroup>       
                <button class="btn btn-hero btn-lg" role="button">Pobierz Teraz</button>
              </div>
            </div>
            <div class="item slides">
              <div class="slide-3"></div>
              <div class="hero">        
                <hgroup>
                    <h1>Panel Administracyjny</h1>        
                    <h3>Sam zarządzasz swoim Jackpotem!</h3>
                </hgroup>
                <button class="btn btn-hero btn-lg" role="button">Pobierz Teraz</button>
              </div>
            </div>
          </div> 
        </div>
        <!--Koniec Slidera-->
        
        <!--Połączenie Jquery i Javascript-->
        <script src="jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.js"></script>
        
    </body>

</html>