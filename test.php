<?php
if(isset($_POST["submit"]))
{
    $folder_path = 'health/';

    $filename = basename($_FILES['healthfile']['name']);
    $newname = $folder_path . $filename;

    $FileType = pathinfo($newname,PATHINFO_EXTENSION);

    if($FileType == "pdf")
    {
        if (move_uploaded_file($_FILES['healthfile']['tmp_name'], $newname))
        {

            $filesql = "INSERT INTO tbl_health (link) VALUES('$filename')";
            $fileresult = mysql_query($filesql);

            if (isset($fileresult))
            {
                echo 'File Uploaded';
            } else
            {
                echo 'Something went Wrong';
            }
        }
        else
        {

            echo "<p>Upload Failed.</p>";
        }


    }
 
?>