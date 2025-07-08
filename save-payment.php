
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rentify";  // ✅ Make sure this DB exists

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get data from POST
$name = $_POST['name'];
$email = $_POST['email'];
$property = $_POST['property'];
$amount = $_POST['amount'];
$payment_id = $_POST['payment_id'];
$date = date("Y-m-d H:i:s");

// Insert into updated table
$sql = "INSERT INTO razorpay_payments (name, email, property, amount, payment_id, payment_date)
        VALUES ('$name', '$email', '$property', '$amount', '$payment_id', '$date')";

if ($conn->query($sql) === TRUE) {
  // echo "✅ Payment saved successfully";
  // Redirect after successful payment insert
  header("Location: payment-success.html");
  exit();
} else {
  echo "❌ Error saving payment: " . $conn->error;
}

$conn->close();
?>




<!-- SQL TABLE
 

CREATE TABLE razorpay_payments (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  email VARCHAR(100),
  property VARCHAR(255),
  amount INT,
  payment_id VARCHAR(100),
  payment_date DATETIME
);


-->
