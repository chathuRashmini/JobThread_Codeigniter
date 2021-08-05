<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/bootstrap.min.css');?>"> 
</head>
<body>
    <div class="bgImage">
    <div class="container">
    <div class="row">
    <div class="col-md-4 col-md-offset-4"> 
    <div class="login-panel panel panel-success">
    

    <div class="container features">
        <h3 class="feature-title">Log in Here</h3>
        <form role="form" method="post">
            <div class="panel-body">  
            <div class="form-row align-items-center">
            <div class="col-auto">  
                <fieldset>  
                    <div class="form-group row">  
                        <input class="form-control" type="text" name="email" placeholder="Enter Email address" required>
                    </div>
                    
                    <div class="form-group row">  
                        <input class="form-control" type="password" name="password" placeholder="Enter Password" required> 
                    </div>
                    <div><center>
                    <input type="submit" class="btn btn-primary btn-block" name="login" value="Log In">
                    </center>
                </div>
                </fieldset>  
            </div>
            </div>
            </div>
        </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </body>
</html>