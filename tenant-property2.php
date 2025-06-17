<!-- tenant-property-detail2.php -->
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
  <title>2BHK Apartment in Gomti Nagar - Rentify</title>
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
      <img src="./assets/images/tenant-home2.png" alt="2BHK Apartment in Gomti Nagar">
    </div>
    <div class="property-info">
      <h1>2BHK Apartment in Gomti Nagar, Lucknow</h1>
      <div class="property-meta">Fully-Furnished | 950 sq.ft | 2nd Floor | East Facing</div>
      <div class="price">₹12,000/month</div>
    </div>
    <div class="details-grid">
      <div class="detail-box"><strong>Property Type:</strong> Apartment</div>
      <div class="detail-box"><strong>BHK:</strong> 2</div>
      <div class="detail-box"><strong>Bathrooms:</strong> 2</div>
      <div class="detail-box"><strong>Age of Property:</strong> 5 years</div>
      <div class="detail-box"><strong>Water Supply:</strong> 24x7 Borewell</div>
      <div class="detail-box"><strong>Parking:</strong> Basement + Visitor Parking</div>
    </div>
    <h2 class="section-title">Property Description</h2>
    <div class="description">
      Well-maintained 2BHK apartment ideal for families. Prime location with lift, power backup, and security.
    </div>
    <h2 class="section-title">Verification Details</h2>
    <div class="description">
      ✔ Rent Agreement Available<br>
      ✔ RWA Approval<br>
      ✔ Background Verified
    </div>
    <div class="contact-card">
      <strong>Landlord:</strong> Mrs. Seema Joshi (Verified Owner)<br>
      <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']): ?>
        📞 Phone: +91 9812345678<br>
        📧 Email: seema.joshi@email.com
      <?php else: ?>
        <a href="login.html" class="contact-btn">Login to View Contact</a>
      <?php endif; ?>
    </div>
  </div>
</body>
</html>
