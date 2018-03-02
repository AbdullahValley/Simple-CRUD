<?php

$uploads_dir = '../images/uploads';

$tmp_name 	= $_FILES['student_image']['tmp_name'];
$image_name	= $_FILES['student_image']['name'];

move_uploaded_file($tmp_name, "$uploads_dir/$image_name");

include("config.php");

$_POST['student_hobbies'] = implode(', ',$_POST['student_hobbies']);

$_POST['student_image'] = $_FILES['student_image']['name'];

$query = "INSERT INTO `students` (`student_name`, `student_email`, `student_mobile`, `student_password`, `student_address`, `student_gender`, `student_hobbies`, `student_image`, `student_date_of_birth`, `student_status`) VALUES ('".$_POST['student_name']."', '".$_POST['student_email']."', '".$_POST['student_mobile']."', '".$_POST['student_password']."', '".$_POST['student_address']."', '".$_POST['student_gender']."', '".$_POST['student_hobbies']."', '".$_POST['student_image']."', '".$_POST['student_date_of_birth']."','".$_POST['student_status']."');";

$result = $connection->exec($query);

if($result == TRUE){
    header('location: index.php?&s=3');
}

?>