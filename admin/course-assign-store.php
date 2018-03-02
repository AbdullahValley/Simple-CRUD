<?php

include("config.php");

foreach ($_POST['course_id'] as $course_list) 
{
$query = "INSERT INTO courses_student (student_id, course_id) VALUES ('".$_POST['student_id']."', '".$course_list."');";

$result = $connection->exec($query);
}

if($result == TRUE)
    header('location: index.php?&s=11');
?>