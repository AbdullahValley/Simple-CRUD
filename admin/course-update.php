<?php
include("config.php");

$query = "SELECT * FROM `courses` where course_id = ".$_GET['id'];
$stmt = $connection->query($query);
$results = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<div align="center" class="headline">Edit <?php echo $results['course_name']?> Record</div>

<br>

<center>

<form action="course-edit.php" method="POST">
    
    <div style="width: 500px; text-align: left;">

        <div class="form-group">
            <label for="">Course Name : </label>

            <input type="hidden" name="course_id" value="<?php echo $results['course_id']?>" id="" class="form-control">

        <input type="text" name="course_name" value="<?php echo $results['course_name']?>" id="" class="form-control" required>

        </div>
        <div class="form-group">
            <label for="code">Course Code : </label>
            <input id="code" type="text" name="course_code" value="<?php echo $results['course_code']?>" class="form-control" required>
        </div>

        <div class="form-group">
        <label for="details">Course Details : </label>
        
<textarea id="details" name="course_details" class="form-control" required><?php echo $results['course_details']?></textarea>
        </div>

            <div class="form-group">
            <label for="status">Course Status : </label>
            <input id="status" type="number" name="course_status" value="<?php echo $results['course_status']?>" class="form-control" required>
        </div>
 
        <div class="form-group">
            <input type="submit" name="submit" value="Update" class="btn btn-success">
        </div>

    </div>

</form>


</center>