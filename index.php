<?php

session_start();
    if(isset($_POST["submit"]))
    {
        $name = $_POST["name"];
        setcookie("name", $name, time()+3600);
        $surname = $_POST["surname"];
        $_SESSION["surname"] = $surname;
        header("Location: output.php");
        exit();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        form{
            border: 2px;
            border-style:solid;
            display: flex;
            flex-wrap: wrap;
            width:30%;
            justify-content: center;
        }
        form label{
            width: 20%;
            margin: 5px;
        }
        form input{
            width: 75%;
            margin: 5px;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InternetLab_4</title>
</head>
<body>
    <form action="index.php" method="POST">
        <label for ="name">Ім'я:</label>
        <input type = "text" id = "name" name = "name" placeholder="Your name..." required>
        <label for = "surname">Прізвище:</label>
        <input type = "text" id = "surname" name = "surname" placeholder="Your surname..." required>
        <input type="submit" name = "submit" value="Submit" style = "width: 25%;">
    </form>
</body>
</html>