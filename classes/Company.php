<?php

class Employee {
    public $freshman;
    public $occupation;
    public $year_employment;
    public function __construct($_freshman, $_occupation, $_year_employment) {
        $this->freshman = $_freshman;
        $this->occupation= $_occupation;
        $this->year_employment= $_year_employment;
    }
    public function salaryMonth($num1, $num2) {
        if (!is_int($num1)) {
            throw new Exception ('salary must be an integer');
        }
        return $num1 * $num2;
    }
}
// try {
//     echo salaryMonth();
// } catch (Exception $e) {
//     echo $e->getMessage;
// }