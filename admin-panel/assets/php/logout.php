<?php
include "connection.php";
session_start();
$id = $_SESSION['AdminID'];
$psw = $_SESSION['Password'];
$name = $_SESSION['Name'];
$desig = $_SESSION['Desig'];
$numofapp = $_SESSION["loanapps"];
session_destroy();
header("Location: ../../index.html");
?>