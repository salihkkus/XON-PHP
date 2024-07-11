<?php

$mysqli = mysqli_connect("localhost", "root", "", "todo");

if (mysqli_connect_errno() == false) {
    echo "Bağlantı Başarılı <br>";
} else {
    echo "Bağlantı Başarısız <br>";
}

if ($_POST) {
    $taskinsert = $_POST["task"];

    $sql = "INSERT INTO tasks (task) VALUES ('$taskinsert')";

    if ($mysqli->query($sql) === true) {
        echo "İşlem Başarılı <br>";
    } else {
        echo "İşlem Başarısız: " . $mysqli->error . "<br>";
    }

    $mysqli->close();
}

header("Location: Interface.php");
exit();

?>
