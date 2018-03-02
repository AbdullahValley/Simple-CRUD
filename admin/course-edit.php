<?php

include("config.php");

$query = "UPDATE `courses` SET `course_name` = '".$_POST['course_name']."', `course_code` = '".$_POST['course_code']."', `course_details` = '".$_POST['course_details']."', `course_status` = '".$_POST['course_status']."' WHERE `course_id` = ".$_POST['course_id'];

$result = $connection->exec($query);

if($result == TRUE){
    header('location: index.php?&s=7');
}