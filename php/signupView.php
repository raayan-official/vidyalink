<?php
include 'connection.php';
session_start();

$qry = "SELECT * FROM `student`";
$result = mysqli_query($conn, $qry);

if ($result && mysqli_num_rows($result) > 0) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Details</title>
    
    <!-- Link Bootstrap CSS -->
    <?php include "../others/header.php"; ?>
    
<style>
    .email-text {
        display: block;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
    }
</style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand px-4" href="#"><i class="fa-sharp fa-solid fa-graduation-cap text-light"> Vidya-Link</i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link px-4" aria-current="page" href="../index.php" id="home">Home<i class="fa-sharp fa-light fa-house px-1"></i></a>
                    </li>
                    
                    <li class="nav-item right">
                        <a class="nav-link px-4 active" href="login.php"><i class="fa-light fa-user px-1"></i></a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
    <!-- Content -->
    <div class="container mt-5">
    <div class="row">
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                <div class="card">
                    <img src="<?= htmlspecialchars($row['picture']) ?>" class="card-img-top" alt="User Picture" style="height: 150px; object-fit: cover;">
                    <div class="card-body">
                        <h6 class="card-title"><?= htmlspecialchars($row['name']) ?></h6>
                        <p class="card-text"><strong>Username:</strong> <?= htmlspecialchars($row['username']) ?></p>
                        <p class="card-text"><strong>Email:</strong> <span class="email-text"><?= htmlspecialchars($row['email']) ?></span></p>
                        <div class="text-center mt-3 d-flex justify-content-between">
                            <a href="updateForm.php?updateid=<?= htmlspecialchars($row['id']) ?>" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i> Update</a>
                            <a href="deleteDb.php?deleteid=<?= htmlspecialchars($row['id']) ?>" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i> Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <div class="text-center mt-4">
        <a href="signup.php" class="btn btn-success m-2"><i class="bi bi-plus-circle"></i> Add New</a>
        <a href="../index.php" class="btn btn-primary m-2">Back</a>
        <a href="logout.php" class="btn btn-danger m-2"><i class="bi bi-box-arrow-right"></i> Logout</a>
    </div>
</div>






    <!-- Include Bootstrap JS -->
    <?php include "../others/footer.php"; ?>
</body>
</html>
<?php
} else {
    echo "No records found";
}
mysqli_close($conn); // Close the database connection
?>
