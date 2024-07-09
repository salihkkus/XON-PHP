<?php

/* - Form İşleme ve Doğrulama: Form işleme ve doğrulamayı gösteren bir PHP betiği oluşturun:
 - Ad, e-posta ve yaş alanlarını içeren bir HTML formu tasarlayın.*/

?>

<html>
<body>

<form>

<label for ="fname">İsim:</label><br>
<input type ="text" id = "fname" name = "fname" value = "Salih"><br>

<label for = "lname">Soyisim:<label><br>
<input type = "text" id = "lname" name = "lname" value = "Karakuş"><br>

<label for ="eposta">E-Posta</label><br>
<input type="text" id = "eposta" name = "eposta" value = "sskarakussalih77@gmail.com"><br>

<label for = "onay">Onayla:</label><br>
<input type="submit" name = "onay" value = "Onayla">

</form>

</body>
</html>