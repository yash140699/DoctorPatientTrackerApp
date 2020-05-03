<?php
    include("conn.php");
    $s="UPDATE `appoinment` SET 
    `p_name`='".$_POST['p_name']."',
    `adhaar_no`='".$_POST['p_anumber']."',
    `visit_date`='".$_POST['p_date']."',
    `visit_time`='".$_POST['p_time']."',
    `reason`='".$_POST['p_reason']."',
    `previously`='".$_POST['p_attend']."' WHERE a_id='".$_POST['hid']."'";
    $conn->query($s);
    echo "<script>alert('Appointment Updated')</script>";
    header("location:appointment.php");
?>