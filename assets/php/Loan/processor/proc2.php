<?php
include "../../connection.php";
session_start();
$AccountNumber = $_SESSION['Account'];
$Name = $_SESSION['Name'];
// Temporary Session..
$ApplicationID = $_SESSION['tempid'];

$name = $_POST['name'];
$date = $_POST['dob'];
$newdate = date("Y-m-d", strtotime($date));

$fetcheddate;
$Fetch = "SELECT * FROM main WHERE `main`.`Account_number` = $AccountNumber;";
$FetchResult = mysqli_query($con, $Fetch);
while ($data = mysqli_fetch_assoc($FetchResult)) {
    $fetcheddate = $data["Date Of Birth"];
}


if (isset($name)) {
    if ($newdate == $fetcheddate) {
        $update = "UPDATE loan SET `Name` = '$name' WHERE `Application_ID` = $ApplicationID;";
        $updateresult = mysqli_query($con, $update);
        if ($updateresult) {
            header("Location: ../step3.php");
        }
    } else {
        header("Location: ../step2.php");
    }
}
