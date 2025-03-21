<?php
    include('connect.php');

    if(isset($_POST['edit'])){
        $EdId = $_POST['edId'];
        $EdName = $_POST['edName'];
        $EdAge = $_POST['edAge'];
        $EdAddress = $_POST['edAddress'];
    }

    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $address = $_POST['address'];

        $update = "UPDATE crud_table SET NAME = '$name', AGE=$age, ADDRESS='$address' WHERE ID=$id";
        $sqlUp = mysqli_query($connect, $update);

        echo "<script>alert('Data Updated')</script>";
        echo "<script>window.location.href='index.php'</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Form</title>
    <style>
        body {
            background-color: #1a1a2e;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .updateBTN {
            background: linear-gradient(45deg, #0f3460, #16213e);
            border-radius: 15px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.5);
            padding: 30px;
            width: 350px;
            text-align: center;
            border: solid 3px #00a8cc;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        label {
            color: white;
            font-size: 16px;
            font-weight: bold;
        }

        input {
            background-color: transparent;
            border: solid 2px #00a8cc;
            border-radius: 10px;
            height: 40px;
            color: white;
            font-size: 16px;
            width: 100%;
            padding: 5px;
            outline: none;
        }

        .update {
            background: #28a745;
            font-weight: bold;
            font-size: 16px;
            border: none;
            width: 100%;
            padding: 10px;
            color: white;
            cursor: pointer;
            border-radius: 7px;
            transition: 0.3s;
        }

        .update:hover {
            background: #218838;
        }

        .back {
            display: inline-block;
            text-decoration: none;
            background-color: #ff5733;
            padding: 8px 15px;
            border-radius: 7px;
            font-size: 16px;
            font-weight: bold;
            color: white;
            transition: 0.3s;
            margin-top: 10px;
        }

        .back:hover {
            background-color: #d43f00;
        }
    </style>    
</head>
<body>
    <div class="updateBTN">
        <a class="back" href="index.php">Back</a>
        <form action="update.php" method="post">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="<?= $EdName ?>" required>

            <label for="age">AGE</label>
            <input type="number" name="age" id="age" value="<?= $EdAge ?>" required>

            <label for="address">Address</label>
            <input type="text" name="address" id="address" value="<?= $EdAddress ?>" required>

            <input type="hidden" name="id" id="id" value="<?= $EdId ?>">

            <input class="update" type="submit" name="submit" value="Update">
        </form>
    </div>
</body>
</html>
