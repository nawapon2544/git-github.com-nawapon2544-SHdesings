<?php
session_start();
echo '<meta charset="utf-8">';
include('../condb.php');
if($_SESSION['m_level']!='admin'){
	Header("Location: index.php");
}
	$type_name = mysqli_real_escape_string($con,$_POST["type_name"]);
	$check = "
	SELECT  type_name 
	FROM tbl_type  
	WHERE type_name = '$type_name' 
	";
    $result1 = mysqli_query($con, $check) or die();
    $num=mysqli_num_rows($result1);

    if($num > 0)
    {
     echo '<script>';
	 echo "window.location='type.php?act=add&do=d';";
	 echo '</script>';
    }else{
	
	$sql = "INSERT INTO tbl_type
	(type_name)
	VALUES
	('$type_name')";
	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " );

}

	mysqli_close($con);
	if($result){
	echo '<script>';
    echo "window.location='type.php?do=success';";
    echo '</script>';
	}else{
	echo '<script>';
    echo "window.location='type.php?act=add&do=f';";
    echo '</script>';
}
?>