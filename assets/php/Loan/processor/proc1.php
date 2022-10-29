<?php
include "../../connection.php";
session_start();
$AccountNumber = $_SESSION['Account'];
$Password = $_SESSION['Password'];
$Name = $_SESSION['Name'];
$flag;

$Fetch = "SELECT * FROM main WHERE `main`.`Account_number` = $AccountNumber;";
$result = mysqli_query($con,$Fetch);
while($data = mysqli_fetch_assoc($result)){
        $flag = $data['Loan_requested'];
}


if($flag == "No"){
    $account = $_POST['accountnumber'];
    $password = $_POST['password'];
    
    if (isset($account)) {
        if (($AccountNumber == $account) && ($Password == $password)) {
            
        $ApplicationID = rand(00000,9999999);

        $insert = "INSERT INTO `loan` (`Application_ID`,`Account_number`,`Decision`,`Date_Loan_Req`)
         VALUES  ($ApplicationID, $AccountNumber,'Pending',Current_TimeStamp());";
        $insertResult = mysqli_query($con, $insert);
        if ($insertResult) {
            // Temporary Session..
            $_SESSION['tempid'] = $ApplicationID;
            header("Location: ../step2.php");
        }
    }
}
}else{
  echo "<script>alert('Loan Already Requested From This Account');window.location.assign('../step1.php')</script>";
}
?>
