<?php
require_once 'header.php';
require_once 'curl_helper.php';
$restAPIBaseURL = 'http://localhost/myapi';
if($_GET['id']){
    $employeeId = $_GET['id']; 
}

$employee = sendRequest($restAPIBaseURL."/api.php/employees/$employeeId", 'GET');
$employee = json_decode($employee, true);
$responseArray = json_decode($employee['response'], true);
?>
<html>
    <head><h2>Edit Employee</h2></head>
    <body>
        <div class="container">
            <form action="update.php" method="post">
            
            <input type="hidden" id="id" name="id" value="<?php echo $responseArray['id'] ?>"/>
                
                    <div class="row">
                        <div class="col-25">
                            <label>Name</label>
                        </div>
                        <div class="col-75">  
                            <input type="text" id="emp_name" name="emp_name" value="<?php echo $responseArray['emp_name'] ?>"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label>Code</label>
                        </div>
                        <div class="col-75">  
                            <input type="text" id="emp_code" name="emp_code" value="<?php echo $responseArray['emp_code'] ?>"/> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label>Email</label>
                        </div>
                        <div class="col-75">  
                            <input type="text" id="emp_email" name="emp_email" value="<?php echo $responseArray['emp_email'] ?>"/> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label>Phone</label>
                        </div>
                        <div class="col-75">  
                            <input type="text" id="emp_phone" name="emp_phone" value="<?php echo $responseArray['emp_phone'] ?>"/> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label>Address</label>
                        </div>
                        <div class="col-75">  
                            <input type="text" id="emp_address" name="emp_address" value="<?php echo $responseArray['emp_address'] ?>"/> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label>Designation</label>
                        </div>
                        <div class="col-75">  
                            <input type="text" id="emp_designation" name="emp_designation" value="<?php echo $responseArray['emp_designation'] ?>"/> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label>Joining Date</label>
                        </div>
                        <div class="col-75">  
                            <input type="text" id="emp_joining_date" name="emp_joining_date" value="<?php echo $responseArray['emp_joining_date'] ?>"/> 
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <input type="submit" id="submit" name="submit" value="submit"/>
                    </div>
            </form>
        </div>
    </body>
</html>
