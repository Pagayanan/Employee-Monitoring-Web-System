<?php

session_start();
require 'config.php';
require 'vendor/autoload.php';

use PHPGangsta\GoogleAuthenticator;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $_password = $_POST['password'];
    $twoFactorCode = $_POST['2fa'];

    $stmt = $pdo->prepare("SELECT * FROM admins WHERE username = username:");
    $stmt->execute(['username' => $username]);
    $admin = $stmt->fetch();

    if ($valid) {
        $_SESSION['admin_id'] = $admin['id'];
        header("Lcation: Admin_panel.php");
        exit;
    } else {
        echo "Invalid 2Fa code.";
    }
} else {
    echo "Invalid username or password.";
}
