<?php
session_start();
 
$ranga=$_SESSION["ranga"]; // dla admina przyjmuje wartość 1.
 
if ($ranga == "1") { 
 
header('Location: paneladmina.php');
 
}
 
else {
 
echo('Strona nie jest przeznaczona dla zwykłych śmiertelników!');
 
}
?>
