<?php 
require('../queries/employees_table.php');
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(isset($_POST['btn_delete_yes'])) {
            delete_employees($_GET['id']);
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
    <script src="https://kit.fontawesome.com/5029888a17.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="header">
        <div class="nav">
            <h1>Delete Record</h1>
        </div>
    </div>
    <div class="main_delete">
        <form action="" class="form_delete" method="post">
            <h4>Bạn có chắc chắn muốn xóa?</h4>
            <button type="submit" class="btn_delete_yes" name="btn_delete_yes">Yes</button>
            <a href="index.php" class="btn_delete_no">No</a>
        </form>
    </div>
</body>

</html>