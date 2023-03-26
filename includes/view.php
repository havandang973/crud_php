<?php 
require('../queries/employees_table.php');
$result = get_employees_view($_GET['id']); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../font/index.css">
</head>

<body>
    <div class="header">
        <div class="nav">
            <h1>View Record</h1>
        </div>
    </div>
    <div class="main_view">
        <form action="" class="form_view" method="post">
            <div class="name">
                <label for="">Name</label>
                <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<p name='name'>".$row[$config_employees->getName()]."</p>";
                    }
                }
                    mysqli_data_seek($result, 0);
                ?>
            </div>
            <div class="address">
                <label for="">Address</label>
                <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<p name='address'>".$row[$config_employees->getAddress()]."</p>";
                    }
                }
                    mysqli_data_seek($result, 0);
                ?>
            </div>
            <div class="salary">
                <label for="">Salary</label>
                <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<p name='salary'>".$row[$config_employees->getSalary()]."</p>";
                    }
                }
                ?>
            </div>
            <div class="btn-view">
                <a href="index.php" class="back">Back</a>
            </div>
        </form>
    </div>
</body>

</html>