





<?php
// owner-save.php

session_start();

// ✅ Check if owner is logged in
if (!isset($_SESSION['owner_id'])) {
    echo "<script>alert('Access denied. Please login first.'); window.location.href='owner-login.php';</script>";
    exit;
}

$owner_id = $_SESSION['owner_id'];

// ✅ Connect to DB
$pdo = new PDO("mysql:host=localhost;dbname=rentify", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// ✅ File upload handling
$imagePath = '';
if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
    $imageName = basename($_FILES["image"]["name"]);
    $targetDir = "uploads/";
    if (!file_exists($targetDir)) {
        mkdir($targetDir, 0777, true);
    }
    $targetFile = $targetDir . time() . "_" . $imageName;
    move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);
    $imagePath = $targetFile;
}

// ✅ Save to DB with owner_id
$stmt = $pdo->prepare("INSERT INTO owner_properties (owner_id, title, location, rent, type, description, image, status, created_at)
VALUES (?, ?, ?, ?, ?, ?, ?, 'Active', NOW())");

$stmt->execute([
    $owner_id,
    $_POST['title'],
    $_POST['location'],
    $_POST['rent'],
    $_POST['type'],
    $_POST['description'],
    $imagePath
]);

echo "<script>alert('Property Added Successfully'); window.location.href='owner-dashboard.php';</script>";
?>
