<?php
include "assets/php/connection.php";
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
    <link rel="stylesheet" href="assets/icons/fontawesome-free-6.1.2-web/fontawesome-free-6.1.2-web/css/all.min.css">

    <!-- Css -->
    <link rel="stylesheet" href="assets/css/root.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/form.css">
    <link rel="stylesheet" href="assets/css/media.css">

</head>

<body id="Home">
    <button id="topbtn" class="up-btn"><i class="fa fa-arrow-up"></i></button>
    <nav class="navbar" id="navbar">
        <div class="nav-logo">
            <h1>Web Wallet</h1>
        </div>
        <a href="#Home" class="link">Home</a>
        <a href="#About" class="link">About Us</a>
        <a href="#Service" class="link">Services</a>
        <a href="assets/php/transfer/transfer.php" class="link">Transfer</a>
        <a href="assets/php/Loan/step1.php" class="link">Apply For Loan</a>
        <a href="assets/php/Balance/balance.php" class="link">Balance</a>
        <a href="assets/php/Settings/dashboard.php" class="link"><i class="fas fa-gear rotate"></i></a>
        <button type="submit" class="logout-btn" id="logout-btn">Logout</button>

        <a href="javascript:void(0)" class="icon" id="toggle">
            <span class="bars"></span>
        </a>
    </nav>

    <dialog id="sidenav">
        <nav class="side-nav">
            <button id="CloseSideNav" class="X-btn">X</button>
            <div class="side-link-set">
                <a href="#Home" class="side-link">Home</a>
                <a href="#About" class="side-link">About Us</a>
                <a href="#Service" class="side-link">Services</a>
                <a href="assets/php/transfer/transfer.php" class="side-link">Transfer</a>
                <a href="assets/php/Loan/step1.php" class="side-link">Apply For Loan</a>
                <a href="assets/php/Balance/balance.php" class="side-link">Balance</a>
                <a href="assets/php/Settings/dashboard.php" class="side-link"><i class="fas fa-gear  rotate"></i></a>
            </div>
            <button type="submit" class="logout-btn" id="side-logout-btn">Logout</button>
            <p style="position:absolute; bottom:20%; padding: 10px;">Double Click anywhere to Exit Side menu</p>
        </nav>
    </dialog>


    <header class="hero">
        <img src="assets/images/hero-img.jpg" alt="Hero Image" class="hero-img">
        <div class="hero-logo">
            <h1>Web Wallet</h1>
            <p>User's Priority</p>
        </div>
        <div class="version">
            <p>Version: 4.0.0</p>
        </div>

    </header>

    <dialog id="logoutform">
        <div class="login-form">
            <h1>Are You Sure?? You Want to Log Out</h1>
            <form action="assets/php/logout.php" method="post">
                <div class="login-btn-set">
                    <button type="reset" id="CloseLogout" class="btn submit">Cancle</button>
                    <button type="submit" class="btn cancle">Logout</button>
                </div>
            </form>
        </div>
    </dialog>



    <section id="About" style="height:fit-content;">
        <div class="flex-center">
            <h1 class="greet">About</h1>
        </div>
        <div class="details">
            <h1>What Do We Provide</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio expedita eaque quam hic nostrum
                corrupti, eligendi voluptatem ratione possimus voluptate laudantium laboriosam culpa quisquam nemo ad
                rem, soluta quasi maiores dolorum. Quasi fugit maiores excepturi sit quia consequuntur consectetur
                molestias labore, vel, aut non libero repudiandae consequatur totam dolores? Tenetur.</p>
        </div>

        <div class="flex-center" style="margin-bottom:5%;">
            <h1 class="greet">Developers</h1>
        </div>

        <div class="grid-3 scroll-x small-gap">
            <div class="card-wrap">
                <div class="profile">
                    <img src="assets/images/profile-rayyan.png" alt="Profile">
                </div>
                <div class="name">
                    <h3>Panja Rayyan Gulamhusen</h3>
                    <p>206920307052</p>
                </div>
                <div class="skill flex-center">
                    <p>Full-Stack</p>
                </div>
            </div>


            <div class="card-wrap">
                <div class="profile">
                    <img src="assets/images/profile-rayyan.png" alt="Profile">
                </div>
                <div class="name">
                    <h3>Vachhani Tejas</h3>
                    <p>206920307051</p>
                </div>
                <div class="skill flex-center">
                    <p>Front-End</p>
                </div>
            </div>


            <div class="card-wrap">
                <div class="profile">
                    <img src="assets/images/profile-rayyan.png" alt="Profile">
                </div>
                <div class="name">
                    <h3>Kotak Dixit</h3>
                    <p>206920307001</p>
                </div>
                <div class="skill flex-center">
                    <p>Front-End</p>
                </div>
            </div>
        </div>
    </section>

    <section id="Service">
        <div class="flex-center">
            <h1 class="greet">What Do We Provide</h1>
        </div>
        <div class="flex">
            <div class="side-para">
                <div class="para">
                    <h2>Easy Money Transfer</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis quibusdam aperiam accusamus
                        aspernatur fugiat minima inventore perspiciatis maiores nesciunt nemo.</p>
                </div>

                <div class="para">
                    <h2>Secure Money Transfer</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis quibusdam aperiam accusamus
                        aspernatur fugiat minima inventore perspiciatis maiores nesciunt nemo.</p>
                </div>

                <div class="para">
                    <h2>Better User Interface</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis quibusdam aperiam accusamus
                        aspernatur fugiat minima inventore perspiciatis maiores nesciunt nemo.</p>
                </div>

                <div class="para">
                    <h2>Fast Transfer</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis quibusdam aperiam accusamus
                        aspernatur fugiat minima inventore perspiciatis maiores nesciunt nemo.</p>
                </div>

            </div>
            <div class="side-para-img">
                <img src="assets/images/mobile.png" alt="IMAGE" class="mobile">
            </div>

        </div>
    </section>

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
<script src="assets/js/main.js"></script>
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