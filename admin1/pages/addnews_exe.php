<?php
session_start();
include '../../includes/db.php';

$mgs = "";
if (isset($_POST['submit'])) {
	
	$target = "../../images".basename($_FILES['image']['name']);

$title = $_POST['title'];
$content = $_POST['content'];
$image = $_FILES['image']['name'];
$date = date("Y-m-d h:i:s");
$author = $_POST['author'];

	$sql = "INSERT INTO news (title,content,image,date,author) VALUES ('$title','$content','$image','$date','$author')";
	$result = $conn->query($sql);

	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
			$msg = "Images uploaded successfully";
		} else {
			$mgs = "There was a problem uploading the image";
		}
}
	// header('Location: index2.php');
	 header('Location: addnews.php');