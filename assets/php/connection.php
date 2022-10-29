<?php
$server = "localhost";
$user = "root";
$psw = "";
$database = "wallet";

$con = mysqli_connect($server,$user,$psw,$database);
if(!$con){
    die("ERROR");
}
