<?php
session_start();

$pdo = new PDO("mysql:host=localhost;dbname=rentify", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$email = $_POST['email'];
$password = md5($_POST['password']);

$stmt = $pdo->prepare("SELECT * FROM owner_users WHERE email = ? AND password = ?");
$stmt->execute([$email, $password]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user) {
    $_SESSION['owner_id'] = $user['id'];
    $_SESSION['owner_name'] = $user['name'];
    header("Location: owner-dashboard.php");
    exit;
} else {
    echo "<script>alert('Invalid email or password'); window.location.href='owner-login.php';</script>";
}
?>
