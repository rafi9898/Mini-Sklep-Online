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
        
        <!--Dział Pobierania-->
        <div class="container">
    <div class="row">
        
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="box">
                <div class="box-icon">
                    <span class="fa fa-4x fa-css3"></span>
                </div>
                <div class="info centerpay">
                    <h4 class="text-center">KUP TERAZ</h4>
                   <p class="first">Prosimy o wybranie sposobu płatności za skrypt Jackpot CS:GO</p>
                    <p>Koszt płatności to 12 zł</p>
                    <p>
                        <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=RD5E9MTT8BTBC">
                        <img src="img/paypal.jpeg" alt="Logo płatności PayPal">
                        </a>
                        <a href="index6.php">
                        <img class="second-p" src="img/sms.png" alt="Logo płatności SMS">
                        </a>    
                    </p>
                    
                    <a href="index2.php" class="btn">Powrót</a>
                </div>
            </div>
        </div>
	</div>
</div>
        <!--Koniec Działu Pobierania-->
        
        <!--Połączenie Jquery i Javascript-->
        <script src="jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.js"></script>
        
    </body>

</html>