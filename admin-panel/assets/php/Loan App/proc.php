<?php
include "../connection.php";
session_start();
$id = $_SESSION['AdminID'];
$psw = $_SESSION['Password'];
$name = $_SESSION['Name'];
$desig = $_SESSION['Desig'];

$ApplicationID = $_POST['appid'];
$Account = $_POST['accno'];
$Decision = $_POST['decision'];

$PackageID;
$Users;
$Max_Users;
$Amount;
$LoanAmount;

$FetchLoan = "SELECT * FROM loan WHERE `Application_ID` = $ApplicationID;";
$floanresult = mysqli_query($con, $FetchLoan);
while ($data = mysqli_fetch_assoc($floanresult)) {
    $PackageID = $data['Package_ID'];
}
$FetchScheme = "SELECT * FROM schemes WHERE `Scheme_ID` = $PackageID;";
$fschemeresult = mysqli_query($con, $FetchScheme);
while ($data = mysqli_fetch_assoc($fschemeresult)) {
    $LoanAmount = $data['Package'];
    $Users = $data['Users_Using'];
    $Max_Users = $data['Max_Users'];
}
$FetchMain = "SELECT * FROM main WHERE `Account_number` = $Account;";
$fmainresult = mysqli_query($con, $FetchMain);
while ($data = mysqli_fetch_assoc($fmainresult)) {
    $Amount = $data['Amount'];
}


if (isset($ApplicationID)) {
    if ($Users <= $Max_Users) {
        if ($Decision == "Reject") {
            $UpdateLoan = "UPDATE loan SET `Decision` = '$Decision' WHERE `Application_ID` = $ApplicationID;";
            $uloanresult = mysqli_query($con, $UpdateLoan);
            if ($uloanresult) {
                $UpdateMain = "UPDATE main SET `Loan_requested` = 'No' WHERE `Account_number` = $Account; ";
                $umainresult = mysqli_query($con, $UpdateMain);
                if ($umainresult) {
                    header("Location: ui.php");
                }
            }
        } else {
            $updatedamount = $Amount + $LoanAmount;
            $UpdateMain = "UPDATE main SET `Amount` = $updatedamount , `Loan_taken` = 'Yes' WHERE `Account_number` = $Account; ";
            $umainresult = mysqli_query($con, $UpdateMain);
            if ($umainresult) {
                $UpdateLoan = "UPDATE loan SET `Decision` = '$Decision' WHERE `Application_ID` = $ApplicationID;";
                $uloanresult = mysqli_query($con, $UpdateLoan);
                if ($uloanresult) {
                    $inc = $Users + 1;
                    $UpdateSchemes = "UPDATE schemes SET `Users_Using` = $inc WHERE `Scheme_ID` = $PackageID;";
                    $uschemeresult = mysqli_query($con, $UpdateSchemes);
                    if ($uschemeresult) {
                        header("Location: ui.php");
                    }
                }
            }
        }
    } else {
        echo "<script>alert('Maximum Users For this Package');window.location.assign('ui.php');</script>";
    }
}
