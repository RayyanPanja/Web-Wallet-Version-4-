<?php
include "../connection.php";
session_start();
$myacc = $_SESSION['Account'];
$Password = $_SESSION['Password'];
$Name = $_SESSION['Name'];
$myamount;
$Address;
$email;
$FetchMain = "SELECT * FROM main WHERE `main`.`Account_number` = $myacc;";
$FetchMainResult = mysqli_query($con, $FetchMain);
while ($data = mysqli_fetch_assoc($FetchMainResult)) {
    $myamount = $data['Amount'];
    $Address = $data['Address'];
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
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/media.css">
    <link rel="stylesheet" href="../../css/settings.css">

</head>

<body id="Home">
    <button id="topbtn" class="up-btn"><i class="fa fa-arrow-up"></i></button>
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