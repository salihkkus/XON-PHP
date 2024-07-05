<?php

$sayi = 3;

while($sayi < 5)
{
    echo "$sayi";
    $sayi++;
}

do 
{
   echo "$sayi";
   $sayi--;
  
}
while($sayi > 1);


for ($xon = 0 ; $xon < 3 ; $xon++)
{
  echo "sayimiz $xon";
}


$renkler = array("mavi , sari , yesil , kirmizi");

foreach($renkler as $x)
{
    echo "$x <br>";
}

//break donguden cikmaya yarar
//continue dizi veya dongudeki elemani atlamaya yarar


//bir sayinin carpim tablosunu olusturmak
$carp = 7;

for($deste = 0 ; $deste < 10 ; $deste++ )
{
    $sonuc =  $carp * $deste;
    echo "$sonuc <br>";
}


//faktoriyel bulma

$fakt = 4;
$sayac = 1;
$son = 1;
while($fakt > $sayac)
{
    $son = $son * $sayac;

   $sayac++;

}

echo "$son";



//Bu kodlarin tamami salih karakus tarafindan yazilmistir.

?>