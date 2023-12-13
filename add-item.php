<?php
include 'db.php';

$name = $_POST['name'];
$price = $_POST['price'];
$sql = "INSERT INTO items (name, price) VALUES ('$name', $price)";
$conn->query($sql);
header("location: admin_page.php");
?>