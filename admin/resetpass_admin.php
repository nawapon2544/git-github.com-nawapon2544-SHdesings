<?php include('h.php');?>
<body class="hold-transition skin-purple sidebar-mini">
  <div class="wrapper">
    <!-- Main Header -->
    <?php include('menutop.php');?>
    
        <?php include('menu_l.php');?>
    
    <div class="content-wrapper">
      <section class="content-header">
        <h1>
         <i class="glyphicon glyphicon-user hidden-xs"></i> <span class="hidden-xs">ข้อมูลบุคคลในระบบ</span>
        <a href="member.php?act=add" class="btn btn-primary btn-sm">เพิ่มผู้ใช้งาน</a>
        </h1>
      </section>
      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="box">
              <div class="row">
                <div class="col-sm-12">
                  <div class="box-body">
                   <?php
  include('../condb.php');
  $member_id  = $_GET['member_id'];

$sql_admin = "SELECT * FROM tbl_member WHERE member_id = '".$member_id."'"  
or die("Error : ");
$resault_admin = mysqli_query($con, $sql_admin);
$row=mysqli_fetch_array($resault_admin);

?>

<form action="resetpass_admin_db.php" method="POST" enctype="multipart/form-data"  name="add" class="form-horizontal" id="add">
  
      <input type="hidden" name="member_id" id="member_id" class="form-control" value="<?php echo $member_id;?>" readonly="readonly">
    

<div class="form-group">
    <div class="col-sm-2 control-label"> username </div>
    <div class="col-sm-4" align="left">
      <input type="text" name="m_user" id="" class="form-control" required value="<?php echo $row['m_user']; ?>" disabled>
    </div>
  </div>


  <div class="form-group">
    <div class="col-sm-2 control-label"> รหัสผ่านใหม่ </div>
    <div class="col-sm-4" align="left">
      <input type="password" name="m_pass" id="m_pass" class="form-control" required value="">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-2 control-label"> ยืนยันรหัสผ่านใหม่ </div>
    <div class="col-sm-4" align="left">
      <input type="password" name="m_subpass" id="m_subpass" class="form-control" required value="">
    </div>
  </div>

<div class="form-group">
  <div class="col-sm-3"> </div>
  <div class="col-sm-6">

    <button type="submit" class="btn btn-success" id="btn">บันทึกข้อมูล </button>
    <a href="member.php" class="btn btn-danger">ยกเลิก</a>
  </div>
</div>
</form>
            
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </body>
  </html>
  <?php include('footerjs.php');?>