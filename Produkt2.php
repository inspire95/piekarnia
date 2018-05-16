<?php

	session_start();
	
	

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Produkty Piekarni Rzeszowskiej</title>
	<meta charset="utf-8">
	
	<meta http-equiv="S-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

	<section class="hero5">
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
				<li><p><?php

	echo "Witaj ".$_SESSION['name'];
                ?>
                </p></li>
	</ul>
	<a href="logout.php" class="login_btn">Wyloguj sie!</a>
	

                    
					
				</nav>
			</div>
		</header><!--  end header section  -->

    <section class="caption">
				
				<h3 class="properties">Rzeszowska Piekarnia Oferuje</h3><br/><br/>
				
			</section>
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
							<a href="#">Chleb jeczmienny</a>
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
				<li>
					<a href="#">
						<img src="img/property_4.jpg" alt="" title="" class="property_img"/>
					</a>
					<span class="price">0.99PLN/szt</span>
					<div class="property_details">
						<h1>
							<a href="#">Bułka ziarnista</a>
						</h1>
						<h2>Pieczywo ciemne posypane ziarnami zbozowymi... <span class="property_size"></span></h2>
					</div>
				</li>
				<li>
					<a href="#">
						<img src="img/property_5.jpg" alt="" title="" class="property_img"/>
					</a>
					<span class="price">0.89PLN/szt</span>
					<div class="property_details">
						<h1>
							<a href="#">Bułka sezanowa</a>
						</h1>
						<h2>Pieczywo wytworzone ziarna jasnego posypane sezamem... <span class="property_size"></span></h2>
					</div>
				</li>
				<li>
					<a href="#">
						<img src="img/property_6.jpg" alt="" title="" class="property_img"/>
					</a>
					<span class="price">0.79PLN/szt</span>
					<div class="property_details">
						<h1>
							<a href="#">Bułka z posypką</a>
						</h1>
						<h2>Bulka posypana ziarnami zboza oraz slonecznika... <span class="property_size"></span></h2>
					</div>
				</li>
				<li>
					<a href="#">
						<img src="img/property_7.jpg" alt="" title="" class="property_img"/>
					</a>
					<span class="price">0.99PLN/szt</span>
					<div class="property_details">
						<h1>
							<a href="#">Pączek lukrowany</a>
						</h1>
						<h2>Pieczywo polane lukrem oraz nadziewane owocowym nadzieniem o smaku malinowym...<span class="property_size"></span></h2>
					</div>
				</li>
				<li>
					<a href="#">
						<img src="img/property_8.jpg" alt="" title="" class="property_img"/>
					</a>
					<span class="price">1.49PLN/szt</span>
					<div class="property_details">
						<h1>
							<a href="#">Paczek w czekoladzie</a>
						</h1>
						<h2>Pieczywo polane czekolada z nadzieniem truskawkowym... <span class="property_size"></span></h2>
					</div>
				</li>
				<li>
					<a href="#">
						<img src="img/property_9.jpg" alt="" title="" class="property_img"/>
					</a>
					<span class="price">0.99PLN/szt</span>
					<div class="property_details">
						<h1>
							<a href="#">Rogalik maslany</a>
						</h1>
						<h2>Miekki rogalik z ciasta francuskiego o smaku maslanym... <span class="property_size"></span></h2>
					</div>
				</li>
				<li>
					<a href="#">
						<img src="img/propert_10.jpg" alt="" title="" class="property_img"/>
					</a>
					<span class="price">25.50PLN/szt</span>
					<div class="property_details">
						<h1>
							<a href="#">Tort orzechowy</a>
						</h1>
						<h2>Tort orzechowy z bita smietaną posypany wiorkami kokosa...<span class="property_size"></span></h2>
					</div>
				</li>
				<li>
					<a href="#">
						<img src="img/property_11.jpg" alt="" title="" class="property_img"/>
					</a>
					<span class="price">3.49PLN/szt</span>
					<div class="property_details">
						<h1>
							<a href="#">Muffinka</a>
						</h1>
						<h2>Ciasteczko czekoladowe z nadzieniem wiśniowym... <span class="property_size"></span></h2>
					</div>
				</li>
				<li>
					<a href="#">
						<img src="img/property_12.jpg" alt="" title="" class="property_img"/>
					</a>
					<span class="price">25.50PLN/szt</span>
					<div class="property_details">
						<h1>
							<a href="#">Tort czekoladowy</a>
						</h1>
						<h2>Tort w polewie czekoladowej z masą waniliową... <span class="property_size"></span></h2>
					</div>
				</li>
			</ul>
			
			
		</div>
		<div class="more_listing">
				<a href="koszyk.php" class="more_listing_btn">Przejdz do zakupów</a>
			
		
        </div>
		
	</section>	<!--  end listing section  -->

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