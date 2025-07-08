<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rentify";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection Failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Rentify - Payment History</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f6f8;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #2c3e50;
      color: white;
      padding: 20px;
      text-align: center;
    }

    .container {
      max-width: 1000px;
      margin: 30px auto;
      background: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    h2 {
      text-align: center;
      color: #333;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 25px;
    }

    th, td {
      padding: 12px;
      border: 1px solid #ccc;
      text-align: center;
    }

    th {
      background-color: #2c3e50;
      color: white;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    .section-title {
      margin-top: 40px;
      font-size: 20px;
      color: #2c3e50;
    }
  </style>
</head>
<body>

<header>
  <h1>Rentify - Payment History</h1>
</header>

<div class="container">
  <h2>📄 Rent Payment Records</h2>

  <table>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Property</th>
      <th>Amount (₹)</th>
      <th>Method</th>
      <th>Date</th>
    </tr>

    <?php
    $sql = "SELECT * FROM rent_payments ORDER BY payment_date DESC";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['property']}</td>
                <td>{$row['amount']}</td>
                <td>{$row['payment_method']}</td>
                <td>{$row['payment_date']}</td>
              </tr>";
      }
    } else {
      echo "<tr><td colspan='6'>No rent payments found.</td></tr>";
    }
    ?>
  </table>

  <div class="section-title"> Token Payment Records</div>

  <table>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Property</th>
      <th>Amount (₹)</th>
      <th>Method</th>
      <th>Date</th>
    </tr>

    <?php
    $sql = "SELECT * FROM token_payments ORDER BY payment_date DESC";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['property']}</td>
                <td>{$row['amount']}</td>
                <td>{$row['payment_method']}</td>
                <td>{$row['payment_date']}</td>
              </tr>";
      }
    } else {
      echo "<tr><td colspan='6'>No token payments found.</td></tr>";
    }
    $conn->close();
    ?>
  </table>
</div>

</body>
</html>
