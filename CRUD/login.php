<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form verilerini al
    $username = $_POST['username'];
    $password = $_POST['password'];
}

$mysqli = mysqli_connect("localhost", "root", "", "crud");

if (mysqli_connect_errno()) {
    die("Bağlantı Başarısız: " . mysqli_connect_error());
}

// Giriş doğrulamasını kontrol et
$query = "SELECT * FROM login WHERE username ='$username' AND password = '$password'";
$result = $mysqli->query($query);

if ($result->num_rows == 1) {
    // Giriş başarılı
    header("Location: success.html");
    exit();
} else {
    // Giriş başarısız
    header("Location: failed.html");
    exit();
}

$mysqli->close();
?>
