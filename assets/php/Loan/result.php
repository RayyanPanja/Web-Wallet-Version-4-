<?php
include "../connection.php";
session_start();
$AccountNumber = $_SESSION['Account'];
$Password = $_SESSION['Password'];
$Name = $_SESSION['Name'];
// Temporary Session..
$ApplicationID = $_SESSION['tempid'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Wallet</title>
    <!-- Icon Library -->
    <link rel="stylesheet" href="../../icons/fontawesome-free-6.1.2-web/fontawesome-free-6.1.2-web/css/all.min.css">

    <!-- Css -->
    <link rel="stylesheet" href="../../css/root.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/navbar.css">
    <link rel="stylesheet" href="../../css/form.css">
    <link rel="stylesheet" href="../../css/media.css">

</head>

<body id="Home">
    <button id="topbtn" class="up-btn"><i class="fa fa-arrow-up"></i></button>
    <nav class="navbar" id="navbar">
        <div class="nav-logo">
            <h1>Web Wallet</h1>
        </div>
        <a href="../../../index.php #Home" class="link">Home</a>
        <a href="../../../index.php #About" class="link">About Us</a>
        <a href="../../../index.php #Service" class="link">Services</a>
        <a href="../transfer/transfer.php" class="link">Transfer</a>
        <a href="step1.php" class="link">Apply For Loan</a>
        <a href="../Balance/balance.php" class="link">Balance</a>
        <a href="../Settings/dashboard.php" class="link"><i class="fas fa-gear rotate"></i></a>
        <button type="submit" class="logout-btn" id="logout-btn">Logout</button>

        <a href="javascript:void(0)" class="icon" id="toggle">
            <span class="bars"></span>
        </a>
    </nav>

    <dialog id="sidenav">
        <nav class="side-nav">
            <button id="CloseSideNav" class="X-btn">X</button>
            <form class="color-picker">
                <fieldset>
                    <legend>Pick A Theme</legend>
                    <div class="full-space">
                        <label for="light">Light</label>
                        <input type="radio" name="theme" id="light" checked>
                    </div>

                    <div class="full-space">
                        <label for="dark">Dark</label>
                        <input type="radio" name="theme" id="dark">
                    </div>

                </fieldset>
            </form>
            <div class="side-link-set">
                <a href="../../../index.php #Home" class="side-link">Home</a>
                <a href="../../../index.php #About" class="side-link">About Us</a>
                <a href="../../../index.php #Service" class="side-link">Services</a>
                <a href="../transfer/transfer.php" class="side-link">Transfer</a>
                <a href="step1.php" class="active-side-link  side-link">Apply For Loan</a>
                <a href="../Balance/balance.php" class="side-link">Balance</a>
                <a href="../Settings/dashboard.php" class="side-link"><i class="fas fa-gear  rotate"></i></a>
            </div>
            <button type="submit" class="logout-btn" id="side-logout-btn">Logout</button>
            <p style="position:absolute; bottom:20%; padding: 10px;">Double Click anywhere to Exit Side menu</p>
        </nav>
    </dialog>

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


    <main>
        <section>
            <div class="loan-container">
                <h1>Application Submitted Successfully</h1>
                <h2>Application ID:- &nbsp;<?php echo $ApplicationID; ?></h2>
            </div>
            <a href="../../../index.php"> <button class="register-btn submit" type="submit">Return to Home Page</button></a>

        </section>

    </main>

    <footer class="footer">
        <div class="footer__addr">
            <h1 class="footer__logo">Web Wallet</h1>

            <h2>Contact</h2>

            <address>
                Noble Institute of Tech. Junagadh <br>
                <a class="footer__btn" href="mailto:illumi2701@gmail.com">Email Us</a>
            </address>
        </div>

        <div class="legal">
            <p>&copy; 2022 Web Wallet. All rights reserved.</p>
        </div>
    </footer>
</body>
<script src="../../js/main.js"></script>
<script src="../../js/log.js"></script>
<script src="../../js/theme.js"></script>

</html>