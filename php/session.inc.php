<?php
session_start();
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link rel="stylesheet" href="../css/style2.css">
    <link rel="shortcut icon" type="x-icon" href="../img/icon.png">
</head>

<body>
    <?php
    require 'config.php';


    if (!isset($_SESSION['username'])) {
        header("location: login.php");
        exit;
    }
    ?>
</body>

</html>

</html>