<?php
include "../connection.php";
session_start();
$myacc = $_SESSION['Account'];
$Password = $_SESSION['Password'];
$Name = $_SESSION['Name'];
$myamount;
$FetchMain = "SELECT * FROM main WHERE `main`.`Account_number` = $myacc;";
$FetchMainResult = mysqli_query($con, $FetchMain);
while ($data = mysqli_fetch_assoc($FetchMainResult)) {
    $myamount = $data['Amount'];
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
        <a href="../Loan/" class="link">Apply For Loan</a>
        <a href="../Balance/" class="link">Balance</a>
        <a href="../Settings/" class="link"><i class="fas fa-gear rotate"></i></a>
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
                <a href="../transfer/transfer.php" class="side-link">Transfer</a>
                <a href="../Loan/" class="side-link">Apply For Loan</a>
                <a href="balance.php" class="active-side-link side-link">Balance</a>
                <a href="../Settings/" class="side-link"><i class="fas fa-gear  rotate"></i></a>
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
        <section style="height:100vh;">
            <div class="balance-cont">
                <div class="balance">
                    <span>
                        <h1>Balance:</h1>
                    </span>
                    <span>
                        <h1 class="number"><?php echo $myamount; ?>/-</h1>
                    </span>
                </div>

                <form action="search.php" method="post">
                    <div class="search-bar">
                        <input type="number" name="receipt" id="receipt" placeholder="Receipt" required class="small-input">
                        <button type="submit" class="search-btn">Search</button>
                    </div>
                </form>
            </div>

            <div class="transactions">
                <div class="title">
                    <h1>
                        Recent Transactions
                    </h1>
                </div>
                <?php
                $FetchTra = "SELECT * FROM `transaction` WHERE `transaction`.`From_Acc` = $myacc ORDER BY `Date` DESC;";
                $FetchTraResult = mysqli_query($con, $FetchTra);

                if (mysqli_num_rows($FetchTraResult) > 0) {
                    while ($data = mysqli_fetch_assoc($FetchTraResult)) { ?>
                        <div class="tra-card">
                            <div class="from">
                                From:<?php echo $data['From_Acc']; ?>
                            </div>
                            <div class="to">
                                To:<?php echo $data['To_Acc']; ?>
                            </div>
                            <div class="id">
                                ID:<?php echo $data['Receipt_No']; ?>
                            </div>

                            <div class="amount">
                                <h1><?php echo $data['Amount']; ?>/-</h1>
                            </div>
                            <div class="date">
                                Date:<?php echo $data['Date']; ?>
                            </div>
                            <div class="names">
                                <div class="receiver"><?php echo $data['Receiver'];?></div>
                                <div class="sender"><?php echo $data['Sender'];?></div>
                            </div>
                        </div>
                    <?php }
                } else { ?>
                    <div class="errorcode">No Transactions Yet</div>
                <?php } ?>


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
                <liactive-><a href="">Register</a></liactive->
                >
            </ul>
        </nav>
        <hr>

    </footer>
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