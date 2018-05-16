<?php 
// odbieramy dane z formularza 
$nazwa = $_POST['nazwa']; 
$cena = $_POST['cena']; 
$szt = $_POST['szt']; 

if($nazwa and $cena and $szt) { 
     
    // łączymy się z bazą danych 
   
        require_once "connect.php";

$baza= mysqli_connect($host, $db_user, $db_password, $db_name);

if (mysqli_connect_errno())

{echo "Wystąpił błąd połączenia z bazą";}
     
    // dodajemy rekord do bazy 
    $ins = @mysql_query($baza, "INSERT INTO products SET nazwa='$nazwa', cena='$cena', szt='$szt'"); 
     
    if($ins) echo "Rekord został dodany poprawnie"; 
    else echo "Błąd nie udało się dodać nowego rekordu"; 
     
    mysql_close($connection); 
} 

?>