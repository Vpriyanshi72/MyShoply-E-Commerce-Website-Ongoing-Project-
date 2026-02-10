<?php
$conn = new mysqli("localhost","root","","my_shoply");

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM products");
?>

<!DOCTYPE html>
<html>
<head>
<title>Products</title>
<link rel="stylesheet" href="sell.css">
</head>
<body>

<h2>Available Products</h2>

<div class="products">

<?php
while($row = $result->fetch_assoc()){
    echo "<div class='card'>";
    echo "<img src='uploads/".$row['image']."' width='150'><br>";
    echo "<h3>".$row['name']."</h3>";
    echo "<p>₹".$row['price']."</p>";
    echo "<p>".$row['category']."</p>";
    echo "<p>Seller: ".$row['seller']."</p>";
    echo "</div>";
}
?>

</div>

</body>
</html>
