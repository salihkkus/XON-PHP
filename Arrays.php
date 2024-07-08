<?php

//dizi tanimlama []

$arabalarim = array("porsche carrera" , 2008 , "<br> mercedes cla 200" , 2020);
$sehir = ["yalova , kocaeli , istanbul"];

//dizi eleman sayaci fonksiyonu
echo count($arabalarim);

//dizi elemani tipi dondurucu fonksiyonu
echo var_dump($arabalarim);

//dizi elemani yazdirma ve deger degistirme
echo $arabalarim[0] = "reanult symbol";

//foreach kullanarak dizi elemanlarini yazdirma

foreach($arabalarim as $x)
{
    echo "$x <br>";
}

//diziye eleman ekleme (pushlama)

array_push($arabalarim , "taycan");
$arabalarim[] = 2012;

//diziden elelman silme fonksiyonu

unset($arabalarim[1]);

//array_pop()bir dizinin son öğesini kaldırır.
//array_shift()bir dizinin ilk öğesini kaldırır.

//dizi elemanlarini siralar
sort($arabalarim);


?>
