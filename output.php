<?php
session_start();

$name = "";
if(isset($_COOKIE["name"]))
{
    $name = $_COOKIE["name"];
}
$surname = "";
if(isset($_SESSION["surname"]))
{
    $surname = $_SESSION["surname"];
}
?>

<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <h1>Ім'я - <?php echo $name?></h1>
        <h1>Прізвище - <?php echo $surname?></h1>
    </body>
</html>