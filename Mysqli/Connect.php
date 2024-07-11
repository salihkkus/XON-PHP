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




?>







<html>
<body>
<form action="Connect.php" method = "post">

<label for="todo"><h2>Yapılacaklar</h2></label>
<input type="text" name="todo" id="todo">
<br>
<label for="onay"><h2>Ekle</label>
<input type="submit" name="onay" id="onay">

</form>
</body>
</html>