<?php

include('conn.php');
$s="DELETE FROM `upload` WHERE adhaar='".$_GET['id']."' and `report_name`='".$_GET['name']."'";
$result=$conn->query($s);
header("location:view_report.php?id=".$_GET['id']."");
?>