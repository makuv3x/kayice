<?php
session_start();
include 'includes/db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


	$sql = "INSERT INTO tbl_message (name,email,subject,message) VALUES ('$name','$email','$subject','$message')";
	$result = $conn->query($sql);

	// header('Location: index2.php');
	 header('Location: contact.php');