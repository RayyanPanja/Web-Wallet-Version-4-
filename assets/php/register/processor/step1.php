<?php
include "../../connection.php";

$name = $_POST['name'];
$date = $_POST['dateofbirth'];

if (isset($name)) {
    $AccountNumber = rand(0000, 99999);
    $newdate = date("Y-m-d", strtotime($date));
    $insert = "INSERT INTO `main` (`Account_number`, `Name`, `Date Of Birth`, `Loan_taken`, `Loan_requested`)
     VALUES ($AccountNumber,'$name','$newdate','No','No');";
    $insertresult = mysqli_query($con, $insert);
    if ($insert) {
        session_start();
        $_SESSION['Account'] = $AccountNumber;
        $_SESSION['Name'] = $name;
        if (isset($_SESSION['Account'])) {
            echo "<script>
            window.location.assign('../step2.php');
        </script>";
        }
    }
}
