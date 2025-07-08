<?php
// Connect to the database (update credentials as per your DB setup)
$servername = "localhost";
$username = "root";
$password = ""; // use your DB password
$dbname = "rentify";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Receive form data
$name = $_POST['name'];
$email = $_POST['email'];
$property = $_POST['property'];
$amount = $_POST['amount'];
$paymentMethod = $_POST['paymentMethod'];
$date = date("Y-m-d H:i:s");

// Insert into database
$sql = "INSERT INTO rent_payments (name, email, property, amount, payment_method, payment_date)
        VALUES ('$name', '$email', '$property', '$amount', '$paymentMethod', '$date')";

if ($conn->query($sql) === TRUE) {
  echo "<h2 style='text-align:center; color:green;'>✅ Rent Payment Successful</h2>";
  echo "<p style='text-align:center;'>Thank you, <strong>$name</strong>. Your rent of ₹$amount has been recorded for: <br><strong>$property</strong><br> via <strong>$paymentMethod</strong></p>";
  echo "<p style='text-align:center;'><a href='payment-options.html'>← Back to Payment Options</a></p>";
} else {
  echo "<h2 style='text-align:center; color:red;'>❌ Error processing payment</h2>";
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>









<!-- --------sql table 
 


CREATE TABLE rent_payments (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  email VARCHAR(100),
  property VARCHAR(255),
  amount INT,
  payment_method VARCHAR(50),
  payment_date DATETIME
);






-->