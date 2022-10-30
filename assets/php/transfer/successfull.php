<?php
include "../connection.php";
session_start();
$myacc = $_SESSION['Account'];
$Password = $_SESSION['Password'];
$Name = $_SESSION['Name'];
$hisacc = $_SESSION['temphisacc'];
$receiptID = $_SESSION['tempID'];
$ID;
$Amount;
$hisname;

$Fetch = "SELECT * FROM `transaction` WHERE `transaction`.`From_Acc` = $myacc ORDER BY `Date` DESC;";
$Result = mysqli_query($con, $Fetch);
while ($data = mysqli_fetch_row($Result)) {
    $ID = $data[0];
    $Amount = $data[3];
    $hisname = $data[6];
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
            <div class="side-link-set">
                <a href="../../../index.php #Home" class="side-link">Home</a>
                <a href="../../../index.php #About" class="side-link">About Us</a>
                <a href="../../../index.php #Service" class="side-link">Services</a>
                <a href="../transfer/transfer.php" class="active-side-link side-link">Transfer</a>
                <a href="../Loan/step1.php" class="side-link">Apply For Loan</a>
                <a href="../Balance/balance.php" class="side-link">Balance</a>
                <a href="../Settings/dashboard.php" class="side-link"><i class="fas fa-gear  rotate"></i></a>
            </div>
            <button type="submit" class="logout-btn" id="side-logout-btn">Logout</button>
            <p style="position:absolute; bottom:20%; padding: 10px;">Double Click anywhere to Exit Side menu</p>
        </nav>
    </dialog>

    <section style="height:100vh;">
        <p>*When Receipt Generates Take A Screen Shot For Future Reference</p>
        <lottie-player id="tick" src="https://assets5.lottiefiles.com/packages/lf20_sabvcsrv.json" background="transparent" speed="2" class="tick" autoplay></lottie-player>'
        <div class="success-text">
            <h1>
                <?php
                if($myacc == $hisacc){
                    echo "Self Transfer....";
                }else{
                    echo "Traaaansfer Successfull";
                }
                ?>
            </h1>
        </div>

        <div class="receipt" id="receipt">
            <table>
                <tr>
                    <th>Receipt ID</th>
                    <td><?php echo $ID; ?></td>
                </tr>
                <tr>
                    <th>Amount</th>
                    <td><?php echo $Amount; ?>/-</td>
                </tr>
                <tr>
                    <th>From</th>
                    <td><?php echo $myacc; ?></td>
                </tr>
                <tr>
                    <th>To</th>
                    <td><?php echo $hisacc; ?></td>
                </tr>
                <tr>
                    <th>Receiver</th>
                    <td><?php echo $hisname; ?></td>
                </tr>
                <tr>
                    <th>Sender</th>
                    <td><?php echo $Name; ?></td>
                </tr>
            </table>
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
                <li><a href="">Register</a></li>
            </ul>
        </nav>
        <hr>

    </footer>
</body>
<script src="../../js/main.js"></script>
<script src="../../js/animate.js"></script>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

</html>