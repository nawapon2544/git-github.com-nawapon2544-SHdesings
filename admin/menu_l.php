 <aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="../m_img/<?php echo $m_img; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p> <?php echo $m_name; ?></p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i>กำลังใช้งาน</a>
      </div>
    </div>
    <ul class="sidebar-menu" data-widget="tree">
        <li>
        <a href="index.php"><i class="fa fa-home"></i>
          <span> หน้าหลัก</span>
        </a>
      </li>
      
    
      <li>
        <a href="member.php"><i class="glyphicon glyphicon-record"></i>
          <span> จัดการสมาชิก</span>
        </a>
      </li>
      <li>
        <a href="type.php"><i class="glyphicon glyphicon-record"></i>
          <span> เพิ่มสถานที่ฝึกงาน </span>
        </a>
      </li>
      
        <li>
        <a href="member_profile.php"><i class="glyphicon glyphicon-record"></i>
          <span> แก้ไขข้อมูลส่วนตัว </span>
        </a>
      </li>
        </span>
      </a>
      <li>
        <a href="https://drive.google.com/drive/u/0/folders/1BmsUhON9QwdS-NYp9VRliaL4VpsR-xiJ?fbclid=IwAR2DI9GUMuMF7XiQV2atweLOoJk5dXsYt6faHHzAIM1Zm_agq9k2XuG_yE8"><i class="glyphicon glyphicon-record"></i>
          <span> เข้าถึงการจัดเก็บเอกสาร </span>
        </a>
      </li>
        

      
      <li>
        <a href="../logout.php" onclick="return confirm('คุณต้องการออกจากระบบหรือไม่ ?');"><i class="glyphicon glyphicon-off"></i>
          <span> ออกจากระบบ</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>