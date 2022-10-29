<?php
include "../../connection.php";
session_start();
$AccountNumber = $_SESSION['Account'];
$Name = $_SESSION['Name'];

$email = $_POST['email'];
$contact = $_POST['contact'];

if (isset($email)) {
    $Update = "UPDATE main SET `Email` = '$email',`Contact` = $contact WHERE `Account_number` = $AccountNumber;";
    $Result = mysqli_query($con, $Update);
    if ($Result) {
        echo "<script>
            window.location.assign('../step3.php');
        </script>";
    }
}
?>