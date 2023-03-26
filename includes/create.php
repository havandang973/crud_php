<?php
    require_once('../queries/employees_table.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(isset($_POST['btn_create'])) {
            insert_employees($_POST['name'], $_POST['address'], $_POST['salary']);
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
            <h1>Create Record</h1>
        </div>
    </div>
    <div class="main_create">
    <form action="" class="create" method="post">
            <div class="name">
                <label for="">Name</label>
                <input type="text" name="name">
            </div>
            <div class="address">
                <label for="">Address</label>
                <textarea name="address" id="" cols="30" rows="10" ></textarea>
            </div>
            <div class="salary">
                <label for="">Salary</label>
                <input type="text" name="salary">
            </div>
            <div class="btn-create">
                <button type="submit" class="submit" name="btn_create">Submit</button>
                <a href="index.php" class="cancel">Cancel</a>
            </div>
        </form>
    </div>
</body>

</html>