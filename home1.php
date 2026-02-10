<?php
include "home.php";

$category = $_GET['category'] ?? '';
?>

<!DOCTYPE html>
<html>
<head>
  <title>Products</title>
  <link rel="stylesheet" href="home.css">
</head>

<body>

<h2><?php echo ucfirst($category); ?> Products</h2>

<div class="products">

<?php
$sql = "SELECT * FROM products WHERE category='$category'";
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "
        <div class='card'>
            <img src='".$row['image']."'>
            <h3>".$row['name']."</h3>
            <p class='price'>₹".$row['price']."</p>
            <button class='btn'>Buy Now</button>
        </div>";
    }
}else{
    echo "No products found";
}
?>

</div>

</body>
</html>
