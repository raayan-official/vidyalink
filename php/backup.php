
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

    header("Location: view.php?updateid=$id");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student Record</title>
    
<link rel="stylesheet" href="../css/style.css">

<?php
include "../PHP/Header.php";
?>

</head>
  
<body>


  
<div class="container w-50 shadow bg-body-tertiary rounded">
    <h2 class="text-center text-success display-5 mt-4">Update Student Record</h2>
    <br><br>

    <form action="Signupdb.php" enctype="multipart/form-data" method="post">
      <div class="mb-3">
        <i class="fa-solid fa-circle-user fs-5"></i>
        <label for="name" class="form-label fs-5 mx-1">Name:</label>
        <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>" placeholder="Your Full Name ">
      </div>

      <div class="mb-3">
        <i class="fa-solid fa-user fs-5"></i>
        <label for="uname" class="form-label fs-5 mx-1">Username:</label>
        <input type="text" class="form-control" id="uname" name="uname" value="<?php echo htmlspecialchars($username); ?>" placeholder="Your User Name ">
      </div>

      <div class="mb-3">
        <i class="fa-duotone fa-lock fs-5"></i>
        <label for="pass" class="form-label fs-5 mx-1">Password:</label>
        <input type="password" class="form-control" id="pass" name="pass" value="<?php echo "xxxxxxx"; ?>"  placeholder="Your Password ">
      </div>

      <div class="mb-3">
        <i class="fa-solid fa-calendar-days fs-5"></i>
        <label for="dob" class="form-label fs-5 mx-1">Date of Birth:</label>
        <input type="date" class="form-control" id="dob" name="dob" value="<?php echo htmlspecialchars($dob); ?>"  placeholder="Your Date of Birth">
      </div>

      <div class="mb-3">
        <i class="fa-solid fa-envelope fs-5"></i>
        <label for="email" class="form-label fs-5 mx-1">Email ID:</label>
        <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" placeholder="Your Email ID ">
      </div>

      <div class="mb-3">
        <i class="fa-solid fa-address-book fs-5"></i>
        <label for="phone" class="form-label fs-5 mx-1">Mobile Number:</label>
        <input type="text" class="form-control" id="phone" name="phone" value="<?php echo htmlspecialchars($phone); ?>"  placeholder="Your Contact Number">
      </div>

      <div class="mb-3">
        <i class="fa-solid fa-city fs-5"></i>
        <label for="city" class="form-label fs-5 mx-1">City:</label>
        <input type="text" class="form-control" id="city" name="city" value="<?php echo htmlspecialchars($city); ?>"  placeholder="City Name ">
      </div>

      <div class="mb-3">
        <i class="fa-solid fa-image fs-5"></i>
        <label for="upload" class="form-label fs-5 mx-1">Photo:</label>
        <input type="file" class="form-control" id="upload" name="upload" placeholder="Upload Your Photo" onchange="uploadImage()">
      </div>

      <div class="imgPic d-flex justify-content-center">
        <img src="<?php echo htmlspecialchars($image ? $image : '../IMAGE/no-preview.png'); ?>" alt="" id="preview" class="img-fluid">
      </div>

      <div class="btn mx-auto d-flex">
        <input type="submit" class="btn btn-success" id="submit" name="submit" value="Update">
        <!-- <input type="submit" class="btn btn-danger" id="submit" name="submit" value="Delete"> -->

      </div>
    </form>
  </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>

 

// console.log(btn);

function uploadImage()
{
    let btn = document.getElementById("upload");
    
    let file = btn.files[0];

    console.log(file);

    let render = new FileReader();

    render.onload =function(e)
    {
        document.getElementById("preview").src = e.target.result;
    }

    render.readAsDataURL(file);

}

</script>

<?php
include "../PHP/Footer.php";
?>

</body>
</html>