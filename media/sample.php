<?php
include "connection.php";
$errmsg = "";
$msg = "";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add-User</title>
    <?php
include "header.php";
    ?>
</head>
<body>
    <?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = trim($_POST['name']);
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $contact = trim($_POST['contact']);
    $city = trim($_POST['city']);
    $password = trim($_POST['password']);
    $filename = $_FILES['image']['name'];
    $tempfile = $_FILES['image']['temp_file'];
    $folder = "../others/upload" . $filename;

if (!empty($name) && !empty($username) && !empty($email) && !empty($contact) && !empty($city) && !empty($password))
{
     //sql check if its exist in the datbase
    $checksql = "SELECT * FROM `stydent` WHERE student.USERNAME = '".$username."' OR student.EMAIL = '".$email."' OR student.EMAIL = '".$contact."'";

    $checkquery = mysql_query($checksql,$conn);

    if(mysql_num_row($checkquery)>0){
        $errmsg = $username."Already Exist & Please Login!";
        header("location:signup.php?error=".$errmsg);
    }else{
        $prefix = "STU/".date("mY")."/";

        $nextid = "SELECT COALESCE(MAX(CAST(SUBSTR(student.ID,LENGTH(student.ID)-2) AS UNSIGNED)),0) AS 'ID' FROM `student` WHERE student.ID LIKE '".$prefix."%'";

        $idquery = mysql_query($nextid, $conn);

        if(mysql_num_row($idquery)){
            
            $nextidvalue = mysqli_fetch_assoc($idquery);

        }
        $id = $prefix.str_pad((intval($nextidvalue)+1),3,"0",STR_PAD_LEFT);

        $addsql = "INSERT INTO `student`(`SID`, `NAME`, `USERNAME`, `EMAIL`, `CONTRACT`, `DOB`, `CITY`, `PASSWORD`, `PHPTO_PATH`, `STUDENT_STATUS`, `STUDENT_ACTIVE`, `REG_TIME`) VALUES ('".$id."','".$name."','".$username."','".$email."','".$contact."','".$city."','".$password."','".$folder."',0,0)";

        $query = mysqli_query($addsql, $conn);

        if($query){
            move_uploaded_file($tempfile, $folder);
            $msg = "New User Added, Your Id Id:".$id;
            header("location:view.php?error=".$msg);
        }
    }
} else {

    if (empty($name)){
        $errmsg = "Please Enter Your Name.";
    }else if(!preg_match("/^[a-zA-Z ]*$/", $name)){
        $errmsg = "Only letters and white space allowed.";
    }else if (empty($username)){
        $errmsg ="Please Enter Your Username.";
    }else if (!preg_match("/^[a-zA-Z ]*$/", $username)){
        $errmsg = "Only letters and white space allowed.";
    }else if (empty ($email)){
        $errmsg = "Please Enter Your Email";
    }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errmsg = "Invalid Email Format";
    }else if(empty ($contact)){
        $errmsg = "Enter Your Phone Number.";
    }else if(empty ($city)){
        $errmsg = "Enter Your City.";
    }else if(empty ($password)){
        $errmsg = "Enter Your Password";
    }else if(strlen($password) < 8){
        $errmsg = "Password Must Have At Least * Charactrs";
    }
    header("location:signup.php?error=".$errmsg);
} 


}else{
    $msg ="Unauthorised Page access ...";
    header("location:signup.php?error=".$errmsg);

    
}

?>


<?php
include "footer.php";
?>
</body>
</html>


<?php
          if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Check if an error message is set
            if (isset($_GET['error'])) {
              echo "<div class='text-center text-danger'>" . $_GET['error'] . "</div>";
            }
            // Check if a success message is set
            elseif (isset($_GET['success'])) {
              echo "<div class='text-center text-success'>" . $_GET['success'] . "</div>";
            }
          }
          ?>