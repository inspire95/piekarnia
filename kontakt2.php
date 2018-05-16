<?php

	session_start();
	
	
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

	<section class="hero6">
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
				
				<h3 class="properties">Dane kontaktowe: <br/><br/>
				Adres: Podwisłocze 16 <br/><br/>
				Telefon: 172415134<br/><br/>
				Fax: 22222223<br/><br/>
				e-mail: piekarnia@rzeszowska.pl
				</h3>
			</section>
	</section>
	<section class="search">
	    <center><h1>Napisz do nas!</h1></center><hr>
	</section><!--  end hero section  -->
<section class="hero4"><form>          
<div class="box">             
<center><h1>Formularz kontaktowy :</h1> </center>            
     <form method="POST" action="mail.php">     
<label>                
<span>E-mail :</span>
<input type="text" class="wpis" name="email" id="email"/>             
</label>              
<label>                 
<span>Temat :</span>                 
<input type="text" class="wpis" name="temat" id="temat"/>             
</label>             
<label>                 
<span>Wiadomość :</span>                 
<input type="text" class="wiadomosc" name="wiadomosc"/>         
<input type="submit" class="button" value="Wyślj" />             
</label> 
    </form>                                 
</div>     
</form>
    
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