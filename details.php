<?php
include 'db.php';
if(isset($_GET['id'])){
    $user_id = $_GET['id'];
  }
  else{
    $user_id = '%';
  }
$name = htmlspecialchars($_POST['name']);
$username = htmlspecialchars($_POST['username']);
$password =  htmlspecialchars($_POST['password']);
$phone = $_POST['phone'];
$email = htmlspecialchars($_POST['email']);
$address = htmlspecialchars($_POST['address']);
$sql = "UPDATE users SET name = '$name', username = '$username', password='$password', contact=$phone, email='$email', address='$address' WHERE id = $user_id;";
if($conn->query($sql)==true){
	$_SESSION['name'] = $name;
}
header("location:edit details.php");
?>