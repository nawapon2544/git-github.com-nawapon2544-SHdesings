<?php include('h.php');?>
<body class="hold-transition skin-purple sidebar-mini">
  <div class="wrapper">
    <!-- Main Header -->
    <?php include('menutop.php');?>
    <!-- Left side column. contains the logo and sidebar -->
    
        <?php include('menu_l.php');?>
      
    <div class="content-wrapper">
      <section class="content-header">
      <h1>
        <i class="glyphicon glyphicon-user hidden-xs"></i> <span class="hidden-xs">ข้อมูลสมาชิกในระบบ</span>
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
                  $act = (isset($_GET['act']) ? $_GET['act'] : '');
                  if($act == 'add'){
                  include('member_form_add.php');
                  }elseif ($act == 'edit') {
                  include('member_form_edit.php');
                  }elseif($act=='rwd'){
                  include('member_form_rwd.php');
                  }elseif($act=='view'){
                  include('member_form_view.php');
                  }else {
                  include('member_list.php');
                  }
                  ?>                   
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