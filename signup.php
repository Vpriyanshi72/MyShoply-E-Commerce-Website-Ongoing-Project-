<?php
$conn = new mysqli("localhost", "root", "", "my_shoply");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullname  = $_POST['fullname'];
    $email     = $_POST['email'];
    $mobile    = $_POST['mobile'];
    $dob       = $_POST['dob'];
    $password  = $_POST['password'];     // correct
    $cpassword = $_POST['cpassword'];

    if ($password != $cpassword) {
        echo "<script>alert('Passwords do not match');</script>";
    } else {

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (fullname,email,mobile,dob,_password)
                VALUES ('$fullname','$email','$mobile','$dob','$password')";

        if ($conn->query($sql)) {
            echo "<script>alert('Signup Successful'); window.location='loginpage.php';</script>";
        } else {
            echo "Error: " . $conn->error;
        }
    }
}
?>
