<?php

	session_start();
	
	

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Centrum kontroli nad światem</title>
	<meta charset="utf-8">
	
	<meta http-equiv="S-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

	<section class="hero7">
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
<li><a href="#">Admin</a></li>
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


/* zapytanie do konkretnej tabeli */ 
$wynik = mysqli_query($baza, "SELECT * FROM user") 
or die('Błąd zapytania'); 

/* 
wyświetlamy wyniki, sprawdzamy, 
czy zapytanie zwróciło wartość większą od 0 
*/ 
if(mysqli_num_rows($wynik) > 0) { 
    /* jeżeli wynik jest pozytywny, to wyświetlamy dane */ 
    echo "<table cellpadding=\"2\" border=1>"; 
    while($r = mysqli_fetch_object($wynik)) { 
        echo "<tr>"; 
        echo "<td>".$r->name."</td>"; 
        echo "<td>".$r->email."</td>"; 
        echo "<td> 
       <a href=\"admin.php?a=del&amp;email={$r->email}\">DEL</a> 
       <a href=\"admin.php?a=edit&amp;email={$r->email}\">EDIT</a> 
       </td>"; 
        echo "</tr>"; 
    } 
    echo "</table>"; 
} 

?>
         
         </li><li>
        
      
       <?php
        require_once "connect.php";

$baza= mysqli_connect($host, $db_user, $db_password, $db_name);

if (mysqli_connect_errno())

{echo "Wystąpił błąd połączenia z bazą";}


/* zapytanie do konkretnej tabeli */ 
$wynik = mysqli_query($baza, "SELECT * FROM products") 
or die('Błąd zapytania'); 

/* 
wyświetlamy wyniki, sprawdzamy, 
czy zapytanie zwróciło wartość większą od 0 
*/ 
if(mysqli_num_rows($wynik) > 0) { 
    /* jeżeli wynik jest pozytywny, to wyświetlamy dane */ 
    echo "<table cellpadding=\"2\" border=1>"; 
    while($r = mysqli_fetch_object($wynik)) { 
        echo "<tr>"; 
        echo "<td>".$r->nazwa."</td>"; 
        echo "<td>".$r->cena."</td>"; 
        echo "<td> 
       <a href=\"admin.php?a=del&amp;nazwa={$r->nazwa}\">DEL</a> 
       <a href=\"admin.php?a=edit&amp;nazwa={$r->nazwa}\">EDIT</a> 
       </td>"; 
        echo "</tr>"; 
    } 
    echo "</table>"; 
} 

         ?></li></ul></div>
        </section></section>
             
</body>
</html>