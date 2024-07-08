<?php

$dosyam = fopen("phpdosyam.txt" , "w") or die ("Dosyaya Erişilemiyor.");

$txt = "Benim ismim Salih <br>";
fwrite($dosyam , $txt);

$txt = "Şu anda XON şirketınde stajyer olarak çalışmaktayım";
fwrite($dosyam , $txt);

fread($dosyam , ("phpdosyam.txt"));
fclose($dosyam);

echo readfile("phpdosyam.txt")

?>