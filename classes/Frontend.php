<?php
include_once __DIR__ . '/Company.php';

class Frontend extends Employee {
    public $name;
    public $surname;
    public $salary;
    public $working_days;
    public function __construct($_freshman, $_occupation, $_year_employment, $_name, $_surname, $_salary, $_working_days) {
        parent::__construct($_freshman, $_occupation, $_year_employment);
        $this->name = $_name;
        $this->surname = $_surname;
        $this->salary = $_salary;
        $this->working_days = $_working_days;
    }
    public function salaryMonth($num1, $num2) {
        if (!is_int($num1)) {
            throw new Exception ('salary must be an integer');
        }
        return $num1 * $num2;
    }
}
