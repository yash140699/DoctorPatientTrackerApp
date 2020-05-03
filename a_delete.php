<?php
include('conn.php');
$s="DELETE FROM `appoinment` WHERE `a_id`='".$_GET['id']."'";
$conn->query($s);
header("location:appointment.php")
?>