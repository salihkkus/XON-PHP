<?php


$mysqli = mysqli_connect("localhost", "root", "", "company");

if(mysqli_connect_errno() == false)
{
    echo "Bağlantı Başarılı <br>";
}

$sql = "DELETE FROM employee WHERE email = 'sample@email.com' ";

if($mysqli->query($sql))
{
    echo "Kayıt Başarılı <br>";
}
else 
{
    echo "Kayıt Başarısız <br>";
}



?>