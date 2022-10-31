<?php
include "../../connection.php";
session_start();
$myacc = $_SESSION['Account'];
$Password = $_SESSION['Password'];
$Name = $_SESSION['Name'];

$name = $_POST['name'];
if(isset($name)){
    $update = "UPDATE main SET `Name` = '$name' WHERE `main`.`Account_number` = $myacc;";
    $result = mysqli_query($con,$update);
    if($result){
        $_SESSION['Name'] = $name;
        unset($name);
        header("Location: ../alter.php");
    }
}
?>