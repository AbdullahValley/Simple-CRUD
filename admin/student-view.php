<?php
include("config.php");

$query = "SELECT * FROM `students` where student_id = ".$_GET['id'];
$stmt = $connection->query($query);
$results = $stmt->fetch(PDO::FETCH_ASSOC);


$query2 = "SELECT course_name FROM `courses_student` NATURAL JOIN courses where student_id = ".$_GET['id'];
$stmt2 = $connection->query($query2);
$results_2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);

?>

<div align="center" class="headline">Details of ~ <?php echo $results['student_name']?></div>

<br>

<div class="area" align="center">

        <label for="">Your Name :</label> <i><?php echo $results['student_name']?></i>
<br><br>

<label for="">Your Recived Courses :</label> <i>
<?php 

foreach ($results_2 as $course_list) {
echo $course_list['course_name']."<b> + "." ... </b>";
}

?>
</i>

<br><br>

        <label for="">Your Email :</label> <i><?php echo $results['student_email']?></i>
<br><br>
        <label for="">Your Password :</label> <i><?php echo $results['student_password']?></i>
<br><br>
        <label for="">Your Address :</label> <i><?php echo $results['student_address']?></i>
<br><br>
        <label for="">Your Mobile :</label> <i><?php echo $results['student_mobile']?></i>
<br><br>
        <label for="">Your Gender :</label> <i><?php echo $results['student_gender']?></i>
<br><br>
        <label for="">Your Profile Photo : </label> <img class="img-responsive" alt=".JPG" src="../images/uploads/<?php echo $results['student_image']?>">
<br>
<label for="">Your Date of Birth : </label> <i><?php echo $results['student_date_of_birth']?></i>

</div>