<!-- tenant-property-detail6.php -->
<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    $_SESSION['redirect_to'] = $_SERVER['REQUEST_URI'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>1BHK Independent Room in Hazratganj - Rentify</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body { font-family: 'Segoe UI', sans-serif; margin: 0; padding: 0; background: #f7f7f7; }
    .container { max-width: 1100px; margin: auto; padding: 20px; background: #fff; box-shadow: 0 2px 6px rgba(0,0,0,0.1); }
    .property-header img { width: 100%; border-radius: 8px; }
    .property-info { padding: 20px 0; }
    .property-info h1 { margin: 0; font-size: 28px; color: #333; }
    .property-meta { color: #666; margin-top: 8px; }
    .price { font-size: 24px; font-weight: bold; color: #27ae60; margin-top: 10px; }
    .details-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 15px; margin-top: 20px; }
    .detail-box { padding: 15px; border: 1px solid #ddd; border-radius: 6px; background: #fafafa; }
    .section-title { margin-top: 40px; font-size: 22px; border-left: 5px solid #27ae60; padding-left: 10px; }
    .description { margin-top: 15px; line-height: 1.6; color: #444; }
    .contact-card { margin-top: 30px; padding: 15px; background: #eef8ef; border-radius: 6px; border: 1px solid #c3e6cb; }
    .contact-btn { margin-top: 10px; display: inline-block; padding: 10px 15px; background: #27ae60; color: #fff; border-radius: 4px; text-decoration: none; }
  </style>
</head>
<body>
  <div class="container">
    <div class="property-header">
      <img src="./assets/images/tenant-home6.png" alt="1BHK Independent Room in Hazratganj">
    </div>
    <div class="property-info">
      <h1>1BHK Independent Room in Hazratganj, Lucknow</h1>
      <div class="property-meta">Furnished | 500 sq.ft | 1st Floor | West Facing</div>
      <div class="price">₹7,200/month</div>
    </div>
    <div class="details-grid">
      <div class="detail-box"><strong>Property Type:</strong> Independent Room</div>
      <div class="detail-box"><strong>BHK:</strong> 1</div>
      <div class="detail-box"><strong>Bathrooms:</strong> 1</div>
      <div class="detail-box"><strong>Age of Property:</strong> 2 years</div>
      <div class="detail-box"><strong>Water Supply:</strong> 24x7</div>
      <div class="detail-box"><strong>Parking:</strong> No Parking</div>
    </div>
    <h2 class="section-title">Property Description</h2>
    <div class="description">
      Cozy 1BHK independent room ideal for working professionals or students. Located in the central Hazratganj area with quick access to shops and public transport.
    </div>
    <h2 class="section-title">Verification Details</h2>
    <div class="description">
      ✔ Proper Rent Agreement<br>
      ✔ Aadhaar & PAN Verified<br>
      ✔ Police Verification Done
    </div>
    <div class="contact-card">
      <strong>Landlord:</strong> Priya Sharma (Verified Owner)<br>
      <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']): ?>
        📞 Phone: +91 9123456780<br>
        📧 Email: priya.sharma@email.com
      <?php else: ?>
        <a href="login.html" class="contact-btn">Login to View Contact</a>
      <?php endif; ?>
    </div>
  </div>
</body>
</html>
