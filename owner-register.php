<?php
// Start session
session_start();

// DB connection
$pdo = new PDO("mysql:host=localhost;dbname=rentify", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $hashedPassword = md5($password); // For simple use. You can use password_hash() for stronger security.

    // Check if email exists
    $stmt = $pdo->prepare("SELECT * FROM owner_users WHERE email = ?");
    $stmt->execute([$email]);
    if ($stmt->rowCount() > 0) {
        echo "<script>alert('Email already registered. Please login instead.'); window.location.href='owner-login.php';</script>";
        exit;
    }

    // Insert new owner
    $insert = $pdo->prepare("INSERT INTO owner_users (name, email, password) VALUES (?, ?, ?)");
    $insert->execute([$name, $email, $hashedPassword]);

    echo "<script>alert('Registration successful! Please login.'); window.location.href='owner-login.php';</script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Owner Registration - Rentify</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body { font-family: 'Segoe UI', sans-serif; background: #f0f0f0; }
    .container { max-width: 500px; margin: 40px auto; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
    h2 { text-align: center; color: #2c3e50; }
    form { display: flex; flex-direction: column; gap: 15px; }
    input { padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 4px; }
    button { padding: 12px; background: #27ae60; color: white; font-size: 16px; border: none; border-radius: 4px; cursor: pointer; }
    button:hover { background: #219150; }
    p { text-align: center; }
    a { color: #2980b9; text-decoration: none; }
    a:hover { text-decoration: underline; }
  </style>
</head>
<body>
  <div class="container">
    <h2>Register as an Owner</h2>
    <form method="POST">
      <input type="text" name="name" placeholder="Full Name" required>
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Register</button>
    </form>
    <p>Already have an account? <a href="owner-login.php">Login here</a></p>
  </div>
</body>
</html>
