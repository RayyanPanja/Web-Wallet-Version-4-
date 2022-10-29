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
            <span class="steps active">1</span>
            <span class="steps">2</span>
            <span class="steps">3</span>
            <span class="steps">4</span>
        </div>

        <div class="register-form">
            <h1>Persnol Information</h1>
            <form action="processor/step1.php" method="post">
                <div class="row">
                    <div class="col-lab">
                        <label for="Full Name">Full Name</label>
                    </div>
                    <div class="col-inp">
                        <input type="text" name="name" id="name" class="input" placeholder="Sirname Name Fathername">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lab">
                        <label for="D.O.B">Date Of Birth</label>
                    </div>
                    <div class="col-inp">
                        <input type="date" name="dateofbirth" id="dob" class="input">
                    </div>
                </div>
                <div class="register-btn-set">
                    <button class="register-btn cancle" type="reset">Clear</button>
                    <button class="register-btn next" type="submit">Next</button>
                </div>
            </form>
        </div>
    </section>


    <footer id="footer">
        <div style="position: absolute; right: 10%;">
            <p>&copy;CopyRight Owned By Team Web Wallet</p>
        </div>

        <nav class="footer-nav">
            <ul>
                <li><a href="../../../index.html #Home">Home</a></li>
                <li><a href="../../../index.html #About">About</a></li>
                <li><a href="../../../index.html #Service">Services</a></li>
                <li><a href="step1.php">Register</a></li>
            </ul>
        </nav>
        <hr>

    </footer>
</body>
<script src="../../js/main.js"></script>

</html>
