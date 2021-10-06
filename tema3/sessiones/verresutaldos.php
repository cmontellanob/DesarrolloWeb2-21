<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php session_start(); ?>
    <ul>
        <li>PHP:<?php echo (isset($_SESSION['PHP']))?$_SESSION['PHP']:0;?></li>
        <li>JAVA:<?php echo (isset($_SESSION['JAVA']))?$_SESSION['JAVA']:0;?></li>
        <li>C#:<?php echo (isset($_SESSION['C#']))?$_SESSION['C#']:0;?></li>
        <li>PYTHON:<?php echo (isset($_SESSION['PYTHON']))?$_SESSION['PYTHON']:0;?></li>
        <li>JAVASCRIPT:<?php echo (isset($_SESSION['JAVASCRIPT']))?$_SESSION['JAVASCRIPT']:0;?></li>
    </ul>
</body>
</html>