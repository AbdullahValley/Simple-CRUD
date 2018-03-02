<?php
include("config.php");

$query = "SELECT * FROM `students` where student_id =".$_GET['student_id'];
$stmt = $connection->query($query);
$results = $stmt->fetch(PDO::FETCH_ASSOC);

$image_name = $results['student_image'];
$student_id = $results['student_id'];


$deleted_photo = unlink('../images/uploads/'."$image_name");

	if ($deleted_photo == TRUE)
	{
	    header('location: index.php?id='."$student_id".'&s=4');
	}

	else
	{
echo "<br>Failed to Delete Image !<br><br>Already Deleted or No Such a File on Directory";
	}

?>