

<?php
session_start();

$host = 'localhost';
$dbname = 'rentify'; // ✅ Corrected DB name
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $property_id = $_POST['property_id'];
        $amount = $_POST['amount'];
        $tenure = $_POST['tenure'];
        $rate = $_POST['rate'];

        // ✅ Update table name if needed
        $stmt = $pdo->prepare("INSERT INTO loan_applications (name, email, property_id, amount, tenure, rate, submitted_at) VALUES (?, ?, ?, ?, ?, ?, NOW())");
        $stmt->execute([$name, $email, $property_id, $amount, $tenure, $rate]);

        echo "<script>alert('Application submitted successfully!'); window.location.href = 'homeloan.php';</script>";
    }
} catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
}
?>
