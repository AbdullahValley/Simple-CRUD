<?php

include("config.php");

$query = "UPDATE students SET student_status ='0' WHERE student_id = ".$_GET['id'];
$stmt = $connection->exec($query);


// $query_2 = "SELECT student_image FROM students";
// $stmt_2 = $connection->exec($query_2);
// $results = $stmt_2->fetch(PDO::FETCH_ASSOC);


// $image_name = $results['student_image'];

// $delete_photo = unlink('../images/uploads/'."$image_name");


if($stmt == TRUE /* && $delete_photo == TRUE*/){
	   header('location: index.php?&s=3');
	}
	
/*	else
	{
echo "<br>Failed to Delete Image !";
	}*/
?>