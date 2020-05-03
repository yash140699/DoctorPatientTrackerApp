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
.f1{
    background-color:gray;
    padding-top:20px;
    padding-left:10px;
}

.f2{
    background-color:blue;
    padding-top:20px;
    padding-left:10px;
}
   </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-md-offset-4">
                <div class="account-box">
                    <div  >
                        <img src="image/doc.jpg" alt="" class="img-circle img-responsive" width="226" height="226"/>
                    </div>
                    <form class="form-signin" action="#">
                   
                  
                        <?php
                        include("conn.php");
                        $s="SELECT * FROM `appoinment` WHERE `a_id`='".$_GET['id']."'";                        $result=$conn->query($s);
                        $row = $result->fetch_assoc();
                        echo "<div class='table-responsive'>
                        <div class = 'f1'><p>Patient Name : ".$row['p_name']."</p>  <br></div>
                        <div class = 'f2'><p>Date : ".$row['visit_date']."</p>  <br></div>
                        <div class = 'f1'><p>Time : ".$row['visit_time']."</p>  <br></div>
                        <div class = 'f2'><p>Adhaar Number : ".$row['adhaar_no']."</p>  <br></div>
                        <div class = 'f2'><p>Reason : ".$row['reason']."</p>  <br></div>
                        <div class = 'f2'><p>previously attended our facility : ".$row['previously']."</p>  <br></div>";
                        
                        ?>
                    </div>
                    </form>
                    
                    
                
                </div>
            </div>
        </div>
    </div>
       
</body>
</html>