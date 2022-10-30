<?php
include "../connection.php";
session_start();
$myacc = $_SESSION['Account'];
$Password = $_SESSION['Password'];
$Name = $_SESSION['Name'];

$words = str_word_count($Name);
$new = str_split($Name, $words + $words);
$myamount;
$email;

$FetchMain = "SELECT * FROM main WHERE `main`.`Account_number` = $myacc;";
$FetchMainResult = mysqli_query($con, $FetchMain);
while ($data = mysqli_fetch_assoc($FetchMainResult)) {
    $myamount = $data['Amount'];
    $email = $data['Email'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Wallet</title>
    <!-- Clash Display Fonts  -->
    <link href="http://fonts.cdnfonts.com/css/clash-display" rel="stylesheet">

    <!-- Icon Library -->
    <link rel="stylesheet" href="../../icons/fontawesome-free-6.1.2-web/fontawesome-free-6.1.2-web/css/all.min.css">

    <!-- Css -->
    <link rel="stylesheet" href="../../css/root.css">
    <link rel="stylesheet" href="../../css/media.css">
    <link rel="stylesheet" href="../../css/settings.css">

</head>

<nav class="side-nav">
    <div class="nav-head">
        <h1> <span class="fa fa-bank"></span><span>Web Wallet</span></h1>
    </div>
    <div class="link-set">
        <a href="../../../index.php" class="side-link">
            <span class=" icon fa fa-home"></span> <span class="link">Home</span>
        </a>
        <a href="../transfer/transfer.php" class="side-link">
            <span class=" icon fa fa-money-bill-transfer"></span> <span class="link">Transfer</span>
        </a>
        <a href="../Balance/balance.php" class="side-link">
            <span class=" icon fa fa-cash-register"></span> <span class="link">Balance</span>
        </a>
        <a href="../Loan/step1.php" class="side-link">
            <span class=" icon fa fa-dollar"></span> <span class="link">Loan</span>
        </a>
        <a href="dashboard.php" class="side-link">
            <span class=" icon fa fa-gear"></span> <span class="link">Settings</span>
        </a>
        <a href="alter.php" class="side-link active">
            <span class=" icon fa fa-gear active"></span> <span class="link">Change/Track</span>
        </a>
    </div>

    <div class="user-detail">
        <i class="fa fa-user"></i>
        <div class="username">
            <?php echo $Name; ?>
        </div>
    </div>
</nav>

<main>
    <h1>Message Review Progress</h1>
</main>

</body>
<script src="../../js/setting.js"></script>

</html>