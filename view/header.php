<?php session_start(); ?>
<?php include 'model/database.php' ?>
<?php
if($_SERVER["HTTPS"] != "on")
{
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">

<title>Euro 2021</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="../bootstrap/css/bootstrap-grid.css">
<link rel="stylesheet" href="../bootstrap/css/bootstrap-reboot.css">



<link rel="stylesheet" href="main.css">
<!--<script src=""></script> -->

<body>

