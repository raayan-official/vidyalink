<?php
include "connection.php";
session_start();

// Ensure ID is treated as a string since it is VARCHAR
$id = isset($_GET['updateid']) ? $_GET['updateid'] : '';
if (empty($id)) {
    $_SESSION['err'] = "Invalid ID.";
    header("Location: updateForm.php");
    exit();
}

// Fetch student data
$sqll = "SELECT * FROM `student` WHERE id=?";
$stmt = $conn->prepare($sqll);
$stmt->bind_param("s", $id); // 's' because id is VARCHAR
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

if (!$row) {
    $_SESSION['err'] = "Student not found.";
    header("Location: updateForm.php");
    exit();
}

$name = $row['name'];
$username = $row['username'];
$email = $row['email'];
$phone = $row['phone'];
$dob = $row['dob'];
$city = $row['city'];
$password = $row['password'];
$image = $row['picture'];

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, trim($_POST['name']));
    $username = mysqli_real_escape_string($conn, trim($_POST['username']));
    $email = mysqli_real_escape_string($conn, trim($_POST['email']));
    $phone = mysqli_real_escape_string($conn, trim($_POST['phone']));
    $dob = mysqli_real_escape_string($conn, trim($_POST['dob']));
    $city = mysqli_real_escape_string($conn, trim($_POST['city']));
    $password = trim($_POST['password']);

    // Password hashing
    $hashed_password = !empty($password) ? password_hash($password, PASSWORD_DEFAULT) : null;

    // File upload handling
    $target_file = null;
    if (!empty($_FILES['image']['name'])) {
        $filename = basename($_FILES['image']['name']);
        $tempfile = $_FILES['image']['tmp_name'];
        $upload_dir = "../others/upload/";

        $unique_filename = uniqid() . "_" . $filename;
        $target_file = $upload_dir . $unique_filename;

        $check = getimagesize($tempfile);
        if ($check !== false) {
            $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            $allowed_types = ['jpg', 'jpeg', 'png', 'gif'];
            if (in_array($file_type, $allowed_types) && $_FILES['image']['size'] < 5000000) {
                if (!move_uploaded_file($tempfile, $target_file)) {
                    $_SESSION['err'] = "Sorry, there was an error uploading your file.";
                    header("Location: updateForm.php?updateid=$id");
                    exit();
                }
            } else {
                $_SESSION['err'] = "Invalid file type or file size too large.";
                header("Location: updateForm.php?updateid=$id");
                exit();
            }
        } else {
            $_SESSION['err'] = "File is not an image.";
            header("Location: updateForm.php?updateid=$id");
            exit();
        }
    }

    // Construct the SQL update query
    $sql = "UPDATE `student` SET `name`=?, `username`=?, `email`=?, `phone`=?, `dob`=?, `city`=?";
    $params = [$name, $username, $email, $phone, $dob, $city];

    if ($hashed_password !== null) {
        $sql .= ", `password`=?";
        $params[] = $hashed_password;
    }
    if ($target_file !== null) {
        $sql .= ", `picture`=?";
        $params[] = $target_file;
    }
    $sql .= " WHERE `id`=?";
    $params[] = $id;

    $stmt = $conn->prepare($sql);
    $types = str_repeat('s', count($params) - 1) . 's'; // 's' because id is VARCHAR
    $stmt->bind_param($types, ...$params);

    if ($stmt->execute()) {
        $_SESSION['msg'] = "Update successful.";
    } else {
        $_SESSION['err'] = "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();

    header("Location: signupView.php?updateid=$id");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>VidyaLink - Update Details</title>
  <?php include "../others/header.php"; ?>
  <link rel="stylesheet" href="../css/signup.css">
  <link rel="stylesheet" href="../css/update.css">
</head>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container">
      <a class="navbar-brand px-4" href="#"><i class="fa-sharp fa-solid fa-graduation-cap text-light"> Vidya-Link</i></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link px-4" aria-current="page" href="index.php" id="home">Home<i class="fa-sharp fa-light fa-house px-1"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-4" href="">About<i class="fa-sharp fa-light fa-address-card px-1"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-4" href="#">Services<i class="fa-light fa-truck-arrow-right px-1"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-4" href="#">Contact<i class="fa-sharp fa-light fa-address-book px-1"></i></a>
          </li>
          <li class="nav-item right">
            <a class="nav-link px-4 active" href="./php/login.php"><i class="fa-sharp fa-light fa-user px-1"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<div class="container w-50 mt-5 mb-5">
    <div class="row">
        <div class="col">
        <form action="" method="post" class="form" enctype="multipart/form-data">
          <div class="m-auto img mb-3">
            <img id="pic" class="" src="<?php echo htmlspecialchars($image ? $image : '../images/noimage.jpg'); ?>" alt="Selected Image">
          </div>
          <h3 class="text-center mt-2 pt-4">Update Your Details</h3>

          <div class="mb-3 box">
            <label for="name" class="form-label my-2">Name:</label>
            <i class="fa-light fa-user"></i>
            <input type="text" class="form-control form" id="name" placeholder="Name" name="name" value="<?php echo htmlspecialchars($name); ?>" required />
          </div>

          <div class="mb-3 box">
            <label for="username" class="form-label my-2">Username:</label>
            <i class="fa-light fa-circle-user"></i>
            <input type="text" class="form-control form" id="username" placeholder="Username" name="username" value="<?php echo htmlspecialchars($username); ?>" required />
          </div>

          <div class="mb-3 box">
            <label for="email" class="form-label my-2">Email Address:</label>
            <i class="fa-light fa-envelope"></i>
            <input type="email" class="form-control form" id="email" aria-describedby="emailHelp" placeholder="example@gmail.com" name="email" value="<?php echo htmlspecialchars($email); ?>" required />
          </div>

          <div class="mb-3 box">
            <label for="phone" class="form-label my-2">Phone Number:</label>
            <i class="fa-light fa-phone"></i>
            <input type="text" class="form-control form" id="phone" placeholder="1234567890" name="phone" value="<?php echo htmlspecialchars($phone); ?>" required />
          </div>

          <div class="mb-3 box">
            <label for="dob" class="form-label my-2">Date Of Birth:</label>
            <i class="fa-light fa-calendar-days"></i>
            <input type="date" class="form-control form" id="dob" name="dob" value="<?php echo htmlspecialchars($dob); ?>" required />
          </div>

          <div class="mb-3 box">
            <label for="city" class="form-label my-2">City:</label>
            <i class="fa-light fa-tree-city"></i>
            <input type="text" class="form-control form" id="city" placeholder="City" name="city" value="<?php echo htmlspecialchars($city); ?>" required />
          </div>

          <div class="mb-3 box">
            <label for="password" class="form-label my-2">Password</label>
            <i class="fa-light fa-lock" id="btn"></i>
            <input type="password" class="form-control form" id="password" name="password" value="<?php echo "xxxxxxx"; ?>" />
          </div>

          <div class="box d-flex justify-content-center">
            <label for="image" class="form-label m-2 custom-file-upload text-light">Choose File</label>
            <input type="file" class="form-control custom-file-upload" id="image" name="image" />
            <input type="submit" class="btn btn-primary m-2" name="submit" value="Update">
          </div>
          
        </div>
    </div>
</div>

<footer class="footer" style="background-color: #171a1d; color: #fff; margin-top: 50px;">
  <div class="container-fluid">
    <div class="row d-flex justify-content-center">
      <div class="col">
        <h4 class="text-light" style="font-size: 20px; font-weight: 600; margin-bottom: 20px;">Company</h4>
        <ul class="footer-links" style="list-style: none; padding-left: 0;">
          <li class="mt-1"><a href="#" style="color: #ccc; text-decoration: none;" onmouseover="this.style.color='#fff';" onmouseout="this.style.color='#ccc';">About Us</a></li>
          <li class="mt-1"><a href="#" style="color: #ccc; text-decoration: none;" onmouseover="this.style.color='#fff';" onmouseout="this.style.color='#ccc';">Our Services</a></li>
          <li class="mt-1"><a href="#" style="color: #ccc; text-decoration: none;" onmouseover="this.style.color='#fff';" onmouseout="this.style.color='#ccc';">Privacy Policy</a></li>
          <li class="mt-1"><a href="#" style="color: #ccc; text-decoration: none;" onmouseover="this.style.color='#fff';" onmouseout="this.style.color='#ccc';">Affiliate Program</a></li>
          <li class="mt-1"><a href="#" style="color: #ccc; text-decoration: none;" onmouseover="this.style.color='#fff';" onmouseout="this.style.color='#ccc';">Others</a></li>
        </ul>
      </div>

      <div class="col" style="margin-bottom: 30px;">
        <h4 class="text-light" style="font-size: 20px; font-weight: 600; margin-bottom: 20px;">Get Help!</h4>
        <ul class="footer-links" style="list-style: none; padding-left: 0;">
          <li class="mt-1"><a href="#" style="color: #ccc; text-decoration: none;" onmouseover="this.style.color='#fff';" onmouseout="this.style.color='#ccc';">FAQ</a></li>
          <li class="mt-1"><a href="#" style="color: #ccc; text-decoration: none;" onmouseover="this.style.color='#fff';" onmouseout="this.style.color='#ccc';">Shipping</a></li>
          <li class="mt-1"><a href="#" style="color: #ccc; text-decoration: none;" onmouseover="this.style.color='#fff';" onmouseout="this.style.color='#ccc';">Returns</a></li>
          <li class="mt-1"><a href="#" style="color: #ccc; text-decoration: none;" onmouseover="this.style.color='#fff';" onmouseout="this.style.color='#ccc';">Order Status</a></li>
          <li class="mt-1"><a href="#" style="color: #ccc; text-decoration: none;" onmouseover="this.style.color='#fff';" onmouseout="this.style.color='#ccc';">Payment</a></li>
        </ul>
      </div>

      <div class="col" style="margin-bottom: 30px;">
        <h4 class="text-light" style="font-size: 20px; font-weight: 600; margin-bottom: 20px;">Online</h4>
        <ul class="footer-links" style="list-style: none; padding-left: 0;">
          <li class="mt-1"><a href="#" style="color: #ccc; text-decoration: none;" onmouseover="this.style.color='#fff';" onmouseout="this.style.color='#ccc';">Python</a></li>
          <li class="mt-1"><a href="#" style="color: #ccc; text-decoration: none;" onmouseover="this.style.color='#fff';" onmouseout="this.style.color='#ccc';">JavaScript</a></li>
          <li class="mt-1"><a href="#" style="color: #ccc; text-decoration: none;" onmouseover="this.style.color='#fff';" onmouseout="this.style.color='#ccc';">Java</a></li>
          <li class="mt-1"><a href="#" style="color: #ccc; text-decoration: none;" onmouseover="this.style.color='#fff';" onmouseout="this.style.color='#ccc';">C++</a></li>
          <li class="mt-1"><a href="#" style="color: #ccc; text-decoration: none;" onmouseover="this.style.color='#fff';" onmouseout="this.style.color='#ccc';">Php</a></li>
        </ul>
      </div>

      <div class="col" style="margin-bottom: 30px;">
        <h4 class="text-light" style="font-size: 20px; font-weight: 600; margin-bottom: 20px;">Follow Us</h4>
        <div class="social-links" style="display: flex; gap: 10px;">
          <a href="#" style="color: #ccc; text-decoration: none;" onmouseover="this.style.color='#fff';" onmouseout="this.style.color='#ccc';"><i class="text-secondary fa-brands fa-facebook px-2 mt-2"></i></a>
          <a href="#" style="color: #ccc; text-decoration: none;" onmouseover="this.style.color='#fff';" onmouseout="this.style.color='#ccc';"><i class="text-secondary fa-brands fa-x-twitter px-2 mt-2"></i></a>
          <a href="#" style="color: #ccc; text-decoration: none;" onmouseover="this.style.color='#fff';" onmouseout="this.style.color='#ccc';"><i class="text-secondary fa-brands fa-instagram px-2 mt-2"></i></a>
          <a href="#" style="color: #ccc; text-decoration: none;" onmouseover="this.style.color='#fff';" onmouseout="this.style.color='#ccc';"><i class="text-secondary fa-brands fa-linkedin px-2 mt-2"></i></a>
          <a href="#" style="color: #ccc; text-decoration: none;" onmouseover="this.style.color='#fff';" onmouseout="this.style.color='#ccc';"><i class="text-secondary fa-brands fa-github px-2 mt-2"></i></a>
        </div>
      </div>
    </div>
  </div>
</footer>

<?php include "../others/footer.php"; ?>
<script src="../js/script.js"></script>
</body>

</html>
