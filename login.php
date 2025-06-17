<?php
session_start();
if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    if (
    $users = file("users.txt", FILE_IGNORE_NEW_LINES);
    $valid = false;
    foreach ($users as $user) {
        list($u, $p) = explode(":", $user);
        if ($u === $username && $p === $password) {
            $valid = true;
            break;
        }
    }
    if ($valid)
) {
        $_SESSION["login"] = true;
        header("Location: index.php");
        exit;
    } else {
        $error = "ID atau Password salah!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Forum</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Login ke Forum Game</h2>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form method="post">
        <input type="text" name="username" placeholder="ID" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit" name="login">Login</button>
    </form>
</body>
</html>