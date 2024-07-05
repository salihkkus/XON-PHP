<?php

//try komutu 
$dosyaadresi = "dosya adresi<br>";

try 
{
//var olmayan bir dosyayi acmak icin fonksiyon

function nonexist()
{
     echo "aranilan dosyayiyi ac <br>";
}

   if($dosyaadresi== NULL)
   {
    throw new Exception("aranan dosya bulunamadi");
   }
}

catch(Exception $e)
{
    echo $e->getMessage();
    echo "lutfen dosya adresini kontrol edip tekrar deneyiniz";
}

?>
