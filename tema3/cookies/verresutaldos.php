<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>PHP:<?php echo (isset($_COOKIE['PHP']))?$_COOKIE['PHP']:0;?></li>
        <li>JAVA:<?php echo (isset($_COOKIE['JAVA']))?$_COOKIE['JAVA']:0;?></li>
        <li>C#:<?php echo (isset($_COOKIE['C#']))?$_COOKIE['C#']:0;?></li>
        <li>PYTHON:<?php echo (isset($_COOKIE['PYTHON']))?$_COOKIE['PYTHON']:0;?></li>
        <li>JAVASCRIPT:<?php echo (isset($_COOKIE['JAVASCRIPT']))?$_COOKIE['JAVASCRIPT']:0;?></li>
    </ul>
</body>
</html>