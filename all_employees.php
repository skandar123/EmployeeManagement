<?php
require_once 'header.php';
require_once 'curl_helper.php';
$restAPIBaseURL = 'http://localhost/myapi';
$employees = sendRequest($restAPIBaseURL.'/api.php/employees', 'GET');
$employees = json_decode($employees, true);
$responseArray = json_decode($employees['response'], true);
?>
<html>
    <head><h2>Employees</h2></head>
    <body>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Code</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Designation</th>
                <th>Joining Date</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php for($i=0; $i<count($responseArray); $i++){ ?>
            <tr>
                <td><?php echo $responseArray[$i]['id']; ?></td>
                <td><?php echo $responseArray[$i]['emp_name']; ?></td>
                <td><?php echo $responseArray[$i]['emp_code']; ?></td>
                <td><?php echo $responseArray[$i]['emp_email']; ?></td>
                <td><?php echo $responseArray[$i]['emp_phone']; ?></td>
                <td><?php echo $responseArray[$i]['emp_address']; ?></td>
                <td><?php echo $responseArray[$i]['emp_designation']; ?></td>
                <td><?php echo $responseArray[$i]['emp_joining_date']; ?></td>
                <td><a href="/myapi/edit.php?id=<?php echo $responseArray[$i]['id'] ?>">Edit</a></td>
                <td><a href="/myapi/delete.php?id=<?php echo $responseArray[$i]['id'] ?>">Delete</a></td>
            </tr>
            <?php }?>
        </table>
    </body>
    </html>