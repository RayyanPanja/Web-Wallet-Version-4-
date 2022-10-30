<?php
include "../connection.php";
session_start();
$AccountNumber = $_SESSION['Account'];
$Password = $_SESSION['Password'];
$Name = $_SESSION['Name'];

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
        <a href="javascript:void(0)" class="icon" id="toggle">
            <span class="bars"></span>
        </a>
    </nav>

    <dialog id="sidenav">
        <nav class="side-nav">
            <button id="CloseSideNav" class="X-btn">X</button>
            <div class="side-link-set">
                <a href="../../../index.php #Home" class="side-link">Home</a>
                <a href="../../../index.php #About" class="side-link">About Us</a>
                <a href="../../../index.php #Service" class="side-link">Services</a>
                <a href="../transfer/transfer.php" class="side-link">Transfer</a>
                <a href="step1.php" class="active-side-link  side-link">Apply For Loan</a>
                <a href="../Balance/balance.php" class="side-link">Balance</a>
                <a href="../Settings/dashboard.php" class="side-link"><i class="fas fa-gear  rotate"></i></a>
            </div>
            <p style="position:absolute; bottom:20%; padding: 10px;">Double Click anywhere to Exit Side menu</p>
        </nav>
    </dialog>



    <main>
        <section>
            <div class="step-container">
                <span class="steps">1</span>
                <span class="steps">2</span>
                <span class="steps active">3</span>
                <span class="steps">4</span>
            </div>

            <div class="loan-container">
                <div>
                    <form action="delete.php" method="post">
                        <button type="submit" class="cancle-app">Cancle Application</button>
                    </form>
                </div>
                <h1>Personal Info</h1>
                <form action="processor/proc3.php" method="post">
                    <div class="row">
                        <div class="col-lab">
                            <label for="address">Address</label>
                        </div>
                        <div class="col-inp">
                            <input type="text" name="address" id="add" class="input" placeholder="Address,City-Pin,State,Country" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lab">
                            <label for="contact">Phone Number</label>
                        </div>
                        <div class="col-inp">
                            <input type="tel" name="contact" id="contact" class="input" placeholder="0000000000" maxlength="10" required>
                        </div>
                    </div>
                    <div class="register-btn-set">
                        <button class="register-btn cancle" type="reset">Clear</button>
                        <button class="register-btn next" type="submit">Next</button>
                    </div>
                </form>
            </div>

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

</html>