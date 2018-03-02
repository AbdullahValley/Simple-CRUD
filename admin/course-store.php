<?php
include("config.php");

$query = "INSERT INTO courses (course_name, course_code, course_details, course_status) VALUES ('".$_POST['course_name']."', '".$_POST['course_code']."', '".$_POST['course_details']."', '".$_POST['course_status']."');";

$result = $connection->exec($query);

if($result == TRUE){
    header('location: index.php?&s=7');
}

?>