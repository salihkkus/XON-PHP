<?php

$mysqli = mysqli_connect("localhost", "root", "", "company");

if(mysqli_connect_errno() == false)
{
    echo "Bağlantı Başarılı <br>";
}

$sql = " UPDATE employee SET salary = '1000' WHERE email = 'sample@email.com' ";


if($mysqli->query($sql) == true)
{
   echo "Kayıt Başarılı <br>";
}
else 
{
    echo "Kayıt Başarısız <br>";
}

?>