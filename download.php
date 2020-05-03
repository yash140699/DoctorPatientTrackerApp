<?php
include('conn.php');
    
        // fetch file to download from database
        $sql = "SELECT * FROM `upload` WHERE adhaar='".$_GET['id']."' and  report_name='".$_GET['name']."' ";
        $result = mysqli_query($conn, $sql);
    
        $file = mysqli_fetch_assoc($result);
        $filepath = 'uploads/' . $file['report_name'];
    
        if (file_exists($filepath)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename=' . basename($filepath));
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize('uploads/' . $file['report_name']));
            readfile('uploads/' . $file['report_name']);
            exit;
        }
?>