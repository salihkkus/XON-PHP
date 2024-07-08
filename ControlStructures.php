<?php

$sayi = 11;

if($sayi < 20)
{
 echo "degisken sayisi kucuktur";
}

else if ($sayi == 12)
{
    echo "sayi degeri ortalamadir";
}


$isim = "salih";

switch($isim)
{
    case "salih":
        echo "dogru";

    case "esma":
        echo "tekrar dene";
 
    default:
        echo  "kerem";
}


$yas;

if(is_numeric($yas)) 
{
$yas = intval ($yas);

if($yas > 18)
{
  echo "kullanici oy verebilir";
}
else 
{
 echo  "kullanicinin yasi kucuk";
} 

}

?>
