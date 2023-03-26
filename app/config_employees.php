<?php
class config_employees_table {
    private $json_data;
    private $mysqli_data;
    private $employees;

    function __construct()
    {
        $json_content = file_get_contents('../app/config.json');
        $this->json_data = json_decode($json_content, true);
        $this->mysqli_data = $this->json_data['mysqli_table'];  
        $this->employees = $this->mysqli_data['employees'];     
    }

    function getNameTable() {
        return array_keys($this->mysqli_data)[0];
    }

    function getId() {
        return $this->employees[0];
    }

    function getName() {
        return $this->employees[1];
    }

    function getAddress() {
        return $this->employees[2];
    }

    function getSalary() {
        return $this->employees[3];
    }
}