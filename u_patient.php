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
.img-responsive{
    width: 100%;
    height: auto;
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
                    <form class="form-signin" action="e_patient.php" method="POST">
                    <?php
                    include('conn.php');
                    $s="SELECT * FROM `patient` WHERE `p_id`='".$_GET['id']."'";
                    $result=$conn->query($s);
                    $row = $result->fetch_assoc();
                    echo  "<div class='form-group'>
                    <input type='text' class='form-control' name='name' placeholder='Full Name' value=".$row['name']." required autofocus />
                </div>
                <div class='form-group'>
                    <input type='text' class='form-control' name='adhaar' placeholder='Adhaar No' value=".$row['aadhar_number']." required />
                </div>
                <div class='form-group'>
                    <input type='email' class='form-control' placeholder='Email' name='email' value=".$row['email']." required />
                </div>
                <div class='form-group'>
                    <input type='text' class='form-control' placeholder='Contact No' name='number' value=".$row['mobile_number']." required />
                </div>
                <div class='form-group'>
                    <input type='text' class='form-control' placeholder='Address' name='address'  value=".$row['address']." required />
                </div>
               
                <div class='radio'>
                        <p>Sex:</p>
                        <label><input type='radio' name='p_attend' value='male' value='male'>Male</label>
                      </div>
                      <div class='radio'>
                        <label><input type='radio' name='p_attend' value='female'>Female</label>
                      </div>
                      <div class='radio'>
                        <label><input type='radio' name='p_attend' value='other'>Other</label>
                      </div>";
                    ?>
                    <input type="hidden" name="hid" value="<?php echo $_GET['id'];?>" />
                    <button class="btn btn-lg btn-block btn-primary " type="submit">
                        Add Patient</button>
                    </form>
                    
                    
                
                </div>
            </div>
        </div>
    </div>
       
</body>
</html>