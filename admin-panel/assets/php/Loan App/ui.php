<?php
include "../connection.php";
session_start();
$id = $_SESSION['AdminID'];
$psw = $_SESSION['Password'];
$name = $_SESSION['Name'];
$desig = $_SESSION['Desig'];
$numofapp = $_SESSION["loanapps"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan Application(<?php echo $numofapp; ?>)</title>
    <link rel="stylesheet" href="../../css/root.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/navbar.css">
    <link rel="stylesheet" href="../../css/loan.css">

</head>

<body>
    <main class="grid-2">
        <section class="loan">
            <h1>Applications</h1>
            <table>
                <tr class="top">
                    <th>App ID</th>
                    <th>Account Number</th>
                    <th>Name</th>
                    <th>Amount</th>
                    <th>Package Name</th>
                    <th>Package ID</th>
                </tr>
                <?php
                $FetchLoan = "SELECT * FROM Loan WHERE `Decision` = 'Pending';";
                $FetchLoanResult = mysqli_query($con, $FetchLoan);
                while ($data = mysqli_fetch_assoc($FetchLoanResult)) { ?>
                    <tr>
                        <td><?php echo $data['Application_ID']; ?></td>
                        <td><?php echo $data['Account_number']; ?></td>
                        <td><?php echo $data['Name']; ?></td>
                        <td><?php echo $data['Package_Amount']; ?></td>
                        <td><?php echo $data['Package_Name']; ?></td>
                        <td><?php echo $data['Package_ID']; ?></td>
                    </tr>
                <?php } ?>
            </table>
        </section>
        <section class="package">
            <h1>Packages</h1>
            <table>
                <tr class="top">
                    <th>Package ID</th>
                    <th>Package Name</th>
                    <th>Package Sponsor</th>
                    <th>Package Amount</th>
                    <th>Users</th>
                    <th>Max Users</th>
                </tr>
                <?php
                $FetchPackages = "SELECT * FROM schemes";
                $FetchPackagesResult = mysqli_query($con, $FetchPackages);
                while ($data = mysqli_fetch_assoc($FetchPackagesResult)) { ?>
                    <tr>
                        <td><?php echo $data['Scheme_ID']; ?></td>
                        <td><?php echo $data['Scheme_Name']; ?></td>
                        <td><?php echo $data['Sponsor']; ?></td>
                        <td><?php echo $data['Package']; ?></td>
                        <td><?php echo $data['Users_Using']; ?></td>
                        <td><?php echo $data['Max_Users']; ?></td>
                    </tr>
                <?php } ?>

            </table>

        </section>
    </main>


</body>
<script src="../../js/main.js"></script>
<script src="../../js/dialog.js"></script>

</html>