<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=l, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   <style>
       .account-box
{
    border: 2px solid rgba(153, 153, 153, 0.75);
    border-radius: 2px;
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    -khtml-border-radius: 2px;
    -o-border-radius: 2px;
    z-index: 3;
    font-size: 13px !important;
    font-family: "Helvetica Neue" ,Helvetica,Arial,sans-serif;
    background-color: #ffffff;
    padding: 20px;
}

.logo
{
    width: 200px;
    height: 200px;
    text-align: center;
    margin: 10px 0px 10px 10px;

  
}




.or-box
{
    position: relative;
    border-top: 1px solid #dfdfdf;
    padding-top: 20px;
    margin-top:20px;
}
.img-responsive
{
    width: 100%;
    height: auto;
}

   </style>
</head>
<body>
<?php
// function setAddPatientValue(){
//   echo "<script>alert('asdf')</script>";
// }
?>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-md-offset-4">
                <div class="account-box">
                    <div  >
                        <img src="image/doc.jpg" alt="" class="img-circle img-responsive" width="226" height="226"/>
                    </div>
                    <form class="form-signin" action="#">
                   
                   <a href="addpateint.php"> 
                   <button class="btn btn-lg btn-block btn-primary "  type="button">
                        Add Patient</button></a>
                        <div class="table-responsive">
                        <table class="table table-striped">
                                <thead>
                                  <tr>
                               
                                    <th> Name</th>
                                    <th>Adhaar Number</th>
                                    <th>Edit</th>
                                    <th>Add Report</th>
                                    
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php 
                                  session_start();
                                  include('conn.php');
                                  $sql="SELECT `d_id` FROM `doctor` WHERE `name`='".$_SESSION['name']."'";
                                $result=$conn->query($sql);
                                $row = $result->fetch_assoc();
                                  $s="SELECT * FROM `patient` WHERE d_id='".$row['d_id']."'";
                                  $result=$conn->query($s);
                                  while($row = $result->fetch_assoc()){
                                    echo "<tr><td>".$row['name']."</td>";
                                    echo "<td>".$row['aadhar_number']."</td>";
                                    echo " <td>
                                    <a href='u_patient.php?id=$row[p_id]'>
                                        <span class='glyphicon glyphicon-pencil '></span>
                                      </a>
                                      

                                      <a href='p_delete.php?id=$row[p_id]'>
                                        <span class='glyphicon  glyphicon-trash'></span>
                                      </a>
                                      <a href='view_patient.php?id=$row[p_id]'>
                                        <span class='glyphicon glyphicon-eye-open'></span>
                                      </a>                          
                                </td>
                                <td>
                                <a href='view_report.php?id=$row[aadhar_number]'>
                                Add Report</a>
                                </td>
                                </tr>";                                  }
                                
                                  ?> 
                                </tbody>
                              </table>
                            </div>
                    </form>           
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<!-- <script>
session_start();

</script> -->