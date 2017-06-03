<?php

	error_reporting(E_ALL);

	ini_set('error_reporting', E_ALL);
	ini_set("display_errors", 1);

	$settings = array(
		/* 
			@nazwa:	userid
			@opis: numer identyfikacyjny partnera nadawany po zarejestrowaniu konta (dostępny po zalogowaniu).
		*/
		'userid' => '',
		/*
			@nazwa: serviceid
			@opis: numer identyfikacyjny kanału SKS dostępny w sekcji "Kanały SMS Premium" 
		*/
		'serviceid' => '',
		/*
			@nazwa: text
			@opis: treść wiadomości, która zostaje zainicjowana przez partnera w panelu. Pamiętaj, że błąd powoduje nierozliczenie płatności!
		*/
		'text' => 'MSMS.CSGOEU',
		/*
			@nazwa: number
			@opis: numer z gamy zainicjowanych w panelu partnera
		*/
		'number' => '91400',-
		/*
			@nazwa: cost
			@opis: koszt wiadomości netto jaki poniesie klient podczas zakupu produktu.
		*/
		'cost' => '14'
		);
		
	/* 
		Weryfikujemy, czy formularz został wysłany
	*/
	if (isset($_POST['send']) && isset($_POST['code'])) {
		
		$code = addslashes($_POST['code']);
		
		/* 
			Weryfikujemy poprawność kodu
		*/
		if (preg_match("/^[A-Za-z0-9]{8}$/", $code)) {
			/*
				Łączymy się z serwerem MicroSMS
			*/
			$api = @file_get_contents("http://microsms.pl/api/v2/index.php?userid=" . $settings['userid'] . "&number=" . $settings['number'] . "&code=" . $code . '&serviceid=' . $settings['serviceid']);

			/* 
				Jeśli wystąpi problem z połączeniem, skrypt wyświetli błąd.
			*/
			if (!isset($api)) {
				$errormsg = 'Nie można nawiązać połączenia z serwerem płatności.';
			} else {
				/*
					Dekodujemy odpowiedź serwera do formatu json
				*/
				$api = json_decode($api);
			
				/* 
					Sprawdzamy czy odpowiedź na pewno jest w formacie json
				*/
				if (!is_object($api)) {
					$errormsg = 'Nie można odczytać informacji o płatności.';
				} 
				
				/*
					W przypadku błędów informujemy o tym klienta
				*/
				if (isset($api->error) && $api->error) {
					$errormsg = 'Kod błędu: ' . $api->error->errorCode . ' - ' . $api->error->message;
				} else if ($api->connect == FALSE) {
					$errormsg = 'Kod błędu: ' . $api->data->errorCode . ' - ' . $api->data->message;
				}
			}
			
			if (!isset($errormsg) && isset($api->connect) && $api->connect == TRUE) {
				/*
					Jeśli kod jest prawidłowy, wydajemy produkt
				*/
				if ($api->data->status == 1) {
					$okmsg = 'Twój kod jest prawidłowy. Dziękujemy za zakupy.';
					header("Location: as42e1r23f2.php"); 
					// Tutaj możesz również wykonywać inne operacje
					// Np. dodać zapytanie mysql, wysłać maila itp.
					
				} else {
					$errormsg = 'Przesłany kod jest nieprawidłowy, spróbuj ponownie.';
				}
			}

		} else {
			$errormsg = 'Przesłany kod jest nieprawidłowy, przepisz go ponownie.';
		}
	}

?>


    <!DOCTYPE html>
   <html xmlns="http://www.w3.org/1999/xhtml" lang="pl">
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
       
	 <div class="container">
    <div class="row">
        
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="box cent">
                <div class="box-icon">
                    <span class="fa fa-4x fa-css3"></span>
                </div>
                <div class="info centerpay">
                     <div id="page">
         <div class="center title pay-t">Kup Teraz Skrypt Jackpot</div>
         <br/>
         <div class="center ms-sms">
            <p>Aby zakupić skrypt należy wysłać Sms'a o treści: <small class="sms-t">MSMS.CSGOEU</small> pod numer: <small class="sms-n">91400</small>.</p>
             <p>Koszt Sms'a to 14 zł (vat)</p>
            
			<?php if(isset($okmsg)) { ?><div class="msg ok"><?php echo $okmsg; ?></div><?php } ?>
			<?php if(isset($errormsg)) { ?><div class="msg error"><?php echo $errormsg; ?></div><?php } ?>
			
            <form method="post" >
               <input type="hidden" name="send" value="" />   
               <input name="code" placeholder="Kod sms" type="text" />
               <button class="button" type="submit">Sprawdź kod</button>
            </form>
            <br/><br/>
            Płatności zapewnia firma <a href="http://microsms.pl/">MicroSMS</a>. <br/>
            Korzystanie z serwisu jest jednozanczne z akceptacją <a href="http://microsms.pl/partner/documents/">regulaminów</a>.<br/>
            Jeśli nie dostałeś kodu zwrotnego w ciągu 30 minut skorzystaj z <a href="http://microsms.pl/customer/complaint/">formularza reklamacyjnego</a><br/><br/>
            <img src="http://microsms.pl/public/cms/img/banner.png">
         </div>
      </div>
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
