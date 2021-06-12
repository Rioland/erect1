-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 12, 2021 at 08:04 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cexio`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `uid` varchar(1000) DEFAULT NULL,
  `dollar` varchar(50) DEFAULT NULL,
  `euro` varchar(50) DEFAULT NULL,
  `bit` varchar(50) DEFAULT NULL,
  `eth` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`uid`, `dollar`, `euro`, `bit`, `eth`) VALUES
('1220579276', '0.00', '0.00', '0.00000000', '0.00000000'),
('5826311421', '0.00', '0.00', '0.00000000', '0.00000000'),
('104752876112185585152', '0.00', '0.00', '0.00000000', '0.00000000'),
('115887394515989524739', '0.00', '0.00', '0.00000000', '0.00000000');

-- --------------------------------------------------------

--
-- Table structure for table `market`
--

CREATE TABLE `market` (
  `id` int(11) DEFAULT NULL,
  `name` varchar(1000) DEFAULT NULL,
  `last_updated` varchar(1000) DEFAULT NULL,
  `market_cap` varchar(1000) DEFAULT NULL,
  `percent_change_1h` varchar(1000) DEFAULT NULL,
  `percent_change_7d` varchar(1000) DEFAULT NULL,
  `percent_change_24h` varchar(1000) DEFAULT NULL,
  `percent_change_30d` varchar(1000) DEFAULT NULL,
  `percent_change_60d` varchar(50) DEFAULT NULL,
  `percent_change_90d` varchar(50) DEFAULT NULL,
  `volume_24h` varchar(50) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `symbol` varchar(100) DEFAULT NULL,
  `circulating_supply` varchar(100) DEFAULT NULL,
  `cmc_rank` varchar(100) DEFAULT NULL,
  `date_added` varchar(100) DEFAULT NULL,
  `currency` varchar(100) DEFAULT NULL,
  `max_supply` varchar(1000) DEFAULT NULL,
  `num_market_pairs` varchar(1000) DEFAULT NULL,
  `platform` varchar(1000) DEFAULT NULL,
  `total_supply` varchar(100) DEFAULT NULL,
  `price` varchar(1000) DEFAULT NULL,
  `logo` varchar(1000) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `market`
--

INSERT INTO `market` (`id`, `name`, `last_updated`, `market_cap`, `percent_change_1h`, `percent_change_7d`, `percent_change_24h`, `percent_change_30d`, `percent_change_60d`, `percent_change_90d`, `volume_24h`, `slug`, `symbol`, `circulating_supply`, `cmc_rank`, `date_added`, `currency`, `max_supply`, `num_market_pairs`, `platform`, `total_supply`, `price`, `logo`, `description`) VALUES
(1, 'Bitcoin', '2021-06-01T21:24:06.000Z', '680575627563.95', '0.62521543', '-3.3752945', '-1.13956688', '-36.19716139', '-38.49728482', '-28.18949396', '34418971907.635', 'bitcoin', 'BTC', '18724006', '1', '2013-04-28T00:00:00.000Z', 'USD', '21000000', '9785', NULL, '18724006', '36347.757395717', 'vcxvcxvxv', NULL),
(1027, 'Ethereum', '2021-06-01T21:24:02.000Z', '300214593499.65', '0.94198502', '1.19298306', '-0.92785332', '-13.03289062', '23.2119769', '63.65990432', '27346078787.972', 'ethereum', 'ETH', '116116794.624', '2', '2015-08-07T00:00:00.000Z', 'USD', NULL, '6048', NULL, '116116794.624', '2585.4536759457', 'vcxvcxvxv', NULL),
(2010, 'Cardano', '2021-06-01T21:28:13.000Z', '55373464221.643', '0.70869262', '13.9168132', '3.49975635', '29.20239964', '44.67219149', '40.75415664', '4256868817.1458', 'cardano', 'ADA', '31948309440.748', '4', '2017-10-01T00:00:00.000Z', 'USD', '45000000000', '274', NULL, '45000000000', '1.7332204799237', 'vcxvcxvxv', NULL),
(1839, 'Binance Coin', '2021-06-01T21:28:11.000Z', '54629635954.698', '1.29040146', '6.60923402', '3.06440954', '-43.09342434', '5.17597347', '46.51567802', '3362162968.4659', 'binance-coin', 'BNB', '153432897', '5', '2017-07-25T00:00:00.000Z', 'USD', '170532785', '620', NULL, '169432897', '356.04904178208', 'vcxvcxvxv', NULL),
(52, 'XRP', '2021-06-01T21:29:03.000Z', '46506034995.272', '0.93509905', '7.24471175', '0.94079089', '-36.50514582', '65.73152609', '124.94885294', '5706360764.1176', 'xrp', 'XRP', '46151013329', '6', '2013-08-04T00:00:00.000Z', 'USD', '100000000000', '683', NULL, '99990399027', '1.0076926082585', 'vcxvcxvxv', NULL),
(74, 'Dogecoin', '2021-06-01T21:29:03.000Z', '44822724221.935', '1.85605756', '1.4385894', '6.28023617', '-11.76107606', '496.06414375', '581.63061157', '4066158080.4299', 'dogecoin', 'DOGE', '129840700870.73', '7', '2013-12-15T00:00:00.000Z', 'USD', NULL, '372', NULL, '129840700870.73', '0.34521320295829', 'vcxvcxvxv', NULL),
(6636, 'Polkadot', '2021-06-02T07:46:06.000Z', '22877287966.834', '2.07940327', '-1.37709604', '6.88913536', '-36.52299425', '-46.93186376', '-33.81355958', '2377052863.6032', 'polkadot-new', 'DOT', '944073067.71792', '8', '2020-08-19T00:00:00.000Z', 'USD', NULL, '201', NULL, '1079597182.5721', '24.232539566175', 'vcxvcxvxv', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(40) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `country` varchar(1000) NOT NULL,
  `auth_token` varchar(1000) DEFAULT NULL,
  `reset_pass_token` varchar(500) DEFAULT NULL,
  `token_date` varchar(1000) DEFAULT NULL,
  `is_verify` tinyint(1) DEFAULT NULL,
  `name` varchar(1000) DEFAULT NULL,
  `picture` varchar(1000) DEFAULT NULL,
  `gender` varchar(1000) DEFAULT NULL,
  `created_at` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `country`, `auth_token`, `reset_pass_token`, `token_date`, `is_verify`, `name`, `picture`, `gender`, `created_at`) VALUES
('104752876112185585152', 'riotech2222@gmail.com', '104752876112185585152', 'not set', '7fa941f1ff20725f2284bd1aca9d951e', NULL, NULL, NULL, 'Rio Tech', 'https://lh3.googleusercontent.com/a/AATXAJytmBsEzdsiWnAmky0xPbw4EMg_135o57T7ziVS=s96-c', NULL, '2021-06-11'),
('115887394515989524739', 'apezcodes@gmail.com', '115887394515989524739', 'not set', 'c6adfd421d4e44e7dfd67583dbb1a93a', NULL, NULL, NULL, 'apez codes', 'https://lh3.googleusercontent.com/a/AATXAJx7t5dC-p9ZihvdjcaBRlAWvsOt9ZshocsJMxvV=s96-c', NULL, '2021-06-11'),
('5826311421', 'riolandadedamola@gmail.com', '1111', 'NG', '20ab5be2cd82c079546813bc4918ff61', '9c65208bbd45c40b68c11aef2278f931', '2021-06-12 20:56:19', 1, NULL, NULL, NULL, '2021-06-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `market`
--
ALTER TABLE `market`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`) USING HASH;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
