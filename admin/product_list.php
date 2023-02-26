<?php 
 if(@$_GET['do']=='success'){
    echo '<script type="text/javascript">
          swal("", "ทำรายการสำเร็จ !!", "success");
          </script>';
    echo '<meta http-equiv="refresh" content="1;url=product.php" />';

  }else if(@$_GET['do']=='finish'){
    echo '<script type="text/javascript">
          swal("", "แก้ไขสำเร็จ !!", "success");
          </script>';
    echo '<meta http-equiv="refresh" content="1;url=product.php" />';
  }

$query = "SELECT * FROM tbl_product as p
INNER JOIN tbl_type as t ON p.type_id = t.type_id
ORDER BY p.p_id DESC" or die("Error:");
$result = mysqli_query($con, $query);
echo ' <table id="example1" class="table table-bordered table-striped">';
  echo "<thead>";
    echo "<tr class=''>
      <th width='3%'  class='hidden-xs'>ID</th>
       <th width='20%'>สถานที่ฝึกงาน</th>
       <th width='30%' class='hidden-xs'>รายละเอียดสถานที่</th>
       <th>แก้ไขข้อมูล</th>
    
    </tr>";
  echo "</thead>";
  while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
    echo "<td  class='hidden-xs'>" .$row["p_id"] .  "</td> ";
   
    echo "<td> ชื่อ: " .$row["p_name"] .
    "<br>เหมาะกับ: <font color='blue'>".$row["type_name"] ."</font>".
      "</td class='hidden-xs'> ";
    echo "<td class='hidden-xs'>" .$row["p_detail"] ."</td> ";
       
      "</td> ";
        echo "<td><a href='product.php?act=edit&ID=$row[p_id]' class='btn btn-warning btn-xs'><span class='glyphicon glyphicon-edit'></span></a> 
        <a href='product_del_db.php?ID=$row[p_id]' onclick=\"return confirm('ยันยันการลบ')\" class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-trash'></span></a>        
    </td> ";
    
  }
echo "</table>";
mysqli_close($con);
?>