<?php
include("config.php");

$query = "SELECT * FROM `students` WHERE student_status ='1'";
$stmt = $connection->query($query);
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<div align="center" class="headline">Student List</div>
<br>
<table class="table table-bordered">
        <thead>
            <tr align="center">
                <td><i>SL</i></td>
                <td><i>Name</i></td>
                <td><i>Email</i></td>
                <td><i>Hobbies</i></td>
                <td><i>Mobile</i></td>
                <td><i>Gender</i></td>
                <td><i>Date of Birth</i></td>
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
                <td><?php echo $user['student_name'] ?></td>
                <td><?php echo $user['student_email'] ?></td>
                <td><?php echo $user['student_hobbies'] ?></td>
                <td><?php echo $user['student_mobile'] ?></td>
                <td><?php echo $user['student_gender'] ?></td>
                <td><?php echo $user['student_date_of_birth'] ?></td>

<td>

<a href="index.php?id=<?php echo $user['student_id'] ?>&s=5">
<img src="../images/read-icon.png" alt="View" width="25px" height="35px" title="View">
</a>

<a href="index.php?id=<?php echo $user['student_id'] ?>&s=4">
<img src="../images/update-icon.png" alt="Update" width="25px" height="35px" title="Update">
</a>

<a href="student-delete.php?id=<?php echo $user['student_id'] ?>" onclick="student_alert()">
<img src="../images/delete-icon.png" alt="Delete" width="25px" height="35px" title="Delete">
</a>
                
</td>
        </tr>

        <?php }?>

        </tbody>

    </table>