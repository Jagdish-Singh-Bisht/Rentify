<?php
session_start();

// Database connection setup
$host = 'localhost';
$dbname = 'rentify';
$username = 'root';
$password = '';

try {
  $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $stmt = $pdo->query("SELECT * FROM owner_properties ORDER BY created_at DESC");
  $properties = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  die("Database error: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Owner Listings - Rentify</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body { font-family: 'Segoe UI', sans-serif; background: #f0f2f5; margin: 0; padding: 0; }
    .container { max-width: 1100px; margin: auto; padding: 20px; background: #fff; }
    h1 { text-align: center; color: #2c3e50; }
    .property-list { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px; margin-top: 30px; }
    .property-card { background: #fff; border: 1px solid #ddd; border-radius: 6px; overflow: hidden; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
    .property-card img { width: 100%; height: 200px; object-fit: cover; }
    .property-details { padding: 15px; }
    .property-details h3 { margin: 0; font-size: 20px; color: #27ae60; }
    .property-details p { font-size: 14px; color: #555; }
  </style>
</head>
<body>
  <div class="container">
    <h1>Your Property Listings</h1>

    <div class="property-list">
        <div style="text-align:center; margin-top:20px;">
            <a href="owner-dashboard.php" style="text-decoration:none; color:#2980b9; font-weight:bold;">← Back to Dashboard</a>
        </div>

      <?php if (count($properties) > 0): ?>
        <?php foreach ($properties as $property): ?>
          <div class="property-card">
            <img src="<?php echo htmlspecialchars($property['image']); ?>" alt="Property Image">
            <div class="property-details">
              <h3><?php echo htmlspecialchars($property['title']); ?></h3>
              <p><?php echo htmlspecialchars($property['location']); ?></p>
              <p>Rent: ₹<?php echo htmlspecialchars($property['rent']); ?> / month</p>
              <p>Type: <?php echo htmlspecialchars($property['type']); ?> | Status: <?php echo htmlspecialchars($property['status']); ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      <?php else: ?>
        <p>No properties posted yet. <a href="owner-add.php">Add one now</a>.</p>
      <?php endif; ?>
    </div>
  </div>
</body>
</html>
