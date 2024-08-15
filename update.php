<?php
require_once 'curl_helper.php';
$restAPIBaseURL = 'http://localhost/myapi';
if($_POST['id']){
$employeeId = $_POST['id'];
$data = [
    'emp_name' => $_POST['emp_name'],
    'emp_code' => $_POST['emp_code'],
    'emp_email' => $_POST['emp_email'],
    'emp_phone' => $_POST['emp_phone'],
    'emp_address' => $_POST['emp_address'],
    'emp_designation' => $_POST['emp_designation'],
    'emp_joining_date' => $_POST['emp_joining_date'],
];
$result = sendRequest($restAPIBaseURL."/api.php/employees/$employeeId", 'PUT', $data);
$result = json_decode($result, true);
}
?>
<script>
    window.location.href="all_employees.php";
</script>