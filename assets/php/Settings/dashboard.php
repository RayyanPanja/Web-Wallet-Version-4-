<?php
include "../connection.php";
session_start();
$myacc = $_SESSION['Account'];
$Password = $_SESSION['Password'];
$Name = $_SESSION['Name'];
strlen($Name);
$new = str_split($Name,5);
$myamount;
$email;

$FetchMain = "SELECT * FROM main WHERE `main`.`Account_number` = $myacc;";
$FetchMainResult = mysqli_query($con, $FetchMain);
while ($data = mysqli_fetch_assoc($FetchMainResult)) {
    $myamount = $data['Amount'];
    $email = $data['Email'];
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
            <a href="" class="side-link">
                <span class=" icon fa fa-home"></span> <span class="link">Home</span>
            </a>
            <a href="" class="side-link">
                <span class=" icon fa fa-money-bill-transfer"></span> <span class="link">Transfer</span>
            </a>
            <a href="" class="side-link">
                <span class=" icon fa fa-cash-register"></span> <span class="link">Balance</span>
            </a>
            <a href="" class="side-link">
                <span class=" icon fa fa-dollar"></span> <span class="link">Loan</span>
            </a>
            <a href="" class="side-link active">
                <span class=" icon fa fa-gear active"></span> <span class="link">Settings</span>
            </a>
        </div>

        <div class="user-detail">
            <i class="fa fa-user"></i>
            <div class="username">
                <?php echo $Name; ?>
            </div>
        </div>
    </nav>

    <main id="dashboard">
        <div class="hello">
            <h1>dashboard</h1>
            <p>Welcome Back!! <?php echo $new[1].$new[2]; ?></p>
        </div>




    </main>
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