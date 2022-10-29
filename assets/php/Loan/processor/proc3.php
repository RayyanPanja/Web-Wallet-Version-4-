<?php
include "../../connection.php";
session_start();
$AccountNumber = $_SESSION['Account'];
$Name = $_SESSION['Name'];
// Temporary Session..
$ApplicationID = $_SESSION['tempid'];

$Address = $_POST['address'];
$contact = $_POST['contact'];

if(isset($Address)){
    $Update = "UPDATE loan SET `Address` = '$Address' , `Contact` = $contact WHERE `Application_ID` = $ApplicationID;";
    $result = mysqli_query($con,$Update);
    if($result){
        header("Location: ../step4.php");
    }
}
