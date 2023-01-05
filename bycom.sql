-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 05, 2023 at 10:44 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bycom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `mobile`, `type`, `password`, `image`) VALUES
(1, 'Admin', 'admin@bycom.com', '088102340929', 'admin', '$2y$10$lkbPD6BrmeMMlPF/WL1tcO0gvgRfPxXn2RvbRKSZlzRn9N48A7uAG', 'admin.png');

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE `cases` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'placeholder.png',
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hddSlot` tinyint NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`id`, `name`, `price`, `url`, `image`, `type`, `hddSlot`, `description`) VALUES
(1, 'Darkflash DLX4000', 1275000, 'https://tokopedia.link/ktkzpUkCcwb', 'Darkflash DLX4000.jpg', 'Mid Tower', 3, 'Case Size : 473*248*456mm\r\nMaterial : 0.8 SPCC / Metal / Tempered Glass\r\nMotherboard : E-ATX/ATX/ M-ATX/ ITX\r\nHDD / SSD : 3(Max.) / 3(Max.)\r\nExpansion Slots : 5 or7 Slots\r\nVGA Length : 425mm (Max.)\r\nCPU Height : 180mm (Max.)\r\nPower Supply : Bottom, 180mm, ATX\r\n\r\nRadiator Compatibility :\r\nFront : 240/ 360mm\r\nTop : 240/ 360mm\r\n\r\nFan Support :\r\nFront : 140mm*2/ 120mm*3 (Mesh Ver. only)\r\nRight(Front): 120mm*3 / 140mm*2\r\nRight(Rear): 120mm*3\r\nRear : 120mm*1\r\nTop : 120mm*3 / 140mm*2\r\nBottom : 120mm*1 / 140mm*1\r\n\r\nI/O :\r\nPower/ Reset/ USB3.0*2/\r\nType-C*1/ HD Audio\r\n'),
(2, 'Corsair iCUE 5000T', 5576000, 'https://tokopedia.link/jDRtHRbCcwb', 'Corsair iCUE 5000T.jpg', 'Mid Tower', 6, 'Maximum GPU Length (mm)\r\n400\r\nMaximum PSU Length (mm)\r\n250\r\nMaximum CPU Cooler Height (mm)\r\n170\r\nExpansion Slots\r\n7 vertical + 2 horizontal\r\nCase Drive Bays\r\n(x2) 3.5in (x4) 2.5in\r\nForm Factor\r\nMID TOWER\r\nCase Windowed\r\nTempered Glass\r\nCase Warranty\r\n2 Year\r\nColor\r\nBLACK/WHITE\r\nRadiator Compatibility\r\n120mm, 140mm, 240mm, 280mm, 360mm\r\nCase Front IO\r\n(1x) USB 3.1 Type C, (4x) USB 3.0, (1x) Audio in/out\r\nCompatible Corsair Liquid Coolers\r\nH55, H60, H75, H80i, H90, H100i, H105, H110i, H115i, H150i\r\nCase Power Supply\r\nATX'),
(3, 'MSI MEG Prospect 700R', 5799000, 'https://tokopedia.link/tjM8pV4Bcwb', 'MSI MEG Prospect 700R.png', 'Mid Tower', 4, 'Product Name MEG PROSPECT 700R\r\nForm Factor Mid-Tower\r\nMotherboard Form Factor\r\nSupport\r\nEATX (up to 310mmx304.8mm) / ATX / MATX / ITX\r\nI/O Ports\r\n2x USB 3.2 Gen 1 Type-A\r\n1x USB 3.2 Gen 2x2 Type-C\r\n1x HD Audio\r\n1x Mic\r\nDrive Mount Support 2x 2.5”\r\n2x 2.5\"/3.5”\r\nExpansion Slots 7\r\nMaximum GPU Length 400mm / 15.75 inches\r\nMaximum CPU Cooler Height 185mm / 7.28 inches\r\nPower Supply Support Standard ATX, max up to 220mm (without\r\n3.5\'\' HDD tray installed)\r\nFan Size Support\r\nFront: Up to 3 x 120 mm / 3 x 140 mm\r\nTop: Up to 3 x 120 mm / 3 x 140 mm\r\nRear: Up to 1 x 120 mm / 1x 140 mm\r\nSide: Up to 3 x 120 mm\r\nDimensions (DxWxH) 585x 257 x 537 mm / 23.03 x 10.12 x 21.14\r\ninches'),
(4, 'be quiet! Dark Base Pro 900', 4109000, 'https://tokopedia.link/ZA5e8h1Bcwb', 'be quiet! Dark Base Pro 900.jpg', 'Full Tower', 15, 'Specs, Warranty & Returns\r\n\r\nVersatile due to modular design\r\n\r\nTempered glass side panel\r\n\r\nQI charger for mobile phones\r\n\r\nLED lights\r\n\r\nThree be quiet! SilentWings® 3 PWM 140mm fans\r\n\r\nRadiators up to 420mm\r\n\r\nUp to 7 HDDs or 15 SSDs'),
(5, 'Cooler Master Cosmos C700M', 6899000, 'https://tokopedia.link/1ODxaTNBcwb', 'Cooler Master Cosmos C700M.png', 'Full Tower', 4, NULL),
(6, 'Paradox Gaming Case Dominion LE-01', 464000, 'https://tokopedia.link/wtOjDTn0hwb', 'Paradox Gaming Case Dominion LE-01.jpg', 'Mid Tower', 4, NULL),
(7, 'Powerlogic Armaggeddon NIMITZ N5', 382000, 'https://tokopedia.link/TtQWyNw3hwb', 'Powerlogic Armaggeddon NIMITZ N5.jpg', 'Micro ATX', 5, NULL),
(8, 'Infinity Nebula V2', 387000, 'https://tokopedia.link/qdDDGW53hwb', 'Infinity Nebula V2.jpg', 'Mid Tower', 4, NULL),
(9, 'PCCooler Platinum LM200 Mesh Black', 372000, 'https://tokopedia.link/XHdDRis4hwb', 'PCCooler Platinum LM200 Mesh Black.jpg', 'Mid Tower', 4, NULL),
(10, 'Raptor Black Strike 1660 ATX', 397000, 'https://tokopedia.link/pHR8GlQ4hwb', 'Raptor Black Strike 1660 ATX.png', 'Mid Tower', 4, NULL),
(11, 'Paradox Gaming Case Ignis', 341000, 'https://tokopedia.link/APFqQAPhjwb', 'Paradox Gaming Case Ignis.jpg', 'Mid Tower', 5, NULL),
(12, 'Simbadda BattleGround 20', 316000, 'https://tokopedia.link/JUg9Eb2hjwb', 'Simbadda BattleGround 20.jpg', 'Mid Tower', 3, NULL),
(13, 'Fractal Pop Mini Air RGB Black TG Clear Tint', 1080000, 'https://tokopedia.link/6uUzdDhijwb', 'Fractal Pop Mini Air RGB Black TG Clear Tint.jpg', 'Mini Tower', 4, NULL),
(14, 'LIAN LI O11 DYNAMIC MINI BLACK', 1890000, 'https://tokopedia.link/aCQVlSqijwb', 'LIAN LI O11 DYNAMIC MINI BLACK.jpg', 'Mini Tower', 4, NULL),
(15, 'Fractal Meshify 2 Mini White TG Clear Tint', 1846000, 'https://tokopedia.link/oP1HC1yijwbs', 'Fractal Meshify 2 Mini White TG Clear Tint.jpg', 'Mini Tower', 4, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cpus`
--

