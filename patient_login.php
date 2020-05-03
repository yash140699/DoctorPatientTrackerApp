<?php
include('conn.php');
$s="SELECT * FROM `upload` where adhaar='".$_POST['adhaar_no']."'";
$r=$conn->query($s);
$row=mysqli_fetch_array($r);
echo $row['adhaar'];
 header("refresh:0; url=report.php?id=".$row['adhaar']."");
    
?>