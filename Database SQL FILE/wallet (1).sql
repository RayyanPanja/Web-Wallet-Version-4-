-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2022 at 06:58 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wallet`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_ID` int(90) NOT NULL,
  `Admin_Name` varchar(90) NOT NULL,
  `Admin_Password` varchar(30) NOT NULL,
  `Designation` varchar(100) NOT NULL,
  `How_Much_Approved` int(99) NOT NULL DEFAULT 0,
  `Branch` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_ID`, `Admin_Name`, `Admin_Password`, `Designation`, `How_Much_Approved`, `Branch`) VALUES
(1, 'Rayyan', '7410', 'Manager', 0, 'Veraval\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `Cid` int(99) NOT NULL,
  `Name` varchar(99) NOT NULL,
  `Msg` longtext NOT NULL,
  `Status` varchar(50) NOT NULL DEFAULT 'Pending',
  `Time` time NOT NULL DEFAULT current_timestamp(),
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`Cid`, `Name`, `Msg`, `Status`, `Time`, `Date`) VALUES
(2, 'Rayyan', 'sdasdasdadas', 'Pending', '15:38:29', '2022-11-12');

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `Application_ID` int(99) NOT NULL,
  `Account_number` int(99) NOT NULL,
  `Debt` int(99) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contact` int(12) NOT NULL,
  `Loan_recovered` int(99) NOT NULL DEFAULT 0,
  `Decision` varchar(30) NOT NULL DEFAULT 'Pending',
  `Decision_By` varchar(225) NOT NULL,
  `Date_Loan_Req` datetime NOT NULL DEFAULT current_timestamp(),
  `Package_ID` int(99) NOT NULL,
  `Package_Name` varchar(225) NOT NULL,
  `Package_Amount` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loan`
--

INSERT INTO `loan` (`Application_ID`, `Account_number`, `Debt`, `Name`, `Address`, `Email`, `Contact`, `Loan_recovered`, `Decision`, `Decision_By`, `Date_Loan_Req`, `Package_ID`, `Package_Name`, `Package_Amount`) VALUES
(2786523, 9786, 2500000, 'Rayyan', 'VERAVAL', '', 2147483647, 0, 'Approve', '', '2022-10-31 16:39:04', 111111, 'One Piece', 2500000),
(4735541, 9786, 2500000, 'Rayyan', 'VERAVAL', '', 2147483647, 0, 'Approve', '', '2022-11-13 17:03:35', 111111, 'One Piece', 2500000),
(4752359, 9786, 2500000, 'Rayyan', 'VERAVAL', '', 2147483647, 0, 'Approve', '', '2022-10-30 20:58:50', 111111, 'One Piece', 2500000),
(6660732, 9786, 15452, 'Rayyan', 'VERAVAL', '', 2147483647, 0, 'Approve', '', '2022-11-04 12:37:30', 222222, '2 Piece', 15452),
(9828865, 9786, 0, 'Rayyan', 'VERAVAL', '', 2147483647, 0, 'Approve', '', '2022-10-29 15:12:14', 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `main`
--

CREATE TABLE `main` (
  `Account_number` int(99) NOT NULL,
  `Sirname` varchar(100) NOT NULL,
  `Firstname` varchar(100) NOT NULL,
  `Fathername` varchar(100) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `Amount` int(99) NOT NULL,
  `City` varchar(225) NOT NULL,
  `Date Of Birth` date NOT NULL,
  `Loan_taken` varchar(10) NOT NULL,
  `Loan_requested` varchar(10) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Contact` int(12) NOT NULL,
  `Has_recovery` varchar(10) NOT NULL DEFAULT 'No',
  `Date_Created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `main`
--

INSERT INTO `main` (`Account_number`, `Sirname`, `Firstname`, `Fathername`, `Password`, `Amount`, `City`, `Date Of Birth`, `Loan_taken`, `Loan_requested`, `Email`, `Contact`, `Has_recovery`, `Date_Created`) VALUES
(69, 'Web', 'Wallet', 'Bank', '.....', 99894495, '', '2022-01-01', 'No', 'No', 'thisBank@bank.com', 2147483647, 'No', '2022-10-31 15:26:17'),
(9786, 'Panja', 'Rayyan', 'Gulamhusen', '5555', 2500000, '', '2004-01-27', 'Yes', 'Yes', 'illumi2701@gmail.com', 2147483647, 'No', '2022-10-31 15:20:48'),
(44579, 'Some', 'One', 'Dope', '2525', 1500, '', '4655-05-06', 'No', 'No', 'nuts@this.com', 2145248185, 'No', '2022-10-31 16:27:35'),
(72743, 'OO', 'AA', 'SDASD', '11111', 15200, '', '1422-02-05', 'No', 'No', 'this@this.com', 1234567890, 'No', '2022-11-04 00:03:30');

-- --------------------------------------------------------

--
-- Table structure for table `recovery`
--

CREATE TABLE `recovery` (
  `Account_number` int(99) NOT NULL,
  `Special_Key` int(30) NOT NULL,
  `Code_Word` varchar(30) NOT NULL,
  `Contact` int(12) NOT NULL,
  `Attempt` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recovery`
--

INSERT INTO `recovery` (`Account_number`, `Special_Key`, `Code_Word`, `Contact`, `Attempt`) VALUES
(9786, 2525, 'One Piece', 96017869, 0);

-- --------------------------------------------------------

--
-- Table structure for table `schemes`
--

