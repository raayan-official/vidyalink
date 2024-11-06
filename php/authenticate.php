<?php
session_start();
include('connection.php'); // Include your database connection file



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include "../others/header.php"; ?>
    <style>
        .card {
            border: 1px solid #ddd;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #6c757d;
            color: white;
        }

        .rounded-circle {
            border: 3px solid #6c757d;
        }

        .card-body p {
            font-size: 1.1em;
            margin-bottom: 0.5em;
        }
    </style>

</head>

<body>
    <?php

    function verifyPassword($enteredPassword, $storedHash)
    {
        return password_verify($enteredPassword, $storedHash);
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];
        // Prepare and execute the SQL query
        $stmt = $conn->prepare("SELECT * FROM student WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
           

            if (verifyPassword($password, $row['password'])) {
                $_SESSION['email'] = $row['email'];
                $_SESSION['status'] = $row['status'];
                $_SESSION['active'] = $row['active'];

                if ($row['status'] == 1 && $row['active'] == 1) {
                    // Admin: Fetch all student details
                    $stmt = $conn->prepare("SELECT * FROM student");
                    $stmt->execute();
                    $all_students = $stmt->get_result();

                  
                    header("location:signupView.php");
                } elseif ($row['status'] == 0 && $row['active'] == 0) {
                   
                    echo '<div class="container mt-5">';
                    echo '<div class="row justify-content-center">';
                    echo '<div class="col-md-8">';
                    echo '<div class="card shadow">';
                    echo '<div class="card-header text-center bg-secondary text-white">';
                    echo '<h2>Student Profile</h2>';
                    echo '</div>';
                    echo '<div class="card-body">';
                    echo '<div class="row">';
                    echo '<div class="col-md-4 text-center mb-3">';
                    echo '<img src="' . htmlspecialchars($row['picture']) . '" alt="User Picture" class="rounded-circle img-fluid border border-secondary" style="width: 150px; height: 150px; object-fit: cover;">';
                    echo '</div>';
                    echo '<div class="col-md-8">';
                    echo '<h3>' . htmlspecialchars($row['name']) . '</h3>';
                    echo '<p><strong>Username:</strong> ' . htmlspecialchars($row['username']) . '</p>';
                    echo '<p><strong>Email:</strong> ' . htmlspecialchars($row['email']) . '</p>';
                    echo '<p><strong>Contact:</strong> ' . htmlspecialchars($row['phone']) . '</p>';
                    echo '<p><strong>Date of Birth:</strong> ' . htmlspecialchars($row['dob']) . '</p>';
                    echo '<p><strong>City:</strong> ' . htmlspecialchars($row['city']) . '</p>';
                    echo '<div class="d-flex mt-4">';
                    echo '<a href="updateForm.php?updateid=' . $row['id'] . '" class="btn btn-warning me-2"><i class="bi bi-pencil-square"></i> Update</a>';
                    echo '<a href="logout.php" class="btn btn-danger"><i class="bi bi-box-arrow-right"></i> Logout</a>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                } else {
                    echo "Invalid user status.";
                }
            } else {
                // Debug: Print a message if password verification fails
                $msg = "Password verification failed.";
                header("location: login.php? err=".$msg);

              
            }
        } else {
            echo "No user found with the provided email.<br>";
            echo "Entered Email: $email<br>";
        }

        $stmt->close();
    }

    ?>

    <!-- Include Bootstrap JS -->
    <?php include "../others/footer.php";
    $conn->close();
    ?>
</body>

</html>