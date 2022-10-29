<?php
include "../../connection.php";
session_start();
$AccountNumber = $_SESSION['Account'];
$Name = $_SESSION['Name'];

$amount = $_POST['amount'];
if (isset($amount)) {
    $Update = "UPDATE main SET `Amount` = '$amount' WHERE `Account_number` = $AccountNumber;";
    $Result = mysqli_query($con, $Update);
    if ($Result) {
        echo "<script>
            window.location.assign('../show.php');
            </script>";
    }
}
