<?php
// Connect to DB
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rentify";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection Failed: " . $conn->connect_error);
}

// Receive form data
$name = $_POST['name'];
$email = $_POST['email'];
$property = $_POST['property'];
$amount = $_POST['amount']; // Fixed ₹500
$method = $_POST['paymentMethod'];
$date = date("Y-m-d H:i:s");

// Insert into token_payments table
$sql = "INSERT INTO token_payments (name, email, property, amount, payment_method, payment_date)
        VALUES ('$name', '$email', '$property', '$amount', '$method', '$date')";

if ($conn->query($sql) === TRUE) {
  echo "<h2 style='text-align:center; color:green;'>✅ Token Payment Successful</h2>";
  echo "<p style='text-align:center;'>Thank you, <strong>$name</strong>. ₹$amount token received for <strong>$property</strong> via <strong>$method</strong>.</p>";
  echo "<p style='text-align:center;'><a href='payment-options.html'>← Back to Payment Options</a></p>";
} else {
  echo "<h2 style='text-align:center; color:red;'>❌ Error</h2>";
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>








<!-- -----  sql table  
 


CREATE TABLE token_payments (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  email VARCHAR(100),
  property VARCHAR(255),
  amount INT,
  payment_method VARCHAR(50),
  payment_date DATETIME
);




-->