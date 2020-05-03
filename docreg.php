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
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-md-offset-4">
                <div class="account-box">
                    <div  >
                        <img src="image/doc.jpg" alt="" class="img-responsive img-circle"/>
                    </div>
                    <form class="form-signin" action="#">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name" required autofocus />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Address" required />
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control" placeholder="Mobile No." required />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Expert" required />
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" placeholder="Experience Years" required />
                    </div>
                    <button class="btn btn-lg btn-block btn-primary " type="submit">
                        Create New Account</button>
                    </form>
                    
                    
                
                </div>
            </div>
        </div>
    </div>
       
</body>
</html>