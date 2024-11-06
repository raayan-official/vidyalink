<?php
session_start();
require 'connection.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    // exit;
}

$user_id = $_SESSION['user_id']; // Retrieve user_id from session
$status = $_SESSION['status'];
$active = $_SESSION['active'];

if ($status == 1 && $active == 1) { // Admin
    $sql = "SELECT id, name, username, email, phone, dob, city, picture, status, active FROM student WHERE status = 0 AND active = 0";
    $result = $conn->query($sql);
    echo "<h2>Admin Dashboard</h2>";
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row['id'] . "<br>";
        echo "Name: " . $row['name'] . "<br>";
        echo "Username: " . $row['username'] . "<br>";
        echo "Email: " . $row['email'] . "<br>";
        echo "Phone: " . $row['phone'] . "<br>";
        echo "Date of Birth: " . $row['dob'] . "<br>";
        echo "City: " . $row['city'] . "<br>";
        echo "<img src='" . $row['picture'] . "' alt='Profile Picture' width='100'><br><br>";
    }
} else { // Student
    $sql = "SELECT id, name, username, email, phone, dob, city, picture FROM student WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $user_id); // Use user_id to fetch specific user details
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    echo "<h2>User Dashboard</h2>";
    echo "ID: " . $user['id'] . "<br>";
    echo "Name: " . $user['name'] . "<br>";
    echo "Username: " . $user['username'] . "<br>";
    echo "Email: " . $user['email'] . "<br>";
    echo "Phone: " . $user['phone'] . "<br>";
    echo "Date of Birth: " . $user['dob'] . "<br>";
    echo "City: " . $user['city'] . "<br>";
    echo "<img src='" . $user['picture'] . "' alt='Profile Picture' width='100'><br>";
}
?>
