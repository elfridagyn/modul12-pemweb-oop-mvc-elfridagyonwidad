<?php
session_start();
require "m_user.php";

$model = new m_user();
$error = "";

if (isset($_POST["login"])) {
    $user = $model->cekLogin($_POST["username"], $_POST["password"]);

    if ($user) {
        $_SESSION["username"] = $user["username"];
        $_SESSION["role"] = $user["role"];
        header("Location: index.php");
        exit();
    } else {
        $error = "Username atau password salah!";
    }
}
?>
<!DOCTYPE html>
<html>
<body>
<h2>Login Sistem Proker</h2>

<form method="POST">
    Username: <input type="text" name="username"><br><br>
    Password: <input type="password" name="password"><br><br>
    <button name="login">Login</button>
</form>

<p style="color:red;"><?= $error ?></p>

</body>
</html>
