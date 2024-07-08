<?php

/* - Form verilerini işlemek ve doğrulamak için bir PHP betiği yazın:
 - İsim boş olmamalı ve yalnızca alfabetik karakterler içermelidir.
 - E-posta geçerli bir e-posta adresi olmalıdır.
 - Yaş pozitif bir tam sayı olmalıdır.
 - Başarılı gönderim veya doğrulama hataları için uygun mesajları görüntüleyin. */


 if(empty($_POST["name"]) && empty($_POST["email"])) {

    if(empty($name) || empty($email)) {
       echo "Lütfen boş bırakmayın";
    } else {
       echo "Girilen kullanıcı adı: " . $name . " şifre: " . $email;
    }
 } else {
    echo "Lütfen formu kullanın";
 }
?>

<html>
<body>

<form action="PHPscript.php" method="post"><br>

<label for = "name">Kullanıcı Adı: </label><br>
<input type = "text" id = "name" name = "name" value = "salihkarakus"><br>

<label for = "email">E-Posta: </label><br>
<input type = "text" id = "email" name = "email" value = "abc@gmail.com"><br>

<label for = "yas">Kullanıcı Yaşı: </label><br>
<input type = "number" id = "yas" name = "yas" min = "0"  max = "100" value = "20"><br>

<label for = "onay">Onayla: </label><br>
<input type = "submit" id = "onay" name = "yas"><br>


</form>
</body>
</html>