<?php 
$ID = mysqli_real_escape_string($con,$_GET['ID']);
$sql = "SELECT * FROM tbl_member WHERE member_id=$ID";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql ");
$row = mysqli_fetch_array($result);
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
<form action="member_form_edit_db.php" method="post" class="form-horizontal" enctype="multipart/form-data">
  <div class="form-group">
    <div class="col-sm-2 control-label">
      สถานะ :
    </div>
    <div class="col-sm-2">
      <select name="m_level" class="form-control" required>
        <option value="<?php echo $row['m_level'];?>">
          <?php echo $row['m_level'];?>
        </option>
        <option value="">เลือกข้อมูล</option>
        <option value="admin">เจ้าหน้าที่</option>
        <option value="member">นักศึกษา</option>
        <option value="teacher">อาจารย์</option>    
      </select>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      ชื่อผู้ใช้งาน :
    </div>
    <div class="col-sm-3">
      <input type="text" name="m_user" required class="form-control" autocomplete="off" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2" value="<?php echo $row['m_user'];?>">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      ชื่อ-นามสกุล :
    </div>
    <div class="col-sm-3">
      <input type="text" name="m_name" required class="form-control" value="<?php echo $row['m_name'];?>">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      เบอร์โทร :
    </div>
    <div class="col-sm-3"> 
      <input type="text" name="m_tel" required class="form-control" value="<?php echo $row['m_tel'];?>">
    </div>
  </div>
   <div class="form-group">
    <div class="col-sm-2 control-label">
      อีเมล์ :
    </div>
    <div class="col-sm-3">
      <input type="email" name="m_email" required class="form-control" value="<?php echo $row['m_email'];?>">
    </div>
  </div>
    <div class="form-group">
    <div class="col-sm-2 control-label">
      ที่อยู่ :
    </div>
    <div class="col-sm-3">
      <input type="text" name="m_address" required class="form-control" value="<?php echo $row['m_address'];?>">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      ปีการศึกษา:
    </div>
    <div class="col-sm-3">
      <input type="text" name="m_year" required class="form-control" value="<?php echo $row['m_year'];?>">
    </div>
  </div>
  <div class="col-sm-2 control-label">
      สถานที่ฝึก:
    </div>
    <div class="col-sm-3">
      <input type="text" name="m_job" required class="form-control" value="<?php echo $row['m_job'];?>">
    </div>
  </div>
  <div class="col-sm-2 control-label">
      สถานะเอกสาร :
    </div>
    <div class="col-sm-2">
      <select name="status_s" class="form-control" required>
        <option value="<?php  $row['status_s'];?>">
          <?php $row['status_s'];?>
        </option>
        <option value="">เลือกข้อมูล</option>
        <option value="บันทึกข้อมูลลงระบบแล้ว">บันทึกข้อมูลลงระบบแล้ว</option>
        <option value="ส่งเอกสารกับอาจารย์ที่ปรึกษา">ส่งเอกสารกับอาจารย์ที่ปรึกษา</option> 
        <option value="เอกสารถึงฝ่ายสหกิจ">เอกสารถึงฝ่ายสหกิจ</option>  
        <option value="ส่งเรื่องไปยังสถานที่ฝึกงาน">ส่งเรื่องไปยังสถานที่ฝึกงาน</option>  
        <option value="เสร็จสิ้น">เสร็จสิ้น</option> 
        <option value="ไม่สำเร็จโปรดติดต่อ">ไม่สำเร็จโปรดติดต่อ</option> 
        <option value="ยกเลิก">ยกเลิก</option>  
      </select>
      <br>
      <br>
      <br>
      <br>
    </div>
    <br>

  <div class="form-group">
   <br> <div class="col-sm-2 control-label">
      รูปภาพ :
    </div>
    <div class="col-sm-4">
      ภาพเก่า <br>
      <img src="../m_img/<?php echo $row['m_img'];?>" width="200px">
      <br>
      <input type="file" name="m_img"  class="form-control" accept="image/*" onchange="readURL(this);"/>
      <img id="blah" src="#" alt="" width="250" class="img-rounded"/ style="margin-top: 10px;">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-3">
      <input type="hidden" name="m_img2" value="<?php echo $row['m_img'];?>">
      <input type="hidden" name="member_id" value="<?php echo $ID; ?>" />
      <button type="submit" class="btn btn-success">แก้ไขข้อมูล</button>
      <a href="member.php" class="btn btn-danger">ยกเลิก</a>
    </div>
  </div>
</form>