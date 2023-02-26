<?php include('h.php'); ?>

<body class="hold-transition skin-purple sidebar-mini">
  <div class="wrapper">
    <!-- Main Header -->
    <?php include('menutop.php'); ?>
    <!-- Left side column. contains the logo and sidebar -->

    <?php include('menu_l.php'); ?>
    <div class="content-wrapper" style="min-height: 2171.31px;"> <!-- ตัวจัดการให้ Respon sive-->

      <div class="card card-primary card-outline">
        <div class="text-left">
          <br>
        </div>
        <form>
          <section class="content">
            <content style="margin-left:150px;">
              <div class="container-fluid">
              </div>
              <div class="row">
                <div class="col-lg-3 panel-body">
                  <ul style="padding-left: 80px; padding-bottom: 10px;">
                    <td style="width:110px;">
                      <img class="img-circle img-bordered" src="../m_img/5034118120221228_200720.jpg" alt="รูปประจำตัว" width="100px">
                    </td>
                  </ul>
                  <ul style="padding-left:10px;">
                    <td class="text-left">
                      <h5><b>ชื่อ-นามสกุล</b> <?php echo $NAME_SURNAME; ?></h5>
                    </td>
                    <td class="text-left">
                      <h5><b>รหัสประจำตัวนักศึกษา</b> <?php  ?></h5>
                    </td>
                  </ul>
                  <hr>

                </div>

                <div class="col-lg-9">
                  <div class="tab-content">
                    <div class="tab-pane active" id="data">
                      <div class="panel panel-teal">
                        <div class="panel-heading">
                          <h3 class="panel-title"><i class="ico-pencil5"></i> ข้อมูลนักศึกษา / Student Information </h3>
                        </div>
                        <div class="panel-body" id="data_panel">
                          <div class="form-horizontal">

                            <div class="row">

                              <div class="col-sm-12">
                                <label class="col-sm-5 control-label">รหัสนักศึกษา / Student ID: </label>
                                <div class="col-sm-7">
                                  <label style="font-weight: normal" class="control-label"><?php
                                  if(isset($_POST['studentID']))
                                  {
                                    $studentID = $_POST['studentID'];
                                    echo $row['studentID'];
                                  } ?></label>
                                </div>
                              </div>
                              <div class="col-sm-12">
                                <label class="col-sm-5 control-label">ชื่อ - สกุล / First name - Last name : </label>
                                <div class="col-sm-7">
                                  <label style="font-weight: normal" class="control-label">นายนวพล ม่วงเอี่ยม</label>
                                </div>
                              </div>
                              <div class="col-sm-12">
                                <label class="col-sm-5 control-label">ชื่อ - สกุล (อังกฤษ) : </label>
                                <div class="col-sm-7">
                                  <label style="font-weight: normal" class="control-label">Mr. nawapon mungeam</label>
                                </div>
                              </div>
                              <div class="col-sm-12">
                                <label class="col-sm-5 control-label">รหัสประชาชน / ID Card : </label>
                                <div class="col-sm-7">
                                  <label style="font-weight: normal" class="control-label">2639900021933</label>
                                </div>
                              </div>
                              <div class="col-sm-12">
                                <label class="col-sm-5 control-label">RMUTL Email : </label>
                                <div class="col-sm-7">
                                  <label style="font-weight: normal" class="control-label">nawapon_mu63@live.rmutl.ac.th</label><br>
                                  <a href="http://portal.office.com/" target="_blank"><i class="ico-envelop"></i> ใช้งาน Email / Office 365</a>&nbsp;&nbsp;|
                                  &nbsp;<a href="http://arit.rmutl.ac.th/page/office365" target="_blank"><i class="ico-tools"></i> แนะนำวิธีการใช้งาน Office 365</a>
                                </div>
                              </div>
                              <div class="col-sm-12">
                                <label class="col-sm-5 control-label">สถานะนักศึกษา / Student Status: </label>
                                <div class="col-sm-7">
                                  <label style="font-weight: normal" class="control-label">ปกติ</label>
                                </div>
                              </div>
                              <div class="col-sm-12">
                                <hr>
                              </div>
                              <div class="col-sm-12">
                                <label class="col-sm-5 control-label">เขตพื้นที่ / Campus: </label>
                                <div class="col-sm-7">
                                  <label style="font-weight: normal" class="control-label">ตาก</label>
                                </div>
                              </div>
                              <div class="col-sm-12">
                                <label class="col-sm-5 control-label">คณะ / Faculty: </label>
                                <div class="col-sm-7">
                                  <label style="font-weight: normal" class="control-label">วิศวกรรมศาสตร์</label>
                                </div>
                              </div>
                              <div class="col-sm-12">
                                <label class="col-sm-5 control-label">สาขา / Department: </label>
                                <div class="col-sm-7">
                                  <label style="font-weight: normal" class="control-label">วิศวกรรมไฟฟ้า</label>
                                </div>
                              </div>
                              <div class="col-sm-12">
                                <label class="col-sm-5 control-label">สาขาวิชา / Major: </label>
                                <div class="col-sm-7">
                                  <label style="font-weight: normal" class="control-label">วศ.บ.วิศวกรรมคอมพิวเตอร์</label>
                                </div>
                              </div>
                              <div class="col-sm-12">
                                <label class="col-sm-5 control-label">กลุ่มเรียน / Section : </label>
                                <div class="col-sm-7">
                                  <label style="font-weight: normal" class="control-label">วศ.บ.วิศวกรรมคอมพิวเตอร์ (4ปี) ปริญญาตรี (4-5ปี) ภาคปกติ</label>
                                </div>
                              </div>
                              <div class="col-sm-12">
                                <label class="col-sm-5 control-label">ชั้นปีที่ / Year : </label>
                                <div class="col-sm-7">
                                  <label style="font-weight: normal" class="control-label">3</label>
                                </div>
                              </div>
                              <div class="col-sm-12">
                                <hr>
                              </div>
                              <div class="col-sm-12">
                                <label class="col-sm-5 control-label">อาจารย์ที่ปรึกษา / Advisor : </label>
                                <div class="col-sm-7">
                                  <label class="control-label" style="font-weight: normal">นางสาว ณัฐษิมา สุรเดช </label>
                                </div>
                              </div>
                              <div class="col-sm-12">
                                <label class="col-sm-5 control-label" style="font-weight: bold">เบอร์โทรศัพท์ติดต่อ / Tel.No : </label>
                                <div class="col-sm-7">
                                  <label class="control-label">0869371115</label>
                                </div>
                              </div>
                              <div class="col-sm-12">
                                <label class="col-sm-5 control-label" style="font-weight: bold">E-mail มหาวิทยาลัย / Rmutl E-mail: </label>
                                <div class="col-sm-7">
                                  <label class="control-label" style="font-weight: normal">natsima@rmutl.ac.th</label>
                                </div>
                              </div>
                              <div class="col-sm-12">
                                <hr>
                              </div>
                              <div class="col-sm-12 text-right">
                                <div>
                                  <label class="control-label">เข้าระบบล่าสุดเมื่อ : </label>
                                  <label style="font-weight: normal" class="control-label">
                                    19 กุมภาพันธ์ 2566 13:18:22 </label>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" id="profile">
                      <div class="panel-body">
                        <div class="panel panel-teal">
                          <div class="panel-heading">
                            <h3 class="panel-title"><i class="glyphicon glyphicon-user"></i>&nbsp;ประวัติส่วนตัว</h3>
                          </div>
                          <div class="panel-body" id="profile_panel">
                            <div class="form-horizontal">
                              <div class="col-md-12">
                                <div class="text-right">
                                  <button id="profilebtn" onclick="show_modal_lg('s00profile_model/modal_s00profile');" type="button" class="btn btn-success btn-sm"><i class="ico-pencil mr5"></i>แก้ไขประวัติส่วนตัว</button>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">ชื่อ - สกุล : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">นาย นวพล ม่วงเอี่ยม</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">วันเกิด : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">3 กันยายน 2544</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">น้ำหนัก / ส่วนสูง : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">66 / 167</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">อีเมล์ : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">ninjajajaa1000@gmail.com</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">เบอร์โทรมือถือ : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">0836838630</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">การได้รับทุน : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">ไม่ได้รับทุน</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">ความพิการ : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">ไม่พิการ</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">สัญชาติ : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">ไทย</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">หมู่โลหิต : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">B</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">เชื้อชาติ : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">ไทย</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">ศาสนา : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">ไม่ระบุ</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">เพศ : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">ชาย</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">ขนาดเสื้อกิจกรรม : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">รอบอก 38 นิ้ว</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">อาชีพนักศึกษา : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">ไม่มีเงินได้</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">ที่อยู่ที่ทำงาน : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">-</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">เบอร์โทรศัพท์ที่ทำงาน : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">0639274050</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">สถานะสมรส : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">โสด</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">ชื่อคู่สมรส : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">-</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">อาชีพคู่สมรส : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">ไม่ระบุ</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">จำนวนพี่น้อง : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">4</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">จำนวนพี่น้องที่ทำงาน : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">0</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">จำนวนพี่น้องที่ศึกษาอยู่ : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">3</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">ความถนัด ความสนใจพิเศษ : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">ด้านการออกแบบกราฟฟิก ด้านไอที</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <hr>
                                  <label class="col-sm-5 control-label">เลขรหัสประจำบ้าน (ตามทะเบียนบ้าน) : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">63060275360</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">บ้านเลขที่ (ตามทะเบียนบ้าน) : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">43/1</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">หมู่ที่ (ตามทะเบียนบ้าน) : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">2</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">ชื่อหมู่บ้าน (ตามทะเบียนบ้าน) : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">บ้านปางส้าน</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">ชื่อซอย (ตามทะเบียนบ้าน) : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">-</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">ชื่อถนน (ตามทะเบียนบ้าน) : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">-</label>
                                  </div>
                                </div>

                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">ตำบล (ตามทะเบียนบ้าน) : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">ด่านแม่ละเมา</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">อำเภอ (ตามทะเบียนบ้าน) : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">แม่สอด </label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">จังหวัด (ตามทะเบียนบ้าน) : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">ตาก</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">ภาค (ตามทะเบียนบ้าน) : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">ภาคตะวันตก</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">รหัสไปรษณีย์ (ตามทะเบียนบ้าน) : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">63110</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">เบอร์โทรศัพท์ : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">0836838630</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <hr>
                                  <label class="col-sm-5 control-label">บ้านเลขที่ (ที่ติดต่อได้) : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">43/1</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">หมู่ที่ (ที่ติดต่อได้) : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">2</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">ชื่อหมู่บ้าน หรืออาคาร (ที่ติดต่อได้) : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">บ้านปางส้าน</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">ชื่อซอย (ที่ติดต่อได้) : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">-</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">ชื่อถนน (ที่ติดต่อได้) : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">-</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">ตำบล (ที่ติดต่อได้) : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">ด่านแม่ละเมา</label>
                                  </div>
                                </div>

                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">อำเภอ (ที่ติดต่อได้) : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">แม่สอด </label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">จังหวัด (ที่ติดต่อได้) : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">ตาก</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">ภาค (ที่ติดต่อได้) : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">ภาคตะวันตก</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">รหัสไปรษณีย์ (ที่ติดต่อได้) : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">63110</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">เบอร์โทร (ที่ติดต่อได้) : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">0836838630</label>
                                  </div>

                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">วันออกบัตรประชาชน : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">02/12/2016</label>
                                  </div>

                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">วันหมดอายุบัตรประชาชน : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">02/09/2025</label>
                                  </div>

                                </div>
                                <div class="col-sm-12">
                                  <hr>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" id="parent">
                      <div class="panel-body">
                        <div class="panel panel-teal">
                          <div class="panel-heading">
                            <h3 class="panel-title"><i class="ico-users"></i>&nbsp;ประวัติครอบครัว</h3>
                          </div>
                          <div class="panel-body" id="parent_panel">
                            <div class="form-horizontal">
                              <div class="col-md-12">
                                <div class="text-right">
                                  <button id="parentbtn" onclick="show_modal_lg('s00profile_model/modal_s00parent');" type="button" class="btn btn-success btn-sm"><i class="ico-pencil mr5"></i>แก้ไขประวัติครอบครัว</button>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">ชื่อ - สกุล : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">นาย นวพล ม่วงเอี่ยม</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">สถานะครอบครัว : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">หย่าร้าง</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <hr>
                                  <label class="col-sm-5 control-label">เลขบัตรประชาชน บิดา : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">3630600129887</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">ชื่อบิดา : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">จตุรงค์</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">นามสกุลบิดา : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">ม่วงเอี่ยม</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">ชื่อบิดา ภาษาอังกฤษ : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">jaturung</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">นามสกุลบิดา ภาษาอังกฤษ : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">mungeam</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">สภาพบิดา : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">มีชีวิต</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">รายได้บิดา : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">ไม่มีรายได้</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">อาชีพบิดา : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">อื่นๆ</label>
                                  </div>
                                </div>

                                <div class="col-sm-12">
                                  <hr>
                                  <label class="col-sm-5 control-label">เลขบัตรประชาชน มารดา : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">1101400381077</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">ชื่อมารดา : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">กฤษณะ </label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">นามสกุลมารดา : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">ศรีแสงทรัพย์</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">ชื่อมารดา ภาษาอังกฤษ : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">kitsana</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">นามสกุลมารดา ภาษาอังกฤษ : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">srisaengsap</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">สถาพมารดา : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">มีชีวิต</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">รายได้มารดา : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">ไม่มีรายได้</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">อาชีพมารดา : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">อื่นๆ</label>
                                  </div>
                                </div>

                                <div class="col-sm-12">
                                  <hr>
                                  <label class="col-sm-5 control-label">เลขบัตรประชาชน ผู้ปกครอง : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">3639900031104</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">ชื่อผู้ปกครอง : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">สมชาย</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">นามสกุลผู้ปกครอง : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">ม่วงเอี่ยม</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">ความสัมพันธ์ : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">ปู่</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">สภาพผู้ปกครอง : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">มีชีวิต</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">บ้านเลขที่หรือเลขที่ห้อง ผู้ปกครอง : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">43/1</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">หมู่ที่ ผู้ปกครอง : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">2</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">ชื่อหมู่บ้าน ผู้ปกครอง : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">บ้านปางส้าน</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">ชื่อชอย ผู้ปกครอง : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">-</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">ชื่อถนน ผู้ปกครอง : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">-</label>
                                  </div>
                                </div>

                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">ชื่อตำบล ผู้ปกครอง : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">ด่านแม่ละเมา</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">อำเภอ ผู้ปกครอง : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">แม่สอด </label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">จังหวัด ผู้ปกครอง : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">ตาก</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">ภาค ผู้ปกครอง : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">ภาคตะวันตก</label>
                                  </div>
                                </div>

                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">รหัสไปรษณีย์ : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">63110</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">เบอร์โทรศัพท์หลัก : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">0843694075</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">รายได้ผู้ปกครอง : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">&lt; 150,000 บาทต่อปี</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">อาชีพผู้ปกครอง : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">เกษตร,ประมง</label>
                                  </div>

                                </div>

                                <div class="col-sm-12">
                                  <hr>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" id="education">
                      <div class="panel-body">
                        <div class="panel panel-teal">
                          <div class="panel-heading">
                            <h3 class="panel-title"><i class="ico-library"></i>&nbsp;ประวัติการศึกษา</h3>
                          </div>
                          <div class="panel-body" id="education_panel">
                            <div class="form-horizontal">
                              <div class="col-md-12">
                                <div class="text-right">
                                  <button id="edubtn" onclick="show_modal_lg('s00profile_model/modal_s00edu');" type="button" class="btn btn-success btn-sm"><i class="ico-pencil mr5"></i><span>แก้ไขประวัติการศึกษา<br>Edit Edution</span></button>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">ชื่อ - สกุล / First name - Last name : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">นาย นวพล ม่วงเอี่ยม</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">ระดับการศึกษาเดิม / Graduate Study : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">ม.6</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">สถานที่ศึกษาเดิม / Name of Former School : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">ด่านแม่ละเมาวิทยาคม</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">วุฒิการศึกษาเดิม / Education Vocabulary : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">วิทย์-คณิต</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">สำเร็จการศึกษาเมื่อปี พศ / Graduate : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">2563</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">เกรดเฉลี่ยที่สำเร็จการศึกษา / GPA : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">3.51</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">รวมหน่วยกิตวิชาวิทยาศาสตร์ : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label"></label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">รวมหน่วยกิตวิชาคณิตศาสตร์ : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label"></label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">เลขประจำตัวนักเรียน : </label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label"></label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">เลขที่ของสถานศึกษาเดิม : <br><span style="font-weight: normal">Address (Former School)</span></label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">407</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">หมู่ที่ของสถานศึกษาเดิม :<br><span style="font-weight: normal">Village No. (Former School)</span></label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">2</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">ชื่อหมู่บ้านของสถานศึกษาเดิม :<br><span style="font-weight: normal">Village (Former School)</span></label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">บ้านปางส้าน</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">ซอยของสถานศึกษาเดิม :<br><span style="font-weight: normal">Lane (Former School)</span></label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">-</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">ถนนของสถานศึกษาเดิม :<br><span style="font-weight: normal">Road (Former School)</span></label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">-</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">ตำบลของสถานศึกษาเดิม :<br><span style="font-weight: normal"> Sub-district (Former School)</span></label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">ด่านแม่ละเมา</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">อำเภอของสถานศึกษาเดิม :<br><span style="font-weight: normal"> District (Former School)</span></label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">แม่สอด </label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">จังหวัดของสถานศึกษาเดิม :<br><span style="font-weight: normal"> Province (Former School)</span></label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">ตาก</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">ภาคของสถานศึกษาเดิม :<br><span style="font-weight: normal"> Region (Former School)</span></label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">ภาคตะวันตก</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">รหัสไปรษณีย์สถานศึกษาเดิม :<br><span style="font-weight: normal"> Postal Code (Former School)</span></label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">63110</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <label class="col-sm-5 control-label">หมายเลขโทรศัพท์สถานศึกษาเดิม :<br><span style="font-weight: normal">Tel No. (Former School)</span></label>
                                  <div class="col-sm-7">
                                    <label style="font-weight: normal" class="control-label">055595186</label>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <hr>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <input type="hidden" class="btn" id="data_btn">
                  <input type="hidden" class="btn" id="profile_btn">
                  <input type="hidden" class="btn" id="parent_btn">
                  <input type="hidden" class="btn" id="education_btn">
                </div>
              </div>

            </content>


        </form>
      </div>
    </div>
    <!---->

    <!---->
  </div>
  </div>
</body>

</html>
<?php include('footerjs.php'); ?>