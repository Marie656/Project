<?php
    include('connect.php');
    include('delete.php');

    $select = "SELECT * FROM crud_table";
    $sqlSelect = mysqli_query($connect, $select);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <style>
        body {
            background-color: #1a1a2e;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            color: white;
        }

        .container {
            text-align: center;
            width: 80%;
            max-width: 800px;
            padding: 20px;
            border-radius: 15px;
            background: #0f3460;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.5);
        }

        h1 {
            color: white;
            background: #16213e;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
            font-size: 28px;
            text-transform: uppercase;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #f5f5f5;
            color: black;
            border-radius: 10px;
            overflow: hidden;
        }

        th, td {
            border: 2px solid #00a8cc;
            font-size: 18px;
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #00a8cc;
            color: white;
        }

        .btn {
            font-size: 18px;
            cursor: pointer;
            border: none;
            padding: 8px 15px;
            border-radius: 6px;
            font-weight: bold;
            transition: 0.3s;
        }

        .edit {
            background-color: #28a745;
            color: white;
        }

        .edit:hover {
            background-color: #218838;
        }

        .delete {
            background-color: #dc3545;
            color: white;
        }

        .delete:hover {
            background-color: #c82333;
        }

        .add-btn {
            display: inline-block;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 5px;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 20px;
            transition: 0.3s;
        }

        .add-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <a class="add-btn" href="add.php"> ADD+ </a>
        <h1>BUAGAS CRUD TABLE</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Address</th>
                <th colspan="2">Action</th>
            </tr>

            <?php foreach ($sqlSelect as $value) { ?>
                <tr>
                    <td><?php echo $value['ID'] ?></td>
                    <td><?php echo $value['NAME'] ?></td>
                    <td><?php echo $value['AGE'] ?></td>
                    <td><?php echo $value['ADDRESS'] ?></td>
                    <td>
                        <form action="update.php" method="post">
                            <input class="btn edit" type="submit" value="Edit" name="edit">
                            <input type="hidden" name="edId" value="<?= $value['ID'] ?>">
                            <input type="hidden" name="edName" value="<?= $value['NAME'] ?>">
                            <input type="hidden" name="edAge" value="<?= $value['AGE'] ?>">
                            <input type="hidden" name="edAddress" value="<?= $value['ADDRESS'] ?>">
                        </form>
                    </td>
                    <td>
                        <form action="delete.php" method="post">
                            <input type="hidden" name="delID" value="<?= $value['ID'] ?>">
                            <input class="btn delete" type="submit" value="Delete" name="delete">
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>
