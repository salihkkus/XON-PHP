<?php


//dikdortgen alani hesapla
function alan($x , $y)
{
    echo $x * $y;
}
alan(5 , 4);


//rastgele verilen sayi ile daire alani hesaplama

define("PI" , 3.14);

function daire($yaricap)
{
    echo PI * ($yaricap * $yaricap);
}

daire(3);


//global tanimlamasi degiskene heryerden erisebilmemizi saglar.
//public, private ve protected belirtecleri bulunur.

// Bu kodlarin tamami salih karakus tarafindan yazilmistir.

?>