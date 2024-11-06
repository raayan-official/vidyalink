
<?php
session_start();
include "connection.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

if (isset($_POST['submit'])) {
    // $id = $_GET['updateid']; // Move this inside the submit block

    $name = mysqli_real_escape_string($conn, trim($_POST['name']));
    $username = mysqli_real_escape_string($conn, trim($_POST['username']));
    $email = mysqli_real_escape_string($conn, trim($_POST['email']));
    $phone = mysqli_real_escape_string($conn, trim($_POST['phone']));
    $dob = mysqli_real_escape_string($conn, trim($_POST['dob']));
    $city = mysqli_real_escape_string($conn, trim($_POST['city']));
    $password = trim($_POST['password']);
    
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);


    // Handle file upload
    $filename = basename($_FILES['image']['name']);
    $tempfile = $_FILES['image']['tmp_name'];
    $upload_dir = "../others/upload/";
    $target_file = $upload_dir . uniqid() . "_" . $filename;

    // Check if file is a real image
    
    
        // Validate file type and size
        $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $allowed_types = ['jpg', 'jpeg', 'png', 'gif'];
         // 5MB limit
         echo $file_type;

            if(in_array($file_type, $allowed_types)){

                if($_FILES['image']['size'] < 5000000) {

                    $checkquery = $conn->prepare("SELECT `username`, `email`, `phone` FROM `student` WHERE `username` = ? OR `email` = ? OR `phone` = ?");
                $checkquery->bind_param("sss", $username, $email, $phone);
                $checkquery->execute();
                $checkquery->store_result();

                if ($checkquery->num_rows > 0) {
                    $msg = "Username, email, or phone already exists. Please choose a different one.";
                    $_SESSION['err'] = $msg;
                    // header("location: signupView.php");
                    // exit(); // Terminate script execution after redirect
                } else {                
                    // Generate unique empid
                    $prefix = "EMP/" . date("mY") . "/";
                    $nextid_query = "SELECT COALESCE(MAX(CAST(SUBSTR(student.id, LENGTH(student.id)-2) AS UNSIGNED)),0) AS 'id' FROM `student` WHERE student.id LIKE ?";
                    $stmt = $conn->prepare($nextid_query);
                    $prefix_like = $prefix . '%';
                    $stmt->bind_param("s", $prefix_like);
                    $stmt->execute();
                    $stmt->bind_result($max_id);
                    $stmt->fetch();
                    $stmt->close();
                    
                    $new_id = $prefix . str_pad($max_id + 1, 3, "0", STR_PAD_LEFT);

                    // Prepare SQL statement
                    $stmt = $conn->prepare("INSERT INTO `student` (`id`, `name`, `username`, `email`, `phone`, `dob`, `city`, `password`, `picture`, `status`, `active`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                    $status = 0;
                    $active = 0;
                    
                    $stmt->bind_param("sssssssssii", $new_id, $name, $username, $email, $phone, $dob, $city, $hashed_password, $target_file, $status, $active); 
                    
                   

                    // Execute the statement
                    if ($stmt->execute()) {
                        move_uploaded_file($tempfile, $target_file);

                        if(!move_uploaded_file($tempfile, $target_file))
                        {
                            $_SESSION['err'] = "Sorry, there was an error uploading your file.";
                        }
                        $_SESSION['msg'] = "Registration successful";
                    } else {
                        $_SESSION['err'] = "Error: " . $stmt->error;
                    }

                    $stmt->close();
                }
                    
                }
                else{
                    $msg = "File size must be less then 5 MB.";
                    header("location: signup.php? err=".$msg);
                }

            }
            else{
                
                
                    $msg = "image file type not matched, pls upload jpg or png or jpeg.";
                    header("location: signup.php? err=".$msg);
            }


            

    // Redirect to signup view
    header("location: login.php");
    // exit(); // Terminate script execution after redirect


//$conn->close(); // Close database connection outside the submit block
}
?>


</body>
</html>