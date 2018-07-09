<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Twitter Login Page Demo</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    body{
        background-color: #0099ff1f;
    }
        .form-control , .btn{
            border-radius:50px;
        }
        .btn-primary{
            background:#09f;
        }
        .color{color:#09f;}
    </style>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
               
                        <h1 class="color">Login to Twitter</h1><br/><br/>
                        <form>
                        <div class="form-group">
                            
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Email" autocomplete="off">
                        </div>
                        <div class="form-group">
                            
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Your Password" autocomplete="off">
                        </div>
                       
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </form>
                        <br/><br/>
                        <p><a href="#">Forgot Password?</a> | <a href="#">SignUp for twitter</a> </p>
                   
            </div>
        </div>
    </div>
  </body>
</html>