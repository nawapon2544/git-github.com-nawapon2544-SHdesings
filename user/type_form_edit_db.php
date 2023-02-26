<?php
session_start();
echo '<meta charset="utf-8">';
include('../condb.php');
if($_SESSION['m_level']!='admin'){
	Header("Location: index.php");
}
	$type_id = mysqli_real_escape_string($con,$_POST['type_id']);
	$type_name = mysqli_real_escape_string($con,$_POST["type_name"]);
	

	$sql = "UPDATE  tbl_type SET 
	type_name='$type_name'
	WHERE type_id=$type_id
	";

	$result = mysqli_query($con, $sql) or die ("Error in query: $sql ");
	mysqli_close($con);
	
	if($result){
	echo '<script>';
    echo "window.location='type.php?do=finish';";
    echo '</script>';
	}else{
	echo '<script>';
    echo "window.location='type.php?act=add&do=f';";
    echo '</script>';
}
?>