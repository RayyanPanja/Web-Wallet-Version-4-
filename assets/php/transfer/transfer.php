<?php
include "../connection.php";
session_start();
$AccountNumber = $_SESSION['Account'];
$Password = $_SESSION['Password'];
$Name = $_SESSION['Name'];

$Amount;

$Fetch = "SELECT * FROM main WHERE `main`.`Account_number` = $AccountNumber;";
$Result = mysqli_query($con, $Fetch);

while ($data = mysqli_fetch_assoc($Result)) {
    $Amount = $data['Amount'];
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
        <a href="transfer.php" class="link">Transfer</a>
        <a href="../Loan/step1.php" class="link">Apply For Loan</a>
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
                <a href="transfer.php" class="active-side-link side-link">Transfer</a>
                <a href="../Loan/step1.php" class="side-link">Apply For Loan</a>
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


    <section>
        <div class="grid">

            <div class="transfer-form">
                <form action="processor.php" method="post">

                    <div class="row">
                        <div class="col-lab">
                            <label for="Account">Account Number</label>
                        </div>
                        <div class="col-inp">
                            <input type="number" name="accountnumber" id="accno" class="input" placeholder="To">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lab">
                            <label for="Amount">Amount</label>
                        </div>
                        <div class="col-inp">
                            <input type="number" name="amount" id="amount" max="50000" class="input" placeholder="1000/-" required>
                        </div>
                    </div>
                    <div class="keyboard">
                        <div class="grid-3 no-gap">
                            <input type="button" class="key" onclick="add(this)" value="1"></input>
                            <input type="button" class="key" onclick="add(this)" value="2"></input>
                            <input type="button" class="key" onclick="add(this)" value="3"></input>
                            <input type="button" class="key" onclick="add(this)" value="4"></input>
                            <input type="button" class="key" onclick="add(this)" value="5"></input>
                            <input type="button" class="key" onclick="add(this)" value="6"></input>
                            <input type="button" class="key" onclick="add(this)" value="7"></input>
                            <input type="button" class="key" onclick="add(this)" value="8"></input>
                            <input type="button" class="key" onclick="add(this)" value="9"></input>
                            <button class="key" type="reset">CLR</button>
                            <input type="button" class="key" onclick="add(this)" value="0"></input>
                            <button class="key" type="submit">Pay</button>
                        </div>
                </form>
            </div>
        </div>

        <div class="transfer-details">
            <div class="detail">
                <h1>Account Holder</h1>
                <h1 class="value"><?php echo $Name; ?></h1>
            </div>
            <div class="detail">
                <h1>Amount</h1>
                <h1 class="value"><?php echo $Amount; ?></h1>
            </div>

        </div>
        </div>
    </section>

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
<script src="../../js/main.js"></script><script>
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
<script src="../../js/theme.js"></script>
</html>