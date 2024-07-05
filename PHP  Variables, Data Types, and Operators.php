<?php

echo phpversion();

$vary = "PHP";
echo "my variable is vary <br>" ;
//ayni sey
echo ("my variable is vary <br>") ;
print "selamlar";
// bu bir yorum satiridir.
/* bu da coklu yorum satiridir. */
# bu da yorum satiri yapmanin baska yoludur.

//degisken tanimlama
$age = 19;
$AGE = 20;
$name = "salih";
$is = true;
$arkadas = null;

//casting 
$age = (string) $age;

$x = $y = $z = "yalova";

echo "<h3> su anda $age yasindayim ve 2 ay sonra $AGE yasinda olacagim </h3>";
echo "yasim" . $age . "! <br>" ;

//degisken toplama 
echo $age + $AGE . "<br>";
echo $name + $age . "<br>";

$toplam = $age + $AGE;
echo "$toplam" . "<br>";
echo $toplam . "<br>";
echo '$toplam' . "<br>";

//degisken turu dondurme
var_dump($age) . "<br>";
var_dump($name) . "<br>";
var_dump($is) . "br";
var_dump($arkadas) . "br";

//PHP bazi ozel fonksiyonlari
echo strlen("merhabalar");
echo strpos( "selamlar dunya","dunya");
echo strtoupper($name);
echo strrev($name);

$a = $age . $AGE;
$b = $age . " " . $AGE;
$c = "$age $AGE <br>";
$d = "$age . $AGE <br>";

var_dump(is_int($age));

//sabit tanimlama 
define("KONUM" , "yalova");
echo "KONUM";

echo "Bu kodlarin tamami Salih Karakus tarfindan yazilmistir";


?>