<?php

$mysqli = mysqli_connect("localhost", "root", "", "todo");

if (mysqli_connect_errno() == false) {
    echo "Bağlantı Başarılı <br>";
} else {
    echo "Bağlantı Başarısız <br>";
}

if ($_POST) {
    $oldTask = $_POST["oldTask"];
    $newTask = $_POST["newTask"];

    $sql = "UPDATE tasks SET task = '$newTask' WHERE task = '$oldTask'";

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
