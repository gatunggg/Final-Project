<?php
session_start();
$users_file = "users.txt";

if (isset($_POST["register"])) {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    if ($username && $password) {
        $data = $username . ":" . $password . "\n";
        file_put_contents($users_file, $data, FILE_APPEND);
        $_SESSION["login"] = true;
        $_SESSION["user"] = $username;
        header("Location: index.php");
        exit;
    } else {
        $error = "Semua kolom harus diisi!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Akun</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Daftar Akun Forum</h2>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form method="post">
        <input type="text" name="username" placeholder="Buat ID" required><br>
        <input type="password" name="password" placeholder="Buat Password" required><br>
        <button type="submit" name="register">Daftar</button>
    </form>
    <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>
</body>
</html>