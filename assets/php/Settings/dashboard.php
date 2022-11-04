<?php
include "../connection.php";
session_start();
$myacc = $_SESSION['Account'];
$Password = $_SESSION['Password'];
$Name = $_SESSION['Name'];

$FetchMain = "SELECT * FROM main WHERE `main`.`Account_number` = $myacc;";
$FetchMainResult = mysqli_query($con, $FetchMain);
while ($data = mysqli_fetch_assoc($FetchMainResult)) {
    $myamount = $data['Amount'];
    $email = $data['Email'];
}

$first = date('Y-m-01');
$last = date('Y-m-31');
$spent = 0;
$earn = 0;

$Fetch2 = "SELECT * FROM `transaction` WHERE `From_Acc` = $myacc AND `Date` BETWEEN '$first' AND '$last' AND `To_Acc` != $myacc;";
$result = mysqli_query($con, $Fetch2);
while ($data = mysqli_fetch_assoc($result)) {
    $spent += $data['Amount'];
}

$Fetch3 = "SELECT * FROM `transaction` WHERE `To_Acc` = $myacc AND `Date` BETWEEN '$first' and '$last' AND `From_Acc` != $myacc;";
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
            <a href="dashboard.php" class="side-link active">
                <span class=" icon fa fa-gear active"></span> <span class="link">Dashboard</span>
            </a>
            <a href="alter.php" class="side-link">
                <span class=" icon fa fa-gear"></span> <span class="link">Change/Track</span>
            </a>
        </div>

        <div class="user-detail">
            <i class="fa fa-user"></i>
            <div class="username"><?php echo $Name; ?> </div>
        </div>
    </nav>

    <main id="dashboard">
        <section class="top-sec">
            <div class="hello">
                <h1>Dashboard</h1>
                <p>Welcome Back!! <?php echo $Name ?></p>
            </div>
            <form class="color-picker">
                <fieldset>
                    <legend>Select Theme</legend>
                    <div>
                        <label for="light">Light</label>
                        <input type="radio" name="theme" id="light">
                    </div>
                    <div>
                        <label for="dark">Dark</label>
                        <input type="radio" name="theme" id="dark">
                    </div>
                </fieldset>
            </form>
        </section>
        <section class="content">

            <div class="spent-card">
                <h2>Money Spent This Month</h2>
                <h3 class="amount spent"><?php echo $spent; ?>/-</h3>
                <?php
                if ($spent > 1000) { ?>
                    <p class="alert">You Used Quite A Lot This Month!!</p>
                <?php }
                ?>
            </div>
            <div class="spent-card">
                <h2>Money Earned This Month</h2>
                <h3 class="amount earn"><?php echo $earn; ?>/-</h3>
                <?php
                if ($earn > 1000) { ?>
                    <p class="alert">Keep It Up!!</p>
                <?php }
                ?>


            </div>
            <div class="expense-card">
                <h1>Expense</h1>
                <table>
                    <tr style="border: 2px solid black;">
                        <th style="border: 2px solid black;text-align:center;">Receiver</th>
                        <th style="border: 2px solid black;text-align:center;">Receipt ID</th>
                        <th style="border: 2px solid black;text-align:center;">Amount</th>
                    </tr>

                    <?php
                    $Fetch4 = "SELECT * FROM `transaction` WHERE `From_Acc` = $myacc AND `Date` BETWEEN '$first' and '$last' AND `To_Acc` != $myacc ORDER BY `Time` DESC;";
                    $result4 = mysqli_query($con, $Fetch4);
                    if (mysqli_num_rows($result4) > 0) {
                        while ($data = mysqli_fetch_assoc($result4)) { ?>
                            <tr>
                                <th><?php echo $data['Receiver']; ?></th>
                                <td><?php echo $data['Receipt_No']; ?></td>
                                <td><?php echo $data['Amount']; ?>/-</td>
                            </tr>
                        <?php }
                    } else { ?>
                        <h1>No Expense</h1>
                    <?php } ?>
                </table>
            </div>

            <div class="expense-card">
                <h1>Earnings</h1>
                <table>
                    <tr style="border: 2px solid black;">
                        <th style="border: 2px solid black;text-align:center;">Sender</th>
                        <th style="border: 2px solid black;text-align:center;">Receipt ID</th>
                        <th style="border: 2px solid black;text-align:center;">Amount</th>
                    </tr>

                    <?php
                    $Fetch5 = "SELECT * FROM `transaction` WHERE `To_Acc` = $myacc AND `Date` BETWEEN '$first' and '$last' AND `From_Acc` != $myacc ORDER BY `Time` DESC;";
                    $result5 = mysqli_query($con, $Fetch5);
                    if (mysqli_num_rows($result5)) {
                        while ($data = mysqli_fetch_assoc($result5)) { ?>
                            <tr>
                                <th><?php echo $data['Sender']; ?></th>
                                <td><?php echo $data['Receipt_No']; ?></td>
                                <td><?php echo $data['Amount']; ?>/-</td>
                            </tr>
                        <?php }
                    } else {  ?>
                        <h1>No Earnings</h1>
                    <?php } ?>
                </table>
            </div>

            <div class="change">
                <h1>Change Settings</h1>
                <a href="alter.php">
                    <i class="fa fa-gear rotate"></i>
                </a>
            </div>

        </section>




    </main>
</body>

<script src="../../js/main.js"></script>
<script src="../../js/theme.js"></script>
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