<?php
include "assets/php/connection.php";
session_start();
$AdminID = $_SESSION['AdminID'];
$AdminName = $_SESSION['Name'];
$AdminDesig = $_SESSION['Desig'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Wallet Admin Panel</title>
</head>
<body>
    
</body>
</html><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Wallet Admin Panel</title>
    <!-- Icon Library -->
    <link rel="stylesheet" href="../assets/icons/fontawesome-free-6.1.2-web/fontawesome-free-6.1.2-web/css/all.min.css">
    <!-- Css -->
    <link rel="stylesheet" href="assets/css/root.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/navbar.css">
</head>
<body>
    <nav class="navbar">
        <h1>Admin Panel</h1>
        <h2>Admin:- <?php echo $AdminName; ?> |</h2> 
        <h2>| Designation:- (<?php echo $AdminDesig; ?>) </h2>
        <div class="logout">
            <form action="" method="post">
                <button type="submit" class="logout-btn">Logout</button>
            </form>
        </div>
    </nav>

    <main>
        <section>
            
        </section>
    </main>
    <script src="assets/js/dialog.js"></script>
</body>

</html>