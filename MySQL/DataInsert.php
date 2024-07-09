<?php

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
    echo "fail";
}

else 
{
    echo "success";
}

?>