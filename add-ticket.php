<?php
include 'db.php';
$subject = htmlspecialchars($_POST['subject']);
$description =  htmlspecialchars($_POST['description']);
$type = $_POST['type'];
$user_id = $_POST['id'];
if($type != ''){
	$sql = "INSERT INTO tickets (poster_id, subject, description, type) VALUES ($user_id, '$subject', '$description', '$type')";
	if ($conn->query($sql) === TRUE){
		$ticket_id =  $conn->insert_id;
		$sql = "INSERT INTO ticket_details (ticket_id, user_id, description) VALUES ($ticket_id, $user_id, '$description')";
		$conn->query($sql);
	}
}
header("location: user_ticket.php");
?>