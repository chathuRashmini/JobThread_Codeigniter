<!DOCTYPE html>
<html>
    <head>
        <title>Display Acounts</title>
        <style>
            table, td, th {
                border: 1px solid black;
            }
            td {
                padding: 5px;
                text-align: center;
            }
        </style>
    </head>

    <body>
            <table width="100%">
                <tr>
                    <th>Account id</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Job Type</th>
                    <th>Password</th>
                    <th>Update Account</th>
                    <th>Delete Account</th>
                </tr>
                <?php
                    //getting data row by row and displaying them row by row
                    foreach($data as $row) {
                        echo "<tr>";
                        echo "<td>".$row->account_id."</td>";
                        echo "<td>".$row->full_name."</td>";
                        echo "<td>".$row->email."</td>";
                        echo "<td>".$row->mobile."</td>";
                        echo "<td>".$row->job_type."</td>";
                        echo "<td>".$row->password."</td>";
                        
                        echo "<td><a href='updatedata?account_id=".$row->account_id."'>Update</a></td>";
                        echo "<td><a href='deletedata?account_id=".$row->account_id."'>Delete</a></td>";
                        //create a delete btton like link to perform the task
                        echo "</tr>";
                    }
                ?>
            </table>
    </body>
</html>