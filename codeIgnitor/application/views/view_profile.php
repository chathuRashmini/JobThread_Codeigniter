<!DOCTYPE html>
<html>
    <head>
        <title>Your Profile</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/bootstrap.min.css');?>">
    </head>

    <body>
        <div class="bgImage">
        <div class="container">
        <div class="row">
        <div class="col-md-4 col-md-offset-4">
        <div class="login-panel panel panel-success">
        <div class="container features">
            <h3 class="feature-title">Profile</h3>
            <form role="form" method="post">
                <div class="panel-body">  
                <div class="form-row align-items-center">
                <div class="col-auto">  
                    <fieldset>  
                    <div class="form-group">
                        <center>
                            <table class="table table-dark table-sm table-responsive{-sm|-md|-lg|-xl}" width="35%">
                            <?php
                                foreach($data as $row) {
                                    echo "<tr>";
                                        echo "<td>Account Id:</td>";
                                        echo "<td>".$row->account_id."</td>";
                                    echo "</tr>";
                                    echo "<tr>";
                                        echo "<td>Full name:</td>";
                                        echo "<td>".$row->full_name."</td>";
                                    echo "</tr>";
                                    echo "<tr>";
                                        echo "<td>Email Address:</td>";
                                        echo "<td>".$row->email."</td>";
                                    echo "</tr>";
                                    echo "<tr>";
                                        echo "<td>Phone Code:</td>";
                                        echo "<td>".$row->phcode."</td>";
                                    echo "</tr>";
                                    echo "<tr>";
                                        echo "<td>Phone Number:</td>";
                                        echo "<td>".$row->mobile."</td>";
                                    echo "</tr>";
                                    echo "<tr>";
                                        echo "<td>Job type:</td>";
                                        echo "<td>".$row->job_type."</td>";
                                    echo "</tr>";
                                    echo "<tr>";
                                        echo "<td colspan='2'><a href='updatedata?account_id=".$row->account_id."' class='btn btn-primary btn-block' role='button'><center>Update Profile</center></a></td>";
                                    echo "</tr>";
                                    echo "<tr>";
                                        echo "<td colspan='2'><a href='deletedata?account_id=".$row->account_id."' class='btn btn-primary btn-block' role='button'><center>Delete Profile</center></a></td>";
                                    echo "</tr>";
                                    echo "<tr>";
                                        echo "<td colspan='2'><a href='getreport?' class='btn btn-primary btn-block' role='button'><center>Generate A Report</center></a></td>";
                                    echo "</tr>";
                                }
                            ?>

                            </table>
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