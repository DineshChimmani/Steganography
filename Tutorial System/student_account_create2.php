<?php
include "connection.php";
$student_id=$_REQUEST['student_id'];
$query1="select * from personal where student_id='$student_id'";
$result1=mysqli_query($conn,$query1);
$row1=mysqli_fetch_array($result1);

?>
<div class="row">
    <div class="form-group col-md-12">
        <label>Student name</label>
        <input type="text" class="form-control" name="student_name" value="<?php echo ucfirst($row1[3]) . " " . ucfirst($row1[4]) . " " . ucfirst($row1[5]) ?>"readonly>
    </div>
</div>