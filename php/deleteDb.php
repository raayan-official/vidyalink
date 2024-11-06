<?php
include 'connection.php';
include '../others/header.php';

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    // Using prepared statements to prevent SQL injection
    $sql = "DELETE FROM `student` WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, 's', $id); // 's' specifies the type as string
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            // Redirect to signupView.php after successful deletion
            header("Location: signupView.php");
            exit(); // Ensure the script stops executing after the redirect
        } else {
            // Handle query execution error
            echo "Error executing query: " . mysqli_error($conn);
        }

        mysqli_stmt_close($stmt);
    } else {
        // Handle statement preparation error
        echo "Error preparing statement: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request: deleteid parameter missing.";
}

include '../others/footer.php';
?>
