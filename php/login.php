





 <?php
session_start();
include 'db_connect.php';

$email = $_POST['email'];
$pass = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();

    if (password_verify($pass, $row['password'])) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $row['username'];

        // Redirect logic
        if (isset($_GET['redirect'])) {
            $redirectTo = $_GET['redirect'];
        } else {
            $redirectTo = '../index.html'; // default fallback
        }

        header("Location: $redirectTo");
        exit;
    } else {
        echo "Incorrect password.";
    }
} else {
    echo "User not found.";
}

$conn->close();
?>
