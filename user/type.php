
<?php include('h.php');?>
<body class="hold-transition skin-purple sidebar-mini" >
  <div class="wrapper">
    <!-- Main Header -->
    <?php include('menutop.php');?>
        <?php include('menu_l.php');?>
    <div class="content-wrapper">
      <br>
     <div style="text-align:center;width:100%;">
<h1 >คุณอยู่ในสถานะ</h1>
     <?php 
   include('../condb.php');
   session_start();
    $query = "SELECT * FROM tbl_member ORDER BY member_id asc" or die("Error:");
    $q = mysqli_query( $con, $query );
    while( $f = mysqli_fetch_assoc( $q ) ) {   
      echo "<H1>" ;
       echo $f["status_s"];
       echo "</H1>";
     };
    mysqli_close( $con );
      ?>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
</div>
    </body>
  </html>
  <?php include('footerjs.php');?>