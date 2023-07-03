<?php

    session_start();
    include('../config/main.php');

    if ($_SESSION['role'] == '0') {

        header('Location: .././');
    }

?>

<!DOCTYPE html>
<html lang="ru ">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    ЧЧЕЕЛ ТЫ АДМИН? ДАШ АФТОГРАФ?
</body>
</html>
