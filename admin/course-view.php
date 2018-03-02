<?php
include("config.php");

$query = "SELECT * FROM `courses` where course_id = ".$_GET['id'];
$stmt = $connection->query($query);
$results = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<div align="center" class="headline"><?php echo $results['course_name']?> ~ Course Details</div>

<br>

    <div class="area" align="center">

        <label for="">Course ID : </label> <i><?php echo $results['course_id']?></i>

<br><br>

        <label for="">Course Name : </label> <i><?php echo $results['course_name']?></i>

<br><br>        

        <label for="">Course Code : </label> <i><?php echo $results['course_code']?></i>

<br><br>

        <label for="">Course Details : </label> <i><?php echo $results['course_details']?></i>

 <br><br>       

<label for="">Course Add Date : </label> <i><?php echo $results['course_add_date']?></i>

<br><br>

<label for="">Course Modified Date : </label> <i><?php echo $results['course_modified_date']?></i>

<br><br>
        <label for="">Course Status : </label> <i><?php echo $results['course_status']?></i>

    </div>