<?php


// Form İşleme ve Doğrulama: Form işleme ve doğrulamayı gösteren bir PHP betiği oluşturun:


$ad = $_POST["fname"];
$soyad = $_POST["lname"];
$mail = $_POST["eposta"];

?>


<html>
<body>


<form>

<label for="fname">İsim:</label><br>
<input type ="text" id = fname name =fname value = Salih><br>

<label for = "lname">Soyisim:<label><br>
<input type = "text" id = lname name = lname value = Karakuş><br>

<label for="eposta">E-Posta</label><br>
<input type="text" id = eposta name = eposta value = sskarakussalih77@gamil.com><br>




</form>



</body>
</html>