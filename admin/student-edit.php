<?php

include("config.php");

$_POST['student_hobbies'] = implode(', ',$_POST['student_hobbies']);

$_POST['student_date_of_birth'] = $_POST['year'].'-'.$_POST['month'].'-'.$_POST['day'];


$query = "UPDATE `students` SET `student_name` = '".$_POST['student_name']."', `student_mobile` = '".$_POST['student_mobile']."', `student_password` = '".$_POST['student_password']."', `student_address` = '".$_POST['student_address']."', `student_gender` = '".$_POST['student_gender']."', `student_hobbies` = '".$_POST['student_hobbies']."', `student_date_of_birth` = '".$_POST['student_date_of_birth']."' WHERE `student_id` = ".$_POST['student_id'];

$result = $connection->exec($query);

if($result == TRUE){
    header('location: index.php?&s=3');
}

?>