<?php
include('conn.php');
$s="DELETE FROM `patient` WHERE `p_id`='".$_GET['id']."'";
$conn->query($s);
header("location:patient.php")
?>