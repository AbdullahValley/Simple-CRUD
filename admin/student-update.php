<?php
include("config.php");

$query = "SELECT * FROM `students` where student_id = ".$_GET['id'];
$stmt = $connection->query($query);
$results = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<div align="center" class="headline">Edit <?php echo $results['student_name']?> Record</div>

<br>

<center>


<label for="">Student Photo : </label><img class="img-responsive" alt="Missing.JPG" src="../images/uploads/<?php echo $results['student_image']?>">


<form action="image_update.php" method="_GET">
   <input type="hidden" name="student_id" value="<?php echo $results['student_id']?>" class="form-control">
   <br>
<?php

if ($results['student_image']) {
echo "<div class=form-group>
        <button type=submit class=btn-success>Delete this Photo</button>
    </div>";
}

//elseif (strpos($test, 'Missing.JPG') !== FALSE) {
/*  if ("<img alt=Missing.JPG>") {
    echo "<div class=form-group>
                <label>Choose a New Profile Photo : </label>
                <input type=file name=student_image class=btn btn-default>
            </div>";
}*/

?>


</form>

<br>

<form action="student-edit.php" method="POST" enctype="multipart/form-data">
    
    <div style="width: 500px; text-align: left;">

        <div class="form-group">

            <label for="">Student Name : </label>
<input type="hidden" name="student_id" value="<?php echo $results['student_id']?>" class="form-control">

            <input type="text" name="student_name" value="<?php echo $results['student_name']?>" id="name" class="form-control" required>

        </div>
        <div class="form-group">
            <label for="email">Student Email : </label>
            <input id="email" type="student_email" name="email" value="<?php echo $results['student_email']?>" class="form-control" disabled>
        </div>

        <div class="form-group">
            <label for="cell">Student Mobile : </label>
            <input id="cell" type="text" name="student_mobile" value="<?php echo $results['student_mobile']?>" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="pass">Student Password : </label>
            <input type="text" name="student_password"  value="<?php echo $results['student_password']?>" class="form-control" required>

        </div>

        <div class="form-group">
            <label for="address">Student Address : </label>
            <textarea id="address" name="student_address"  class="form-control" required><?php echo $results['student_address']?></textarea>
        </div>

        <?php
          $gender =  $results['student_gender'];

        ?>
        <div class="form-group">
            <label>Student Gender : </label>
<input id="Male" type="radio"  <?php echo ($gender=='Male')?'checked':'' ?> name="student_gender" value="Male">
            <label for="Male">Male</label>

<input id="Female" type="radio" <?php echo ($gender =='Female')?'checked':'' ?> name="student_gender" value="Female">
            <label for="Female">Female</label>
        </div>

        <?php

        $data = explode(', ',$results['student_hobbies']);
        ?>
        <div class="form-group">
            <label for="name">Check Student Hobbies : </label>

            <input id="reading" type="checkbox" <?php if(in_array('Reading',$data))echo 'checked';?> name="student_hobbies[]" value="Reading">
            <label for="reading">Reading</label>

            <input id="writing" type="checkbox" <?php if(in_array('Writing',$data))echo 'checked';?> name="student_hobbies[]" value="Writing">
            <label for="writing">Writing</label>

            <input id="speaking" type="checkbox" <?php if(in_array('Speaking',$data))echo 'checked';?> name="student_hobbies[]" value="Speaking">
            <label for="speaking">Speaking</label>

            <input id="sleep" type="checkbox" <?php if(in_array('Sleep',$data))echo 'checked';?> name="student_hobbies[]" value="Sleep">
            <label for="sleep">Sleep</label>

        </div>

 
        <?php

        $data = explode('-',$results['student_date_of_birth']);

        ?>
        <div class="form-group">
            <label>Student Date of Birth : </label>

            <select name="year" class="btn btn-default">
                <option value="">Year</option>

                <?php

                for($i=1980; $i<=2017; $i++){
                    if($i == $data[0]){
                        $abc = 'selected';
                    }else{
                        $abc = '';
                    }
                    echo " <option $abc  value='$i'>$i</option>";
                }
                ?>
            </select>



            <select name="month" class="btn btn-default">
                <option value="">Month</option>
               <?php

               for($i=1; $i<=12; $i++){
                   if($i == $data[1]){
                       $abc = 'selected';
                   }else{
                       $abc = '';
                   }
                   echo " <option $abc  value='$i'>$i</option>";
               }
               ?>
            </select>


            <select name="day" class="btn btn-default">
                <option value="">Day</option>

                <?php
                for($i=1; $i<=31; $i++){
                    if($i == $data[2]){
                        $abc = 'selected';
                    }else{
                        $abc = '';
                    }
                    echo "<option $abc value='$i'>$i</option>";
                }

                ?>
            </select>

        </div>
        <div class="form-group">
            <input type="submit" name="submit" value="Update" class="btn btn-success">
        </div>

    </div>

</form>

</center>