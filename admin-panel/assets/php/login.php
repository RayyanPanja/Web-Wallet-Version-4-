<?php
include "connection.php";

$AdminID = $_POST['adminid'];
$Password = $_POST['password'];

function Login($AdminID,$Password,$name,$desig){
    session_start();
    $_SESSION['AdminID'] = $AdminID;
    $_SESSION['Password'] = $Password;
    $_SESSION['Name'] = $name;
    $_SESSION['Desig'] = $desig;
}

$CheckerID;
$CheckerPassword;

$name;
$desig;

if (isset($AdminID)) {
    $FetchAdmin = "SELECT * FROM `admin` WHERE `Admin_ID` = $AdminID;";
    $FetchAdminResult = mysqli_query($con, $FetchAdmin);
    if (mysqli_num_rows($FetchAdminResult) > 0) {
        while ($data = mysqli_fetch_assoc($FetchAdminResult)) {
            $CheckerID = $data['Admin_ID'];
            $CheckerPassword = $data['Admin_Password'];
            $name = $data['Admin_Name'];
            $desig = $data['Designation'];
        }

        if ($Password == $CheckerPassword) {
            Login($AdminID,$Password,$name,$desig);
            header("Location: ../../index.php");
        } else {
            echo "<script>alert('Password Incorrect ECODE-2');
                window.location.assign('../../index.html');
                </script>";
        }
    } else {
        echo "<script>alert('Invalid Admin ID ECODE-1');
    window.location.assign('../../index.html');
    </script>";
    }
}
