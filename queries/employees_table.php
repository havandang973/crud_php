<?php
require_once('../db/mysqli_connect.php');
require_once('../app/config_employees.php');
$config_employees = new config_employees_table();

function get_employees() {
    global $conn, $config_employees;
    $sql = "
        SELECT *
        FROM " . $config_employees->getNameTable() ."
    ";

    $result = mysqli_query($conn, $sql);
    return $result;
}

function insert_employees($name, $address, $salary) {
    global $conn, $config_employees;
    $sql = "
        INSERT INTO ". $config_employees->getNameTable() ."(".$config_employees->getName().",".$config_employees->getAddress().",".$config_employees->getSalary().")
        VALUES ('$name', '$address', '$salary')
    ";

    $result = mysqli_query($conn, $sql);
    return $result;
}

function delete_employees($id) {
    global $conn, $config_employees;
    $sql = "
    DELETE 
    FROM " . $config_employees->getNameTable() ."
    WHERE ". $config_employees->getId()."= '$id'
    ";

    $result = mysqli_query($conn, $sql);
    return $result;
}

function get_employees_view($id) {
    global $conn, $config_employees;
    $sql = "
    SELECT *
    FROM " . $config_employees->getNameTable() ."
    WHERE ". $config_employees->getId()."= '$id'
    ";

    $result = mysqli_query($conn, $sql);
    return $result;
}

function update_employees($name, $address, $salary, $id) {
    global $conn, $config_employees;
    $sql = "
    UPDATE ".$config_employees->getNameTable()."
    SET ". $config_employees->getName()." = '$name', ". $config_employees->getAddress()." = '$address', ".$config_employees->getSalary()." = '$salary'
    WHERE ". $config_employees->getId(). " = '$id'
    ";

    $result = mysqli_query($conn, $sql);
    return $result;
}