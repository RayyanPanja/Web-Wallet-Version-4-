<?php
include "../connection.php";
session_start();
$ApplicationID = $_SESSION['tempid'];

$delete = "DELETE from Loan WHERE `Application_ID` = $ApplicationID;";
$result = mysqli_query($con,$delete);

if($result){
    unset($_SESSION['tempid']);
    header("Location: step1.php");
}

?>