<?php
include("config.php");

$query = "SELECT course_name, student_name, student_mobile, student_address FROM courses_student natural join students natural join courses where course_id = ".$_GET['id'];

$stmt = $connection->query($query);
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);


$stmt_2 = $connection->query($query);
$results_2 = $stmt_2->fetch(PDO::FETCH_ASSOC);

?>

<div align="center" class="headline"><?php echo $results_2['course_name'].' ~ Student List';?></div>

<br>

<table class="table table-bordered">
        <thead>
            <tr align="center">
                <td><i>SL</i></td>
                <td><i>Student Name</i></td>
                <td><i>Student Mobile</i></td>
                <td><i>Student Address</i></td>
            </tr>
        </thead>
        <tbody>
        <?php
        $sl = 1;

        foreach ($results as $user){
        ?>
            <tr align="center" valign="middle">
                <td><?php echo $sl++?></td>
                <td><?php echo $user['student_name'] ?></td>
                <td><?php echo $user['student_mobile'] ?></td>
                <td><?php echo $user['student_address'] ?></td>
            </tr>

        <?php } ?>

        </tbody>
    </table>