CREATE TABLE `schemes` (
  `Scheme_ID` int(99) NOT NULL,
  `Scheme_Name` varchar(100) NOT NULL,
  `Sponsor` varchar(100) NOT NULL,
  `Package` int(99) NOT NULL,
  `Date_Added` date NOT NULL DEFAULT current_timestamp(),
  `Status` varchar(30) NOT NULL DEFAULT 'Active',
  `Users_Using` int(99) NOT NULL DEFAULT 0,
  `Max_Users` int(99) NOT NULL DEFAULT 5
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schemes`
--

INSERT INTO `schemes` (`Scheme_ID`, `Scheme_Name`, `Sponsor`, `Package`, `Date_Added`, `Status`, `Users_Using`, `Max_Users`) VALUES
(111111, 'One Piece', 'JoyBoy', 2500000, '2022-10-29', 'Active', 6, 5),
(222222, '2 Piece', '2JoyBoy', 15452, '2022-10-29', 'Active', 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `Receipt_No` int(99) NOT NULL,
  `From_Acc` int(99) NOT NULL,
  `To_Acc` int(99) NOT NULL,
  `Amount` int(99) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp(),
  `Time` time NOT NULL DEFAULT current_timestamp(),
  `DateTime` datetime NOT NULL DEFAULT current_timestamp(),
  `Receiver` varchar(100) NOT NULL,
  `Sender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`Receipt_No`, `From_Acc`, `To_Acc`, `Amount`, `Date`, `Time`, `DateTime`, `Receiver`, `Sender`) VALUES
(48928, 69, 9786, 2500, '2022-11-04', '15:53:11', '2022-11-04 15:53:11', 'Rayyan', 'Wallet'),
(67754, 9786, 69, 250, '2022-10-31', '16:02:59', '2022-10-31 16:02:59', 'Wallet', 'Rayyan'),
(81692, 69, 9786, 25000, '2022-10-31', '15:46:09', '2022-10-31 15:46:09', 'Rayyan', 'Wallet'),
(145119, 9786, 69, 400, '2022-11-13', '16:29:49', '2022-11-13 16:29:49', 'Wallet', 'Rayyan'),
(211988, 9786, 69, 50, '2022-11-04', '15:46:09', '2022-11-04 15:46:09', 'Wallet', 'Rayyan'),
(228595, 69, 9786, 25000, '2022-11-04', '15:47:10', '2022-11-04 15:47:10', 'Rayyan', 'Wallet'),
(243613, 9786, 69, 420, '2022-11-05', '14:32:24', '2022-11-05 14:32:24', 'Wallet', 'Rayyan'),
(274580, 9786, 69, 200, '2022-11-04', '00:31:47', '2022-11-04 00:31:47', 'Wallet', 'Rayyan'),
(315315, 69, 9786, 25000, '2022-11-04', '15:47:33', '2022-11-04 15:47:33', 'Rayyan', 'Wallet'),
(398107, 9786, 69, 420, '2022-11-04', '12:33:22', '2022-11-04 12:33:22', 'Wallet', 'Rayyan'),
(404884, 9786, 69, 200, '2022-10-31', '16:31:38', '2022-10-31 16:31:38', 'Wallet', 'Rayyan'),
(412041, 9786, 69, 5000, '2022-11-04', '00:11:03', '2022-11-04 00:11:03', 'Wallet', 'Rayyan'),
(513724, 9786, 69, 420, '2022-11-04', '12:31:22', '2022-11-04 12:31:22', 'Wallet', 'Rayyan'),
(598171, 69, 9786, 2500, '2022-11-04', '15:47:42', '2022-11-04 15:47:42', 'Rayyan', 'Wallet'),
(600636, 69, 9786, 1000, '2022-11-04', '15:54:27', '2022-11-04 15:54:27', 'Rayyan', 'Wallet'),
(635181, 69, 9786, 555, '2022-11-04', '15:50:19', '2022-11-04 15:50:19', 'Rayyan', 'Wallet'),
(677043, 9786, 69, 420, '2022-11-05', '14:32:00', '2022-11-05 14:32:00', 'Wallet', 'Rayyan'),
(709191, 69, 9786, 250, '2022-11-04', '15:52:35', '2022-11-04 15:52:35', 'Rayyan', 'Wallet'),
(859341, 9786, 69, 200, '2022-11-04', '12:32:12', '2022-11-04 12:32:12', 'Wallet', 'Rayyan'),
(910931, 9786, 69, 420, '2022-11-04', '15:46:26', '2022-11-04 15:46:26', 'Wallet', 'Rayyan'),
(954322, 9786, 69, 500, '2022-10-31', '16:08:31', '2022-10-31 16:08:31', 'Wallet', 'Rayyan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_ID`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`Cid`);

--
-- Indexes for table `loan`
--
ALTER TABLE `loan`
  ADD PRIMARY KEY (`Application_ID`);

--
-- Indexes for table `main`
--
ALTER TABLE `main`
  ADD PRIMARY KEY (`Account_number`);

--
-- Indexes for table `recovery`
--
ALTER TABLE `recovery`
  ADD PRIMARY KEY (`Account_number`);

--
-- Indexes for table `schemes`
--
ALTER TABLE `schemes`
  ADD PRIMARY KEY (`Scheme_ID`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`Receipt_No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Admin_ID` int(90) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `Cid` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=978519;

--
-- AUTO_INCREMENT for table `loan`
--
ALTER TABLE `loan`
  MODIFY `Application_ID` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9828866;

--
-- AUTO_INCREMENT for table `main`
--
ALTER TABLE `main`
  MODIFY `Account_number` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91911;

--
-- AUTO_INCREMENT for table `recovery`
--
ALTER TABLE `recovery`
  MODIFY `Account_number` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9787;

--
-- AUTO_INCREMENT for table `schemes`
--
ALTER TABLE `schemes`
  MODIFY `Scheme_ID` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=222223;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `Receipt_No` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=962668;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
