<? 
extract($_POST);
mail("tagu@tagu.pl", "temat", $wiadomosc);
echo "mail wyslany";
?> 