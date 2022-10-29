<?php
include "../../connection.php";
session_start();
$AccountNumber = $_SESSION['Account'];
$Name = $_SESSION['Name'];

$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
if (isset($password1)) {
    if($password1 == $password2){
        $Update = "UPDATE main SET `Password` = '$password1' WHERE `Account_number` = $AccountNumber;";
        $Result = mysqli_query($con, $Update);
        if ($Result) {
            echo "<script>
            window.location.assign('../step4.php');
            </script>";
        }
    }
}
