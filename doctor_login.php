<?php
session_start();
    include("conn.php");
    $sql="SELECT * FROM `doctor` WHERE `name` = '".$_POST['d_name']."' and `password` ='".$_POST['d_pass']."'";
    $d=$conn->query($sql);
    if($row=mysqli_fetch_array($d)){
        $_SESSION['name']=$row['name'];
        header('refresh:0; url=afterlogin.php');
        
    }
    else{
        echo "<script>alert('id or password incorrect')</script>";
        header('refresh:0; url=login.php');
    }
?>