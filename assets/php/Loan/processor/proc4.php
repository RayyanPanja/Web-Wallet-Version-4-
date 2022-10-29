<?php
include "../../connection.php";
session_start();
$AccountNumber = $_SESSION['Account'];
$Password = $_SESSION['Password'];
$Name = $_SESSION['Name'];

// TEMP SESSION
$ApplicationID = $_SESSION['tempid'];

$key = $_POST['key'];

$Scheme_Name;
$Scheme_Sponsor;
$Scheme_Amount;
$Scheme_Status;
$Scheme_ID;
$Scheme_Users;
$Scheme_Max_Users;

$FetchS = "SELECT * FROM schemes WHERE `schemes`.`Scheme_ID` = $key;";
$FetchSR = mysqli_query($con, $FetchS);

if (mysqli_num_rows($FetchSR) > 0) {
    while ($data = mysqli_fetch_assoc($FetchSR)) {
        $Scheme_Name = $data['Scheme_Name'];
        $Scheme_Sponsor = $data['Sponsor'];
        $Scheme_Amount = $data['Package'];
        $Scheme_Status = $data['Status'];
        $Scheme_ID = $data['Scheme_ID'];
        $Scheme_Users = $data['Users_Using'];
        $Scheme_Max_Users = $data['Max_Users'];
    }
} else {
    echo "<script>alert('Invalid Package Key-05');window.location.assign('../step4.php')</script>";
}

if ($Scheme_Users >= $Scheme_Max_Users) {
    echo "<script>alert('Maximum User Limit Reached- ECODE-06');window.location.assign('../step4.php')</script>";
}

$UpdateLoan = "UPDATE `loan` SET `Debt` = '$Scheme_Amount', `Package_ID` = '$key', `Package_Name` = '$Scheme_Name', `Package_Amount` = '$Scheme_Amount' WHERE `loan`.`Application_ID` = $ApplicationID;";
$UpdateLoanResult = mysqli_query($con, $UpdateLoan);
if ($UpdateLoanResult) {
    $Scheme_Users += 1;
    $UpdateScheme = "UPDATE `schemes` SET `Users_Using` = $Scheme_Users WHERE `schemes`.`Scheme_ID` = $key;";
    $UpdateSchemeResult = mysqli_query($con, $UpdateScheme);
    if ($UpdateSchemeResult) {
        $UpdateMain = "UPDATE main SET `Loan_requested` = 'Yes' WHERE `Account_number` = $AccountNumber; ";
        $UpdateMainResult = mysqli_query($con, $UpdateMain);
        if ($UpdateMainResult) {
            header("Location: ../result.php");
        }
    }
}
