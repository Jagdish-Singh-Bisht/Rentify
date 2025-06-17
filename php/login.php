



<!-- -------------------------------------------------------------- -->








<!-- ---------------------------------------------------- -->



<?php
include 'db_connect.php'; // Connects to DB

$email = $_POST['email'];
$pass = $_POST['password'];

// Fetch user
$sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();
    if (password_verify($pass, $row['password'])) {
        echo "Login successful! Welcome, " . $row['username'];
    } else {
        echo "Incorrect password.";
    }
} else {
    echo "User not found.";
}



if (password_verify($pass, $row['password'])) {
    header("Location: ../index.html");
    exit();
}





<?php
session_start();

// Your login validation here...

if ($validLogin) {
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;

    if (isset($_SESSION['redirect_to'])) {
        $redirectTo = $_SESSION['redirect_to'];
        unset($_SESSION['redirect_to']);
        header("Location: $redirectTo");
    } else {
        header("Location: index.html"); // or homepage
    }
    exit;
}
?>



$conn->close();
?>
 




<!-- -------------------------------------------------- -->