CREATE TABLE `cpus` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'placeholder.png',
  `cpuSocketId` bigint UNSIGNED NOT NULL,
  `coreCount` int NOT NULL,
  `coreClock` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `boostClock` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tdp` int NOT NULL,
  `integratedGraphic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cpus`
--

INSERT INTO `cpus` (`id`, `name`, `price`, `url`, `image`, `cpuSocketId`, `coreCount`, `coreClock`, `boostClock`, `tdp`, `integratedGraphic`, `description`) VALUES
(1, 'AMD Ryzen 5 5600G', 2445000, 'https://tokopedia.link/5bX6FFYqbwb', 'AMD Ryzen 5 5600G.jpg', 2, 6, '3.90 GHz', '4.40 GHz', 65, 'Radeon Vega 7', 'AMD Ryzen 5 5600G 3.9Ghz Up To 4.4Ghz Cache 16MB 65W AM4 [Box] - 6 Core - 100-100000252BOX - With AMD Wraith Stealth Cooler (Garansi AMD Global/AMD International 3 Years Replacement)\r\n\r\nMemory Support\r\nMemory Support DDR4 3200 MHz\r\nECC Memory No\r\nChannel Architecture Dual Channel\r\nPower\r\nThermal Design Power (TDP) 65 W\r\nIncluded Thermal Solution Wraith Stealth\r\nMaximum Temperature 203F / 95C\r\nThermal Monitoring Technologies Yes\r\nIntegrated Graphics\r\nGraphics Chipset AMD Radeon\r\nOutput Support DisplayPort, HDMI\r\nBase Clock Speed 1900 MHz\r\nAMD\r\nPerformance Technologies Precision Boost 2\r\nPackaging Info\r\nPackage Weight 0.98 lb\r\nBox Dimensions (LxWxH) 5.4 x 5.2 x 2.9\"'),
(2, 'Intel Core i7-12700K', 7438000, 'https://tokopedia.link/FbOAmT0qbwb', 'Intel Core i7-12700K.jpg', 7, 12, '3.60 GHz', '5.00 GHz', 190, 'Intel UHD Graphics 770', 'Total Cores : 12\r\n# of Performance-cores : 8\r\n# of Efficient-cores : 4\r\nTotal Threads : 20\r\nMax Turbo Frequency : 5.00 GHz\r\nIntel® Turbo Boost Max Technology : 3.0 Frequency ‡ 5.00 GHz\r\nPerformance-core Max Turbo Frequency : 4.90 GHz\r\nEfficient-core Max Turbo Frequency : 3.80 GHz\r\nPerformance-core Base Frequency : 3.60 GHz\r\nEfficient-core Base Frequency : 2.70 GHz\r\nCache : 25 MB Intel® Smart Cache\r\nTotal L2 Cache : 12 MB\r\nProcessor Base Power : 125 W\r\nMaximum Turbo Power : 190 W'),
(3, 'AMD Ryzen 7 5800x', 4209000, 'https://tokopedia.link/XS7IHa9qbwb', 'AMD Ryzen 7 5800x.jpg', 2, 8, '3.80 GHz', '4.70 GHz', 105, '', 'AMD Ryzen 7 5800X 3.8Ghz Up To 4.7Ghz Cache 32MB 105W AM4 [Box] - 8 Core - 100-100000063WOF (Garansi Lokal/AMD Indonesia)\r\n# of CPU Cores 8\r\n# of Threads 16\r\nBase Clock 3.8GHz\r\nMax Boost Clock Up to 4.7GHz\r\nTotal L2 Cache 4MB\r\nTotal L3 Cache 32MB\r\nUnlocked Yes\r\nCMOS TSMC 7nm FinFET\r\nPackage AM4\r\nPCI Express Version PCIe 4.0\r\nThermal Solution (PIB) Not included\r\nDefault TDP / TDP 105W'),
(4, 'AMD Ryzen 9 7950x', 12182000, 'https://tokopedia.link/06RDRbbrbwb', 'AMD Ryzen 9 7950x.jpg', 3, 16, '4.50 GHz', '5.70 GHz', 170, '', 'AMD Ryzen 9 7950X 4.5Ghz Up To 5.7Ghz Cache 64MB AM5 [Box] - 16 Core\r\nBrand AMD\r\nProcessors Type Desktop\r\nSeries Ryzen 9 7000 Series\r\nName Ryzen 9 7950X\r\nModel 100-100000514WOF\r\nDetailsCPU Socket Type Socket AM5\r\n# of Cores 16-Core\r\n# of Threads 32\r\nOperating Frequency 4.5 GHz\r\nMax Turbo Frequency Up to 5.7 GHz\r\nL1 Cache 1MB\r\nL2 Cache 16MB\r\nL3 Cache 64MB\r\nManufacturing Tech 5nm'),
(5, 'Intel Core i9-13900K', 10879000, 'https://tokopedia.link/tlpU8Herbwb', 'Intel Core i9-13900K.jpg', 7, 24, '3.00 GHz', '5.80 GHz', 253, 'Intel UHD Graphics 770', ''),
(6, 'Intel Core i5-8500', 1755000, 'https://tokopedia.link/KtWWh1IEhwb', 'Intel Core i5-8500.jpg', 5, 6, '3.00 GHz', '4.10 GHz', 65, 'Intel UHD Graphics 630', ''),
(7, 'Intel Core i5-7600', 1005000, 'https://tokopedia.link/nxzJwLZEhwb', 'Intel Core i5-7600.jpg', 4, 4, '3.50 GHz', '4.10 GHz', 65, 'Intel HD Graphics 630', ''),
(8, 'Intel Core i5-10400', 1887000, 'https://tokopedia.link/V2RY2FgFhwb', 'Intel Core i5-10400.jpg', 6, 6, '2.90 GHz', '4.30 GHz', 65, 'Intel UHD Graphics 630', ''),
(9, 'AMD Ryzen 5 4500', 1530000, 'https://tokopedia.link/MWwLKSrFhwb', 'AMD Ryzen 5 4500.jpg', 2, 6, '3.6 GHz', '4.1 GHz', 65, '', ''),
(10, 'AMD Ryzen 5 3600', 1958000, 'https://tokopedia.link/7uEmK7HFhwb', 'AMD Ryzen 5 3600.jpg', 2, 6, '3.6 GHz', '4.2 GHz', 65, '', ''),
(11, 'Intel Core i3-10105F', 1129000, 'https://tokopedia.link/PEJLQMfSiwb', 'Intel Core i3-10105F.jpg', 6, 4, '3.70 GHz', '4.40 GHz', 65, '', ''),
(12, 'Intel Core i3 12100F', 1673000, 'https://tokopedia.link/oclcCauSiwb', 'Intel Core i3 12100F.jpg', 7, 4, '3.30 GHz', '4.30 GHz', 89, '', ''),
(13, 'Intel Core i3 13100', 2520000, 'https://tokopedia.link/SZkUlIhUiwb', 'Intel Core i3 13100.png', 7, 4, '3.40 GHz', '4.50 GHz', 89, 'Intel UHD Graphics 730', ''),
(14, 'AMD Ryzen 3 3200G', 1489000, 'https://tokopedia.link/vu19wwEUiwb', 'AMD Ryzen 3 3200G.jpg', 2, 4, '3.6 GHz', '4.0 GHz', 65, 'Radeon Vega 8', ''),
(15, 'AMD Ryzen 3 4100', 1135000, 'https://tokopedia.link/fxnVcLiViwb', 'AMD Ryzen 3 4100.jpg', 2, 4, '3.8 GHz', '4.0 GHz', 65, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cpu_sockets`
--

