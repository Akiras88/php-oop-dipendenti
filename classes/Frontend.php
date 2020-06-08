<?php
include_once __DIR__ . '/Employee.php';

class Frontend extends Employee {
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
}