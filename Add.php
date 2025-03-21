<?php
    include('connect.php');

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $age = $_POST['age'];
        $address = $_POST['address'];

        $insert = "INSERT INTO crud_table VALUES (NULL, '$name', $age, '$address')";
        $insertSQL = mysqli_query($connect, $insert);

        echo "<script>alert('Data Added')</script>";
        echo "<script>window.location.href='index.php'</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
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

        .addBTN {
            background: linear-gradient(45deg, #16213e, #0f3460);
            border-radius: 15px;
            border: solid 3px #00a8cc;
            padding: 30px;
            width: 350px;
            text-align: center;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.5);
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            color: #eaeaea;
            font-size: 1rem;
            font-weight: bold;
            text-align: left;
        }

        input {
            background-color: transparent;
            border: solid 2px #00a8cc;
            border-radius: 7px;
            height: 35px;
            color: #eaeaea;
            padding: 5px;
            font-size: 1rem;
            width: 100%;
        }

        input::placeholder {
            color: #b0b0b0;
        }

        .sub {
            background: #008CBA;
            font-weight: bold;
            font-size: 16px;
            border: none;
            padding: 10px;
            color: white;
            border-radius: 7px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .sub:hover {
            background: #00a8cc;
        }

        .back {
            display: inline-block;
            border-radius: 7px;
            border: solid 2px white;
            background-color: #16213e;
            text-decoration: none;
            padding: 8px 15px;
            font-size: 14px;
            font-weight: bold;
            color: white;
            transition: background 0.3s;
        }

        .back:hover {
            background-color: #0f3460;
        }
    </style>
</head>
<body>
    <div class="addBTN">
        <a class="back" href="index.php">Back</a>
        <form action="add.php" method="post">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Enter your name" required>

            <label for="age">Age</label>
            <input type="number" name="age" id="age" placeholder="Enter your age" required>

            <label for="address">Address</label>
            <input type="text" name="address" id="address" placeholder="Enter your address" required>

            <input class="sub" type="submit" name="submit" value="Submit">
        </form>
    </div>
</body>
</html>
