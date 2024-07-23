<?php
// Database configuration
$host = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "user_auth"; 

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start(); 

// Handle registration
if (isset($_POST['register'])) {
    $username = trim($_POST['reg_username']);
    $email = trim($_POST['reg_email']);
    $password = trim($_POST['reg_password']);

    if (empty($username) || empty($email) || empty($password)) {
        $message = "Tüm Alanlar Doldurulmalıdır!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Geçersiz e-mail Formatı!";
    } else {
        // Şifreyi hashle ve veritabanına ekle
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        $stmt = $conn->prepare("INSERT INTO users (username, email, sifre) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $hashed_password);

        if ($stmt->execute()) {
            $message = "Kayıt Başarılı!";
        } else {
            $message = "Error: " . $stmt->error;
        }

        $stmt->close();
    }
}

// Handle login
if (isset($_POST['login'])) {
    $username = trim($_POST['login_username']);
    $password = trim($_POST['login_password']);

    if (empty($username) || empty($password)) {
        $message = "Tüm Alanlar Doldurulmalıdır!";
    } else {
        // Kullanıcı adı ile şifreyi kontrol et
        $stmt = $conn->prepare("SELECT id, sifre FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows == 1) {
            $stmt->bind_result($user_id, $hashed_password);
            $stmt->fetch();

            if (password_verify($password, $hashed_password)) {
                $_SESSION['user_id'] = $user_id;
                $_SESSION['username'] = $username;
                header("Location: index.php");
                exit;
            } else {
                $message = "Geçersiz Kimlik Bilgileri!";
            }
        } else {
            $message = "Geçersiz Kimlik Bilgileri!";
        }

        $stmt->close();
    }
}

// Handle logout
if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    header("Location: index.php");
    exit;
}

// Display the appropriate page
if (isset($_SESSION['user_id'])) {
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoş Geldiniz</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: yellowgreen;
            position: relative;
            min-height: 100vh;
            padding-bottom: 50px; 
        }
        .welcome-container {
            max-width: 600px;
            margin: 70px auto;
            background-color: darkgray;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        .logo {
            position: fixed;
            bottom: 10px;
            right: 10px;
            width: 150px; 
            height: auto; 
            border: 1px solid #ddd; 
            border-radius: 8px; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); 
            background-color: darkgray;
        }
        .contact-link {
            position: fixed;
            bottom: 10px;
            left: 10px;
            background-color: darkgray;
            padding: 15px 25px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            font-weight: bold;
            text-decoration: none;
            color: #000;
            transition: background-color 0.3s, color 0.3s;
        }
        .contact-link:hover {
            background-color: #333;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <h2>Hoş Geldiniz, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
        <p>Başarıyla giriş yaptınız.</p>
        <a href="index.php?logout=true" class="btn btn-danger mt-3">Çıkış Yap</a>
    </div>

    <a href="https://xon.net.tr/" class="logo-link" target="_blank">
        <img src="https://bilisimvadisi.com.tr/wp-content/uploads/2023/08/xon_Logo_500x300.webp" alt="Logo" class="logo">
    </a>

    <a href="https://www.linkedin.com/in/salihkarakus/" target="_blank" class="contact-link">Hazırlayan</a>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php
} else {
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication System</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: yellowgreen;
            position: relative;
            min-height: 100vh;
            padding-bottom: 50px; 
        }
        .container {
            max-width: 600px;
            margin-top: 70px;
        }
        .form-container {
            background: darkgray;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        }
        .link {
            margin-top: 20px;
        }
        .logo {
            position: fixed;
            bottom: 10px;
            right: 10px;
            width: 150px; 
            height: auto; 
            border: 1px solid #ddd; 
            border-radius: 8px; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); 
            background-color: darkgray;
        }
        .contact-link {
            position: fixed;
            bottom: 10px;
            left: 10px;
            background-color: darkgray;
            padding: 15px 25px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            font-weight: bold;
            text-decoration: none;
            color: #000;
            transition: background-color 0.3s, color 0.3s;
        }
        .contact-link:hover {
            background-color: #333;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php if (isset($message)) echo "<div class='alert alert-warning'>$message</div>"; ?>

        <!-- Login Form -->
        <div class="form-container">
            <h2 class="mb-4">Oturum Açın</h2>
            <form method="POST" action="">
                <div class="form-group">
                    <label for="login_username">Kullanıcı Adı:</label>
                    <input type="text" class="form-control" id="login_username" name="login_username" required>
                </div>
                <div class="form-group">
                    <label for="login_password">Şifre:</label>
                    <input type="password" class="form-control" id="login_password" name="login_password" required>
                </div>
                <button type="submit" name="login" class="btn btn-primary">Oturum Açın</button>
            </form>
            <div class="link">
                <p>Hesabınız Yok mu? <a href="#" data-toggle="modal" data-target="#registerModal">Buradan Kaydolun</a></p>
            </div>
        </div>

        <!-- Register Modal -->
        <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="registerModalLabel">Kaydolun</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="">
                            <div class="form-group">
                                <label for="reg_username">Kullanıcı Adı:</label>
                                <input type="text" class="form-control" id="reg_username" name="reg_username" required>
                            </div>
                            <div class="form-group">
                                <label for="reg_email">Email:</label>
                                <input type="email" class="form-control" id="reg_email" name="reg_email" required>
                            </div>
                            <div class="form-group">
                                <label for="reg_password">Şifre:</label>
                                <input type="password" class="form-control" id="reg_password" name="reg_password" required>
                            </div>
                            <button type="submit" name="register" class="btn btn-primary">Kaydolun</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a href="https://xon.net.tr/" class="logo-link" target="_blank">
        <img src="https://bilisimvadisi.com.tr/wp-content/uploads/2023/08/xon_Logo_500x300.webp" alt="Logo" class="logo">
    </a>

    <a href="https://www.linkedin.com/in/salihkarakus/" target="_blank" class="contact-link">Hazırlayan</a>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php
}
?>
