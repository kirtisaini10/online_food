<?php
include 'db.php';
include 'wallet.php';
$status = $_POST['status'];
$id = $_POST['id'];
$sql = "UPDATE orders SET status='$status', deleted=1 WHERE id=$id;";
$conn->query($sql);
$sql = mysqli_query($conn, "SELECT * FROM orders where id=$id");
while($row1 = mysqli_fetch_array($sql)){
$total = $row1['total'];
}
header("location: user_order.php");
?>