<?php
require_once 'curl_helper.php';
$restAPIBaseURL = 'http://localhost/myapi';
if($_GET['id']){
$employeeId = $_GET['id'];
$result = sendRequest($restAPIBaseURL."/api.php/employees/$employeeId", 'DELETEA');
$result = json_decode($result, true);
}
?>
<script>
    window.location.href="all_employees.php";
</script>