CREATE TABLE `cpu_sockets` (
  `id` bigint UNSIGNED NOT NULL,
  `socketName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `introductionYear` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpuVendor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cpu_sockets`
--

INSERT INTO `cpu_sockets` (`id`, `socketName`, `introductionYear`, `cpuVendor`) VALUES
(1, 'AM3+', '2012-03', 'AMD'),
(2, 'AM4', '2016-10', 'AMD'),
(3, 'AM5', '2022-10', 'AMD'),
(4, 'LGA 1151', '2015-08', 'Intel'),
(5, 'LGA 1151 v2', '2017-08', 'Intel'),
(6, 'LGA 1200', '2020-04', 'Intel'),
(7, 'LGA 1700', '2021-11', 'Intel');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gpus`
--

CREATE TABLE `gpus` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'placeholder.png',
  `license` enum('Intel','AMD','Nvidia') COLLATE utf8mb4_unicode_ci NOT NULL,
  `memorySize` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tdp` int NOT NULL,
  `boostClock` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `length` int NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gpus`
--

INSERT INTO `gpus` (`id`, `name`, `price`, `url`, `image`, `license`, `memorySize`, `tdp`, `boostClock`, `length`, `description`) VALUES
(1, 'ASUS Dual Radeon RX 6600', 3870000, 'https://tokopedia.link/UOAKTnaGdwb', 'ASUS Dual Radeon RX 6600.png', 'AMD', '8GB', 132, '2491 MHz', 243, 'Graphic EngineRadeon RX 6600\r\nBus StandardPCI Express 4.0\r\nOpenGLOpenGL®4.6\r\nVideo Memory8GB GDDR6\r\nEngine Clock\r\nOC mode : up to 2491 MHz (Boost Clock)/up to 2064 MHz (Game Clock)\r\nGaming mode : up to 2491 MHz (Boost Clock)/up to 2044 MHz (Game Clock)\r\nStream Processors1792\r\nMemory Speed 14 Gbps\r\nMemory Interface 128-bit\r\nResolution Digital Max Resolution 7680 x 4320\r\nInterface\r\nYes x 1 (Native HDMI 2.1)\r\nYes x 3 (Native DisplayPort 1.4a)\r\nHDCP Support Yes (2.3)\r\nMaximum Display Support 4\r\nNVlink/ Crossfire Support Yes\r\nAccessories\r\n1 x Collection Card\r\n1 x Speedsetup Manual\r\nSoftware\r\nASUS GPU Tweak II & Drivers: please download all software from the support site.\r\nDimensions\r\n243 x 134 x 49 mm\r\n9.6 x 5.3 x 1.9 inches\r\nRecommended PSU 500W\r\nPower Connectors 1 x 8-pin\r\nSlot 2.5 Slot'),
(2, 'GeForce RTX 3070 Ti GAMING X TRIO 8G', 9684000, 'https://tokopedia.link/XDJWZXqEdwb', 'GeForce RTX 3070 Ti GAMING X TRIO 8G.png', 'Nvidia', '8GB', 310, '1830 MHz', 323, 'Model Name GeForce RTX™ 3070 Ti GAMING X TRIO 8G\r\nGraphics Processing Unit NVIDIA® GeForce RTX™ 3070 Ti\r\nInterface PCI Express® Gen 4\r\nCore Clocks Boost: 1830 MHz\r\nCUDA® CORES 6144 Units\r\nMemory Speed 19 Gbps\r\nMemory 8GB GDDR6X\r\nMemory Bus 256-bit\r\nOutput\r\nDisplayPort x 3 (v1.4a)\r\nHDMI x 1 (Supports 4K@120Hz as specified\r\nin HDMI 2.1)\r\nHDCP Support Y\r\nPower consumption 310 W\r\nPower connectors 8-pin x2\r\nRecommended PSU 750 W\r\nCard Dimension (mm) 323 x 140 x 56 mm\r\nWeight (Card / Package) 1515 g / 2343 g\r\nDirectX Version Support 12 API\r\nOpenGL Version Support 4.6\r\nMaximum Displays 4\r\nVR Ready Y\r\nG-SYNC® technology Y\r\nAdaptive Vertical Sync Y\r\nDigital Maximum Resolution 7680 x 4320'),
(3, 'ASUS Radeon RX 6800', 7900000, 'https://tokopedia.link/woLMjMWGdwb', 'ASUS Radeon RX 6800.jpg', 'AMD', '16GB', 250, '2105 MHz', 267, 'Graphic Engine\r\nAMD Radeon RX 6800\r\nBus Standard\r\nPCI Express 4.0\r\nOpenGL\r\nOpenGL®4.6\r\nVideo Memory\r\n16GB GDDR6\r\nEngine Clock\r\nOC mode : Up to 2190MHz (Boost Clock)/ Up to 1980 MHz (Game Clock)\r\nGaming mode : Up to 2155MHz (Boost Clock)/ Up to 1925 MHz (Game Clock)\r\nStream Processors\r\n3840\r\nMemory Speed\r\n16 Gbps\r\nMemory Interface\r\n256-bit\r\nResolution\r\nDigital Max Resolution 7680 x 4320\r\nInterface\r\nYes x 1 (Native HDMI2.1)\r\nYes x 3 (Native DisplatPort 1.4a)\r\nYes (2.3)'),
(4, 'XFX Radeon RX 7900 XTX 24GB GDDR6 Gaming', 18900000, 'https://tokopedia.link/0Xd78m8Idwb', 'XFX Radeon RX 7900 XTX 24GB GDDR6 Gaming.jpg', 'AMD', '24GB', 355, '2500 MHz', 300, '‍Bus Type: PCI-E 4.0\r\n\r\nPrimary Clock Speeds:\r\nBase clock Up to: 1900 MHz\r\nGame Clock Up To: 2300 MHz*\r\nBoost clock Up to: 2500 MHz**\r\n\r\nStream Processors: 6144\r\nCompute Units: 96\r\nMemory Bus: 384bit\r\nMemory Clock: 20 Gbps\r\nMemory Size: 24 GB\r\nMemory Bandwidth: Up to 960 GB/ss\r\nEffective Memory Bandwidth: Up to 3500 GB/s\r\nMemory Type: GDDR6\r\nCard Profile: 2.5 slot\r\nThermal Solution: 3 Fan\r\n\r\nOutputs\r\n\r\n‍DisplayPort 2.1: 2x\r\nHDMI™ 2.1: 1x\r\nUSB Type-C: 1x'),
(5, 'MSI GeForce RTX 4090 SUPRIM X 24G', 34683000, 'https://tokopedia.link/bx7S5Y7Jdwb', 'MSI GeForce RTX 4090 SUPRIM X 24G.jpg', 'Nvidia', '24GB', 480, '2625 MHz', 336, NULL),
(6, 'GALAX Geforce GTX 1630 4GB DDR6 EX', 2350000, 'https://tokopedia.link/i0LlMEIiiwb', 'GALAX Geforce GTX 1630 4GB DDR6 EX.png', 'Nvidia', '4GB', 75, '1800 MHz', 181, NULL),
(7, 'MSI Geforce GTX 1650 4GB DDR5', 2710000, 'https://tokopedia.link/7UqgifWiiwb', 'MSI Geforce GTX 1650 4GB DDR5.png', 'Nvidia', '4GB', 75, '1695 MHz', 177, NULL),
(8, 'MSI Radeon RX 6400 AERO ITX 4G', 2629000, 'https://tokopedia.link/xE8EeRMBdwb', 'MSI Radeon RX 6400 AERO ITX 4G.png', 'AMD', '4GB', 53, '2321 MHz', 172, NULL),
(9, 'PowerColor Radeon RX 6500 XT ITX 4GB DDR6', 2948000, 'https://tokopedia.link/sXyxZ1ojiwb', 'PowerColor Radeon RX 6500 XT ITX 4GB DDR6.png', 'AMD', '4GB', 107, '2815 MHz', 165, NULL),
(10, 'GALAX Geforce GTX 1660 Ti 6GB DDR6', 3600000, 'https://tokopedia.link/k66aTgFjiwb', 'GALAX Geforce GTX 1660 Ti 6GB DDR6.png', 'Nvidia', '6GB', 120, '1785 Mhz', 228, NULL),
(11, 'Asus GeForce GTX 1050 Ti 4GB DDR5', 2978000, 'https://tokopedia.link/5ruzWm19iwb', 'Asus GeForce GTX 1050 Ti 4GB DDR5.png', 'Nvidia', '4GB', 75, '1455 MHz', 203, NULL),
(12, 'MSI GeForce GT 1030 AERO ITX 2GD4 OC', 1539000, 'https://tokopedia.link/KTLndHlajwb', 'MSI GeForce GT 1030 AERO ITX 2GD4 OC.png', 'Nvidia', '2GB', 20, '1430 MHz', 147, NULL),
(13, 'Biostar Radeon RX 550 4GB DDR5', 1708000, 'https://tokopedia.link/sRsvMiuajwb', 'Biostar Radeon RX 550 4GB DDR5.jpg', 'AMD', '4GB', 60, '1183 MHz', 171, NULL),
(14, 'Biostar Radeon RX 560 4GB DDR5', 2127000, 'https://tokopedia.link/nICE7sUajwb', 'Biostar Radeon RX 560 4GB DDR5.jpg', 'AMD', '4GB', 75, '1275 MHz', 170, NULL),
(15, 'MSI GTX 1060 Gaming X 6GB', 2150000, 'https://tokopedia.link/7O7huZnbjwb', 'MSI GTX 1060 Gaming X 6GB.png', 'Nvidia', '6GB', 120, '1784 MHz', 277, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `internal_storages`
--

CREATE TABLE `internal_storages` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'placeholder.png',
  `capacity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `internal_storages`
--

INSERT INTO `internal_storages` (`id`, `name`, `price`, `url`, `image`, `capacity`, `type`, `description`) VALUES
(1, 'Patriot Viper VP4100 1TB', 2520000, 'https://tokopedia.link/TxEzWLAfjwb', 'Patriot Viper VP4100 1TB.jpg', '1TB', 'SSD NVME Gen 4', 'Brand : Patriot\r\nType : VP-4100\r\nCapacity : 1TB\r\nInterface : PCIe Gen4 x4, NVMe 1.3\r\nPhison E16 Series Controller\r\n2280 M.2 PCIe Gen4 x 4, NVMe 1.3\r\nExternal thermal sensor\r\nlow profile heatshield design\r\nadvanced wear leveling, etc.\r\n\r\nSequential (ATTO): up to 5,000MB/s Read and up to 4,400MB/s Write'),
(2, 'Crucial P3 Plus SSD 500GB', 765000, 'https://tokopedia.link/HmRX8l56hwb', 'Crucial P3 Plus SSD 500GB.png', '500GB', 'SSD NVME PCIe Gen 4.0', 'SSD series - P3 Plus\r\nInterface - NVMe (PCIe Gen 4 x4)\r\nCapacity - 500GB\r\nForm factor - M.2 (2280)\r\nSequential Read - 4700 MB/s\r\nSequential Write - 1900 MB/s\r\nSSD Endurance (TBW) - 110 Terabytes'),
(3, 'Kingston SSD NV2 250GB', 423000, 'https://tokopedia.link/0KveeMd6hwb', 'Kingston SSD NV2 250GB.jpg', '250GB', 'SSD NVME PCIe Gen 4.0', 'Form Faktor M.2 2280\r\nAntarmuka PCIe 4.0 x4 NVMe\r\nKapasitas2 250GB, 500GB, 1TB, 2TB\r\nBaca/Tulis Berurutl1 250GB – 3.000/1.300MB/dtk\r\nDaya tahan (Total Byte Ditulis)3 250GB – 80TB\r\nSuhu Penyimpanan -40°C~85°C\r\nSuhu Pengoperasian 0°C~70°C\r\nDimensi 22mm x 80mm x 2,2mm'),
(4, 'Samsung SSD 980 M.2 PCIe Gen3 x4 500GB MZ-V8V500BW', 841000, 'https://tokopedia.link/vnT9icavfwb', 'Samsung SSD 980 M.2 PCIe Gen3 x4 500GB MZ-V8V500BW.png', '500GB', 'SSD NVME PCIe Gen 3', 'Form Factor : Single-Sided M.2 2280\r\nInterface : PCIe 3.0 x4, NVMe 1.4\r\nController : Samsung Pablo\r\nDRAM : None\r\nNAND Flash : Samsung 128L 512Gb TLC\r\nSequential Read : 2900 MB/s (250GB), 3100 MB/s (500GB), 3500 MB/s (1TB)\r\nSequential Write : 1300 MB/s (250GB), 2600 MB/s (500GB), 3000 MB/s (1TB)\r\nMax SLC Cache Size : 45 GB (250GB), 122 GB (500GB), 160 GB (1TB)\r\nRandom Read\r\nRandom Write\r\nIOPS : QD1 53k (250GB), 54k ( 500GB / 1TB)\r\nQD32T16 : 320k (250GB), 470k (500GB), 480k (500GB)\r\nPower Read : 3.7 W (250GB), 4.3 W (500GB), 4.5 W (1TB)\r\nPower Write : 3.2 W (250GB), 4.2 W (500GB), 4.6 W (1TB)\r\nManagement Software : Samsung Magician\r\nData Encryption : AES 256-bit Full Disk Encryption, TCG/Opal V2.0, Encrypted Drive (IEEE1667)\r\nWarranty : 5 years'),
(5, 'Adata SX6000 Lite 128GB', 305000, 'https://tokopedia.link/lUgKxNkfjwb', 'Adata SX6000 Lite 128GB.jpg', '128GB', 'SSD NVME Gen 3', NULL),
(6, 'SSD ADATA SU800 1TB SATA III', 2105000, 'https://tokopedia.link/oXQD2MCvfwb', 'SSD ADATA SU800 1TB SATA III.jpg', '1TB', 'SSD SATA III', NULL),
(7, 'V-GeN Rescue SSD 960GB SATA3', 793000, 'https://tokopedia.link/aR6CDmqiiwb', 'V-GeN Rescue SSD 960GB SATA3.jpg', '960GB', 'SSD SATA III', NULL),
(8, 'Transcend MTS830 512GB M.2 SATA III', 683000, 'https://tokopedia.link/2UUalAovfwb', 'Transcend MTS830 512GB M.2 SATA III.jpg', '512GB', 'SSD M.2 Sata III', NULL),
(9, 'Team T-Force Vulcan Z SSD 240GB SATA3', 326000, 'https://tokopedia.link/EuMWLwbiiwb', 'Team T-Force Vulcan Z SSD 240GB SATA3.jpg', '240gb', 'SSD SATA III', NULL),
(10, 'V-GeN Rescue SSD 120GB SATA3', 175000, 'https://tokopedia.link/9WeVw3Mejwb', 'V-GeN Rescue SSD 120GB SATA3.jpg', '120GB', 'SSD SATA III', NULL),
(11, 'Toshiba 2TB SATA3 256MB 7200RPM - P300 Series', 801000, 'https://tokopedia.link/x53R21Kvfwb', 'Toshiba 2TB SATA3 256MB 7200RPM - P300 Series.png', '2TB', 'HDD 3.5 7200RPM', NULL),
(12, 'Seagate 1TB SATA3', 641000, 'https://tokopedia.link/PYqOXxE5hwb', 'Seagate 1TB SATA3.jpg', '1TB', 'HDD 3.5 7200RPM', NULL),
(13, 'WDC Blue 500GB 3.5', 135000, 'https://tokopedia.link/knHJrkCejwbs', 'WDC Blue 500GB 3.5.jpg', '500GB', 'HDD 3.5 7200RPM', NULL),
(14, 'HDD 250GB Seagate', 70000, 'https://tokopedia.link/r8P5eJ5ejwb', 'HDD 250GB Seagate.jpg', '250GB', 'HDD 3.5 7200RPM', NULL),
(15, 'WDC Purple Surveillance 2TB - WD22PURZ', 897000, 'https://tokopedia.link/WyrwxaOvfwb', 'WDC Purple Surveillance 2TB - WD22PURZ.jpg', '2TB', 'HDD 3.5 5400RPM', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `memories`
--

CREATE TABLE `memories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'placeholder.png',
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count` int NOT NULL,
  `capacityPerPiece` int NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `memories`
--

INSERT INTO `memories` (`id`, `name`, `price`, `url`, `image`, `type`, `count`, `capacityPerPiece`, `description`) VALUES
(1, 'CORSAIR VENGEANCE 64GB 2x32GB DDR5 DRAM 5600Mz', 20769000, 'https://tokopedia.link/JSY4pbu2cwb', 'CORSAIR VENGEANCE 64GB 2x32GB DDR5 DRAM 5600Mz.jpg', 'DDR5-5600', 2, 32, 'Fan Included No\r\nMemory Series VENGEANCE DDR5\r\nMemory Type DDR5\r\nPMIC Type Overclock PMIC\r\nMemory Size 64GB (2 x 32GB)\r\nTested Latency 40-40-40-77\r\nTested Voltage 1.25\r\nTested Speed 5600\r\n\r\nSPD Latency 32-32-32-64\r\nSPD Speed 4000MHz\r\nSPD Voltage 1.1V\r\nSpeed Rating PC5-44800 (DDR5-5600)\r\nCompatibility Intel 600 Series\r\nHeat Spreader Aluminum\r\nPackage Memory Format DIMM\r\nPerformance Profile XMP 3.0\r\nPackage Memory Pin 288'),
(2, 'Team Elite Plus Black DDR5 PC38400 64GB', 4382000, 'https://tokopedia.link/bBHFoXc2cwb', 'Team Elite Plus Black DDR5 PC38400 64GB.jpg', 'DDR5-4800', 2, 32, 'Series	Elite Plus Black\r\nCapacity	64GB\r\nType	DDR5 288 Pin\r\nSpeed	PC38400 (4800MHz)\r\nCas Latency	-\r\nVoltage	1.1 V\r\nTiming	-\r\nWarranty	Lifetime'),
(3, 'Corsair DDR4 Vengeance RGB RS PC28800 32GB', 2005000, 'https://tokopedia.link/NHv1xVm1cwb', 'Corsair DDR4 Vengeance RGB RS PC28800 32G.jpg', 'DDR4-3600', 2, 16, 'Memory Series VENGEANCE RGB RS\r\nMemory Type DDR4\r\nMemory Size 32GB (2 x 16GB)\r\nTested Latency 18-22-22-42\r\nTested Voltage 1.35\r\nTested Speed 3600'),
(4, 'ADATA DDR4 XPG SPECTRIX D50 PC28800 3600MHz 32GB', 1891000, 'https://tokopedia.link/InxovsB1cwb', 'ADATA DDR4 XPG SPECTRIX D50 PC28800 3600MHz 32GB.jpg', 'DDR4-3600', 2, 16, 'Product Name : ADATA DDR4 XPG SPECTRIX D50 PC28800 3600MHz 32GB (2X16GB) Dual Channel - RGB\r\nBrand : ADATA\r\nSeries : SPECTRIX D50\r\nCapacity : 32GB (2X16GB)\r\nType : 288-pin DDR4 DIMM\r\nSpeed : DDR4 PC28800 (3600Mhz)'),
(5, 'Team T-Force Vulcan Z Red DDR4 PC25600 3200MHz', 831000, 'https://tokopedia.link/BfpCWMcOiwb', 'Team T-Force Vulcan Z Red DDR4 PC25600 3200MHz.jpg', 'DDR4-3200', 2, 16, NULL),
(6, 'CUBE GAMING DDR4 3200MHz PC25600 Dual Channel 16GB', 625000, 'https://tokopedia.link/RGCVLvrljwb', 'CUBE GAMING DDR4 3200MHz PC25600 Dual Channel 16GB.jpg', 'DDR4-3200', 2, 8, NULL),
(7, 'V-GeN TsunamiX RGB DDR4 PC25600 3200Mhz Dual Channel 8GB', 732000, 'https://tokopedia.link/wMHmBAy0cwb', 'V-GeN TsunamiX RGB DDR4 PC25600 3200Mhz Dual Channel 8GB.jpg', 'DDR4-3200', 2, 4, NULL),
(8, 'Apacer DDR4 PC21000 2666Mhz 8GB', 413000, 'https://tokopedia.link/ywz5Z9SLiwb', 'Apacer DDR4 PC21000 2666Mhz 8GB.jpg', 'DDR4-2666', 1, 8, NULL),
(9, 'KINGSTON HYPERX FURY DDR4 8GB 2666MHz 21300', 390000, 'https://tokopedia.link/LCQjSm6Miwb', 'RAM KINGSTON HYPERX FURY DDR4 8GB 2666MHz 21300.jpg', 'DDR4-2666', 1, 8, NULL),
(10, 'V-GeN Tsunami R DDR4 PC21000 2666Mhz 8GB', 537000, 'https://tokopedia.link/XZojOrbljwb', 'V-GeN Tsunami R DDR4 PC21000 2666Mhz 8GB.jpg', 'DDR4-2666', 2, 4, NULL),
(11, 'V-GeN Platinum DDR4 4GB PC21000', 244000, 'https://tokopedia.link/Bct92c4kjwb', 'V-GeN Platinum DDR4 4GB PC21000.jpg', 'DDR4-2666', 1, 4, NULL),
(12, 'Team Elite Plus Black DDR4 PC19200 2400Mhz Dual Channel 16GB', 795000, 'https://tokopedia.link/QbFMPLDljwb', 'Team Elite Plus Black DDR4 PC19200 2400Mhz Dual Channel 16GB.jpg', 'DDR4-2400', 2, 8, NULL),
(13, 'Team Elite Plus Black DDR4 PC19200 2400Mhz 8GB', 408000, 'https://tokopedia.link/rA3J71dMiwb', 'Team Elite Plus Black DDR4 PC19200 2400Mhz 8GB.jpg', 'DDR4-2400', 1, 8, NULL),
(14, 'Avexir DDR4 Budget 2400MHZ 8GB', 514000, 'https://tokopedia.link/x1YRSupOiwb', 'Avexir DDR4 Budget 2400MHZ 8GB.jpg', 'DDR4-2400', 1, 8, NULL),
(15, 'Team Elite Plus Black DDR4 PC19200 2400Mhz 4GB', 316000, 'https://tokopedia.link/jAz5Mxkljwb', 'Team Elite Plus Black DDR4 PC19200 2400Mhz 4GB.jpg', 'DDR4-2400', 1, 4, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_24_020147_create_admins_table', 1),
(6, '2022_12_23_014435_create_cpu_sockets_table', 1),
(7, '2022_12_23_071043_create_cases_table', 1),
(8, '2022_12_23_072159_create_motherboards_table', 1),
(9, '2022_12_23_072903_create_cpus_table', 1),
(10, '2022_12_23_073419_create_memories_table', 1),
(11, '2022_12_23_073638_create_gpus_table', 1),
(12, '2022_12_23_073917_create_power_supplies_table', 1),
(13, '2022_12_23_074156_create_internal_storages_table', 1),
(14, '2022_12_27_024355_create_pc_builds_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `motherboards`
--

CREATE TABLE `motherboards` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'placeholder.png',
  `cpuSocketId` bigint UNSIGNED NOT NULL,
  `formFactor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `memoryMaxGB` int NOT NULL,
  `memorySlot` int NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `motherboards`
--

INSERT INTO `motherboards` (`id`, `name`, `price`, `url`, `image`, `cpuSocketId`, `formFactor`, `memoryMaxGB`, `memorySlot`, `description`) VALUES
(1, 'Asus PRIME B450M-A II', 1178000, 'https://tokopedia.link/W3JNG6qEcwb', 'Asus PRIME B450M-A II.png', 2, 'Micro ATX', 128, 4, 'CPU\r\nAMD AM4 Socket for AMD Ryzen™ 5000 Series/ 5000 G-Series/ 4000 G-Series/ 3rd/2nd/1st Gen AMD Ryzen™/ 2nd and 1st Gen AMD Ryzen™ with Radeon™ Vega Graphics/ Athlon™ with Radeon™ Vega Graphics Processors *\r\nChipset\r\nAMD B450\r\nMemory\r\n3rd/2nd/1st Gen AMD Ryzen™/ 2nd and 1st Gen AMD Ryzen™ with Radeon™ Vega Graphics/ Athlon™ with Radeon™ Vega Graphics Processors\r\n4 x DIMM, Max. 128GB, DDR4 4400(O.C)/4000(O.C.)/3866(O.C.)/3733(O.C.)/3600(O.C.)/3466(O.C.)/3400(O.C.)/3300(O.C.)/3200(O.C.)/3000(O.C.)/2800(O.C.)/2666/2400/2133 MHz Un-buffered Memory *\r\nDual Channel Memory Architecture\r\nECC Memory (ECC mode) support varies by CPU.'),
(2, 'Asus TUF Gaming Z690-PLUS WiFi D4', 5051000, 'https://tokopedia.link/e3dVvQBUcwb', 'Asus TUF Gaming Z690-PLUS WiFi D4.jpg', 7, 'ATX', 128, 4, 'Intel® Z690 (LGA 1700) ATX gaming motherboard, 15 DrMOS power stages, PCIe® 5.0, DDR4 memory, four M.2 slots, WiFi 6 and Intel 2.5 Gb Ethernet, HDMI®, DisplayPort™, USB 3.2 Gen 2x2 Type-C®, front USB 3.2 Gen 2 Type C, SATA 6 Gbps, Thunderbolt™ 4 support and Aura Sync RGB lighting\r\n\r\nIntel® LGA 1700 socket: Ready for 12th Gen Intel Core™ processors\r\nEnhanced power solution: 14+1 DrMOS, six-layer PCB, ProCool sockets, alloy chokes and durable capacitors for stable power delivery\r\nNext-gen connectivity: PCIe® 5.0, USB 3.2 Gen2x2 Type-C®, front USB 3.2 Gen 2 Type-C, Thunderbolt™ 4 header support'),
(3, 'ASRock X570 Taichi', 4989000, 'https://tokopedia.link/fLJKgp2Fcwb', 'ASRock X570 Taichi.jpg', 2, 'ATX', 128, 4, 'Supports AMD AM4 Socket Ryzen™ 2000, 3000, 4000 G-Series, 5000 and 5000 G-Series Desktop Processors\r\nIntel® Wi-Fi 6 802.11ax (2.4Gbps) + BT 5.2\r\nSupports DDR4 4666+ (OC)\r\n3 PCIe 4.0 x16, 2 PCIe 4.0 x1\r\nNVIDIA® NVLink™, Quad SLI™, AMD 3-Way CrossFireX™\r\n7.1 CH HD Audio (Realtek ALC1220 Audio Codec), Supports Purity Sound™ 4 & DTS Connect\r\n8 SATA3, 2 Hyper M.2 (PCIe Gen4 x4 & SATA3), 1 Hyper M.2 (PCIe Gen4 x4)\r\n3 USB 3.2 Gen2 (Rear Type A+C, Front Type-C), 8 USB 3.2 Gen1 (2 Front, 6 Rear)\r\nIntel® Gigabit LAN\r\nASRock Polychrome SYNC'),
(4, 'Asus ROG CROSSHAIR X670E EXTREME', 17179000, 'https://tokopedia.link/ORe3axBFcwb', 'Asus ROG CROSSHAIR X670E EXTREME.png', 3, 'EATX', 128, 4, 'CPU\r\nAMD Socket AM5 for AMD Ryzen™ 7000 Series\r\nDesktop Processors*\r\n* Refer to www.asus.com for CPU support\r\nlist.\r\nChipset\r\nAMD X670\r\nMemory\r\n4 x DIMM, Max. 128GB, DDR5 \r\n6400+(OC)/6200(OC)/ 6000(OC)/ 5800(OC)/ 5600/ 5400/ 5200/ 5000/ 4800 ECC and Non-ECC,Un-buffered Memory*\r\nDual Channel Memory Architecture\r\nSupports AMD EXTended Profiles for Overclocking (EXPO™)\r\nOptiMem II\r\n* Supported memory types, data rate(Speed), and number of DRAM module vary depending on the CPU and memory configuration, for more information refer to www.asus.com for\r\nmemory support list.\r\n* Non-ECC, Un-buffered DDR5 Memory supports On-Die ECC function.\r\nGraphics\r\n2 x USB4® ports support USB Type-C® display outputs*\r\n* VGA resolution support depends on processors\' or graphic cards\' resolution.\r\nExpansion Slots\r\nAMD Ryzen™ 7000 Series Desktop Processors\r\n2 x PCIe 5.0 x16 slots (supports x16 or x8/x8 modes)*\r\nAMD X670 Chipset\r\n1 x PCIe 4.0 x4 slot\r\n*When the PCIe 5.0 M.2 card is installed on the PCIEX16(G5)_2, PCIEX16(G5)_1 will run x8 only. \r\n*When M.2_2 is enabled, PCIEX16(G5)_1 will run x8 and PCIEX16(G5)_2 will run x4.\r\nStorage\r\nTotal supports 5 x M.2 slots and 6 x SATA 6Gb/s ports*\r\nAMD Ryzen™ 7000 Series Desktop Processors\r\nM.2_1 slot (Key M), type 2242/2260/2280 (supports PCIe 5.0 x4 mode)\r\nM.2_2 slot (Key M), type 2242/2260/2280 (supports PCIe 5.0 x4 mode)**\r\nGEN-Z.2_1 slot (Key M) via ROG GEN-Z.2, type 2242/2260/2280/22110 (supports PCIe 5.0 x4 mode)***\r\nPCIe 5.0 M.2 slot (Key M) via PCIe 5.0 M.2 card, type 2242/2260/2280/22110 (supports PCIe 5.0 x4 mode)***\r\nAMD X670 Chipset\r\nGEN-Z.2_2 slot (Key M) via ROG GEN-Z.2, type 2242/2260/2280/22110 (supports PCIe 4.0 x4 mode)\r\n6 x SATA 6Gb/s ports\r\n*AMD RAIDXpert2 Technology supports both NVMe RAID 0/1/10 and SATA RAID 0/1/10.\r\n** When M.2_2 is enabled, PCIEX16(G5)_1 will run x8 and PCIEX16(G5)_2 will run x4.\r\n*** Performance may very depending on the SSD’s firmware version, the system hardware and system configuration, for more information refer to www.asus.com for device support list.'),
(5, 'MSI MEG Z690 ACE', 12264000, 'https://tokopedia.link/rXYMmldVcwb', 'MSI MEG Z690 ACE.jpg', 7, 'EATX', 128, 4, NULL),
(6, 'Biostar H310MHP', 852000, 'https://tokopedia.link/GGOxH2mGhwb', 'Biostar H310MHP.png', 5, 'Micro ATX', 32, 2, NULL),
(7, 'Asrock Fatal1ty B250 Gaming K4', 1500000, 'https://tokopedia.link/pGziisBIhwb', 'Asrock Fatal1ty B250 Gaming K4.jpg', 4, 'ATX', 64, 4, NULL),
(8, 'MSI H510M PRO-E', 1059000, 'https://tokopedia.link/6z23CtTIhwb', 'MSI H510M PRO-E.png', 6, 'Micro ATX', 64, 2, NULL),
(9, 'ASRock B450M-HDV', 1051000, 'https://tokopedia.link/roU65RtJhwb', 'ASRock B450M-HDV.png', 2, 'Micro ATX', 64, 2, NULL),
(10, 'Biostar A320MH', 765000, 'https://tokopedia.link/FgzqLXQJhwb', 'Biostar A320MH.png', 2, 'Micro ATX', 32, 2, NULL),
(11, 'ASRock H510M-HVS R2.0', 1040000, 'https://tokopedia.link/ffp8jM8Viwb', 'ASRock H510M-HVS R2.0.png', 6, 'Micro ATX', 64, 2, NULL),
(12, 'Biostar H610MH', 1295000, 'https://tokopedia.link/htLm9BqWiwb', 'Biostar H610MH.png', 7, 'Micro ATX', 64, 2, NULL),
(13, 'MSI MAG B660M Bazooka DDR4', 2857000, 'https://tokopedia.link/iIdkQ8Sljwb', 'MSI MAG B660M Bazooka DDR4.png', 7, 'Micro ATX', 128, 4, NULL),
(14, 'ASRock A520M-HVS', 984000, 'https://tokopedia.link/uuN1FTOWiwb', 'ASRock A520M-HVS.png', 2, 'Micro ATX', 64, 2, NULL),
(15, 'ASRock B550M PG Riptide', 1892000, 'https://tokopedia.link/clyxXU7Wiwb', 'ASRock B550M PG Riptide.png', 2, 'Micro ATX', 128, 4, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pc_builds`
--

CREATE TABLE `pc_builds` (
  `id` bigint UNSIGNED NOT NULL,
  `userId` bigint UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'PC Rakitan User',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'placeholder.png',
  `cpuId` bigint UNSIGNED DEFAULT NULL,
  `moboId` bigint UNSIGNED DEFAULT NULL,
  `memoryId` bigint UNSIGNED DEFAULT NULL,
  `gpuId` bigint UNSIGNED DEFAULT NULL,
  `caseId` bigint UNSIGNED DEFAULT NULL,
  `inStorageId` bigint UNSIGNED DEFAULT NULL,
  `psuId` bigint UNSIGNED DEFAULT NULL,
  `totalPrice` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `power_supplies`
--

CREATE TABLE `power_supplies` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'placeholder.png',
  `formFactor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `efficiencyRating` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wattage` int NOT NULL,
  `modular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `power_supplies`
--

INSERT INTO `power_supplies` (`id`, `name`, `price`, `url`, `image`, `formFactor`, `efficiencyRating`, `wattage`, `modular`, `description`) VALUES
(1, 'Cooler Master MWE Gold 1250 V2 80+ Gold - Full Modular', 3367000, 'https://tokopedia.link/X644Ow6Pewb', 'Cooler Master MWE Gold 1250 V2 80+ Gold - Full Modular.png', 'ATX', '80+ Gold', 1250, 'Full', 'Model\r\nMPE-C501-AFCAG\r\nATX Version\r\nATX 12V V2.52\r\nPFC\r\nActive PFC\r\nInput Voltage\r\n90-264V\r\nInput Current\r\n15-7A\r\nInput Frequency\r\n47-63Hz\r\nDimensions (L x W x H)\r\n180 x 150 x 86 mm\r\nFan Size\r\n140mm\r\nFan Bearing\r\nFDB\r\nFan Speed\r\n2200 RPM\r\nNoise Level @ 20%\r\n0 dBA\r\nNoise Level @ 50%\r\n15.8 dBA\r\nNoise Level @ 100%\r\n30.1 dBA\r\nEfficiency\r\n90% @ Typical Load\r\n80 PLUS Rating\r\n80 PLUS Gold'),
(2, 'Corsair RMe Series 1000W Full Modular - Gold', 3566000, 'https://tokopedia.link/tXmnmcXPewb', 'Corsair RMe Series 1000W Full Modular - Gold.jpg', 'ATX', '80+ Gold', 1000, 'Full', '\r\nCorsair RMe Series 1000W Full Modular - Gold / PSU 1000W RM1000e\r\nTech Specs :\r\nATX Connector\r\n1\r\nATX12V Version\r\nv2.4\r\nContinuous power W\r\n1000 Watts\r\nMTBF hours\r\n100,000 hours\r\n80 PLUS Efficiency\r\nGold\r\nZero RPM Mode\r\nYes\r\nCable Type\r\nType 4\r\nEPS12V Connector\r\n2\r\nModular\r\nFully\r\nPCIe Connector\r\n4\r\nSATA Connector\r\n7'),
(3, 'MSI MPG A750GF 750Watt', 1840000, 'https://tokopedia.link/YcuWXflkjwb', 'MSI MPG A750GF 750Watt.png', 'ATX', '80+ Gold', 750, 'Full', 'PRODUCT NAME MPG A850GF\r\nPSU FORM FACTOR ATX\r\nPOWER WATT 750W\r\nINPUT VOLTAGE 100~240 Vac\r\nINPUT CURRENT 115Vac/10.0A max. 230Vac/5.0A max.\r\nINPUT FREQUENCY 47Hz ~ 63Hz\r\nEFFICIENCY Up to 90% (80 Plus Gold)\r\nFAN SIZE 140 mm\r\nDIMENSION 150mm x160mm x86mm\r\nPFC TYPE Active PFC\r\nPROTECTION OCP / OVP / OPP / OTP / SCP / UVP'),
(4, 'be quiet! SFX-L POWER 600W', 1767000, 'https://tokopedia.link/oYHbj1cjjwbs', 'be quiet! SFX-L POWER 600W.jpg', 'ATX', '80+ Gold', 600, 'Full', '80 PLUS® Gold certification (up to 92% efficiency)\r\n4 PCIe connectors for powerful GPUs\r\nStable LLC, Synchronous Rectifier (SR) and DC-to-DC power conversion\r\nModular cables for maximum build flexibility\r\nTemperature-controlled 120mm high-quality fan\r\nSFX-to-ATX adapter bracket for usage with larger case sizes\r\n3-year manufacturer’s warranty'),
(5, 'FSP Hydro M PRO 700W 80+ Bronze', 1020000, 'https://tokopedia.link/FX8e38mPewb', 'FSP Hydro M PRO 700W 80+ Bronze.jpg', 'ATX', '80+ Bronze', 700, 'Semi', NULL),
(6, 'Corsair CXF RGB Series 650W Full Modular - Bronze', 1239000, 'https://tokopedia.link/MyyUmnFPewb', 'Corsair CXF RGB Series 650W Full Modular - Bronze.png', 'ATX', '80+ Bronze', 650, 'Full', NULL),
(7, 'Aerocool LUX RGB 550W 80 Plus Bronze', 571000, 'https://tokopedia.link/tmmyNVYjiwb', 'Aerocool LUX RGB 550W 80 Plus Bronze.jpg', 'ATX', '80+ Bronze', 550, 'No', NULL),
(8, 'Enermax CyberBron 500W 80+ Bronze', 647000, 'https://tokopedia.link/AN0x5j5jiwb', 'Enermax CyberBron 500W 80+ Bronze.jpg', 'ATX', '80+ Bronze', 500, 'No', NULL),
(9, 'Corsair CV Series 450W 80+ Bronze', 739000, 'https://tokopedia.link/heL2tZIOewb', 'Corsair CV Series 450W 80+ Bronze.jpg', 'ATX', '80+ Bronze', 450, 'No', NULL),
(10, 'be quiet! SYSTEM POWER U9 400W', 706000, 'https://tokopedia.link/KiAXRYCjjwb', 'be quiet! SYSTEM POWER U9 400W.jpg', 'ATX', '80+ Bronze', 400, 'No', NULL),
(11, 'Enermax NAXN Bronze 350W', 566000, 'https://tokopedia.link/zv4hqWujjwbs', 'Enermax NAXN Bronze 350W.jpg', 'ATX', '80+ Bronze', 350, 'No', NULL),
(12, 'Corsair VS550 550 WATT', 859000, 'https://tokopedia.link/dauE9DPjjwb', 'Corsair VS550 ATX Power Supply 550 WATT.jpg', 'ATX', '80+ White', 550, 'No', NULL),
(13, 'Cooler Master Elite 500 V4 80+', 655000, 'https://tokopedia.link/sTo3s0ckiwb', 'Cooler Master Elite 500 V4 80+.jpg', 'ATX', '80+ White', 500, 'No', NULL),
(14, 'DeepCool PF400', 430000, 'https://tokopedia.link/CqDFHlZjjwb', 'DeepCool PF400.jpg', 'ATX', '80+ White', 400, 'No', NULL),
(15, 'Enermax MaxPro II 600W', 647000, 'https://tokopedia.link/DA67pMvkiwb', 'Enermax MaxPro II 600W.jpg', 'ATX', '80+ White', 600, 'No', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user.png',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Irham Tri Ahmadi', 'irhamtria@gmail.com', NULL, '$2y$10$lkbPD6BrmeMMlPF/WL1tcO0gvgRfPxXn2RvbRKSZlzRn9N48A7uAG', 'user.png', NULL, NULL, NULL),
(2, 'Muhammad Fadhlan Syauqi', 'fadhlan@gmail.com', NULL, '$2y$10$lkbPD6BrmeMMlPF/WL1tcO0gvgRfPxXn2RvbRKSZlzRn9N48A7uAG', 'user.png', NULL, NULL, NULL),
(3, 'Alfina Balqis Nurzaharani', 'alfina@gmail.com', NULL, '$2y$10$lkbPD6BrmeMMlPF/WL1tcO0gvgRfPxXn2RvbRKSZlzRn9N48A7uAG', 'user.png', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD UNIQUE KEY `admins_mobile_unique` (`mobile`);

--
-- Indexes for table `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cpus`
--
ALTER TABLE `cpus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cpus_cpusocketid_foreign` (`cpuSocketId`);

--
-- Indexes for table `cpu_sockets`
--
ALTER TABLE `cpu_sockets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gpus`
--
ALTER TABLE `gpus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `internal_storages`
--
ALTER TABLE `internal_storages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `memories`
--
ALTER TABLE `memories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `motherboards`
--
ALTER TABLE `motherboards`
  ADD PRIMARY KEY (`id`),
  ADD KEY `motherboards_cpusocketid_foreign` (`cpuSocketId`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pc_builds`
--
ALTER TABLE `pc_builds`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pc_builds_code_unique` (`code`),
  ADD KEY `pc_builds_userid_foreign` (`userId`),
  ADD KEY `pc_builds_cpuid_foreign` (`cpuId`),
  ADD KEY `pc_builds_moboid_foreign` (`moboId`),
  ADD KEY `pc_builds_memoryid_foreign` (`memoryId`),
  ADD KEY `pc_builds_gpuid_foreign` (`gpuId`),
  ADD KEY `pc_builds_caseid_foreign` (`caseId`),
  ADD KEY `pc_builds_instorageid_foreign` (`inStorageId`),
  ADD KEY `pc_builds_psuid_foreign` (`psuId`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `power_supplies`
--
ALTER TABLE `power_supplies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cases`
--
ALTER TABLE `cases`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `cpus`
--
ALTER TABLE `cpus`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `cpu_sockets`
--
ALTER TABLE `cpu_sockets`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gpus`
--
ALTER TABLE `gpus`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `internal_storages`
--
ALTER TABLE `internal_storages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `memories`
--
ALTER TABLE `memories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `motherboards`
--
ALTER TABLE `motherboards`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pc_builds`
--
ALTER TABLE `pc_builds`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `power_supplies`
--
ALTER TABLE `power_supplies`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cpus`
--
ALTER TABLE `cpus`
  ADD CONSTRAINT `cpus_cpusocketid_foreign` FOREIGN KEY (`cpuSocketId`) REFERENCES `cpu_sockets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `motherboards`
--
ALTER TABLE `motherboards`
  ADD CONSTRAINT `motherboards_cpusocketid_foreign` FOREIGN KEY (`cpuSocketId`) REFERENCES `cpu_sockets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pc_builds`
--
ALTER TABLE `pc_builds`
  ADD CONSTRAINT `pc_builds_caseid_foreign` FOREIGN KEY (`caseId`) REFERENCES `cases` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pc_builds_cpuid_foreign` FOREIGN KEY (`cpuId`) REFERENCES `cpus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pc_builds_gpuid_foreign` FOREIGN KEY (`gpuId`) REFERENCES `gpus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pc_builds_instorageid_foreign` FOREIGN KEY (`inStorageId`) REFERENCES `internal_storages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pc_builds_memoryid_foreign` FOREIGN KEY (`memoryId`) REFERENCES `memories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pc_builds_moboid_foreign` FOREIGN KEY (`moboId`) REFERENCES `motherboards` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pc_builds_psuid_foreign` FOREIGN KEY (`psuId`) REFERENCES `power_supplies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pc_builds_userid_foreign` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
