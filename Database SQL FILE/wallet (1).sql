-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2022 at 11:40 AM
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
  `Admin_ID` int(99) NOT NULL,
  `Admin_Name` int(90) NOT NULL,
  `Admin_Password` int(30) NOT NULL,
  `Designation` varchar(100) NOT NULL,
  `How_Much_Approved` int(99) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(4752359, 9786, 2500000, 'Rayyan', 'VERAVAL', '', 2147483647, 0, 'Pending', '', '2022-10-30 20:58:50', 111111, 'One Piece', 2500000),
(9828865, 9786, 0, 'Rayyan', 'VERAVAL', '', 2147483647, 0, 'Pending', '', '2022-10-29 15:12:14', 0, '', 0);

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
  `Amount` int(50) NOT NULL,
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
(69, 'Web', 'Wallet', 'Bank', '.....', 99943150, '', '2022-01-01', 'No', 'No', 'thisBank@bank.com', 2147483647, 'No', '2022-10-31 15:26:17'),
(9786, 'Panja', 'Rayyan', 'Gulamhusen', '5555', 81850, '', '2004-01-27', 'No', 'No', 'illumi2701@gmail.com', 2147483647, 'No', '2022-10-31 15:20:48');

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
(111111, 'One Piece', 'JoyBoy', 2500000, '2022-10-29', 'Active', 1, 5),
(222222, '2 Piece', '2JoyBoy', 15452, '2022-10-29', 'Active', 0, 5);

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
(67754, 9786, 69, 250, '2022-10-31', '16:02:59', '2022-10-31 16:02:59', 'Wallet', 'Rayyan'),
(81692, 69, 9786, 25000, '2022-10-31', '15:46:09', '2022-10-31 15:46:09', 'Rayyan', 'Wallet'),
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
  MODIFY `Admin_ID` int(99) NOT NULL AUTO_INCREMENT;

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
  MODIFY `Account_number` int(99) NOT NULL AUTO_INCREMENT;

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
