<!DOCTYPE html>
<html lang="tr"> 
<head>
    <meta charset="UTF-8">
    <title>Yapılacaklar Listesi Uygulaması</title>
</head>
<body>

<form action="InsertTask.php" method="post">

    <label for="task"><h1>Yapılacaklar Listesi Uygulaması</h1></label>
    <label for="ekle"><h2>Görev Ekle</h2></label>
    <input type="text" id="task" name="task">
    <input type="submit" id="ekle" name="ekle" value="Ekle">

</form>

<form action="DeleteTask.php" method="post">

    <label for="sil"><h2>Görev Sil</h2></label>
    <input type="text" id="sil" name="sil">
    <input type="submit" id="silSubmit" name="silSubmit" value="Sil">
    <br>

</form>

<form action="UpdateTask.php" method="post">

    <label for="oldTask"><h2>Görev Güncelle</h2></label>
    <input type="text" id="oldTask" name="oldTask" placeholder="Eski Görev">
    <input type="text" id="newTask" name="newTask" placeholder="Yeni Görev">
    <input type="submit" id="updateSubmit" name="updateSubmit" value="Güncelle">

    <br>
</form>

<h1>Görevler</h1>
<ul>
    
<?php
$mysqli = mysqli_connect("localhost", "root", "", "todo");

if ($mysqli->connect_errno) {
    echo "Bağlantı Başarısız: " . $mysqli->connect_error;
    exit();
}

$result = $mysqli->query("SELECT task FROM tasks");

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<li>" . htmlspecialchars($row["task"]) . "</li>";
    }
} else {
    echo "<li>Görev yok.</li>";
}

$mysqli->close();
?>

</ul>

</body>
</html>
