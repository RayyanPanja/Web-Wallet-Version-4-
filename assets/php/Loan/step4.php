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
        <a href="transfer.php" class="link">Transfer</a>
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
                <a href="transfer.php" class=" side-link">Transfer</a>
                <a href="step1.php" class="active-side-link side-link">Apply For Loan</a>
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
                <span class="steps">3</span>
                <span class="steps active">4</span>
            </div>

            <div class="package-container">
                <div>
                    <form action="delete.php" method="post">
                        <button type="submit" class="cancle-app">Cancle Application</button>
                    </form>
                </div>
                <h1>Select A Package</h1>
                <div class="grid">
                    <?php
                    $FetchScheme = "SELECT * FROM Schemes;";
                    $FetchSchemeR = mysqli_query($con, $FetchScheme);

                    if (mysqli_num_rows($FetchSchemeR) > 0) {
                        while ($data = mysqli_fetch_assoc($FetchSchemeR)) { ?>

                            <form action="processor/proc4.php" method="post">
                                <div class="package-wrapper">
                                    <div class="terms">
                                        <input type="checkbox" id="tick" required>
                                        Terms & Conditions
                                    </div>

                                    <div class="package-status">
                                        <?php echo $data['Status']; ?>
                                    </div>
                                    <div class="package-name">
                                        <?php echo $data['Scheme_Name']; ?>
                                    </div>
                                    <div class="package-amount">
                                        <?php echo $data['Package']; ?>/-
                                    </div>
                                    <div class="package-sponsor">
                                        Sponsor:- &nbsp; <?php echo $data['Sponsor']; ?>
                                    </div>
                                    <div class="package-key">
                                        Package Key:-
                                        <span class="inset-shadow">
                                            <?php echo $data['Scheme_ID']; ?>
                                        </span>
                                    </div>
                                    <div class="user-set">
                                        <?php echo $data['Users_Using']; ?>/
                                        <?php echo $data['Max_Users']; ?><i class="fa fa-user"></i>
                                    </div>
                                    <div class="get-set">
                                        <input type="number" name="key" id="key" placeholder="Package key" required>
                                        <button type="submit" class="next package-btn">Get</button>
                                    </div>
                                </div>
                            </form>

                        <?php }
                    } else { ?>
                        <div class="errorcode">
                            <i class="fa fa-skull" style="color:#FFF;"></i> No Packages Available At Moment
                        </div>
                    <?php } ?>

                </div>
            </div>
        </section>

    </main>

    <dialog class="termbox" id="termbox" open>
        <form method="dialog">
            <h1>Terms & Conditions</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum, aspernatur.</p>
            <p>Cumque dignissimos veritatis quae? Ratione cumque pariatur placeat facilis fuga?</p>
            <p>Cumque dignissimos veritatis quae? Ratione cumque pariatur placeat facilis fuga?</p>
            <p>Cumque dignissimos veritatis quae? Ratione cumque pariatur placeat facilis fuga?</p>
            <p>Cumque dignissimos veritatis quae? Ratione cumque pariatur placeat facilis fuga?</p>
            <div class="btn-set">
                <button class="dope" id="agree">Agree</button>
            </div>

        </form>
    </dialog>







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
<script src="../../js/terms.js"></script>

</html>