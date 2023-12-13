<?php
include 'db.php';
$status = $_POST['status'];
$id = $_POST['id'];

$sql = "UPDATE orders SET status='$status' WHERE id=$id;";
$conn->query($sql);

header("location: all_orders.php");
?>