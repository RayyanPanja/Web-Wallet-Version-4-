<?php
include "../connection.php";
session_start();
$_SESSION['Account'];
$_SESSION['Name'];
session_destroy();
echo "<script> window.location.assign('../../../index.html'); </script>";
