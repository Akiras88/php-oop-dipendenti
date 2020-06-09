<?php 
include_once __DIR__ . '/classes/employee/frontendEmployee.php';
include_once __DIR__ . '/classes/employee/backendEmployee.php';


var_dump($employees_front);
var_dump($employees_back);

try {
    echo salaryMonth($salary, $working_days);
} catch (Exception $e) {
    echo $e->getMessage;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>