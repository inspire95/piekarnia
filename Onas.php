<?php

	session_start();
	
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('Location: Onas2.php');
		exit();
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Opis Piekarni</title>
	<meta charset="utf-8">
	
	<meta http-equiv="S-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

	<section class="hero">
		<header>
			<div class="wrapper">
				<a href="index.php"><img src="img/logo.png" class="logo" alt="" titl=""/></a>
				<a href="#" class="hamburger"></a>
				<nav>
					<ul>
					<li><a href="produkt.php">Produkty</a></li>
						<li><a href="koszyk.php">Zakupy</a></li>
						<li><a href="Onas.php">Firma</a></li>
						<li><a href="kontakt.php">Kontakt</a></li>
					</ul>
					<a href="logowanie.php" class="login_btn">Zaloguj się</a>
				</nav>
			</div>
		</header><!--  end header section  -->
           
           
			<section class="caption">
				<h2 class="caption">Piekarnia Rzeszowska</h2><br/><br/><br/>
				<h3 class="properties">Pysznie, tanio, tadycyjnie...</h3>
			</section>
	</section><!--  end hero section  -->

<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
				<li>
                    <center><h1><i><u>Siedziba :</u></i></h1></center><br/><br/><br/>
				<div class="property_details">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2563.247245016769!2d22.004070615421547!3d50.02546277941901!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spl!2spl!4v1515447185364" width="300" height="330" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                            </li>
                   <li>
					
						<center><h1><i><u>Dane :</u></i></h1><br/></center>
						<div class="property_details"><br/><br/><br/>
                            <h3>Nazwa: <h2>Piekarnia Rzeszowska</h2><br/>
                                Data powstanie: <h2>09.01.1919</h2><br/>
                                Ilość piekarni: <h2>10</h2><br/>
                                Zatrudniani pracownicy: <h2>ok. 1500</h2></h3>
					</div>
				</li>
           <li>
					
						<center><h1><i><u>Opis :</u></i></h1><br/></center>
						<div class="property_details">
						<h3>Przedsiębiorstwo zostalo zarejestrowane w roku 1919 przez ŚP. Stanisława Bułeczke. Obecnie firma obejmuje 10 piekarnii na terenie wojewodztwa podkarpackiego i malopolskiego. Pracujemy codziennie 365 dni w roku, 7dni w tygodniu przez 24 godziny dostarczając nasze pieczywa do tysięcy polskich rodzin każdego dnia. Od 9.01.2018r. rusza sklep online naszego towaru, zapraszamy do zakupów, zrób zamówienie bez wychodzenia z domu i stania w kolejakach. Kierowcy obsługują klientów w godzinach 6-20.</h3>
					</div>
				</li>
            </ul>
            <div class="more_listing">
				<a href="produkt.php" class="more_listing_btn">Sprawdz Asortyment</a>
			</div>	
    </div>
    </section>
    
			
					

	

	<footer>
		<div class="wrapper footer">
			<ul>
				<li class="links">
					<ul>
						
						<li><a href="produkt.php">Produkty</a></li>
						
						
					</ul>
				</li>

				<li class="links">
					<ul>
						
						<li><a href="rejestracja.php">Rejestracja</a></li>
						
						
					</ul>
				</li>

				<li class="links">
					<ul>
						<li><a href="newsletter.php">Newsletter</a></li>
						
						
						
					</ul>
				</li>

				<li class="about">
					<p>Piekarnia Rzeszowska to codziennie swieże i smaczne pieczywo w polskich domach. Niezapomniany zapach i smak tradycji nieprzerwanie od 1919r. az po dziś.</p>
					<ul>
						<li><a href="http://facebook.com" class="facebook" target="_blank"></a></li>
						<li><a href="http://twitter.com" class="twitter" target="_blank"></a></li>
						<li><a href="http://google.com" class="google" target="_blank"></a></li>
						<li><a href="http://skype.com" class="skype"></a></li>
					</ul>
				</li>
			</ul>
		</div>

		<div class="copyrights wrapper">
			Copyright © 2018 - Dawid Urban
		</div>
	</footer><!--  end footer  -->
   
</body>
</html>