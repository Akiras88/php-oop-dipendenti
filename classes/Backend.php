<?php
include_once __DIR__ . '/Employee.php';

class Backend extends Employee {
    public $name;
    public $surname;
    public $salary;
    public $working_days;
    public function __construct($_freshman, $_occupation, $_year_employment, $_branch, $_sector,
    $_name, $_surname, $_salary, $_working_days) {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->salary = $_salary;
        $this->working_days = $_working_days;
    }
    public function salaryMonth($salary, $working_days) {
        if (! is_int($salary)) {
            throw new Exception ('salary must be an integer');
        }
        return $salary * $working_days;
    }
}

try {
    echo salaryMonth($salary, $working_days);
} catch (Exception $e) {
    echo $e->getMessage;
}