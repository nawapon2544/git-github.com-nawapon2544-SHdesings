<?php
session_start();
echo '<meta charset="utf-8">';
include('../condb.php');
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// exit();
if($_SESSION['m_level']!='admin'){
	Header("Location: index.php");
}
	$member_id = mysqli_real_escape_string($con,$_POST["member_id"]);
	$m_level = mysqli_real_escape_string($con,$_POST["m_level"]);
	$m_user = mysqli_real_escape_string($con,$_POST["m_user"]);
	$m_pass = mysqli_real_escape_string($con,$_POST["m_pass"]);
	$m_name = mysqli_real_escape_string($con,$_POST["m_name"]);
	$m_tel = mysqli_real_escape_string($con,$_POST["m_tel"]);
	$m_email = mysqli_real_escape_string($con,$_POST["m_email"]);
	$status_s = mysqli_real_escape_string($con,$_POST["status_s"]);
	$m_address = mysqli_real_escape_string($con,$_POST["m_address"]);
	$m_year 	= mysqli_real_escape_string($con,$_POST["m_year"]);
	$m_job	= mysqli_real_escape_string($con,$_POST["m_job"]);
	$m_img2 = mysqli_real_escape_string($con,$_POST["m_img2"]);


	$date1 = date("Ymd_His");
	$numrand = (mt_rand());
	$m_img = (isset($_POST['m_img']) ? $_POST['m_img'] : '');
	$upload=$_FILES['m_img']['name'];
	if($upload !='') { 

		$path="../m_img/";
		$type = strrchr($_FILES['m_img']['name'],".");
		$newname =$numrand.$date1.$type;
		$path_copy=$path.$newname;
		$path_link="../m_img/".$newname;
		move_uploaded_file($_FILES['m_img']['tmp_name'],$path_copy);  
	}else{
		$newname=$m_img2;
	}

	$sql = "UPDATE tbl_member SET 
	m_level='$m_level',
	m_user='$m_user',
	m_name='$m_name',
	m_tel='$m_tel',
	m_email='$m_email',
	m_address='$m_address',
	m_year='$m_year',
	m_img='$newname',
	m_job='$m_job',
	status_s='$status_s'
	WHERE member_id=$member_id
	 ";

	$result = mysqli_query($con, $sql) or die ("Error in query: $sql ");
	mysqli_close($con);
	
	if($result){
	echo '<script>';
    echo "window.location='member.php?do=finish';";
    echo '</script>';
	}else{
	echo '<script>';
    echo "window.location='member.php?act=add&do=f';";
    echo '</script>';
}
?>