<?php
session_start();

$conn = new mysqli("localhost","root","","my_shoply");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if($result->num_rows == 1){

        $row = $result->fetch_assoc();

        if(password_verify($password, $row['password'])){
            $_SESSION['user'] = $email;
            header("Location: mess.html");
            exit();
        } else {
            echo "<script>alert('Wrong Password');</script>";
        }

    } else {
        echo "<script>alert('User not found');</script>";
    }
}
?>
