<?php
session_start();
include("conn.php");
$_SESSION['addPatient']=true;
$sql="SELECT `d_id` FROM `doctor` WHERE `name`='".$_SESSION['name']."'";
$result=$conn->query($sql);
$row = $result->fetch_assoc();
$s="INSERT INTO `patient`(`d_id`, `name`, `address`, `mobile_number`, `aadhar_number`, `sex`, `email`) VALUES 
('".$row['d_id']."','".$_POST['name']."','".$_POST['address']."','".$_POST['number']."','".$_POST['adhaar']."','".$_POST['p_attend']."','".$_POST['email']."')";
$conn->query($s);
echo "<script>alert('Patient Created')</script>";
header("location:patient.php");
?>