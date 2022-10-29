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
            <span class=" icon fa fa-gear active"></span> <span class="link">Change Settings</span>
        </a>
    </div>

    <div class="user-detail">
        <i class="fa fa-user"></i>
        <div class="username">
            <?php echo $Name; ?>
        </div>
    </div>
</nav>

<dialog class="change-box" id="name-box">
    <h1>Change Name</h1>
    <form action="" method="post">
        <div class="row">
            <div class="col-lab">
                <label for="name">Name</label>
            </div>
            <div class="col-inp">
                <input type="text" name="name" id="name" placeholder="Name..." class="input">
            </div>
            <div class="box-btn-pos">
                <button type="submit" class="box-btn">Set</button>
            </div>
        </div>
    </form>

</dialog>


<main id="dashboard">
    <section class="top-sec">
        <div class="hello">
            <h1>Change Settings</h1>
            <p>Welcome Back!! <?php echo $new[0] . $new[1]; ?></p>
        </div>
    </section>

    <section class="panel">
        <div class="grid-3">
            <div class="btn-holder">
                <button class="dope-btn" id="toggle-name-btn">Change Name</button>
            </div>
            <div class="btn-holder">
                <button class="dope-btn" id="toggle-email-btn">Change Email</button>
            </div>
            <div class="btn-holder">
                <button class="dope-btn" id="toggle-contact-btn">Change Contact</button>
            </div>
            <div class="btn-holder">
                <button class="dope-btn" id="toggle-contact-btn">Change Contact</button>
            </div>
            <div class="btn-holder">
                <button class="dope-btn" id="toggle-contact-btn">Change Password</button>
            </div>

        </div>

    </section>
</main>
</body>

<script src="../../js/main.js"></script>
<script src="../../js/setting.js"></script>

</html>