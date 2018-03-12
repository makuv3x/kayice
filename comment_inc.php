<?php

function setComments($conn){
	if(isset($_POST['commentSubmit'])){
		$name = $_POST['name'];
		$comment = $_POST['comment'];
		$date = $_POST['date'];

		$sql = "INSERT INTO comments (name, comment, date) VALUES ('$name', '$comment', '$date')";
		$result = mysqli_query($conn, $sql);
	}
}

function getComments($conn){
	$sql = "SELECT * FROM comments";
	$result = $conn->query($sql);
	while ($row = $result->fetch_assoc()) {
		$id = $row['name'];
		$sql2 = "SELECT * FROM tbl_member WHERE id= '$id'";
		$result2 = $conn->query($sql2);
		if ($row2 = $result2->fetch_assoc()) {
			echo '
				<div class="card" style="margin: 8px;">
					<div class="card-body">';
						echo $row2['name'];
						echo $row['date']."<br><br>";
						echo nl2br($row['comment']);
					echo '</div>
				</div>';
		}	
	}
}
?>
