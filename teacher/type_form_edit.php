<?php 
$ID = mysqli_real_escape_string($con,$_GET['ID']);
$sql = "SELECT * FROM tbl_type WHERE type_id=$ID";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql ");
$row = mysqli_fetch_array($result);
?>
<form action="type_form_edit_db.php" method="post" class="form-horizontal">
  <div class="form-group">
    <div class="col-sm-2 control-label">
      ชื่อสถานที่ :
    </div>
    <div class="col-sm-3">
      <input type="text" name="type_name" required class="form-control" value="<?php echo $row['type_name'];?>">
    </div>
  </div>
  <div class="form-group1">
    <div class="col-sm-2 control-label">
      จังหวัด:
    </div>
    <div class="col-sm-3">
      <input type="provice_s" name="provice_s" required class="form-control" value="<?php echo $row['provice_s'];?>">
    </div>
  </div>
  <div class="form-group1">
    <div class="col-sm-2 control-label">
      เบอร์โทร:
    </div>
    <div class="col-sm-3">
      <input type="phone_s" name="phone_s" required class="form-control" value="<?php $row['phone_s'];?>">
    </div>
  </div>
    <div class="form-group">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-3">
      <input type="hidden" name="type_id" value="<?php echo $ID; ?>" />
      <button type="submit" class="btn btn-success">แก้ไขข้อมูล</button>
      <a href="type.php" class="btn btn-danger">ยกเลิก</a>
    </div>
  </div>
</form>
