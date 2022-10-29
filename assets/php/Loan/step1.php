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
                <a href="../transfer/transfer.php" class="active-side-link side-link">Transfer</a>
                <a href="step1.php" class="side-link">Apply For Loan</a>
                <a href="../Balance/balance.php" class="side-link">Balance</a>
                <a href="../Settings/dashboard.php" class="side-link"><i class="fas fa-gear  rotate"></i></a>
            </div>
            <p style="position:absolute; bottom:20%; padding: 10px;">Double Click anywhere to Exit Side menu</p>
        </nav>
    </dialog>



    <main>
        <section>
            <div class="step-container">
                <span class="steps active">1</span>
                <span class="steps">2</span>
                <span class="steps">3</span>
                <span class="steps">4</span>
            </div>

            <div class="loan-container">
                <h1>Application For Loan</h1>
                <form action="processor/proc1.php" method="post">
                    <div class="row">
                        <div class="col-lab">
                            <label for="accno">Account Number</label>
                        </div>
                        <div class="col-inp">
                            <input type="number" name="accountnumber" id="acco" class="input" placeholder="00000" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lab">
                            <label for="password">Password</label>
                        </div>
                        <div class="col-inp">
                            <input type="password" name="password" id="psw" class="input" placeholder="******" required>
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

    <footer id="footer">
        <div style="position: absolute; right: 10%;">
            <p>&copy;CopyRight Owned By Team Web Wallet</p>
        </div>

        <nav class="footer-nav">
            <ul>
                <li><a href="../../../index.php #Home">Home</a></li>
                <li><a href="../../../index.php #About">About</a></li>
                <li><a href="../../../index.php #Service">Services</a></li>
            </ul>
        </nav>
        <hr>

    </footer>
</body>
<script src="../../js/main.js"></script>
<script src="../../js/log.js"></script>

</html>