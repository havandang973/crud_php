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
            <h1>Employees Details</h1>
            <a href="create.php" class="add">Add New Employee</a>
        </div>
    </div>
    <div class="main_home">
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Salary</th>
                <th>Action</th>
            </tr>

            <?php
            require('../queries/employees_table.php');
            $result = get_employees();
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo 
                    '<tr>
                        <td>' . $row[$config_employees->getId()] . '</td>
                        <td>' . $row[$config_employees->getName()] . '</td>
                        <td>' . $row[$config_employees->getAddress()] . '</td>
                        <td>' . $row[$config_employees->getSalary()] . '</td>
                        <td>
                            <a href="view.php?id='.$row[$config_employees->getId()].'" class="view" title="View Record"><i class="fa-solid fa-eye"></i></a>
                            <a href="update.php?id='.$row[$config_employees->getId()].'" class="pen" title="Update Record"><i class="fa-solid fa-pen"></i></a>
                            <a href="delete.php?id='.$row[$config_employees->getId()].'" class="trash" title="Delete Record"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>';
                }
            }
            ?>

        </table>
    </div>
</body>
</html>