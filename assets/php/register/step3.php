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
        <a href="../../../index.html #Home" class="link">Home</a>
        <a href="../../../index.html #About" class="link">About Us</a>
        <a href="../../../index.html #Service" class="link">Services</a>
        <a href="../../../index.html #Home" class="link">Registration</a>
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
                <a href="../../../index.html #Home" class="side-link">Home</a>
                <a href="../../../index.html #About" class="side-link">About Us</a>
                <a href="../../../index.html #Service" class="side-link">Services</a>
                <a href="step1.php" class="side-link">Registration</a>
            </div>
            <p style="position:absolute; bottom:20%; padding: 10px;">Double Click anywhere to Exit Side menu</p>
        </nav>
    </dialog>

    <section>
        <div class="step-container">
            <span class="steps">1</span>
            <span class="steps">2</span>
            <span class="steps active">3</span>
            <span class="steps ">4</span>
        </div>

        <div class="register-form">
            <form action="processor/step3.php" method="post">
                <h1>Set Password</h1>
                <div class="row">
                    <div class="col-lab">
                        <label for="password">Set Password</label>
                    </div>
                    <div class="col-inp-big">
                        <input type="password" name="password1" id="psw1" class="input" placeholder="4-6 char long" maxlength="6" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lab">
                        <label for="password">Retype Password</label>
                    </div>
                    <div class="col-inp-big">
                        <input type="password" name="password2" id="psw2" class="input" placeholder="4-6 char long" maxlength="6" required>
                    </div>
                </div>
                <div class="register-btn-set">
                    <button class="register-btn cancle" type="reset">Clear</button>
                    <button class="register-btn next" type="submit">Next</button>
                </div>
            </form>
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
<script src="../../js/main.js"></script>
<script src="../../js/theme.js"></script>


</html>