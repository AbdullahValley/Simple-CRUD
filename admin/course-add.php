<div align="center" class="headline">Add a New Course</div>

<br>

<center>

<form action="course-store.php" method="POST">
    
    <div style="width: 500px; text-align: left;">

        <div class="form-group">
            <label for="name">Course Name:</label>
            <input type="text" name="course_name" id="name" class="form-control" autofocus="" required>

        </div>

        <div class="form-group">
            <label for="code">Course Code:</label>
            <input id="code" type="text" name="course_code" class="form-control" required>
        </div>


        <div class="form-group">
            <label for="details">Course Details:</label>
            <textarea id="details" name="course_details"  class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label for="status">Course Status:</label>
            <input id="status" type="number" name="course_status" class="form-control" required>
        </div>

 
        <div class="form-group">
            <input type="submit" name="submit" value="Submit" class="btn btn-success">
        </div>

    </div>

</form>

</center>