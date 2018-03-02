<div align="center" class="headline">Add a New Student</div>

<br>

<center>

<form action="student-store.php" method="POST" enctype="multipart/form-data">
    
    <div style="width: 500px; text-align: left;">

        <div class="form-group">
            <label for="name">Student Name : </label>
            <input type="text" name="student_name" id="name" class="form-control" autofocus required>

        </div>
        <div class="form-group">
            <label for="email">Student Email : </label>
            <input id="email" type="email" name="student_email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="cell">Student Mobile : </label>
            <input id="cell" type="text" name="student_mobile" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="pass">Student Password : </label>
            <input type="password" name="student_password" class="form-control" required>

        </div>

        <div class="form-group">
            <label for="address">Student Address : </label>
            <textarea id="address" name="student_address" class="form-control" required></textarea>
        </div>

        <div class="form-group">

            <label>Student Gender : </label>

            <input id="Male" type="radio" name="student_gender" value="Male" required>
            <label for="Male">Male</label>

            <input id="Female" type="radio" name="student_gender" value="Female" required>
            <label for="Female">Female</label>
        </div>
 
         <div class="form-group">
    
                <label for="name">Check Student Hobbies : </label>
                
    <input id="reading" type="checkbox" name="student_hobbies[]" value="Reading" >
                <label for="reading">Reading</label>
                
    <input id="writing" type="checkbox" name="student_hobbies[]" value="Writing" >
                <label for="writing">Writing</label>
                
    <input id="speaking" type="checkbox" name="student_hobbies[]" value="Speaking" >
                <label for="speaking">Speaking</label>

    <input id="sleep" type="checkbox" name="student_hobbies[]" value="Sleep" >
                <label for="sleep">Sleep</label>

            </div>


        <div class="form-group">
            <label>Student Date of Birth : </label>

             <input type="date" name="student_date_of_birth" class="form-control" required>

        </div>

        <div class="form-group">
                <label for="">Choose Profile Photo : </label>
                <input id="" type="file" name="student_image" class="btn btn-default">
            </div>

        <div class="form-group">
            <label>Student Status : </label>

             <input type="number" name="student_status" class="form-control" required>

        </div>

        <div class="form-group">
            <input type="submit" name="submit" value="Submit" class="btn btn-success">
        </div>

    </div>

</form>

</center>