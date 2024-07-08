<?php

//sinif tanimlama
class kitap
{
  
public $baslik;
public $yazar;
static public $yayintarihi;

static function fonk()
   {
    echo "ust sinif fonksiyonu <br>";
   }


function __construct($yayintarihi)
{
    $this-> yayintarihi = $yayintarihi;
}

function get_yayintarihi()
{
    return $this -> yayintarihi;
}

}

//nesne tanimlama

$anna_k = new kitap(1940);
$kasagi = new kitap(2000);



//miras alan sinif olusturma

class eBook extends kitap
{
   static function fonk()
   {
    echo "alt sinif fonksiyonu <br>";
   }
}

$ekitap = new eBook(2024);

$ekitap -> fonk();


// class in basina final anahtar kelimesi eklenmesi sinifin inherit edilmesini engeller.

// php de statik methodlar kullanilarak sinifin nesnesini olusturmadan da methodlari cagirabilmemiz saglanir. statik ozelliklerde ayni sekilde degiskenler vb.

eBook :: fonk();
kitap :: fonk();

echo kitap :: $yayintarihi;

?>

