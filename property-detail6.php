<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    $_SESSION['redirect_to'] = $_SERVER['REQUEST_URI']; // save current page
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>3BHK Villa in Jankipuram - Rentify</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body { font-family: 'Segoe UI', sans-serif; margin: 0; padding: 0; background: #f5f5f5; }
    .container { max-width: 1100px; margin: auto; padding: 20px; background: #fff; box-shadow: 0 2px 6px rgba(0,0,0,0.1); }
    .property-header img { width: 100%; border-radius: 8px; }
    .property-info { padding: 20px 0; }
    .property-info h1 { margin: 0; font-size: 28px; color: #2c3e50; }
    .property-meta { color: #777; margin-top: 8px; }
    .price { font-size: 24px; font-weight: bold; color: #2980b9; margin-top: 10px; }
    .details-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 15px; margin-top: 20px; }
    .detail-box { padding: 15px; border: 1px solid #ddd; border-radius: 6px; background: #f9f9f9; }
    .section-title { margin-top: 40px; font-size: 22px; border-left: 5px solid #2980b9; padding-left: 10px; }
    .description { margin-top: 15px; line-height: 1.6; color: #444; }
    .contact-card { margin-top: 30px; padding: 15px; background: #eaf4fc; border-radius: 6px; border: 1px solid #b7daec; }
    .contact-btn { margin-top: 10px; display: inline-block; padding: 10px 15px; background: #2980b9; color: #fff; border-radius: 4px; text-decoration: none; }
  </style>
</head>
<body>
  <div class="container">
    <div class="property-header">
      <img src="./assets/images/home-img15.png" alt="3BHK Villa in Jankipuram">
    </div>
    <div class="property-info">
      <h1>3BHK Villa in Jankipuram, Lucknow</h1>
      <div class="property-meta">Semi-Furnished | 2,100 sq.ft | 2 Floors | South Facing</div>
      <div class="price">₹85 Lakhs</div>
    </div>
    <div class="details-grid">
      <div class="detail-box"><strong>Property Type:</strong> Independent Villa</div>
      <div class="detail-box"><strong>BHK:</strong> 3</div>
      <div class="detail-box"><strong>Bathrooms:</strong> 3</div>
      <div class="detail-box"><strong>Age of Property:</strong> New Construction</div>
      <div class="detail-box"><strong>Water Supply:</strong> 24x7 Municipal</div>
      <div class="detail-box"><strong>Parking:</strong> Garage + Visitor Parking</div>
    </div>
    <h2 class="section-title">Property Description</h2>
    <div class="description">
      A newly constructed 3BHK villa located in a prime residential area with modern amenities and luxurious space. Includes a private garden, two balconies, and spacious modular kitchen.
    </div>
    <h2 class="section-title">Verification Details</h2>
    <div class="description">
      ✔ Property Verified<br>
      ✔ RERA ID: UPLKO323456<br>
      ✔ Approved for Loans by Axis Bank
    </div>
    <div class="contact-card">
      <strong>Owner:</strong> Mr. Manoj Tiwari (Verified Owner)<br>
      <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']): ?>
        📞 Phone: +91 9999999999<br>
        📧 Email: manoj.tiwari@rentify.in
      <?php else: ?>
        <a href="login.html" class="contact-btn">Login to View Contact</a>
      <?php endif; ?>
    </div>
  </div>
</body>
</html>
