<?php
include("config.php");

$query = "SELECT course_name, count(student_id), course_id FROM courses NATURAL JOIN courses_student WHERE course_status ='1' GROUP BY course_id";
$stmt = $connection->query($query);
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<div align="center" class="headline">Course Assigned to Student by Teacher</div>
<br>
<table class="table table-bordered">
        <thead>
            <tr align="center">
                <td><i>SL</i></td>
                <td><i>Course Name</i></td>
                <td><i>Number of Student</i></td>
                <td><i>Action</i></td>
            </tr>
        </thead>
        <tbody>
        <?php
        $sl = 1;

        foreach ($results as $user){
        ?>
            <tr align="center" valign="middle">
                <td><?php echo $sl++?></td>
                <td><?php echo $user['course_name'] ?></td>
                <td><?php echo $user['count(student_id)'];?></td>
             
                <td>
    <a href="index.php?id=<?php echo $user['course_id'] ?>&s=12">View List</a>
                </td>
            </tr>

        <?php } ?>

        </tbody>
    </table>