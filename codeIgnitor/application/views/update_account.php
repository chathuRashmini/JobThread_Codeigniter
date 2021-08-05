<!DOCTYPE html>
<html>
    <head>
        <title>Update Account</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/bootstrap.min.css');?>"> 
    </head>

    <body>
    <div class="bgImage">
    <div class="container">
    <div class="row">
    <div class="col-md-4 col-md-offset-4">
    <div class="login-panel panel panel-success">
    <div class="container features">
        <h3 class="feature-title">Update Profile</h3> 
        <?php
                //getting data row by row and displaying them row by row
            foreach($data as $row) {

        ?>
            <form role="form" method="post">
                <div class="panel-body">  
                <div class="form-row align-items-center">
                <div class="col-auto">  
                    <fieldset>  
                    <div class="form-group">
                        <center>
                        <table class="table table-dark table-sm table-responsive{-sm|-md|-lg|-xl}" width="35%">
                            <tr>
                                <td><input class="form-control" type="text" name="full_name" value="<?php echo $row->full_name;?>"></td>
                            </tr>

                            <tr>
                                <td><input class="form-control" type="text" name="email" value="<?php echo $row->email;?>"></td>
                            </tr>

                            <tr>
                                <td><input class="form-control" type="text" name="phcode" value="<?php echo $row->phcode;?>"></td>
                            </tr>

                            <tr>
                                <td><input class="form-control" type="text" name="mobile" value="<?php echo $row->mobile;?>"></td>
                            </tr>

                            <tr>
                                <td>
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
                                </td>
                            </tr>

                            <tr>
                                <td><input class="form-control" type="password" name="password" value="<?php echo $row->password;?>"></td>
                            </tr>

                            <tr>
                                <td><input class="form-control" type="password" name="con_password"></td>
                            </tr>

                            <tr>
                                <td>
                                    <input type="submit" class="
                                    <btn btn-primary btn-block" name="update" value="Update Account">
                                </td>
                            </tr>
                        </table>
                        </center>
                    </div>
                    </fieldset>
                </div>
                </div>
                </div>
            </form>
        <?php } ?>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </body>
</html>