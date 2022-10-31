<?php
include "../../connection.php";

$sirname = $_POST['sirname'];
$firstname = $_POST['firstname'];
$fathername = $_POST['fathername'];
$date = $_POST['dateofbirth'];

if (isset($firstname)) {
    $AccountNumber = rand(0000, 99999);
    $newdate = date("Y-m-d", strtotime($date));
    $insert = "INSERT INTO `main` (`Account_number`, `Sirname`,`Firstname`,`Fathername`, `Date Of Birth`, `Loan_taken`, `Loan_requested`)
     VALUES ($AccountNumber,'$sirname','$firstname','$fathername','$newdate','No','No');";
    $insertresult = mysqli_query($con, $insert);
    if ($insert) {
        session_start();
        $_SESSION['Account'] = $AccountNumber;
        $_SESSION['Name'] = $firstname;
        if (isset($_SESSION['Account'])) {
            echo "<script>
            window.location.assign('../step2.php');
        </script>";
        }
    }
}
