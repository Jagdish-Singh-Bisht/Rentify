<?php session_start(); ?>







<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add Property - Rentify Owner Dashboard</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body { font-family: 'Segoe UI', sans-serif; background: #f4f4f4; margin: 0; padding: 0; }
    .container { max-width: 900px; margin: 30px auto; background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
    h1 { text-align: center; color: #2c3e50; margin-bottom: 20px; }
    form { display: flex; flex-direction: column; gap: 15px; }
    label { font-weight: bold; color: #333; }
    input, textarea, select { padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 4px; }
    button { padding: 12px; background: #27ae60; color: #fff; font-size: 16px; border: none; border-radius: 4px; cursor: pointer; }
    button:hover { background: #219150; }
  </style>
</head>
<body>
<div class="container">
  <h1>Post a New Property</h1>
  <form action="owner-save.php" method="POST" enctype="multipart/form-data">
    <label>Property Title</label>
    <input type="text" name="title" required>

    <label>Location</label>
    <input type="text" name="location" required>

    <label>Monthly Rent (INR)</label>
    <input type="number" name="rent" required>

    <label>Property Type</label>
    <select name="type" required>
      <option value="1BHK">1BHK</option>
      <option value="2BHK">2BHK</option>
      <option value="Studio">Studio</option>
      <option value="Villa">Villa</option>
    </select>

    <label>Description</label>
    <textarea name="description" rows="4" required></textarea>

    <label>Upload Image</label>
    <input type="file" name="image" accept="image/*" required>

    <button type="submit">Submit Property</button>
  </form>

  <div style="text-align:center; margin-top:20px;">
    <a href="owner-dashboard.php" style="text-decoration:none; color:#2980b9; font-weight:bold;">← Back to Dashboard</a>
  </div>

</div>
</body>
</html>
