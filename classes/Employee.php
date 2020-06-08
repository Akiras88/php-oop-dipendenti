<?php
/****************************************************************
 * Create and model classes to manage employees of a company.   *
 * Enter at least one example of using exceptions               *
 ***************************************************************/

class Employee {
    public freshman;
    public occupation;
    public year_employment;
    public branch;
    public sector;
    public function __construct($_freshman, $_occupation, $_year_employment, $_branch, $_sector) {
        $this->occupation = $_occupation;
        $this->occupation= $_occupation;
        $this->year_employment= $_year_employment;
        $this->branch= $_branch;
        $this->sector= $_sector;
    }
}
