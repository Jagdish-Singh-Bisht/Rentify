<!-- <?php


include 'db_connect.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
if ($conn->query($sql) === TRUE) {
    header("Location: ../login.html");
} else {
    echo "Signup failed: " . $conn->error;
}



?> -->








<!-- ------------------------------------------------------------------- -->



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rentify";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form values
$name = $_POST['username'];
$email = $_POST['email'];
$pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Insert into database
$sql = "INSERT INTO users (username, email, password) VALUES ('$name', '$email', '$pass')";

if ($conn->query($sql) === TRUE) {
    echo "Account created successfully. <a href='../login.html'>Login here</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 













<!-- [----------------------------] -->











<!-- <?php
include 'db_connect.php'; // Connects to DB

// Get form values
$name = $_POST['username'];
$email = $_POST['email'];
$pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Insert into database
$sql = "INSERT INTO users (username, email, password) VALUES ('$name', '$email', '$pass')";

if ($conn->query($sql) === TRUE) {
    echo "Account created successfully. <a href='../login.html'>Login here</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> -->
