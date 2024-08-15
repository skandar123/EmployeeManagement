<?php 
require_once 'header.php';
require_once 'curl_helper.php';
$restAPIBaseURL = 'http://localhost/myapi';
?>
<html>
    <head><h2>Add Employee</h2></head>
    <body>
        <div class="container">
            <form action="" method="post">
                <div class="row">
                    <div class="col-25">
                        <label>Name</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="emp_name" name="emp_name"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Code</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="emp_code" name="emp_code"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Email</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="emp_email" name="emp_email"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Phone</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="emp_phone" name="emp_phone"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Address</label> 
                    </div>
                    <div class="col-75">
                        <input type="text" id="emp_address" name="emp_address"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Designation</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="emp_designation" name="emp_designation"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Joining Date</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="emp_joining_date" name="emp_joining_date"/>
                    </div>
                </div>
                <br>
                <div class="row">
                    <input type="submit" id="submit" name="submit" value="Submit"/>
                </div>
            </form>
        </div>
    </body>
</html>
<?php
if($_POST){
$data = [
    'emp_name' => $_POST['emp_name'],
    'emp_code' => $_POST['emp_code'],
    'emp_email' => $_POST['emp_email'],
    'emp_phone' => $_POST['emp_phone'],
    'emp_address' => $_POST['emp_address'],
    'emp_designation' => $_POST['emp_designation'],
    'emp_joining_date' => $_POST['emp_joining_date'],
];
$result = sendRequest($restAPIBaseURL.'/api.php/employees', 'POST', $data);
$result = json_decode($result, true);
}
?>