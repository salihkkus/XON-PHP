<?php
$mysqli = mysqli_connect("localhost", "root", "", "crud");

if (mysqli_connect_errno()) {
    die("Bağlantı Başarısız: " . $mysqli->connect_error);
}

// Create işlemi
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["action"]) && $_POST["action"] == "create") {
    $username = $mysqli->real_escape_string($_POST["username"]);
    $email = $mysqli->real_escape_string($_POST["email"]);
    $password = $mysqli->real_escape_string($_POST["password"]);
    $address = $mysqli->real_escape_string($_POST["address"]);

    $sql = "INSERT INTO users (isim, mail, sifre, adres) VALUES ('$username', '$email', '$password', '$address')";

    if ($mysqli->query($sql) === TRUE) {
        echo "Yeni kayıt başarıyla oluşturuldu.";
    } else {
        echo "Hata: " . $sql . "<br>" . $mysqli->error;
    }
}

// Update işlemi
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["action"]) && $_POST["action"] == "update") {
    $id = $mysqli->real_escape_string($_POST["id"]);
    $username = $mysqli->real_escape_string($_POST["username"]);
    $email = $mysqli->real_escape_string($_POST["email"]);
    $password = $mysqli->real_escape_string($_POST["password"]);
    $address = $mysqli->real_escape_string($_POST["address"]);

    $sql = "UPDATE users SET isim='$username', mail='$email', sifre='$password', adres='$address' WHERE id='$id'";

    if ($mysqli->query($sql) === TRUE) {
        echo "Kayıt başarıyla güncellendi.";
    } else {
        echo "Hata: " . $sql . "<br>" . $mysqli->error;
    }
}

// Delete işlemi
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["action"]) && $_GET["action"] == "delete") {
    $id = $mysqli->real_escape_string($_GET["id"]);

    $sql = "DELETE FROM users WHERE id='$id'";

    if ($mysqli->query($sql) === TRUE) {
        echo "Kayıt başarıyla silindi.";
    } else {
        echo "Hata: " . $sql . "<br>" . $mysqli->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    
        .main-bg {
            position: fixed;
            top: 79%;
            left: 80%;
        }
    </style>
    <title>CRUD</title>
</head>
<body style="margin: 50px">



    <h2><i>Kullanıcı Ekle</i></h2>
    <form action="crud.php" method="post">
        <input type="hidden" name="action" value="create">
        <div class="mb-3">
            <label for="isim" class="form-label">Kullanıcı Adı</label>
            <input type="text" class="form-control" id="isim" name="username" required>
        </div>
        <div class="mb-3">
            <label for="mail" class="form-label">Kullanıcı Email</label>
            <input type="email" class="form-control" id="mail" name="email" required>
        </div>
        <div class="mb-3">
            <label for="sifre" class="form-label">Kullanıcı Şifresi</label>
            <input type="password" class="form-control" id="sifre" name="password" required>
        </div>
        <div class="mb-3">
            <label for="adres" class="form-label">Kullanıcı Adresi</label>
            <input type="text" class="form-control" id="adres" name="address" required>
        </div>
        <button type="submit" class="btn btn-primary">Ekle</button>
    </form>

    <?php
    // Update formunu göster
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["action"]) && $_GET["action"] == "edit") {
        $id = $mysqli->real_escape_string($_GET["id"]);
        $result = $mysqli->query("SELECT * FROM users WHERE id='$id'");
        $row = $result->fetch_assoc();
        ?>

        <h2><i><br>Kullanıcı Güncelle</i></h2>
        <form action="crud.php" method="post">
            <input type="hidden" name="action" value="update">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <div class="mb-3">
                <label for="isim" class="form-label">Kullanıcı Adı</label>
                <input type="text" class="form-control" id="isim" name="username" value="<?php echo $row['isim']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="mail" class="form-label">Kullanıcı Email</label>
                <input type="email" class="form-control" id="mail" name="email" value="<?php echo $row['mail']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="sifre" class="form-label">Kullanıcı Şifresi</label>
                <input type="password" class="form-control" id="sifre" name="password" value="<?php echo $row['sifre']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="adres" class="form-label">Kullanıcı Adresi</label>
                <input type="text" class="form-control" id="adres" name="address" value="<?php echo $row['adres']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Güncelle</button>
        </form>

        <?php
    }
    ?>

    <table class="table mt-5">
        <thead>
            <tr>
                <td>Kullanıcı ID</td>
                <td>Kullanıcı Adı</td>
                <td>Kullanıcı Email</td>
                <td>Kullanıcı Şifresi</td>
                <td>Kullanıcı Adresi</td>
                <td>İşlemler</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM users";
            $result = $mysqli->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>" . $row["id"] . "</td>
                        <td>" . $row["isim"] . "</td>
                        <td>" . $row["mail"] . "</td>
                        <td>" . $row["sifre"] . "</td>
                        <td>" . $row["adres"] . "</td>
                        <td>
                            <a class='btn btn-primary btn-sm' href='?action=edit&id=" . $row["id"] . "'>Update</a>
                            <a class='btn btn-danger btn-sm' href='?action=delete&id=" . $row["id"] . "'>Delete</a>
                        </td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='6'>Kayıt bulunamadı.</td></tr>";
            }

            $mysqli->close();
            ?>
        </tbody>
    </table>
    <a href="https://xon.net.tr/">
        <img class="main-bg" src="https://bilisimvadisi.com.tr/wp-content/uploads/2023/08/xon_Logo_500x300.webp" alt="XON">
        </a>
</body>
</html>
