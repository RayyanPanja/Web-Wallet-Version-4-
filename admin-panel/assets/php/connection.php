<?php
$server = "localhost";
$user = "root";
$psw = "";
$db = "wallet";

$con = mysqli_connect($server,$user,$psw,$db);
if(!$con){
    die("Connection Error".mysqli_connect_error());
}
?>