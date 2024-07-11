<?php

$mysqli = mysqli_connect("localhost", "root", "", "todo");

if (mysqli_connect_errno() == false) {
    echo "Bağlantı Başarılı <br>";
} else {
    echo "Bağlantı Başarısız <br>";
}

if ($_POST) {
    $taskDelete = $_POST["sil"];

    $sql = "DELETE FROM tasks WHERE task = '$taskDelete'";

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
