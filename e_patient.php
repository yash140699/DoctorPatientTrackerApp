<?php
include("conn.php");
$s="UPDATE `patient` SET
`name`='".$_POST['name']."',
`address`='".$_POST['address']."',
`mobile_number`='".$_POST['number']."',
`aadhar_number`='".$_POST['adhaar']."',
`sex`='".$_POST['p_attend']."',
`email`='".$_POST['email']."' 
WHERE p_id='".$_POST['hid']."'";
$conn->query($s);
echo "<script>alert('Appointment Updated')</script>";
header("location:patient.php");
?>