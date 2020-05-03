<?php
    include("conn.php");
    echo $_POST['d_name'];
    
        if($_POST['d_pass']==$_POST['d_rpass']){
            $s="INSERT INTO `doctor`( `name`, `address`, `mobile_number`, `expert`, `experience`,`password`) VALUES 
        ('".$_POST['d_name']."','".$_POST['d_address']."','".$_POST['d_number']."','".$_POST['d_expert']."','".$_POST['d_experience']."','".$_POST['d_pass']."')";  
    $conn->query($s);
        echo "<script>alert('Account Created')</script>";
        header('refresh:0; url=login.php');
            }
        else{
            echo "<script>alert('Password Wrong')</script>";
            header("Location:index.php");
        }
?>