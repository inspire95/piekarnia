<?php

	session_start();
	
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('Location: index2.php');
		exit();
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Piekarnia Rzeszowska, pieczywo online</title>
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
				<h2 class="caption">Piekarnia Rzeszowska</h2><br/>
				<h3 class="properties">Pysznie, tanio, tadycyjnie...</h3><br/><br/>
				
			</section>
	</section><!--  end hero section  -->


	<section class="search">
	    <center><h1>Oferta na dziś</h1></center><hr>
	</section>


	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
				<li>
					<a href="#">
						<img src="img/property_1.jpg" alt="" title="" class="property_img"/>
					</a>
					<span class="price">3.99PLN/szt</span>
					<div class="property_details">
						<h1>
							<a href="img/property_1">Chleb jeczmienny</a>
						</h1>
						<h2>Pieczywo ziarna jasnego,  ma niewiele błonnika i jest szybko trawione przez organizm... <span class="property_size"></span></h2>
					</div>
				</li>
				<li>
					<a href="#">
						<img src="img/property_2.jpg" alt="" title="" class="property_img"/>
					</a>
					<span class="price">2.99PLN/szt</span>
					<div class="property_details">
						<h1>
							<a href="#">Chleb żytni</a>
						</h1>
						<h2>Pieczywo zytnie, tradycyjne, lekkostrawne pieczywo... <span class="property_size"></span></h2>
					</div>
				</li>
				<li>
					<a href="#">
						<img src="img/property_3.jpg" alt="" title="" class="property_img"/>
					</a>
					<span class="price">2.50PLN/szt</span>
					<div class="property_details">
						<h1>
							<a href="#">Chleb przenno-żytni</a>
						</h1>
						<h2>Pieczywo ciemnozarniste, zawierające ziarna i otreby<span class="property_size"></span></h2>
					</div>
				</li>
            </ul></div>
			<div class="more_listing">
				<a href="produkt.php" class="more_listing_btn">Zobacz pełną oferte!</a>
			
		
        </div>
	</section>	<!--  end listing section  -->
<section class="maps">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5250029.332648567!2d17.511864204929985!3d50.020896979418374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473cfa5d5f87a221%3A0x239da09198aa71b7!2sCar+Net+Polska!5e0!3m2!1spl!2spl!4v1516580560857" width="1340" height="400" frameborder="3" style="border:3" allowfullscreen></iframe>
</section>
<section class="box">
    
		<div class="wrapper">
			<ul class="properties_list">
				<center><h1>Dlaczego warto nas wybrać:</h1></center><br/><br/>
				<li>
					<a href="#">
						<img src="img/b.png" alt="" title="" class="property_img"/>
					</a>
					
					<div class="property_details">
						<h1>
							<a href="img/property_1">Pomoc online</a>
						</h1>
						<h2>Nasi konsultanci dostępni są całodobowo... <span class="property_size"></span></h2>
					</div>
				</li>
				<li>
					<a href="#">
						<img src="img/b1.png" alt="" title="" class="property_img"/>
					</a>
					
					<div class="property_details">
						<h1>
							<a href="#">Doświadczenie</a>
						</h1>
						<h2>Firma istnieje na rynku nieprzerwanie od 1919 roku... <span class="property_size"></span></h2>
					</div>
				</li>
				<li>
					<a href="#">
						<img src="img/b2.png" alt="" title="" class="property_img"/>
					</a>
					
					<div class="property_details">
						<h1>
							<a href="#">Uslugi online</a>
						</h1>
						<h2>Wszystkie formalności załatwisz przez internet...<span class="property_size"></span></h2>
					</div>
				</li>
           <li>
					<a href="#">
						<img src="img/b3.png" alt="" title="" class="property_img"/>
					</a>
					
					<div class="property_details">
						<h1>
							<a href="img/property_1">Dostepnosc</a>
						</h1>
						<h2>Usługi dostepne codziennie, takze w swieta... <span class="property_size"></span></h2>
					</div>
				</li>
            </ul></div>
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