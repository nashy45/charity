<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = '';
$dbname = "charity_platform";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Sanitize and retrieve form data
$full_name = $conn->real_escape_string($_POST['full_name']);
$email = $conn->real_escape_string($_POST['email']);
$phone = $conn->real_escape_string($_POST['phone']);
$availability = $conn->real_escape_string($_POST['availability']);
$interests = $conn->real_escape_string($_POST['interests']);

// Insert data into the database
$sql = "INSERT INTO volunteers (full_name, email, phone, availability, interests)
        VALUES ('$full_name', '$email', '$phone', '$availability', '$interests')";

if ($conn->query($sql) === TRUE) {
    echo "Thank you for signing up as a volunteer!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>
