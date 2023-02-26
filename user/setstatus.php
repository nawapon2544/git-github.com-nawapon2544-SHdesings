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
	$USER_ID = mysqli_real_escape_string($con,$_POST["USER_ID"]);
	$userlevel = mysqli_real_escape_string($con,$_POST["userlevel"]);
	$username = mysqli_real_escape_string($con,$_POST["username"]);
	$password = mysqli_real_escape_string($con,$_POST["password"]);
	$NAME_SURNAME = mysqli_real_escape_string($con,$_POST["NAME_SURNAME"]);
	$m_email = mysqli_real_escape_string($con,$_POST["m_email"]);
	$status_s = mysqli_real_escape_string($con,$_POST["status_s"]);
	$m_address = mysqli_real_escape_string($con,$_POST["m_address"]);	
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
	
	status_s='$status_s'
	WHERE USER_ID=$USER_ID
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