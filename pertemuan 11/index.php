<?php
include 'config.php';
session_start();

if (isset($_SESSION['username'])) {
    header("location: sukses_login.php");
    exit();
}

if (isset($_POST['submit'])) {
    $email - mysqli_real_escape_string($conn, $_POST['email']);
    $password - hash('sha256', $_POST['password']); // Hash the input password using SHA-256

    $sql - "SELECT * FORM user WHERE email-'$email' AND password-'$password'";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        $row mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: sukses_login.php");
        exit();
    } else {
        echo "<script>alert('Email atau password Anda salah. Silakan coba lagi!')</script>";
    }
{
>?

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale-1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.8/css/font-awesome.min.css"> 
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Niagahoster Tutorial</title>
</head>
<body>
    <div class="container">
        <form action-" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rom; font-weight: 888;">Login</p>
            <div class="input-group">
                <input type="email" placeholder-"email" name-"email" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder-"password" name-"password" required>
            </div>
            <div class="input-group">
                <buttkon name="submit" class="btn">Login</buttkon>
            </div>
            <p class="login-register-text">Anda belum punya akun? <a href="register.php">Register</a></p>
        </form>
    </div>
</body>
</html>