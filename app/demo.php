<?php
$json_content = file_get_contents('../app/config.json');
$json_data = json_decode($json_content, true);
$mysqli_data = $json_data['mysqli_table'];  
// $employees = $mysqli_data['employees']; 

echo array_keys($mysqli_data)[0] ;
?>