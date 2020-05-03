<?php
include("conn.php");
session_start();
$_SESSION['addappointment']=true;
$sql="INSERT INTO `appoinment`(`p_name`, `adhaar_no`, `d_name`, `visit_date`, `visit_time`, `reason`, `previously`) VALUES 
('".$_POST['p_name']."','".$_POST['p_anumber']."','".$_SESSION['name']."','".$_POST['p_date']."','".$_POST['p_time']."','".$_POST['p_reason']."','".$_POST['p_attend']."')";
mysqli_query($conn,$sql);
header("location:appointment.php");
?>