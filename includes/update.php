<?php 
require('../queries/employees_table.php');
$result = get_employees_view($_GET['id']);
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['btn-update'])) {
        update_employees($_POST['name'], $_POST['address'], $_POST['salary'], $_GET['id']);
        header('location: index.php');
    }
}
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
            <h1>Update Record</h1>
        </div>
    </div>
    <div class="main_update">
    <form action="" class="update" method="post">
            <div class="name">
                <label for="">Name</label>
                <input type="text" name="name" value="<?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo $row[$config_employees->getName()];
                    }
                }
                    mysqli_data_seek($result, 0);
                ?>">
            </div>
            <div class="address">
                <label for="">Address</label>
                <textarea name="address" id="" cols="30" rows="10" ><?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo $row[$config_employees->getAddress()];
                    }
                }
                    mysqli_data_seek($result, 0);
                ?></textarea>
            </div>
            <div class="salary">
                <label for="">Salary</label>
                <input type="text" name="salary" value="<?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo $row[$config_employees->getSalary()];
                    }
                }
                ?>">
            </div>
            <div class="btn-update">
                <button type="submit" class="submit" name="btn-update">Submit</button>
                <a href="index.php" class="cancel">Cancel</a>
            </div>
        </form>
    </div>
</body>

</html>