<?php
$con= mysqli_connect("thedevilzz.ddns.net","ninjajajaa100","03092544@Ninja","cooperative_education") or die("Error: " . mysqli_error($con));
mysqli_query($con, "SET NAMES 'utf8' ");
error_reporting( error_reporting() & ~E_NOTICE );
date_default_timezone_set('Asia/Bangkok');
?>