<?php
include "connection.php";
    session_start();
        $_SESSION['Account'];
        $_SESSION['Password'];
        $_SESSION['Name'];
    session_destroy();

clearstatcache();
echo "<script> window.location.assign('../../index.html'); </script>";
mysqli_close($con);
?>