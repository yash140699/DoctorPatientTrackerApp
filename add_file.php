<?php
// connect to the database$filename = $_FILES['myfile']['name'];
include('conn.php');
session_start();
    // destination of the file on the server
    $filename = $_FILES['myfile']['name'];

    $destination = 'uploads/' . $filename;
    // echo $destination;
    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['pdf', 'docx'])) {
        echo "You file extension must be .pdf or .docx";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql ="INSERT INTO `upload`(`report_name`,`name`, `size`, `adhaar`, `d_name`) VALUES 
            ('".$filename."','".$_POST['rname']."',$size,'".$_POST['hid']."','".$_SESSION['name']."')";
            if (mysqli_query($conn, $sql)) {                
                header("location:patient.php");
            }
        } else {
            echo "Failed to upload file.";
        }
    }
?>