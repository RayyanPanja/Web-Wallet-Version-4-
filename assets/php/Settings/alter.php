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

$first = date('Y-m-01');
$last = date('Y-m-30');
$spent = 0;
$earn = 0;

$Fetch2 = "SELECT * FROM `transaction` WHERE `From_Acc` = $myacc AND `Date` BETWEEN '$first' and '$last';";
$result = mysqli_query($con, $Fetch2);
while ($data = mysqli_fetch_assoc($result)) {
    $spent += $data['Amount'];
}

$Fetch3 = "SELECT * FROM `transaction` WHERE `To_Acc` = $myacc AND `Date` BETWEEN '$first' and '$last';";
$result3 = mysqli_query($con, $Fetch3);
while ($data = mysqli_fetch_assoc($result3)) {
    $earn += $data['Amount'];
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

<body id="Home">
    <dialog id="logoutform">
        <div class="login-form">
            <h1>Are You Sure?? You Want to Log Out</h1>
            <form action="../logout.php" method="post">
                <div class="login-btn-set">
                    <button type="reset" id="CloseLogout" class="btn submit">Cancle</button>
                    <button type="submit" class="btn cancle">Logout</button>
                </div>
            </form>
        </div>
    </dialog>

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
                    <button class="dope-btn" id="toggle-name-btn" >Change Name</button>
                </div>
                <div class="btn-holder">
                    <button class="dope-btn" id="toggle-email-btn" >Change Email</button>
                </div>
                <div class="btn-holder">
                    <button class="dope-btn" id="toggle-contact-btn" >Change Contact</button>
                </div>

            </div>

        </section>

    </main>
</body>

<script src="../../js/main.js"></script>
<script>
    // Logout Form Popup
    const LogoutBtn = document.querySelector('#logout-btn');
    const LogoutBtn2 = document.querySelector('#side-logout-btn');
    const LogoutForm = document.querySelector('#logoutform');
    const LogoutCloseBtn = document.querySelector('#CloseLogout');

    LogoutBtn.addEventListener('click', () => {
        console.log("ASDA");
        LogoutForm.showModal();
    });
    LogoutBtn2.addEventListener('click', () => {
        console.log("ASDA");
        LogoutForm.showModal();
    });
    LogoutCloseBtn.addEventListener('click', () => {
        LogoutForm.close();
    });

    window.addEventListener('dblclick', () => {
        SideNav.close();
        LoginForm.close();
    });
</script>


</html>