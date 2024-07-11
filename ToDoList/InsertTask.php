<?php

$mysqli = mysqli_connect("localhost", "root", "", "todo");

if (mysqli_connect_errno() == false) {
    echo "Bağlantı Başarılı <br>";
} else {
    echo "Bağlantı Başarısız <br>";
}

if ($_POST) {
    $taskInsert = $_POST["task"];

    $sql = "INSERT INTO tasks (task) VALUES ('$taskInsert')";

    if ($mysqli->query($sql) === true) {
        echo "İşlem Başarılı <br>";
    } else {
        echo "İşlem Başarısız: " . $mysqli->error . "<br>";
    }

    $mysqli->close();
}

header("Location: WebPage.php");
exit();

?>
