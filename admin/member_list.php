<?php 
  if(@$_GET['do']=='success'){
    echo '<script type="text/javascript">
          swal("", "ทำรายการสำเร็จ !!", "success");
          </script>';
    echo '<meta http-equiv="refresh" content="1;url=member.php" />';

  }else if(@$_GET['do']=='finish'){
    echo '<script type="text/javascript">
          swal("", "แก้ไขสำเร็จ !!", "success");
          </script>';
    echo '<meta http-equiv="refresh" content="1;url=member.php" />';

  }else if(@$_GET['do']=='wrong'){
    echo '<script type="text/javascript">
          swal("", "รหัสผ่านใหม่ไม่ตรงกัน !!", "warning");
          </script>';
    echo '<meta http-equiv="refresh" content="1;url=member.php" />';

  }else if(@$_GET['do']=='error'){
    echo '<script type="text/javascript">
          swal("", "ผิดพลาด !!", "error");
          </script>';
    echo '<meta http-equiv="refresh" content="1;url=member.php" />';
  }

$query = "
SELECT * FROM tbl_member 
ORDER BY member_id DESC" or die("Error:");
$result = mysqli_query($con, $query);
echo '<table id="example1" class="table table-bordered table-striped">';
  echo "<thead>";
    echo "<tr class=''>
      <th width='5%'>ID</th>
      <th width='7%' class='hidden-xs'>รูป</th>
      <th width='15%' class='hidden-xs'>ชื่อผู้ใช้งาน</th>
      <th width='20%'>ข้อมูลส่วนตัว</th>
      <th width='15%'>สถานะ</th>
      <th width='15%'>ปีการศึกษา</th>
      <th width='15%'>ฝึกงานที่</th>
      <th width='15%'>ที่อยู่</th>
      
  
      <th width='10%' class='hidden-xs'>แก้ไข</th>  
      <th width='7%'>สถานะเอกสาร</th>
    </tr>";
  echo "</thead>";
  while($row = mysqli_fetch_array($result)) {
    $st = $row["m_level"];
    echo "<tr>";
    echo "<td>" .$row["member_id"] .  "</td> ";
    echo "<td class='hidden-xs'>"."<img src='../m_img/".$row['m_img']."' width='70%'>"."</td>";
    echo "<td class='hidden-xs'> username: ".$row["m_user"]
    // ."<br>"." password: ".sha1($row['a_password'])  
    ."<br>"."<a href='resetpass_admin.php?member_id=".$row['member_id']."'><span class='label label-warning'>(เปลี่ยนรหัสผ่าน)</span></a></td> ";
    echo "<td> ชื่อ ".$row["m_name"]
    ."<br> เบอร์โทร ".$row["m_tel"]
    ."</td> ";
    echo "<td>".$row["status_s"].  "</td> ";
    echo "<td>".$row["m_year"].  "</td> ";
    echo "<td>".$row["m_job"].  "</td> ";
    echo "<td>" .$row["m_address"] .  "</td> ";
       echo "<td class='hidden-xs' align='center'>";
        if ($st == 'admin') {
          echo "เจ้าหน้าที่"."<br> <span class='label label-success'>(เจ้าหน้าที่)</span>";
        }elseif($st == 'member') {
          echo "นักศึกษา"."<br> <span class='label label-info'>(นักศึกษา)</span>";
        }elseif($st == 'teacher') {
          echo "อาจารย์"."<br> <span class='d-inline p-2 bg-primary text-white'>(อาจารย์)</span>";
        }
        echo "</td> ";
    echo "<td><a href='member.php?act=edit&ID=$row[member_id]' class='btn btn-warning btn-xs'><span class='glyphicon glyphicon-edit'></span></a>   
          <a href='member_del_db.php?ID=$row[member_id]' onclick=\"return confirm('ยันยันการลบ')\" class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-trash'></span></a>
    </td> ";
   
  } 
echo "</table>";
mysqli_close($con);
?>
