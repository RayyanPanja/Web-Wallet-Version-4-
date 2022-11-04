<?php
include "connection.php";
$AccountNumber = 0;
$AccountNumber = $_POST['Accountnumber'];
$Password = $_POST['Password'];

function Login($account,$password,$name){
    session_start();
    $_SESSION['Account'] = $account;
    $_SESSION['Password'] = $password;
    $_SESSION['Name'] = $name;
}

$account;
$password;
$name;

$fetch = "SELECT * FROM main WHERE `main`.`Account_number` = $AccountNumber;";
$fetresult = mysqli_query($con, $fetch);

if (mysqli_num_rows($fetresult) > 0) {
    while ($data = mysqli_fetch_assoc($fetresult)) {
        $account = $data['Account_number'];
        $password = $data['Password'];
        $name = $data['Firstname'];
        $address = $data['Address'];
    }
}

if ($AccountNumber === $account) {
    if ($Password === $password) {
        Login($account,$password,$name);
        header("Location: ../../index.php");
    } else {
        echo "<script>alert('Password Incorrect ECODE-2');
        window.location.assign('../../index.html');
        </script>";
    }
} else {
    echo "<script>alert('Invalid Account Number ECODE-1');
    window.location.assign('../../index.html');
    </script>";
}
