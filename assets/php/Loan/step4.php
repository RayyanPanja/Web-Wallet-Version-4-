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
        <a href="../php/Settings/" class="link"><i class="fas fa-gear rotate"></i></a>
        <button type="submit" class="logout-btn" id="logout-btn">Logout</button>

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
                <a href="transfer.php" class="active-side-link side-link">Transfer</a>
                <a href="step1.php" class="side-link">Apply For Loan</a>
                <a href="../Balance/balance.php" class="side-link">Balance</a>
                <a href="../php/Settings/" class="side-link"><i class="fas fa-gear  rotate"></i></a>
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