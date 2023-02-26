<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head> 
<?php 
    //print_r($_SESSION);
    include('../condb.php');
    $member_id = $_SESSION['member_id'];
    $m_name = $_SESSION['m_name'];
    $m_level = $_SESSION['m_level'];
    if($m_level!='teacher'){
    Header("Location: ../logout.php");
    }
    $sql = "SELECT m_name,m_img FROM tbl_member WHERE member_id=$member_id";
    $result = mysqli_query($con, $sql) or die ("Error in query: $sql ");
    $row = mysqli_fetch_array($result);
    $m_img = $row['m_img'];
    $m_name = $row['m_name'];
    ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ระบบสหกิจ</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
    <!-- Google Font -->
    <link rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
      <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
    </head>