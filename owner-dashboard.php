<?php
session_start();
if (!isset($_SESSION['owner_id'])) {
    echo "<script>alert('Please login as owner first'); window.location.href='owner-login.php';</script>";
    exit;
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Owner Dashboard - Rentify</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: #f5f7fa;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 1200px;
      margin: auto;
      padding: 20px;
    }
    h1 {
      text-align: center;
      color: #2c3e50;
    }
    .dashboard-actions {
      display: flex;
      justify-content: space-around;
      margin-top: 30px;
      flex-wrap: wrap;
    }
    .card {
      background: white;
      border-radius: 8px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
      padding: 20px;
      width: 300px;
      margin: 15px;
      transition: transform 0.3s;
    }
    .card:hover {
      transform: scale(1.05);
    }
    .card h3 {
      margin-top: 0;
      color: #2980b9;
    }
    .card p {
      color: #555;
    }
    .btn {
      display: inline-block;
      margin-top: 10px;
      padding: 10px 15px;
      background: #27ae60;
      color: white;
      text-decoration: none;
      border-radius: 4px;
    }
    .btn:hover {
      background: #219150;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Welcome to Your Owner Dashboard</h1>
    <div class="dashboard-actions">

      <div class="card">
        <h3>Add New Property</h3>
        <p>Post a new rental listing to attract potential tenants.</p>
        <a href="owner-add.php" class="btn">Add Property</a>
      </div>

      <div class="card">
        <h3>View My Listings</h3>
        <p>Check all the properties you've listed on Rentify platform.</p>
        <a href="owner-listings.php" class="btn">My Listings</a>
      </div>

      <div class="card">
        <h3>Owner Support</h3>
        <p>Need help? Contact our team for any queries or support regarding your listings.</p>
        <a href="owner-support.html" class="btn">Contact Support</a>
      </div>

      <a href="logout.php" class="btn" style="background: #c0392b;">Logout</a>

    </div>
  </div>
</body>
</html>
