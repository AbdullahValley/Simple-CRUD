<?php
include("config.php");

$query = "SELECT * FROM `courses` WHERE course_status ='1'";
$stmt = $connection->query($query);
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<div align="center" class="headline">Course List</div>
<br>
<table class="table table-bordered">
        <thead>
            <tr align="center">
                <td><i>SL</i></td>
                <td><i>Course Name</i></td>
                <td><i>Course Code</i></td>
                <td><i>Course Details</i></td>
                <td><i>Course Status</i></td>
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
                <td><?php echo $user['course_code'] ?></td>
                <td><?php echo $user['course_details'] ?></td>
                <td><?php echo $user['course_status'] ?></td>

                <td>
                    <a href="index.php?id=<?php echo $user['course_id'] ?>&s=9">

<img src="../images/read-icon.png" alt="View" width="25px" height="35px" title="View">

                    </a>

                    <a href="index.php?id=<?php echo $user['course_id'] ?>&s=8">

<img src="../images/update-icon.png" alt="Update" width="25px" height="35px" title="Update">

                    </a>

<a href="course-delete.php?id=<?php echo $user['course_id'] ?>" onclick="course_alert()">

<img src="../images/delete-icon.png" alt="Delete" width="25px" height="35px" title="Delete">

</a>
                </td>
            </tr>

        <?php }?>
        </tbody>
    </table>