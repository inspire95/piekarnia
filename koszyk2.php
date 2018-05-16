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

	<section class="products">
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

			
       
 <section class="listings">
		<div class="wrapper">
     <ul class="properties_list"><li>
      
       <?php
        require_once "connect.php";

$baza= mysqli_connect($host, $db_user, $db_password, $db_name);

if (mysqli_connect_errno())

{echo "Wystąpił błąd połączenia z bazą";}


$wynik = mysqli_query($baza,"SELECT * FROM products");

while($row = mysqli_fetch_array($wynik))

{   echo "<table>";
    echo "<tr>";
    echo "<td>";
 
    echo $row['id_pro']. "   " .$row['nazwa'] . "   " . $row['cena']."PLN/Szt"; 
    echo "</td>";
    echo "</tr>";
    echo "</table>";
 echo "<br>"; }

mysqli_close($baza);

?> 
            </li>
               <li>

        <form name="form1" method="post" action="dodajzam.php">
  <center><h2>Numer produktu:</h2></center><br/> <input name="id_pro" type="text" ><br/><br/>
 <center><h2>Ilosc:</h2></center><br/> <input type="text" name="ilosc" ><br/><br/><br/>
  
  
  <center><input value="dodaj zamowienie" type="submit"></center>
</form>
         </li> </ul>  
     </div></section>  
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