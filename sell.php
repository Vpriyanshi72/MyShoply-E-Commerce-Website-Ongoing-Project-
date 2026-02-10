<?php

$conn = new mysqli("localhost","root","","my_shoply");

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$price = $_POST['price'];
$category = $_POST['category'];
$seller = $_POST['seller'];

$imageName = $_FILES['image']['name'];
$tempName = $_FILES['image']['tmp_name'];

$folder = "uploads/" . $imageName;

move_uploaded_file($tempName, $folder);

$sql = "INSERT INTO products (name,price,category,seller,image)
        VALUES ('$name','$price','$category','$seller','$imageName')";

if($conn->query($sql) === TRUE){
    echo "Product Added Successfully<br>";
    echo "<a href='sell1.php'>View Products</a>";
}else{
    echo "Error: " . $conn->error;
}
?>
