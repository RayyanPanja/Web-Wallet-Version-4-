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

if(isset($ApplicationID)){
    if($Decision == "Reject"){

    }else{
        $FetchMain = "SELECT * FROM main WHERE `main`.`Account_number` = $Account;";
        $FetchMainResult = mysqli_query($con,$FetchMain);
        while ($data = mysqli_fetch_assoc($FetchMainResult)) {
            
        }
        
    }

}

?>