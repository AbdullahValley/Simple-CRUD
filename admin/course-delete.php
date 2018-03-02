<?php

include("config.php");

$query = "UPDATE courses SET course_status ='0' WHERE course_id = ".$_GET['id'];

$stmt = $connection->exec($query);

if($stmt == TRUE){
   header('location: index.php?&s=7');
}