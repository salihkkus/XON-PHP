<?php
/*
INSERT KAYIT EKLEME
DELETE KAYIT SILME
SELECT KAYIT SECME LISTLEME 
UPDATE KAYIT GUNCELLEME
*/
//$mysqli = new mysqli("sunucu", "kullanici", "sifre", "database");

/* ILK YONTEM
$mysqli = new mysqli("localhost", "root", "", "company");

if($mysqli -> connect_errno)
{
    echo "failed" . $mysqli -> connect_errno;
}
else 
{
    echo "success";
}

$mysqli->close(); */

// IKINCI YONTEM

$mysqli = mysqli_connect("localhost", "root", "", "company");

if(mysqli_connect_errno())
{
    echo "Bağlantı Başarısız <br>";
}

else 
{
    echo "Bağlantı Başarılı <br>";
}


if($_POST)
$e_fname = $_POST["fname"];
$e_lname = $_POST["lname"];
$e_mail = $_POST["mail"];
$e_salary = $_POST["salary"];


$sql = "insert into employee (first_name, last_name, email, salary) values('" .$e_fname. "','" .$e_lname. "','" .$e_mail. "','" .$e_salary. "')";

if($mysqli->query($sql))
{
    echo "Kayıt Başarılı";
}

else 
{
    echo "Kayıt Başarısız";
}

?>

<form action="DataInsert.php" method="post">
<html>
<body>

<label for="fname">Çalışan Adı</label>
<input type="text" id="fname" name="fname">
<br>
<label for="lname">Çalışan Soyadı</label>
<input type="text" id="lname" name="lname">
<br>
<label for="mail">Çalışan Email</label>
<input type="text" id="mail" name="mail">
<br>
<label for="salary">Çalışan Maaşı</label>
<input type="text" id="salary" name="salary">
<br>
<label for="onay">Kaydet</label>
<input type="submit" id="onay" name="onay">
<br>

</body>
</html>
</form>