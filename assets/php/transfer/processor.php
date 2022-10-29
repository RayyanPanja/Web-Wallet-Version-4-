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
        <a href="../../../../index.php #Home" class="link">Home</a>
        <a href="../../../../index.php #About" class="link">About Us</a>
        <a href="../../../../index.php #Service" class="link">Services</a>
        <a href="../../php/transfer/transfer.php" class="link">Transfer</a>
        <a href="../../php/Loan/" class="link">Apply For Loan</a>
        <a href="../../php/Balance/" class="link">Balance</a>
        <a href="../../php/Settings/" class="link"><i class="fas fa-gear rotate"></i></a>
        <a href="javascript:void(0)" class="icon" id="toggle">
            <span class="bars"></span>
        </a>
    </nav>

    <dialog id="sidenav">
        <nav class="side-nav">
            <button id="CloseSideNav" class="X-btn">X</button>
            <div class="side-link-set">
                <a href="../../../../index.php #Home" class="side-link">Home</a>
                <a href="../../../../index.php #About" class="side-link">About Us</a>
                <a href="../../../../index.php #Service" class="side-link">Services</a>
                <a href="../../php/transfer/transfer.php" class="active-side-link side-link">Transfer</a>
                <a href="../../php/Loan/" class="side-link">Apply For Loan</a>
                <a href="../../php/Balance/" class="side-link">Balance</a>
                <a href="../../php/Settings/" class="side-link"><i class="fas fa-gear  rotate"></i></a>
            </div>
            <p style="position:absolute; bottom:20%; padding: 10px;">Double Click anywhere to Exit Side menu</p>
        </nav>
    </dialog>
    <section>


        <?php
        include "../connection.php";
        session_start();
        $myacc = $_SESSION['Account'];
        $mypsw = $_SESSION['Password'];
        $myname = $_SESSION['Name'];

        $myAmount;
        
        $Fetch = "SELECT * FROM main WHERE `main`.`Account_number` = $myacc;";
        $Result = mysqli_query($con, $Fetch);
        while ($data = mysqli_fetch_assoc($Result)) {
            $myAmount = $data['Amount'];
        }


        $hisAcc = $_POST['accountnumber'];
        $AmountSent = $_POST['amount'];

        
        if (isset($hisAcc)) {
            $hisAmount;
            $hisName;

            $Fetch2 = "SELECT * FROM main WHERE `main`.`Account_number` = $hisAcc";
            $Result2 = mysqli_query($con, $Fetch2);
            if (mysqli_num_rows($Result2) > 0) {
                while ($data = mysqli_fetch_assoc($Result2)) {
                    $hisAmount = $data['Amount'];
                    $hisName = $data['Name'];
                }

                if ($myAmount <= $AmountSent || $myAmount <= 0) {
                    echo "<div class='errorcode'> Funds Insufficient ECODE-04</div><a href='transfer.php'><button class='error-btn'>Retry</button></a>";
                } else {
                    $mynewamount = 0;
                    $hisnewamount = 0;

                    $mynewamount = $myAmount - $AmountSent;
                    
                    $Update = "UPDATE main SET `Amount` = $mynewamount WHERE `main`.`Account_number` = $myacc;";
                    $UResult = mysqli_query($con, $Update);
                    if ($UResult) {
                        $hisnewamount = $hisAmount + $AmountSent;
                        $Update2 = "UPDATE main SET `Amount` = $hisnewamount WHERE `main`.`Account_number` = $hisAcc;";
                        $UResult2 = mysqli_query($con, $Update2);
                        if ($UResult2) {
                            // Insert into Transaction...
                            $receiptID = rand(00000, 999999);
                            $insert = "INSERT INTO `transaction` (`Receipt_No`, `From_Acc`, `To_Acc`, `Amount`, `Date`, `Receiver`, `Sender`) 
                            VALUES ($receiptID, $myacc, $hisAcc, $AmountSent, current_timestamp(), '$hisName', '$myname');";
                            $iresult = mysqli_query($con, $insert);
                            if ($iresult) {
                                header("Location: successfull.php");
                            }
                        }
                    }
                }
            } else {
                echo "<div class='errorcode'><i style='color: #fff;' class='fa fa-skull'></i> Receiver Account Doesnot Exist ECODE-03</div><a href='transfer.php'><button class='error-btn'>Retry</button></a>'";
            }
        }
        ?>
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
<script src="../../js/main.js"></script>

</html>