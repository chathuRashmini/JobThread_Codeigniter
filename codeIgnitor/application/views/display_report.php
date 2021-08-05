<!DOCTYPE html>
<html>
    <head>
        <title>The Report</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/bootstrap.min.css');?>">
    </head>

    <body>
    <div class="bgImage">
    <div class="container">
        <div class="row">
        <div class="col-md-4 col-md-offset-4">
        <div class="login-panel panel panel-success">
        <div class="container features">
            <h3 class="feature-title">The member list of selected job type</h3>
            <form role="form" method="post">
                <div class="panel-body">  
                <div class="form-row align-items-center">
                <div class="col-auto">  
                <fieldset>  
                    <div class="form-group">

                    <table class="table table-dark table-responsive{-sm|-md|-lg|-xl}" width="100%">
                            <?php
                                $row_num = 0;
                                foreach($data as $row) {
                                    $row_num++;
                                    echo "<tr>";
                                        echo "<td>".$row->full_name."</td>";
                                        echo "<td>".$row->email."</td>";
                                    echo "</tr>";
                                }
                                echo "<tr>";
                                    echo "<td colspan='2'>Total members:".$row_num."</td>";
                                echo "</tr>";
                                echo "<tr>";
                                    echo "<td colspan='2> <a href='reportok?' class='btn btn-primary btn-block' role='button'>OK</a></td>";
                                echo "</tr>";
                            ?>
                        </table>
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