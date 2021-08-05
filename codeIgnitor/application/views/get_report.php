<!DOCTYPE html>
<html>
    <head>
        <title>Generate a report</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/bootstrap.min.css');?>">
    </head>
    <body>
        <div class="bgImage">
        <div class="container">
        <div class="row">
        <div class="col-md-4 col-md-offset-4">
        <div class="login-panel panel panel-success">  
        <div class="container features">
            <h3 class="feature-title">The Report</h3>
            <form role="form" method="post">
                <div class="panel-body">  
                <div class="form-row align-items-center">
                <div class="col-auto">  
                    <fieldset>
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
                            </select>
                        </div>
                        <div>
                            <input type="submit" class="btn btn-primary" name="displayreport" value="Display Report">
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