<?php

$mysqli = mysqli_connect("localhost", "root", "", "company");

if(mysqli_connect_errno() == false)
{
    echo "Bağlantı Başarılı <br>";
}
else 
{
    echo "Bağlantı Başarısız <br>";
}


$sorgu = $mysqli->query("select * from employee");


while($kayit = $sorgu->fetch_array())
{
    echo "ID: " . $kayit["employee_id"] . " Adı: " . $kayit["first_name"] . " Soyadı: " . $kayit["last_name"]." E-Mail: " . $kayit["email"] . " Maaş " . $kayit["salary"] . "<br />";
}

?>