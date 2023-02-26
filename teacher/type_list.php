<?php 

 if(@$_GET['do']=='success'){
    echo '<script type="text/javascript">
          swal("", "ทำรายการสำเร็จ !!", "success");
          </script>';
    echo '<meta http-equiv="refresh" content="1;url=type.php" />';

  }else if(@$_GET['do']=='finish'){
    echo '<script type="text/javascript">
          swal("", "แก้ไขสำเร็จ !!", "success");
          </script>';
    echo '<meta http-equiv="refresh" content="1;url=type.php" />';

  }else if(@$_GET['do']=='wrong'){
    echo '<script type="text/javascript">
          swal("", "รหัสผ่านใหม่ไม่ตรงกัน !!", "warning");
          </script>';
    echo '<meta http-equiv="refresh" content="1;url=type.php" />';

  }else if(@$_GET['do']=='error'){
    echo '<script type="text/javascript">
          swal("", "ผิดพลาด !!", "error");
          </script>';
    echo '<meta http-equiv="refresh" content="1;url=type.php" />';
  }

$query = "SELECT * FROM tbl_member WHERE m_level = 'member' "  or die("Error:" );
$result = mysqli_query($con, $query);
echo ' <table id="example1" class="table table-bordered table-striped">';
  echo "<thead>";
    echo "<tr class=''>
      <th width='5%'>ID</th>
      <th>ชื่อ-นามสกุล</th>
      <th>ปีการศึกษา</th>
      <th>ฝึกงานที่</th>
      <th width='20%'>สถานะเอกสาร</th>
    </tr>";
  echo "</thead>";
  while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
    echo "<td>" .$row["member_id"] .  "</td> ";
    echo "<td>" .$row["m_name"].  "</td> ";
    echo "<td>" .$row["m_year"].  "</td> ";
    echo "<td>" .$row["m_job"].  "</td> ";
    echo "<td>" .$row["status_s"] .  "</td> ";
    
  }
echo "</table>";
mysqli_close($con);
?>