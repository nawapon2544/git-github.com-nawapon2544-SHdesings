<?php
$query2 = "SELECT * FROM tbl_type ORDER BY type_id asc" or die("Error:");
$result2 = mysqli_query($con, $query2);
?>
<script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }
                
                reader.readAsDataURL(input.files[0]);
            }
        }
</script>
<?php 
 if(@$_GET['do']=='f'){
            echo '<script type="text/javascript">
            swal("", "กรุณาใส่ข้อมูลให้ถูกต้อง !!", "warning");
            </script>';
            echo '<meta http-equiv="refresh" content="2;url=durable.php?act=add" />';
 }elseif(@$_GET['do']=='d'){
            echo '<script type="text/javascript">
            swal("", "เลขครุภัณฑ์ซ้ำ กรุณาเปลี่ยน  !!", "error");
            </script>';
            echo '<meta http-equiv="refresh" content="1;url=durable.php?act=add" />';
 }
 ?>

<form action="product_form_add_db.php" method="post" class="form-horizontal" enctype="multipart/form-data">
  <div class="form-group">
  <div class="form-group">
    <div class="col-sm-2 control-label">
    หมายเลขสถานที่ :
    </div>
    <div class="col-sm-3">
      <input type="text" name="p_name" required class="form-control">
    </div>
  </div>

   <div class="form-group">
    <div class="col-sm-2 control-label">
      สถานที่ :
    </div>
    <div class="col-sm-3">
        <select name="type_id" class="form-control" required>
              <option value="">เลือกข้อมูล</option>
              <?php foreach($result2 as $results){?>
              <option value="<?php echo $results["type_id"];?>">
                <?php echo $results["type_name"]; ?>
              </option>
              <?php } ?>
        </select>
    </div>
  </div>


  <div class="form-group">
    <div class="col-sm-2 control-label">
      รายละเอียด :
    </div>
    <div class="col-sm-3">
    <textarea name="p_detail" cols="60"></textarea>
    </div>
  </div>
   <div class="form-group">
  </div>
  <div class="form-group">
   
  </div>

  <div class="form-group">
    </div>
  </div>
  <div class="form-group">
  </div>
  <div class="form-group">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-3">
      <button type="submit" class="btn btn-success">เพิ่มข้อมูล</button>
      <a href="durable.php" class="btn btn-danger">ยกเลิก</a>
    </div>
  </div>
</form>