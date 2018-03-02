<?php
include("config.php");

$query = "SELECT student_id, student_name FROM students";
$stmt = $connection->query($query);
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);


$query2 = "SELECT course_id, course_name FROM courses";
$stmt2 = $connection->query($query2);
$results2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);

?>

<div align="center" class="headline">Assign Course to Student</div>

<br>

<center>

<form action="course-assign-store.php" method="POST">
<div class="box">

 <div class="form-group">

            <label>Select Student : </label>
 

 <select name="student_id" class="btn btn-default" required>
 
            <option value="">Select Student Name</option>

            <?php

                    foreach ($results as $data) {
      
                ?>     
                    
                <option value="<?php echo $data['student_id']; ?>">

                <?php echo $data['student_id']." . ".$data['student_name']; ?>
                    
                </option>

                <?php } //end of first foreach loop ?>
</select>

        </div>
<br>
        <div class="form-group">

                <label>Check Courses : </label>
    
            <?php

                    foreach ($results2 as $data2) {
            ?>

<input id="<?php echo $data2['course_id']; ?>" type="checkbox" name="course_id[]" value="<?php echo $data2['course_id']; ?>">

<label for="<?php echo $data2['course_id']; ?>">
<?php echo $data2['course_name']."  ..  "/* dot dot for space :( */ ; ?></label>
        

<?php } //end of second foreach loop ?>

            </div>

<br>MUST Check <b>atleast One</b> Course. <br><br><br>

            <div class="form-group">
                <input type="submit" name="assign" value="Assign" class="btn btn-success">
            </div>
</div>
</form>

</center>