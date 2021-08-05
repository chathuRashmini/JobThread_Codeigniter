<html>
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/bootstrap.min.css');?>">
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
</head>
    <body>
    <div class="container home">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <h3 class="feature-title">Searching a job?</h3>
                <img src="../../images/hireme.jpg" class="img-fluid">
                <p><b>Loking for a job? Then you are at the right place. 
                    Register to our website and enter your dtails.
                your future boss will contact you soon. Good luck!</b></p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <h3 class="feature-title">Want to hire?</h3>
               <img src="../../images/jobs-hired.jpg" class="img-fluid">
                <p> <b> As the owner of your business and manager of your team, 
                you’re responsible for hiring the people who will help take 
                your business to the next level and firing the people who are 
                holding you and your business back. When you hire someone, 
                you need and want to feel like you’re making the right decision, 
                and you can have the best one from this site. 
                Browse and hire your next employee!</b></p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <h3 class="feature-title">Create Account</h3>
                <form role="form" method="post">
                    <div class="panel-body">  
                    <div class="form-row align-items-center">
                    <div class="col-auto">  
                        <fieldset>  
                            <div class="form-group row">  
                                <input class="form-control" type="text" name="full_name" placeholder="Full Name" required>
                            </div>

                            <div class="form-group row">  
                                <input class="form-control" type="text" name="email" placeholder="Email address" required>
                            </div>

                            <div class="form-group row"> 
                                <div class="row">
                                <div class="col">
                                    <select class="custom-select mr-sm-2" name="phcode">
                                        <option value="070">070</option>
                                        <option value="071">071</option>
                                        <option value="072">072</option>
                                        <option value="075">075</option>
                                        <option value="076">076</option>
                                        <option value="077">077</option>
                                        <option value="078">078</option>
                                    </select>
                                </div>
                                <div class="col">
                                  <input class="form-control" type="text" name="mobile" placeholder="Phone Number" required>
                                </div>
                                </div>
                            </div>

                            <div class="form-group row">  
                                <select class="form-control" name="job_type">
                                    <option selected>Select Job Type</option>
                                    <option value="Private Tutor">Private Tutor</option>
                                    <option value="Software Engineer">Software Engineer</option>
                                    <option value="Legal Officer">Legal Officer</option>
                                    <option value="Receptionist">Receptionist</option>
                                    <option value="Air cndition operator">Air cndition operator</option>
                                    <option value="Chef">Chef</option>
                                    <option value="Electrician">Electrician</option>
                                </select>
                            </div>

                            <div class="form-group row">  
                                <input class="form-control" type="password" name="password" placeholder="Create Password" required> 
                            </div>

                            <div class="form-group row">  
                                <input class="form-control" type="password" name="con_password" placeholder="Repeat Password" required>
                            </div>
                            <div><center>
                                <input type="submit" class="btn btn-primary btn-block" name="save" value="Create Account">
                                <p><b>Have an account? <a href='login?'>Log In</a></b></p>
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
    </body>
</html>