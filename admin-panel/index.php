    <?php
    include "assets/php/connection.php";
    session_start();
    $id = $_SESSION['AdminID'];
    $psw = $_SESSION['Password'];
    $name = $_SESSION['Name'];
    $desig = $_SESSION['Desig'];
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Welcome <?php echo $name; ?></title>
    </head>
    <link rel="stylesheet" href="../assets/icons/fontawesome-free-6.1.2-web/fontawesome-free-6.1.2-web/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/root.css">
    <link rel="stylesheet" href="assets/css/navbar.css">

    <body>
        <button id="top"><i class="fa fa-arrow-up"></i></button>
        <header class="hero-sec">
            <p style="z-index:999; color:#fff;">Version 4.0.0</p>
            <img src="assets/img/hero.jpg" alt="back" class="hero-img">
            <div class="title" id="title">
                <h1>Welcome <?php echo $name; ?></h1>
            </div>
            <button class="subtitle-set">
                <a href="#content">Scroll Down</a>
                <i class="fa fa-arrow-down"></i>
            </button>
        </header>
        <section id="content">
            <nav class="navbar">
                <h1>Admin</h1>
                <p><?php echo $name; ?> (<?php echo $desig; ?>)</p>
                <p></p>
            </nav>
            <div class="content">
                <div class="side-nav">
                    <div class="side-link-set">
                        <a href="assets/php/Loan App/ui.php" class="side-link">Loan Application</a>
                        <a href="assets/php/" class="side-link">Deposite Amount</a>
                        <a href="assets/php/" class="side-link">Deduct Loan Amount</a>
                        <a href="assets/php/" class="side-link">Review Comments</a>
                        <a href="assets/php/" class="side-link">Remove Account</a>
                        <a href="assets/php/" class="side-link">Details Of Account</a>
                        <form action="assets/php/logout.php" class="side-link">
                            <button type="submit" class="logout-btn">Logout</button>
                        </form>

                    </div>
                </div>
                <div class="content-screen">
                    <?php
                    $FetchLoan = "SELECT * FROM Loan WHERE `Decision` = 'Pending';";
                    $FetchLoanResult = mysqli_query($con, $FetchLoan);
                    $LoanNumOfReq = mysqli_num_rows($FetchLoanResult);
                    $_SESSION["loanapps"] = $LoanNumOfReq;

                    $FetchComment = "SELECT * FROM comment WHERE `Status` = 'Pending';";
                    $FetchCommentResult = mysqli_query($con, $FetchComment);
                    $CommentNumOfReq = mysqli_num_rows($FetchCommentResult);
                    ?>
                    <h1>
                        Number Of Loan Applications to Be Reviewed : <?php echo $LoanNumOfReq; ?>
                    </h1>
                    <h1>
                        Number Of Comments to Be Reviewed : <?php echo $CommentNumOfReq; ?>
                    </h1>
                </div>
            </div>

        </section>
    </body>
    <script src="assets/js/home-animate.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/dialog.js"></script>

    </html>