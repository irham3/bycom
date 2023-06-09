-- MySQL dump 10.13  Distrib 5.5.62, for Win64 (AMD64)
--
-- Host: localhost    Database: bycom
-- ------------------------------------------------------
-- Server version	8.0.30

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admins` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin.png',
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`),
  UNIQUE KEY `admins_mobile_unique` (`mobile`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (1,'Admin','admin@bycom.com','088102340929','admin','$2y$10$lkbPD6BrmeMMlPF/WL1tcO0gvgRfPxXn2RvbRKSZlzRn9N48A7uAG','admin.png');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `build_recommendations`
--

DROP TABLE IF EXISTS `build_recommendations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `build_recommendations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'placeholder.png',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `build_recommendations`
--

LOCK TABLES `build_recommendations` WRITE;
/*!40000 ALTER TABLE `build_recommendations` DISABLE KEYS */;
INSERT INTO `build_recommendations` VALUES (1,'Intel Core i3-10105 - IGPU Intel UHD Graphics 630 - RAM 8GB - SSD SATA 120GB',3560000,'https://tokopedia.link/VpKoLPDdowb','Intel Core i3-10105 - IGPU Intel UHD Graphics 630 - RAM 8GB - SSD SATA 120GB.png'),(2,'AMD Ryzen 3 Pro 4350G - IGPU Radeon Graphics - RAM 8GB - SSD 256GB NVME',4549000,'https://tokopedia.link/d0Q856Xgowb','AMD Ryzen 3 Pro 4350G - IGPU Radeon Graphics - RAM 8GB - SSD 256GB NVME.png'),(3,'Intel Core i3-10105F - MSI Radeon RX 550 4GB DDR5 - RAM 8GB - SSD SATA 240GB',5949000,'https://tokopedia.link/8zJ4UOGhowb','Intel Core i3-10105F - MSI Radeon RX 550 4GB DDR5 - RAM 8GB - SSD SATA 240GB.png'),(4,'AMD Ryzen 3 4100 - Gigabyte GeForce GTX 1650 4GB DDR5 - RAM 16GB - SSD 256GB NVME',7499000,'https://tokopedia.link/aHod1Y3howb','AMD Ryzen 3 4100 - Gigabyte GeForce GTX 1650 4GB DDR5 - RAM 16GB - SSD 256GB NVME.png'),(5,'Intel Core i5-10400F - GALAX Geforce GTX 1660 Ti 6GB DDR6 - RAM 16GB - SSD 256GB NVME',9249000,'https://tokopedia.link/Bev0JItiowb','Intel Core i5-10400F - GALAX Geforce GTX 1660 Ti 6GB DDR6 - RAM 16GB - SSD 256GB NVME.png'),(6,'AMD Ryzen 5 5500 - GALAX Geforce RTX 2060 SUPER 8GB DDR6 - RAM 16GB - SSD 256GB NVME',11399000,'https://tokopedia.link/yg4MzxWiowb','AMD Ryzen 5 5500 - GALAX Geforce RTX 2060 SUPER 8GB DDR6 - RAM 16GB - SSD 256GB NVME.png'),(7,'Intel Core i5-12400F - ASRock Radeon RX 6650 XT 8GB DDR6 - RAM 16GB - SSD 250GB NVME',13999000,'https://tokopedia.link/gBdM7ihjowb','Intel Core i5-12400F - ASRock Radeon RX 6650 XT 8GB DDR6 - RAM 16GB - SSD 250GB NVME.png'),(8,'AMD Ryzen 5 5600X - PNY Geforce RTX 3060 Ti 8GB DDR6 - RAM 16GB - SSD 500GB NVME',15999000,'https://tokopedia.link/lSApJNwjowb','AMD Ryzen 5 5600X - PNY Geforce RTX 3060 Ti 8GB DDR6 - RAM 16GB - SSD 500GB NVME.png'),(9,'Intel Core i5-12600KF - Gigabyte GeForce RTX 3060 12GB GDDR6 - RAM 16GB - SSD 512GB NVME',17799000,'https://tokopedia.link/CzqalNVjowb','Intel Core i5-12600KF - Gigabyte GeForce RTX 3060 12GB GDDR6 - RAM 16GB - SSD 512GB NVME.png'),(10,'Intel Core i5-12600KF - GALAX Geforce RTX 3060 Ti 8GB DDR6X - RAM 16GB - SSD 512GB NVME',18299000,'https://tokopedia.link/pLTW50fkowb','Intel Core i5-12600KF - GALAX Geforce RTX 3060 Ti 8GB DDR6X - RAM 16GB - SSD 512GB NVME.png'),(11,'Intel Core i5-13600K - XFX Radeon RX 6750 XT ULTRA 12GB DDR6 - RAM 32GB - SSD 512GB NVME',22499000,'https://tokopedia.link/HPgZN8zkowb','Intel Core i5-13600K - XFX Radeon RX 6750 XT ULTRA 12GB DDR6 - RAM 32GB - SSD 512GB NVME.png'),(12,'AMD Ryzen 7 5800X - MSI GeForce RTX 3070 Ti 8GB GDDR6X - RAM 32GB - SSD 512GB NVME',26149000,'https://tokopedia.link/9eUtx7Mkowb','AMD Ryzen 7 5800X - MSI GeForce RTX 3070 Ti 8GB GDDR6X - RAM 32GB - SSD 512GB NVME.png'),(13,'AMD Ryzen 9 7900X - Inno 3D GeForce RTX 4080 16GB GDDR6X - RAM 32GB - SSD 500GB NVME',49199000,'https://tokopedia.link/csBhV7Wlowb','AMD Ryzen 9 7900X - Inno 3D GeForce RTX 4080 16GB GDDR6X - RAM 32GB - SSD 500GB NVME.png'),(14,'Intel Core i7-13700K - Gigabyte GeForce RTX 4080 16GB GDDR6X - RAM 32GB - SSD 500GB NVME',50599000,'https://tokopedia.link/BqoTZ17lowb','Intel Core i7-13700K - Gigabyte GeForce RTX 4080 16GB GDDR6X - RAM 32GB - SSD 500GB NVME.png'),(15,'Intel Core i9-13900K - MSI GeForce RTX 4090 24GB GDDR6X - RAM 32GB - SSD 1TB NVME',73999000,'https://tokopedia.link/zvUSCjimowb','Intel Core i9-13900K - MSI GeForce RTX 4090 24GB GDDR6X - RAM 32GB - SSD 1TB NVME.png');
/*!40000 ALTER TABLE `build_recommendations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cases`
--

DROP TABLE IF EXISTS `cases`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cases` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'placeholder.png',
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hddSlot` int NOT NULL,
  `gpuMaxLengthMm` int DEFAULT NULL,
  `description` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cases`
--

LOCK TABLES `cases` WRITE;
/*!40000 ALTER TABLE `cases` DISABLE KEYS */;
INSERT INTO `cases` VALUES (1,'Darkflash DLX4000',1275000,'https://tokopedia.link/ktkzpUkCcwb','Darkflash DLX4000.jpg','Mid Tower',3,425,'Case Size : 473*248*456mm\r\nMaterial : 0.8 SPCC / Metal / Tempered Glass\r\nMotherboard : E-ATX/ATX/ M-ATX/ ITX\r\nHDD / SSD : 3(Max.) / 3(Max.)\r\nExpansion Slots : 5 or7 Slots\r\nVGA Length : 425mm (Max.)\r\nCPU Height : 180mm (Max.)\r\nPower Supply : Bottom, 180mm, ATX\r\n\r\nRadiator Compatibility :\r\nFront : 240/ 360mm\r\nTop : 240/ 360mm\r\n\r\nFan Support :\r\nFront : 140mm*2/ 120mm*3 (Mesh Ver. only)\r\nRight(Front): 120mm*3 / 140mm*2\r\nRight(Rear): 120mm*3\r\nRear : 120mm*1\r\nTop : 120mm*3 / 140mm*2\r\nBottom : 120mm*1 / 140mm*1\r\n\r\nI/O :\r\nPower/ Reset/ USB3.0*2/\r\nType-C*1/ HD Audio'),(2,'Corsair iCUE 5000T',5576000,'https://tokopedia.link/jDRtHRbCcwb','Corsair iCUE 5000T.jpg','Mid Tower',6,400,'Maximum GPU Length (mm)\r\n400\r\nMaximum PSU Length (mm)\r\n250\r\nMaximum CPU Cooler Height (mm)\r\n170\r\nExpansion Slots\r\n7 vertical + 2 horizontal\r\nCase Drive Bays\r\n(x2) 3.5in (x4) 2.5in\r\nForm Factor\r\nMID TOWER\r\nCase Windowed\r\nTempered Glass\r\nCase Warranty\r\n2 Year\r\nColor\r\nBLACK/WHITE\r\nRadiator Compatibility\r\n120mm, 140mm, 240mm, 280mm, 360mm\r\nCase Front IO\r\n(1x) USB 3.1 Type C, (4x) USB 3.0, (1x) Audio in/out\r\nCompatible Corsair Liquid Coolers\r\nH55, H60, H75, H80i, H90, H100i, H105, H110i, H115i, H150i\r\nCase Power Supply\r\nATX'),(3,'MSI MEG Prospect 700R',5799000,'https://tokopedia.link/tjM8pV4Bcwb','MSI MEG Prospect 700R.png','Mid Tower',4,400,'Product Name MEG PROSPECT 700R\r\nForm Factor Mid-Tower\r\nMotherboard Form Factor\r\nSupport\r\nEATX (up to 310mmx304.8mm) / ATX / MATX / ITX\r\nI/O Ports\r\n2x USB 3.2 Gen 1 Type-A\r\n1x USB 3.2 Gen 2x2 Type-C\r\n1x HD Audio\r\n1x Mic\r\nDrive Mount Support 2x 2.5”\r\n2x 2.5\"/3.5”\r\nExpansion Slots 7\r\nMaximum GPU Length 400mm / 15.75 inches\r\nMaximum CPU Cooler Height 185mm / 7.28 inches\r\nPower Supply Support Standard ATX, max up to 220mm (without\r\n3.5\'\' HDD tray installed)\r\nFan Size Support\r\nFront: Up to 3 x 120 mm / 3 x 140 mm\r\nTop: Up to 3 x 120 mm / 3 x 140 mm\r\nRear: Up to 1 x 120 mm / 1x 140 mm\r\nSide: Up to 3 x 120 mm\r\nDimensions (DxWxH) 585x 257 x 537 mm / 23.03 x 10.12 x 21.14\r\ninches'),(4,'be quiet! Dark Base Pro 900',4109000,'https://tokopedia.link/ZA5e8h1Bcwb','be quiet! Dark Base Pro 900.jpg','Full Tower',15,323,'Specs, Warranty & Returns\r\n\r\nVersatile due to modular design\r\n\r\nTempered glass side panel\r\n\r\nQI charger for mobile phones\r\n\r\nLED lights\r\n\r\nThree be quiet! SilentWings® 3 PWM 140mm fans\r\n\r\nRadiators up to 420mm\r\n\r\nUp to 7 HDDs or 15 SSDs'),(5,'Cooler Master Cosmos C700M',6899000,'https://tokopedia.link/1ODxaTNBcwb','Cooler Master Cosmos C700M.png','Full Tower',4,320,'MODEL NUMBER\r\nMCC-C700M-MG5N-S00\r\nAVAILABLE COLOR(S)\r\nGrey, Silver, Black\r\nMATERIALS\r\nSteel\r\nMATERIALS - SIDE PANEL\r\nCurved Tempered Glass, Steel\r\nDIMENSIONS (LXWXH)\r\n650(L) x 306(W) x 651(H)mm / 25.6(L) x 12.0(W) x 25.6(H)inch\r\nMOTHERBOARD SUPPORT\r\nMini ITX, Micro ATX, ATX, E-ATX\r\nEXPANSION SLOTS\r\n8\r\n5.25\" DRIVE BAYS\r\n1\r\n2.5\" / 3.5\" DRIVE BAYS (COMBO)\r\n4+1 (in the accessory box)\r\nDRIVE BAYS - SSD\r\n4\r\nI/O PORT - USB PORTS / USB 3.1 TYPE-C\r\n1\r\nI/O PORT - USB PORTS / USB 3.0 TYPE-A\r\n4\r\nI/O PORT - AUDIO - 3.5MM HEADSET JACK (AUDIO+MIC)\r\n1\r\nI/O PORT - AUDIO - 3.5MM MIC JACK\r\n1\r\nI/O PORT - FANS/LIGHTING\r\nFan Speed Control Button, ARGB Control Button\r\nPRE-INSTALLED FANS - FRONT\r\n140mm PWM Fan x 3 (Speed: 1200RPM / Connector: 4Pin)\r\nPRE-INSTALLED FANS - REAR\r\n140mm PWM Fan x 1 (Speed: 1200RPM / Connector: 4Pin)\r\nFAN SUPPORT - TOP\r\n3x 120/140mm\r\nFAN SUPPORT - FRONT\r\n120mm / 140mm x 3\r\nFAN SUPPORT - REAR\r\n120/140mm x 1\r\nFAN SUPPORT - BOTTOM\r\n2x 120/140mm*\r\nRADIATOR SUPPORT - TOP\r\n120mm, 140mm, 240mm, 280mm, 360mm, 420mm (remove ODD, maximum thickness clearance 70mm)\r\nRADIATOR SUPPORT - FRONT\r\n120mm, 140mm, 240mm, 280mm, 360mm, 420mm (requires removal of ODD cage)\r\nRADIATOR SUPPORT - REAR\r\n120mm, 140mm\r\nRADIATOR SUPPORT - BOTTOM\r\n120mm, 140mm, 240mm\r\nCLEARANCE - CPU COOLER\r\n198mm\r\nCLEARANCE - GPU\r\n490mm (w/o 3.5\" HDD BRK), 320mm (w/ 3.5\" HDD BRK)\r\nEAN CODE\r\n4719512075036\r\nUPC CODE\r\n\r\nSERIES\r\nCOSMOS Series\r\nSIZE\r\nFull Tower\r\nNOTE\r\n* bracket needed'),(6,'Paradox Gaming Case Dominion LE-01',464000,'https://tokopedia.link/wtOjDTn0hwb','Paradox Gaming Case Dominion LE-01.jpg','Mid Tower',4,349,'UKURAN SASIS (P X L X T)	400 x 202 x 433 mm\r\nMATERIAL	Plastik SPCC tebal 0.6mm\r\nUKURAN TEMPAT CD ROM	2 x 3.5″ dan 2 x 2.5″\r\nPANEL I/O DEPAN	3 (Tiga) port USB 2.0 dan 1 (Satu) port USB 3.0, 1 (Satu) port headphone, 1 (Satu) port mikrofon, tombol Power, tombol Reset.\r\nKIPAS	Depan 3 x 120mm, Belakang 1 x 120mm\r\nTINGGI MAKSIMAL PENDINGIN CPU	166mm\r\nTINGGI MAKSIMAL GPU	349mm (tanpa pendingin depan)\r\nTITIK RADIATOR	Depan 240mm, Belakang 120mm\r\nMOTHERBOARD	ATX ,Micro ATX or Mini-ITX\r\nSLOT TAMBAHAN	7 (Tujuh)'),(7,'Powerlogic Armaggeddon NIMITZ N5',382000,'https://tokopedia.link/TtQWyNw3hwb','Powerlogic Armaggeddon NIMITZ N5.jpg','Micro ATX',5,300,'Micro-ATX Gaming PC Casing\r\nSee-thru side panel to View Inerior\r\nUp to 20 RGB Light Mode\r\nDirect to MB USB 3.0 Front Panel\r\nExtreme Cooling Airstream\r\nStealth Cable Management System\r\nSupport SSD Intergration\r\nAccommodates Up to 300mm Length Graphic Cards\r\nChassis Supports Up to 6 x 120mm Fan\r\nFully Black Coated Gaming Chassis\r\nBottom Mount PSU Design\r\nSPCC 0.45mm Fully Black Steel Structure\r\n1 x USB 3.0 High Speed\r\n2 x USB 2.0 Ports\r\n1 x HD Audio Ports\r\n1 x Microphone Port\r\n2 x 25\' SSD InternalDrive Bay\r\n3 x 3.5\" HDD Drive Bay'),(8,'Infinity Nebula V2',387000,'https://tokopedia.link/qdDDGW53hwb','Infinity Nebula V2.jpg','Mid Tower',4,340,'Casing only\r\nModel : NEBULA V2\r\nSize : 405 X 180 X 445 MM\r\n3.5\" x 2 / 2.5\" x 2 / USB 2.0 x 2 / USB 3 x 1\r\nFAN UP TO 6 FAN\r\nMotherboard : Standart ATX, Micro ATx\r\nPower Supply : Optional Standart ATX\r\nUp to 365/ 340(if installed front fan) mm Graphic Card\r\nINCLUDE\r\nACRYLIC SIDE PANEL\r\nMagnetic cover (Top)'),(9,'PCCooler Platinum LM200 Mesh Black',372000,'https://tokopedia.link/XHdDRis4hwb','PCCooler Platinum LM200 Mesh Black.jpg','Mid Tower',4,310,'SPECIFICATIONS\r\nColor: Black\r\nProduct Size：362(L)*200(W)*392(H)mm\r\nHardware Size：320(L)*200(W)*380(H)mm\r\nProduct Materials：0.5mmSPCC\r\nPanel: ABS+Tempered Glass\r\nMotherboard Type：M-ATX/ ITX\r\nUpper Interface：USB3.0*1;USB2.0*2;Microphone*1;Headset*1;POWER Button RESET\r\nDetailed Configuration：3.5 Hard Disk*2PCS;2.5 Solid State Disk*3PCS\r\nRadiator Height Limit：160mm\r\nDisplay Card Length Limit：310mm'),(10,'Raptor Black Strike 1660 ATX',397000,'https://tokopedia.link/pHR8GlQ4hwb','Raptor Black Strike 1660 ATX.png','Mid Tower',4,300,'Gaming case RAPTOR 1660 support dengan motherboard ATX / m-ATX/ Mini-ATX\r\nTersedia 1 port USB 3.0, 1 port USB 2.0 dan port HD Audio.\r\nUntuk penyimpanan tersedia 2 slot H.D.D dan 2 slot S.S.D.\r\nUntuk FAN Cooling System tersedia 1 slot dibagian belakang (12 cm), 3 slot bagian depan (12 cm), dan 2 slot bagian atas (12 cm)\r\nGaming case RAPTOR 1660 memiliki ukuran (L) 300 x (W)210 x (H) 440 mm.\r\n'),(11,'Paradox Gaming Case Ignis',341000,'https://tokopedia.link/APFqQAPhjwb','Paradox Gaming Case Ignis.jpg','Mid Tower',5,305,'DIMENSIONS 320*200*380MM\r\nMATERIAL SPCC 0.45, LEFT TEMPERED GLASS 4mm PANEL WITH MAGNETIC TEMPERED GLASS WINDOW\r\nM/B TYPE MICRO ATX, MINI ITX\r\nLED FRONT PANEL CHANGEABLE RGB MODE\r\nI/O USB3.0x 1+ USB2.0x 2+ HD AUDIO\r\nEXPANSION SLOT 4\r\nCORD DESIGN BACKPLATE WIRE ROUTING 20mm\r\nCPU COOLER MAX 160MM\r\nVGA MAX 305MM\r\nPSU SUPPORT ATX POWER SUPPLY\r\nDRIVE BAY 3’5 2\r\n2’5 3\r\n5’25 –\r\nFAN SLOTS Top 2 x 120mm\r\nFront 3 x 120mm\r\nRear 1 x 120mm'),(12,'Simbadda BattleGround 20',316000,'https://tokopedia.link/JUg9Eb2hjwb','Simbadda BattleGround 20.jpg','Mid Tower',3,300,'Casing Size 332 X 185 X 413\r\nSupport Up to 6 X 12cm fan\r\nSupport Dust Filter\r\nTop Support 2 X 12cm fan\r\nRear Support 1 X 12cm fan\r\nFront Support 3 X 12cm fan\r\nBottom Mount ATX Power Supply'),(13,'Fractal Pop Mini Air RGB Black TG Clear Tint',1080000,'https://tokopedia.link/6uUzdDhijwb','Fractal Pop Mini Air RGB Black TG Clear Tint.jpg','Mini Tower',4,365,'Dedicated 2.5\" drive mounts\r\n4 (2 included)\r\nCombined 3.5/2.5” drive mounts\r\n2 (2 Included)\r\n5.25” drive mounts\r\n2\r\nExpansion slots\r\n4\r\nFront interface\r\n2x USB 3.0*, Audio, RGB controller\r\nTotal fan mounts\r\n5x 120 mm or 2x 140 mm + 1x 120 mm\r\nFront fan\r\n2x 120/ 1x 140 mm (2x Aspect 12 RGB included)\r\nTop fan\r\n2x 120/ 1x 140 mm\r\n\r\nCompatibility\r\nMotherboard compatibility\r\nmATX / Mini ITX\r\nPower supply type\r\nATX\r\n\r\nDimensions\r\nCase dimensions (LxWxH)\r\n432 x 215 x 393 mm'),(14,'LIAN LI O11 DYNAMIC MINI BLACK',1890000,'https://tokopedia.link/aCQVlSqijwb','LIAN LI O11 DYNAMIC MINI BLACK.jpg','Mini Tower',4,395,'Product Name O11 Dynamic MINI\r\nMODEL O11D Mini-X\r\nCOLOR Black\r\nDIMENSIONS (D)420mm X (W)269.5mm X (H)380mm\r\nMOTHERBOARD ATX/ Micro-ATX/ Mini-ITX\r\nPSU SFX/ SFX-L\r\nMATERIAL 0.8mm SPCC (body)\r\n1mm SPCC (interior, back panel)\r\n4 mm Tempered Glass\r\n2mm Aluminum (top and left panel)\r\nFAN SUPPORT Top: 3x 120mm or 2x 140mm\r\nSide: 2x 120mm or 2x 140mm\r\nBottom: 3x 120mm or 2x 140mm\r\nRear: 1x 120mm\r\nRADIATOR SUPPORT Top: 360mm or 280mm or 240mm radiator\r\nSide: 240mm or 280mm radiator\r\nBottom: 360 or 280mm or 240mm radiator\r\nGPU LENGTH CLEARANCE 395mm\r\nCPU COOLER HEIGHT CLEARANCE 170mm\r\nVGA Length 370mm\r\nDRIVES Right side 2 x 2.5 SSD + back plate 2 x 3.5 HDD (or SSD)\r\nEXPANSION SLOTS 3 or 5 or 7 slots (depends on back panel)\r\nIO PORTS 2 x USB 3.0, 1 x USB 3.1 TYPE-C, 1 x HD Audio, Power Button\r\nDUST FILTERS 1 x Top, 1 x Bottom, 2 x Side'),(15,'Fractal Meshify 2 Mini White TG Clear Tint',1846000,'https://tokopedia.link/oP1HC1yijwbs','Fractal Meshify 2 Mini White TG Clear Tint.jpg','Mini Tower',4,306,'3.5\"/2.5\" drive mounts\r\n2 (included)\r\nDedicated 2.5\" drive mounts\r\n4 (2 included)* max 8 mm drive height for mounts behind motherboard plate\r\nExpansion slots\r\n4\r\nFront interface\r\n1x USB 3.1 Gen 2 Type-C, 2x USB 3.0, Audio I/O, Power button, Reset button\r\nTotal fan mounts\r\n7x 120 mm or 4x 140 mm\r\nFront fan\r\n3x 120/ 2x 140 mm (1x Dynamic X2 GP-14 included)\r\nTop fan\r\n2x 120/140 mm\r\nRear fan\r\n1x 120 mm (1x Dynamic X2 GP-12 included)\r\nBottom fan\r\n1x 120 mm (requires removal of HDD cage)\r\nDust filters\r\nTop, front and bottom\r\nCable routing space\r\n15-25 mm\r\nCable routing grommets\r\nYes\r\nFixed cable straps\r\nYes\r\nTool-less push-to-lock\r\nTop, front and side panels\r\nCaptive thumbscrews\r\nHDD, SSD and, PSU brackets\r\nLeft side panel\r\nTempered glass\r\nRight side panel\r\nSteel\r\nCompatibility\r\nMotherboard compatibility\r\nmATX / DTX / Mini-DTX / Mini ITX\r\nPower supply type\r\nATX\r\nFront radiator\r\nUp to 240/280 mm\r\nTop radiator\r\nUp to 240 mm\r\nRear radiator\r\n120 mm\r\nBottom radiator\r\n120 mm (without HDD Cage)\r\nPSU max length\r\n165 mm recommended with HDD cage (200 mm without HDD cage)\r\nGPU max length\r\n331 mm, 306 mm with front fan\r\nCPU cooler max height\r\n167 mm\r\nRAM max height\r\n35 mm\r\nDimensions\r\nCase dimensions (LxWxH)\r\n396 x 205 x 406 mm\r\nCase dimensions w/o feet/protrusions/screws\r\n384 x 205 x 390 mm\r\nNet weight\r\n6,62 kg\r\nPackage dimensions (LxWxH)\r\n457 x 277 x 462 mm\r\nGross weight\r\n7,68 kg\r\nOther\r\nPackage contents\r\nMeshify 2 Mini case, User manual, Accessory box\r\nSKU\r\nBlack TG: FD-C-MES2M-01, White TG: FD-C-MES2M-02\r\nEAN\r\nBlack TG: 7340172702641, White TG: 7340172702658\r\nUPC\r\nBlack TG: 843276102647, White TG: 843276102654\r\nJAN\r\nBlack TG: 4537694278973, White TG: 4537694278980\r\nWarranty\r\n2 Years');
/*!40000 ALTER TABLE `cases` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cpu_sockets`
--

DROP TABLE IF EXISTS `cpu_sockets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cpu_sockets` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `socketName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `introductionYear` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpuVendor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cpu_sockets`
--

LOCK TABLES `cpu_sockets` WRITE;
/*!40000 ALTER TABLE `cpu_sockets` DISABLE KEYS */;
INSERT INTO `cpu_sockets` VALUES (1,'AM3+','2012-03','AMD'),(2,'AM4','2016-10','AMD'),(3,'AM5','2022-10','AMD'),(4,'LGA 1151','2015-08','Intel'),(5,'LGA 1151 v2','2017-08','Intel'),(6,'LGA 1200','2020-04','Intel'),(7,'LGA 1700','2021-11','Intel');
/*!40000 ALTER TABLE `cpu_sockets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cpus`
--

DROP TABLE IF EXISTS `cpus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cpus` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'placeholder.png',
  `cpuSocketId` bigint unsigned NOT NULL,
  `coreCount` int NOT NULL,
  `coreClock` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `boostClock` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tdp` int NOT NULL,
  `integratedGraphic` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `cpus_cpusocketid_foreign` (`cpuSocketId`),
  CONSTRAINT `cpus_cpusocketid_foreign` FOREIGN KEY (`cpuSocketId`) REFERENCES `cpu_sockets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cpus`
--

LOCK TABLES `cpus` WRITE;
/*!40000 ALTER TABLE `cpus` DISABLE KEYS */;
INSERT INTO `cpus` VALUES (1,'AMD Ryzen 5 5600G',2445000,'https://tokopedia.link/5bX6FFYqbwb','AMD Ryzen 5 5600G.jpg',2,6,'3.90 GHz','4.40 GHz',65,'Radeon Vega 7','AMD Ryzen 5 5600G 3.9Ghz Up To 4.4Ghz Cache 16MB 65W AM4 [Box] - 6 Core - 100-100000252BOX - With AMD Wraith Stealth Cooler (Garansi AMD Global/AMD International 3 Years Replacement)\r\n\r\nMemory Support\r\nMemory Support DDR4 3200 MHz\r\nECC Memory No\r\nChannel Architecture Dual Channel\r\nPower\r\nThermal Design Power (TDP) 65 W\r\nIncluded Thermal Solution Wraith Stealth\r\nMaximum Temperature 203F / 95C\r\nThermal Monitoring Technologies Yes\r\nIntegrated Graphics\r\nGraphics Chipset AMD Radeon\r\nOutput Support DisplayPort, HDMI\r\nBase Clock Speed 1900 MHz\r\nAMD\r\nPerformance Technologies Precision Boost 2\r\nPackaging Info\r\nPackage Weight 0.98 lb\r\nBox Dimensions (LxWxH) 5.4 x 5.2 x 2.9\"'),(2,'Intel Core i7-12700K',7438000,'https://tokopedia.link/FbOAmT0qbwb','Intel Core i7-12700K.jpg',7,12,'3.60 GHz','5.00 GHz',190,'Intel UHD Graphics 770','Total Cores : 12\r\n# of Performance-cores : 8\r\n# of Efficient-cores : 4\r\nTotal Threads : 20\r\nMax Turbo Frequency : 5.00 GHz\r\nIntel® Turbo Boost Max Technology : 3.0 Frequency ‡ 5.00 GHz\r\nPerformance-core Max Turbo Frequency : 4.90 GHz\r\nEfficient-core Max Turbo Frequency : 3.80 GHz\r\nPerformance-core Base Frequency : 3.60 GHz\r\nEfficient-core Base Frequency : 2.70 GHz\r\nCache : 25 MB Intel® Smart Cache\r\nTotal L2 Cache : 12 MB\r\nProcessor Base Power : 125 W\r\nMaximum Turbo Power : 190 W'),(3,'AMD Ryzen 7 5800x',4209000,'https://tokopedia.link/XS7IHa9qbwb','AMD Ryzen 7 5800x.jpg',2,8,'3.80 GHz','4.70 GHz',105,'','AMD Ryzen 7 5800X 3.8Ghz Up To 4.7Ghz Cache 32MB 105W AM4 [Box] - 8 Core - 100-100000063WOF (Garansi Lokal/AMD Indonesia)\r\n# of CPU Cores 8\r\n# of Threads 16\r\nBase Clock 3.8GHz\r\nMax Boost Clock Up to 4.7GHz\r\nTotal L2 Cache 4MB\r\nTotal L3 Cache 32MB\r\nUnlocked Yes\r\nCMOS TSMC 7nm FinFET\r\nPackage AM4\r\nPCI Express Version PCIe 4.0\r\nThermal Solution (PIB) Not included\r\nDefault TDP / TDP 105W'),(4,'AMD Ryzen 9 7950x',12182000,'https://tokopedia.link/06RDRbbrbwb','AMD Ryzen 9 7950x.jpg',3,16,'4.50 GHz','5.70 GHz',170,'','AMD Ryzen 9 7950X 4.5Ghz Up To 5.7Ghz Cache 64MB AM5 [Box] - 16 Core\r\nBrand AMD\r\nProcessors Type Desktop\r\nSeries Ryzen 9 7000 Series\r\nName Ryzen 9 7950X\r\nModel 100-100000514WOF\r\nDetailsCPU Socket Type Socket AM5\r\n# of Cores 16-Core\r\n# of Threads 32\r\nOperating Frequency 4.5 GHz\r\nMax Turbo Frequency Up to 5.7 GHz\r\nL1 Cache 1MB\r\nL2 Cache 16MB\r\nL3 Cache 64MB\r\nManufacturing Tech 5nm'),(5,'Intel Core i9-13900K',10879000,'https://tokopedia.link/tlpU8Herbwb','Intel Core i9-13900K.jpg',7,24,'3.00 GHz','5.80 GHz',253,'Intel UHD Graphics 770','General\r\nCPU Model Intel Core i9-13900K (13th Gen)\r\nCPU Socket LGA 1700\r\nManufacturing Process 10 nm\r\nMaximum CPU Configuration 1S\r\nMaximum Number of PCIe Lanes 16 (Revision 5.0)\r\n4 (Revision 4.0)\r\nUnlocked Yes\r\nPerformance\r\nNumber of Cores 24 (8 x P-Cores + 16 x E-Cores)\r\nNumber of Threads 32\r\nBase Clock Speed P-Core: 3 GHz\r\nE-Core: 2.2 GHz\r\nMaximum Boost Speed P-Core Turbo: 5.4 GHz\r\nE-Core Turbo: 4.3 GHz\r\nL3 Cache 36 MB\r\nMemory Support\r\nMaximum Capacity 128 GB\r\nMemory Support DDR5 5600 MHz\r\nDDR4 3200 MHz\r\nECC Memory Yes\r\nChannel Architecture Dual Channel\r\nOptane Memory Support Yes\r\nPower\r\nThermal Design Power (TDP) 125 W'),(6,'Intel Core i5-8500',1755000,'https://tokopedia.link/KtWWh1IEhwb','Intel Core i5-8500.jpg',5,6,'3.00 GHz','4.10 GHz',65,'Intel UHD Graphics 630','Spesifikasi CPU\r\nJumlah Inti 6\r\nJumlah Untaian 6\r\nFrekuensi Turbo Maks 4.10 GHz\r\nFrekuensi Intel® Turbo Boost Technology 2.0 ‡​​​4.10 GHz\r\nFrekuensi Dasar Prosesor 3.00 GHz\r\nCache 9 MB Intel® Smart Cache\r\nKecepatan Bus 8 GT/s\r\nTDP 65 W\r\nInformasi Tambahan\r\nStatusLaunched\r\nTanggal Peluncuran Q2\'18\r\nTersedia Opsi Terpasang Ya\r\nLembar DataLihat sekarang\r\nSpesifikasi Memori\r\nUkuran Memori Maks (bergantung jenis memori) 128 GB\r\nJenis Memori DDR4-2666\r\nJumlah Maksimum Saluran Memori 2\r\nBandwidth Memori Maks 41.6 GB/s\r\nMendukung Memori ECC ‡ Tidak\r\nGrafik Prosesor\r\nGrafis Prosesor ‡ Intel® UHD Graphics 630\r\nFrekuensi Dasar Grafik 350 MHz\r\nFrekuensi Dinamis Maks Grafik 1.10 GHz\r\nMemori Maks Video Grafik 64 GB\r\nDukungan 4K Yes, at 60Hz\r\nResolusi Maksimum (HDMI)‡ 4096x2304@24Hz\r\nResolusi Maksimum (DP)‡ 4096x2304@60Hz\r\nResolusi Maksimum (eDP - Panel Datar Terintegrasi)‡ 4096x2304@60Hz\r\nDukungan DirectX* 12\r\nDukungan OpenGL* 4.5\r\nIntel® Quick Sync Video Ya\r\nIntel® InTru™ 3D Technology Ya\r\nIntel® Clear Video HD Technology Ya\r\nIntel® Clear Video Technology Ya\r\nJumlah Layar yang Didukung ‡3\r\nID Perangkat0x3E92\r\nOpsi Ekspansi\r\nKemudahan untuk Diskalakan1S Only\r\nRevisi PCI Express 3.0\r\nKonfigurasi PCI Express ‡ Up to 1x16, 2x8, 1x8+2x4\r\nJumlah Maksimal Jalur PCI Express 16\r\nSpesifikasi Paket\r\nSoket yang Didukung FCLGA1151\r\nKonfigurasi CPU Maks1\r\nSpesifikasi Solusi Termal PCG 2015C (65W)\r\nTJUNCTION 100°C\r\nUkuran Paket37.5mm x 37.5mm\r\nTeknologi Canggih\r\nMemori Intel® Optane™ Didukung ‡ Ya\r\nIntel® Turbo Boost Technology ‡ 2.0\r\nIntel® Hyper-Threading Technology ‡ Tidak\r\nIntel® TSX-NI Ya\r\nIntel® 64 ‡ Ya\r\nSet Instruksi 64-bit\r\nEkstensi Set Instruksi Intel® SSE4.1, Intel® SSE4.2, Intel® AVX2\r\nKeadaan Diam Ya\r\nEnhanced Intel SpeedStep® Technology Ya\r\nTeknologi Pemantauan Panas Ya\r\nIntel® Identity Protection Technology ‡ Ya\r\nKeamanan & Keandalan\r\nIntel vPro® Eligibility ‡Intel vPro® Platform\r\nPentunjuk Baru Intel® AES Ya\r\nKode Keamanan Ya\r\nIntel® Software Guard Extensions (Intel®SGX) Yes with Intel® ME\r\nIntel® Memory Protection Extensions (Intel® MPX) Ya\r\nIntel® OS GuardYa\r\nIntel® Trusted Execution Technology ‡ Ya\r\nExecute Disable Bit ‡ Ya\r\nIntel® Boot Guard Ya\r\nIntel® Stable Image Platform Program (SIPP) Ya\r\nIntel® Virtualization Technology (VT-x) ‡ Ya\r\nIntel® Virtualization Technology for Directed I/O (VT-d) ‡ Ya\r\nIntel® VT-x dengan Extended Page Tables (EPT) ‡ Ya'),(7,'Intel Core i5-7600',1005000,'https://tokopedia.link/nxzJwLZEhwb','Intel Core i5-7600.jpg',4,4,'3.50 GHz','4.10 GHz',65,'Intel HD Graphics 630','Spesifikasi CPU\r\nJumlah Inti\r\n4\r\n\r\nJumlah Untaian\r\n4\r\n\r\nFrekuensi Turbo Maks\r\n4.10 GHz\r\n\r\nFrekuensi Intel® Turbo Boost Technology 2.0 ‡​​​\r\n4.10 GHz\r\n\r\nFrekuensi Dasar Prosesor\r\n3.50 GHz\r\n\r\nCache\r\n6 MB Intel® Smart Cache\r\n\r\nKecepatan Bus\r\n8 GT/s\r\n\r\nJumlah Tautan QPI\r\n0\r\n\r\nTDP\r\n65 W\r\n\r\nInformasi Tambahan\r\nTersedia Opsi Terpasang\r\nTidak\r\n\r\nLembar Data\r\nLihat sekarang\r\n\r\nSpesifikasi Memori\r\nUkuran Memori Maks (bergantung jenis memori)\r\n64 GB\r\n\r\nJenis Memori\r\nDDR4-2133/2400, DDR3L-1333/1600 @ 1.35V\r\n\r\nJumlah Maksimum Saluran Memori\r\n2\r\n\r\nMendukung Memori ECC ‡\r\nTidak\r\n\r\nGrafik Prosesor\r\nGrafis Prosesor ‡\r\nIntel® HD Graphics 630\r\n\r\nFrekuensi Dasar Grafik\r\n350 MHz\r\n\r\nFrekuensi Dinamis Maks Grafik\r\n1.15 GHz\r\n\r\nMemori Maks Video Grafik\r\n64 GB\r\n\r\nDukungan 4K\r\nYes, at 60Hz\r\n\r\nResolusi Maksimum (HDMI)‡\r\n4096x2304@24Hz\r\n\r\nResolusi Maksimum (DP)‡\r\n4096x2304@60Hz\r\n\r\nResolusi Maksimum (eDP - Panel Datar Terintegrasi)‡\r\n4096x2304@60Hz\r\n\r\nDukungan DirectX*\r\n12\r\n\r\nDukungan OpenGL*\r\n4.5\r\n\r\nIntel® Quick Sync Video\r\nYa\r\n\r\nIntel® InTru™ 3D Technology\r\nYa\r\n\r\nIntel® Clear Video HD Technology\r\nYa\r\n\r\nIntel® Clear Video Technology\r\nYa\r\n\r\nJumlah Layar yang Didukung ‡\r\n3\r\n\r\nID Perangkat\r\n0x5912\r\n\r\nOpsi Ekspansi\r\nKemudahan untuk Diskalakan\r\n1S Only\r\n\r\nRevisi PCI Express\r\n3.0\r\n\r\nKonfigurasi PCI Express ‡\r\nUp to 1x16, 2x8, 1x8+2x4\r\n\r\nJumlah Maksimal Jalur PCI Express\r\n16\r\n\r\nSpesifikasi Paket\r\nSoket yang Didukung\r\nFCLGA1151\r\n\r\nKonfigurasi CPU Maks\r\n1\r\n\r\nSpesifikasi Solusi Termal\r\nPCG 2015C (65W)\r\n\r\nTJUNCTION\r\n100°C\r\n\r\nUkuran Paket\r\n37.5mm x 37.5mm\r\n\r\nTeknologi Canggih\r\nMemori Intel® Optane™ Didukung ‡\r\nYa\r\n\r\nIntel® Turbo Boost Technology ‡\r\n2.0\r\n\r\nIntel® Hyper-Threading Technology ‡\r\nTidak\r\n\r\nIntel® TSX-NI\r\nYa\r\n\r\nIntel® 64 ‡\r\nYa\r\n\r\nSet Instruksi\r\n64-bit\r\n\r\nEkstensi Set Instruksi\r\nIntel® SSE4.1, Intel® SSE4.2, Intel® AVX2\r\n\r\nKeadaan Diam\r\nYa\r\n\r\nEnhanced Intel SpeedStep® Technology\r\nYa\r\n\r\nTeknologi Pemantauan Panas\r\nYa\r\n\r\nIntel® Identity Protection Technology ‡\r\nYa\r\n\r\nKeamanan & Keandalan\r\nIntel vPro® Eligibility ‡\r\nIntel vPro® Platform\r\n\r\nPentunjuk Baru Intel® AES\r\nYa\r\n\r\nKode Keamanan\r\nYa\r\n\r\nIntel® Software Guard Extensions (Intel®SGX)\r\nYes with Intel® ME\r\n\r\nIntel® Memory Protection Extensions (Intel® MPX)\r\nYa\r\n\r\nIntel® OS Guard\r\nYa\r\n\r\nIntel® Trusted Execution Technology ‡\r\nYa\r\n\r\nExecute Disable Bit ‡\r\nYa\r\n\r\nIntel® Boot Guard\r\nYa\r\n\r\nIntel® Stable Image Platform Program (SIPP)\r\nYa\r\n\r\nIntel® Virtualization Technology (VT-x) ‡\r\nYa\r\n\r\nIntel® Virtualization Technology for Directed I/O (VT-d) ‡\r\nYa\r\n\r\nIntel® VT-x dengan Extended Page Tables (EPT) ‡\r\nYa'),(8,'Intel Core i5-10400',1887000,'https://tokopedia.link/V2RY2FgFhwb','Intel Core i5-10400.jpg',6,6,'2.90 GHz','4.30 GHz',65,'Intel UHD Graphics 630','Spesifikasi CPU\r\nJumlah Inti 6\r\nJumlah Untaian 12\r\nFrekuensi Turbo Maks 4.30 GHz\r\nFrekuensi Intel® Turbo Boost Technology 2.0 ‡​​​4.30 GHz\r\nFrekuensi Dasar Prosesor 2.90 GHz\r\nCache 12 MB Intel® Smart Cache\r\nKecepatan Bus 8 GT/s\r\nTDP 65 W\r\nInformasi Tambahan\r\nStatusLaunched\r\nTanggal Peluncuran Q2\'20\r\nTersedia Opsi Terpasang Tidak\r\nLembar DataLihat sekarang\r\nSpesifikasi Memori\r\nUkuran Memori Maks (bergantung jenis memori) 128 GB\r\nJenis Memori DDR4-2666\r\nJumlah Maksimum Saluran Memori 2\r\nBandwidth Memori Maks 41.6 GB/s\r\nMendukung Memori ECC ‡ Tidak\r\nGrafik Prosesor\r\nGrafis Prosesor ‡ Intel® UHD Graphics 630\r\nFrekuensi Dasar Grafik 350 MHz\r\nFrekuensi Dinamis Maks Grafik 1.10 GHz\r\nMemori Maks Video Grafik 64 GB\r\nDukungan 4K Yes, at 60Hz\r\nResolusi Maksimum (HDMI)‡ 4096 x 2160@30Hz\r\nResolusi Maksimum (DP)‡ 4096 x 2304@60Hz\r\nResolusi Maksimum (eDP - Panel Datar Terintegrasi)‡ 4096 x 2304@60Hz\r\nDukungan DirectX* 12\r\nDukungan OpenGL* 4.5\r\nIntel® Quick Sync Video Ya\r\nIntel® InTru™ 3D Technology Ya\r\nIntel® Clear Video HD Technology Ya\r\nIntel® Clear Video Technology Ya\r\nJumlah Layar yang Didukung ‡3\r\nID Perangkat0x9BC8 / 0x9BC5\r\nOpsi Ekspansi\r\nKemudahan untuk Diskalakan1S Only\r\nRevisi PCI Express 3.0\r\nKonfigurasi PCI Express ‡ Up to 1x16, 2x8, 1x8+2x4\r\nJumlah Maksimal Jalur PCI Express 16\r\nSpesifikasi Paket\r\nSoket yang Didukung FCLGA1200\r\nKonfigurasi CPU Maks1\r\nSpesifikasi Solusi Termal PCG 2015C\r\nTJUNCTION 100°C\r\nUkuran Paket37.5mm x 37.5mm\r\nTeknologi Canggih\r\nMemori Intel® Optane™ Didukung ‡ Ya\r\nIntel® Thermal Velocity Boost Tidak\r\nIntel® Turbo Boost Max Technology 3.0 ‡ Tidak\r\nIntel® Turbo Boost Technology ‡ 2.0\r\nIntel® Hyper-Threading Technology ‡ Ya\r\nIntel® TSX-NI Tidak\r\nIntel® 64 ‡ Ya\r\nSet Instruksi 64-bit\r\nEkstensi Set Instruksi Intel® SSE4.1, Intel® SSE4.2, Intel® AVX2\r\nKeadaan Diam Ya\r\nEnhanced Intel SpeedStep® Technology Ya\r\nTeknologi Pemantauan Panas Ya\r\nIntel® Identity Protection Technology ‡ Ya\r\nKeamanan & Keandalan\r\nPentunjuk Baru Intel® AES Ya\r\nKode Keamanan Ya\r\nIntel® Software Guard Extensions (Intel®SGX) Yes with Intel® ME\r\nIntel® OS GuardYa\r\nIntel® Trusted Execution Technology ‡ Tidak\r\nExecute Disable Bit ‡ Ya\r\nIntel® Boot Guard Ya\r\nIntel® Stable Image Platform Program (SIPP) Tidak\r\nIntel® Virtualization Technology (VT-x) ‡ Ya\r\nIntel® Virtualization Technology for Directed I/O (VT-d) ‡ Ya\r\nIntel® VT-x dengan Extended Page Tables (EPT) ‡ Ya'),(9,'AMD Ryzen 5 4500',1530000,'https://tokopedia.link/MWwLKSrFhwb','AMD Ryzen 5 4500.jpg',2,6,'3.6 GHz','4.1 GHz',65,'','Processor Name :AMD Ryzen 5 4500 3.6Ghz Up To 4.1Ghz Cache 8MB 65W AM4 [BOX] - 6 Core - 100-100000644BOX - with Wraith Stealth Cooler\r\nBrand :AMD\r\nCPU Socket Type :AM4\r\nCores :6\r\nThreads :12\r\nOperating Frequency :3.6GHz\r\nMax Turbo Frequency :4.1GHz\r\nCache :8MB\r\nManufacturing Tech :7nm\r\nThermal Design Power :65W'),(10,'AMD Ryzen 5 3600',1958000,'https://tokopedia.link/7uEmK7HFhwb','AMD Ryzen 5 3600.jpg',2,6,'3.6 GHz','4.2 GHz',65,'','Brand : AMD\r\nCPU Socket Type : AM4\r\nProcessors Generation : 3rd Gen Ryzen\r\nFamily : AMD Ryzen\r\nCores : 6\r\nThreads : 12\r\nOperating Frequency : 3.6GHz\r\nMax Turbo Frequency : 4.2GHz\r\nCache : 32 MB\r\nManufacturing Tech : TSMC 7 nm FinFET\r\nIntegrated Graphics : No\r\nThermal Design Power : 65 W\r\nThermal Solution (Cooler) : Included\r\nWarranty : Garansi Lokal/AMD Indonesia 3 Years'),(11,'Intel Core i3-10105F',1129000,'https://tokopedia.link/PEJLQMfSiwb','Intel Core i3-10105F.jpg',6,4,'3.70 GHz','4.40 GHz',65,'','Processor Name :Intel Core i3-10105F 3.7Ghz Up To 4.4Ghz - Cache 6MB [Box] Socket LGA 1200 - Comet Lake Refresh Series\r\nBrand :Intel\r\nCPU Socket Type :LGA 1200\r\nProcessors Generation :Core i3 10th Gen\r\nFamily :Comet Lake\r\nCores :4\r\nThreads :8\r\nOperating Frequency :3.70 GHz\r\nMax Turbo Frequency :4.40 GHz\r\nCache :6 MB\r\nManufacturing Tech :14 nm\r\nIntegrated Graphics :No\r\nThermal Design Power :65 W\r\nThermal Solution (Cooler) :Included\r\nWarranty :3 Years'),(12,'Intel Core i3 12100F',1673000,'https://tokopedia.link/oclcCauSiwb','Intel Core i3 12100F.jpg',7,4,'3.30 GHz','4.30 GHz',89,'','- Total Cores : 4\r\n- # of Performance-cores : 4\r\n- # of Efficient-cores : 0\r\n- Total Threads : 8\r\n- Max Turbo Frequency : 4.30 GHz\r\n- Performance-core Max Turbo Frequency : 4.30 GHz\r\n- Performance-core Base Frequency : 3.30 GHz\r\n- Cache : 12 MB Intel® Smart Cache\r\n- Total L2 Cache : 5 MB\r\n- Processor Base Power : 58 W\r\n- Maximum Turbo Power : 89 W\r\n- Max Memory Size (dependent on memory type) : 128 GB\r\n- Sockets Supported : FCLGA1700'),(13,'Intel Core i3 13100',2520000,'https://tokopedia.link/SZkUlIhUiwb','Intel Core i3 13100.png',7,4,'3.40 GHz','4.50 GHz',89,'Intel UHD Graphics 730','Total Cores 4\r\n# of Performance-cores 4\r\n# of Efficient-cores 0\r\nTotal Threads 8\r\nMax Turbo Frequency 4.50 GHz\r\nPerformance-core Max Turbo Frequency 4.50 GHz\r\nPerformance-core Base Frequency 3.40 GHz\r\nCache 12 MB Intel® Smart Cache\r\nTotal L2 Cache 5 MB\r\nProcessor Base Power 60 W\r\nMaximum Turbo Power 89 W'),(14,'AMD Ryzen 3 3200G',1489000,'https://tokopedia.link/vu19wwEUiwb','AMD Ryzen 3 3200G.jpg',2,4,'3.6 GHz','4.0 GHz',65,'Radeon Vega 8','Processor Name : AMD Ryzen 3 3200G 3.6Ghz Up To 4.0Ghz Cache 4MB 65W AM4 [Box] - 4 Core - YD3200C5FHBOX - With AMD Wraith Stealth Cooler\r\nBrand : AMD\r\nCPU Socket Type : AM4\r\nProcessors Generation : 2nd Gen Ryzen\r\nFamily : AMD Ryzen\r\nCores : 4\r\nThreads : 4\r\nOperating Frequency : 3.6Ghz\r\nMax Turbo Frequency : 4.0Ghz\r\nCache : 4 MB\r\nManufacturing Tech : 12 nm FinFET\r\nIntegrated Graphics :\r\nThermal Design Power : 45-65 W\r\nThermal Solution (Cooler) : Included\r\nWarranty : 3 Years'),(15,'AMD Ryzen 3 4100',1135000,'https://tokopedia.link/fxnVcLiViwb','AMD Ryzen 3 4100.jpg',2,4,'3.8 GHz','4.0 GHz',65,'','# of Threads 8\r\n- L1 Cache 256KB\r\n- Default TDP 65W\r\n- CPU Socket AM4\r\n- Max. Operating Temperature (Tjmax) 95°C\r\n- Product Line AMD Ryzen™ 3 Desktop Processors\r\n- Max. Boost Clock Up to 4.0GHz\r\n- L2 Cache 2MB\r\n- Processor Technology for CPU Cores TSMC 7nm FinFET\r\n- Socket Count 1P\r\n');
/*!40000 ALTER TABLE `cpus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gpus`
--

DROP TABLE IF EXISTS `gpus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gpus` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'placeholder.png',
  `license` enum('Intel','AMD','Nvidia') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `memorySize` int NOT NULL,
  `tdp` int NOT NULL,
  `boostClockMhz` int NOT NULL,
  `lengthMm` int NOT NULL,
  `description` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gpus`
--

LOCK TABLES `gpus` WRITE;
/*!40000 ALTER TABLE `gpus` DISABLE KEYS */;
INSERT INTO `gpus` VALUES (1,'ASUS Dual Radeon RX 6600',3870000,'https://tokopedia.link/UOAKTnaGdwb','ASUS Dual Radeon RX 6600.png','AMD',8,132,2491,243,'Graphic EngineRadeon RX 6600\r\nBus StandardPCI Express 4.0\r\nOpenGLOpenGL®4.6\r\nVideo Memory8GB GDDR6\r\nEngine Clock\r\nOC mode : up to 2491 MHz (Boost Clock)/up to 2064 MHz (Game Clock)\r\nGaming mode : up to 2491 MHz (Boost Clock)/up to 2044 MHz (Game Clock)\r\nStream Processors1792\r\nMemory Speed 14 Gbps\r\nMemory Interface 128-bit\r\nResolution Digital Max Resolution 7680 x 4320\r\nInterface\r\nYes x 1 (Native HDMI 2.1)\r\nYes x 3 (Native DisplayPort 1.4a)\r\nHDCP Support Yes (2.3)\r\nMaximum Display Support 4\r\nNVlink/ Crossfire Support Yes\r\nAccessories\r\n1 x Collection Card\r\n1 x Speedsetup Manual\r\nSoftware\r\nASUS GPU Tweak II & Drivers: please download all software from the support site.\r\nDimensions\r\n243 x 134 x 49 mm\r\n9.6 x 5.3 x 1.9 inches\r\nRecommended PSU 500W\r\nPower Connectors 1 x 8-pin\r\nSlot 2.5 Slot'),(2,'GeForce RTX 3070 Ti GAMING X TRIO 8G',9684000,'https://tokopedia.link/XDJWZXqEdwb','GeForce RTX 3070 Ti GAMING X TRIO 8G.png','Nvidia',8,310,1830,323,'Model Name GeForce RTX™ 3070 Ti GAMING X TRIO 8G\r\nGraphics Processing Unit NVIDIA® GeForce RTX™ 3070 Ti\r\nInterface PCI Express® Gen 4\r\nCore Clocks Boost: 1830 MHz\r\nCUDA® CORES 6144 Units\r\nMemory Speed 19 Gbps\r\nMemory 8GB GDDR6X\r\nMemory Bus 256-bit\r\nOutput\r\nDisplayPort x 3 (v1.4a)\r\nHDMI x 1 (Supports 4K@120Hz as specified\r\nin HDMI 2.1)\r\nHDCP Support Y\r\nPower consumption 310 W\r\nPower connectors 8-pin x2\r\nRecommended PSU 750 W\r\nCard Dimension (mm) 323 x 140 x 56 mm\r\nWeight (Card / Package) 1515 g / 2343 g\r\nDirectX Version Support 12 API\r\nOpenGL Version Support 4.6\r\nMaximum Displays 4\r\nVR Ready Y\r\nG-SYNC® technology Y\r\nAdaptive Vertical Sync Y\r\nDigital Maximum Resolution 7680 x 4320'),(3,'ASUS Radeon RX 6800',7900000,'https://tokopedia.link/woLMjMWGdwb','ASUS Radeon RX 6800.jpg','AMD',16,250,2105,267,'Graphic Engine\r\nAMD Radeon RX 6800\r\nBus Standard\r\nPCI Express 4.0\r\nOpenGL\r\nOpenGL®4.6\r\nVideo Memory\r\n16GB GDDR6\r\nEngine Clock\r\nOC mode : Up to 2190MHz (Boost Clock)/ Up to 1980 MHz (Game Clock)\r\nGaming mode : Up to 2155MHz (Boost Clock)/ Up to 1925 MHz (Game Clock)\r\nStream Processors\r\n3840\r\nMemory Speed\r\n16 Gbps\r\nMemory Interface\r\n256-bit\r\nResolution\r\nDigital Max Resolution 7680 x 4320\r\nInterface\r\nYes x 1 (Native HDMI2.1)\r\nYes x 3 (Native DisplatPort 1.4a)\r\nYes (2.3)'),(4,'XFX Radeon RX 7900 XTX 24GB GDDR6 Gaming',18900000,'https://tokopedia.link/0Xd78m8Idwb','XFX Radeon RX 7900 XTX 24GB GDDR6 Gaming.jpg','AMD',24,355,2500,300,'‍Bus Type: PCI-E 4.0\r\n\r\nPrimary Clock Speeds:\r\nBase clock Up to: 1900 MHz\r\nGame Clock Up To: 2300 MHz*\r\nBoost clock Up to: 2500 MHz**\r\n\r\nStream Processors: 6144\r\nCompute Units: 96\r\nMemory Bus: 384bit\r\nMemory Clock: 20 Gbps\r\nMemory Size: 24 GB\r\nMemory Bandwidth: Up to 960 GB/ss\r\nEffective Memory Bandwidth: Up to 3500 GB/s\r\nMemory Type: GDDR6\r\nCard Profile: 2.5 slot\r\nThermal Solution: 3 Fan\r\n\r\nOutputs\r\n\r\n‍DisplayPort 2.1: 2x\r\nHDMI™ 2.1: 1x\r\nUSB Type-C: 1x'),(5,'MSI GeForce RTX 4090 SUPRIM X 24G',34683000,'https://tokopedia.link/bx7S5Y7Jdwb','MSI GeForce RTX 4090 SUPRIM X 24G.jpg','Nvidia',24,480,2625,336,'MODEL NAME - GeForce RTX® 4090 SUPRIM X 24G\r\nGRAPHICS PROCESSING UNIT - NVIDIA® GeForce RTX® 4090\r\nINTERFACE - PCI Express® Gen 4\r\nCORE CLOCKS\r\n- Extreme Performance: 2640 MHz (MSI Center)\r\n- Boost: 2625 MHz (GAMING & SILENT Mode)\r\nCUDA® CORES - 16384 Units\r\nMEMORY SPEED - 21 Gbps\r\nMEMORY - 24GB GDDR6X\r\nMEMORY BUS - 384-bit\r\nOUTPUT\r\n- DisplayPort x 3 (v1.4a)\r\n- HDMI™ x 1 (Supports 4K@120Hz HDR, 8K@60Hz HDR, and Variable Refresh Rate as specified in HDMI 2.1a)\r\nHDCP SUPPORT - Y\r\nPOWER CONSUMPTION\r\n- Silent mode: 450W\r\n- Gaming mode: 480W\r\nPOWER CONNECTORS - 16-pin x 1\r\nRECOMMENDED PSU - 1000W (Min. 850W)\r\nCARD DIMENSION (MM) - 336 x 142 x 78 mm\r\nWEIGHT (CARD / PACKAGE) - 2413g / 3636g\r\nDIRECTX VERSION SUPPORT - 12 Ultimate'),(6,'GALAX Geforce GTX 1630 4GB DDR6 EX',2350000,'https://tokopedia.link/i0LlMEIiiwb','GALAX Geforce GTX 1630 4GB DDR6 EX.png','Nvidia',4,75,1800,181,'GPU Engine Specs:\r\nCUDA Cores 512\r\nBoost Clock (MHz) 1800\r\n1-Click OC Clock (MHz) 1815 (by installing Xtreme Tuner Plus Software and using 1-Click OC)\r\nMemory Specs:\r\nMemory Speed 12 Gbps\r\nMemory Interface Width 64-bit GDDR6\r\nMemory Bandwidth (GB/sec) 96\r\nDisplay Support:\r\nMulti Monitor 3 Displays\r\nStandard Display Connectors DP 1.4, HDMI 2.0b, DVI-D\r\nStandard Graphics Card Dimensions:\r\nDimensions(with Bracket) 196*126*39 mm\r\nDimensions(without Bracket) 181*97*33 mm\r\nPower Specs:\r\nMaximum Graphics Card Power (W) 75W\r\nMinimum System Power Requirement (W) 300W'),(7,'MSI Geforce GTX 1650 4GB DDR5',2710000,'https://tokopedia.link/7UqgifWiiwb','MSI Geforce GTX 1650 4GB DDR5.png','Nvidia',4,75,1695,177,'Product Name : MSI Geforce GTX 1650 4GB DDR5 - Ventus XS OC V1\r\nBrand : MSI\r\nInterface : PCI Express x16 3.0\r\nGPU : NVIDIA GeForce GTX 1650\r\nBoost Clock : 1695 MHz\r\nMemory Clock Speed : 8 Gbps\r\nMemory Size : 4GB\r\nMemory Interface : 128-bit\r\nMemory Type : GDDR5\r\nDirectX : 12\r\nOpenGL : 4.5\r\nCuda Cores : 896 Units\r\nMaximum Display Support : 3\r\nVideo Output Function : DisplayPort, HDMI, DL-DVI-D\r\nMinimum Power Requipment : 300 W\r\nCard Dimensions : 177 x 111 x 38 mm\r\nWarranty : 3 Years'),(8,'MSI Radeon RX 6400 AERO ITX 4G',2629000,'https://tokopedia.link/xE8EeRMBdwb','MSI Radeon RX 6400 AERO ITX 4G.png','AMD',4,53,2321,172,'Model Name Radeon™ RX 6400 AERO ITX 4G\r\nGraphics Processing Unit Radeon™ RX 6400\r\nInterface PCI Express® Gen 4 x 4\r\nCore Clocks Boost: Up to 2321 MHz Game: Up to 2039\r\nMHz\r\nCUDA® CORES 768 Units\r\nMemory Speed 16 Gbps\r\nMemory 4GB GDDR6\r\nMemory Bus 64-bit\r\nOutput\r\nDisplayPort x 1 (v1.4a) / HDMI x 1 (Supports\r\n4K@120Hz/8K@60Hz and VRR as specified in\r\nHDMI 2.1)\r\nHDCP Support Y\r\nPower consumption 53W\r\nPower connectors N/A\r\nRecommended PSU 350W\r\nCard Dimension (mm) 172 x 112 x 39 mm\r\nWeight (Card / Package) 358g / 718g\r\nDirectX Version Support 12 API\r\nOpenGL Version Support 4.6\r\nMaximum Displays 2\r\nVR Ready Y\r\nFreeSync™ Technology Y\r\nDigital Maximum Resolution 7680 x 4320'),(9,'PowerColor Radeon RX 6500 XT ITX 4GB DDR6',2948000,'https://tokopedia.link/sXyxZ1ojiwb','PowerColor Radeon RX 6500 XT ITX 4GB DDR6.png','AMD',4,107,2815,165,'Graphics Engine AXRX 6500 XT 4GBD6-DH\r\nVideo Memory 4GB GDDR6\r\nStream Processor 1024 Units\r\nEngine Clock(OC) TBD\r\nEngine Clock(STD/Silent)\r\nMemory Clock 18.0 Gbps\r\nMemory Interface 64-bit\r\nDirectX® Support 12\r\nBus Standard PCIE 4.0\r\nStandard Display Connectors 1 x HDMI 2.1 , 1 x DisplayPort 1.4\r\nPower Specs + Board Dimensions\r\nBoard Dimensions 165mm*125mm*40mm\r\nMinimum System Power requirement (W) 400W\r\nExtension Power Connector One 6-Pin PCI Express Power connector'),(10,'GALAX Geforce GTX 1660 Ti 6GB DDR6',3600000,'https://tokopedia.link/k66aTgFjiwb','GALAX Geforce GTX 1660 Ti 6GB DDR6.png','Nvidia',6,120,1785,228,'Product Name : GALAX Geforce GTX 1660 Ti 6GB DDR6 (1-Click OC) - DUAL FAN - Garansi 2 Thn\r\nBrand : Galax\r\nInterface : PCI Express x16 3.0\r\nGPU : NVIDIA GeForce GTX 1660 Ti\r\nBase Clock : -\r\nBoost Clock : 1785 Mhz\r\nMemory Clock Speed : 12000 Mhz\r\nMemory Size : 6 GB\r\nMemory Interface : 192 Bit\r\nMemory Type : GDDR6\r\nDirectX : DirectX 12\r\nOpenGL : OpenGL 4.6\r\nCuda Cores : 1536\r\nMaximum Displays : 3 Display\r\nVideo Output Function : DisplayPort 1.4, HDMI 2.0b, Dual Link-DVI\r\nMinimum Power Requipment : 450 Watt *Pure Power\r\nPower Connectors : 8 Pin\r\nCard Dimensions : 228 x 131.5 x 41.5 mm\r\nWarranty : 2 Years'),(11,'Asus GeForce GTX 1050 Ti 4GB DDR5',2978000,'https://tokopedia.link/5ruzWm19iwb','Asus GeForce GTX 1050 Ti 4GB DDR5.png','Nvidia',4,75,1455,203,'Product Name : Asus GeForce GTX 1050 Ti 4GB DDR5 - Cerberus-GTX1050TI-O4G\r\nBrand : Asus\r\nInterface : PCI Express 3.0\r\nGPU : NVIDIA GeForce GTX 1050 TI\r\nBase Clock : 1341 MHz\r\nBoost Clock : 1455 MHz\r\nMemory Clock Speed : 7008 MHz\r\nMemory Size : 4GB\r\nMemory Interface : 128-bit\r\nMemory Type : GDDR5\r\nDirectX : 12\r\nOpenGL : 4.5\r\nCuda Cores 768\r\nMulti Display : 3 Displays\r\nVideo Output Function : DisplayPort 1.4, HDMI 2.0b, DVI-D, HDCP Support\r\nMinimum Power Requipment : 300 Watt Pure Power or greater PSU\r\nCard Dimensions : 20.3 x 11.5 x3.8 Centimeter\r\nWarranty : 3 Years'),(12,'MSI GeForce GT 1030 AERO ITX 2GD4 OC',1539000,'https://tokopedia.link/KTLndHlajwb','MSI GeForce GT 1030 AERO ITX 2GD4 OC.png','Nvidia',2,20,1430,147,'MODEL NAME\r\nGRAPHICS PROCESSING UNIT\r\nINTERFACE\r\nCORE CLOCKS\r\nCUDA® CORES\r\nMEMORY SPEED\r\nMEMORY\r\nMEMORY BUS\r\nOUTPUT\r\nHDCP SUPPORT\r\nPOWER CONSUMPTION\r\nRECOMMENDED PSU\r\nCARD DIMENSION (MM)\r\nWEIGHT (CARD / PACKAGE)\r\nDIRECTX VERSION SUPPORT\r\nOPENGL VERSION SUPPORT\r\nAFTERBURNER OC\r\nMAXIMUM DISPLAYS\r\nGeForce® GT 1030 AERO ITX 2GD4 OC\r\nNVIDIA® GeForce® GT 1030\r\nPCI Express 3.0 x16 (uses x4)\r\n1189 MHz / 1430 MHz\r\n384 Units\r\n2100 MHz\r\n2GB DDR4\r\n64-bit\r\nHDMI (Supports 4K@60Hz as specified in HDMI 2.0b)\r\nSL-DVI-D\r\n2.2\r\n20 W\r\n300 W\r\n147 x 102 x 38 mm\r\n281 g / 507 g\r\n12\r\n4.5\r\nY\r\n2'),(13,'Biostar Radeon RX 550 4GB DDR5',1708000,'https://tokopedia.link/sRsvMiuajwb','Biostar Radeon RX 550 4GB DDR5.jpg','AMD',4,60,1183,171,'Product Name : Biostar Radeon RX 550 4GB DDR5\r\nBrand : Biostar\r\nInterface : PCI Express 3.0\r\nGPU : Radeon RX 550\r\nBase Clock : 1100 MHz\r\nBoost Clock : 1183 MHz\r\nMemory Clock Speed : 7000 Mbps\r\nMemory Size : 4GB\r\nMemory Interface : 128-bit\r\nMemory Type : DDR5\r\nDirectX : 12\r\nOpenGL : 4.5\r\nStream Processors : 512\r\nMulti Display : Yes\r\nVideo Output Function : DisplayPort, HDMI, DL-DVI\r\nMinimum Power Requipment : 300 Watt Pure Power or greater PSU\r\nWarranty : 1 Years'),(14,'Biostar Radeon RX 560 4GB DDR5',2127000,'https://tokopedia.link/nICE7sUajwb','Biostar Radeon RX 560 4GB DDR5.jpg','AMD',4,75,1275,170,'GPU	Radeon RX560\r\nPRODUCT FEATURES	DVI\r\nHDCP\r\nHDMI\r\nDisplay port\r\nENGINE CLOCK	1175/1275MHz\r\nMEMORY CLOCK	6000MHz\r\nMEMORY SIZE	4GB\r\nMEMORY TYPE	GDDR5\r\nMEMORY BUS	128-bit\r\nCUDA/Stream Processors	1024/896\r\nINTERFACE	Support PCI-E 3.0\r\nMAX RESOLUTION	Digital: 7680 X 4320 @60Hz\r\nOUTPUT	DVI\r\nHDMI\r\nDisplay Port\r\nACCESSORIES	1 x Quick Guide\r\nOS SUPPORT	Windows 7 - 32-Bit Edition\r\nWindows 7 - 64-Bit Edition\r\nUbuntu x86 64-Bit\r\nLinux x86_64\r\nWindows 10 - 64-Bit Edition'),(15,'MSI GTX 1060 Gaming X 6GB',2150000,'https://tokopedia.link/7O7huZnbjwb','MSI GTX 1060 Gaming X 6GB.png','Nvidia',6,120,1784,277,'GeForce® GTX 1060 GAMING X 6G\r\nCORE NAME : GP106-400\r\nCORES : 1280 Units\r\nMEMORY : 6GB GDDR5 (192-bit)\r\nGRAPHICS PROCESSING UNIT : NVIDIA GeForce® GTX 1060\r\n\r\nG-SYNC™ TECHNOLOGY : Y\r\nINTERFACE : PCI Express x16 3.0\r\nADAPTIVE VERTICAL SYNC : Y\r\n\r\nBOOST / BASE CORE CLOCK :\r\n- 1809 MHz / 1594 MHz (OC Mode)\r\n- 1784 MHz / 1569 MHz (Gaming Mode)\r\n- 1708 MHz / 1506 MHz (Silent Mode)\r\nMEMORY SIZE : 6144\r\nMEMORY TYPE : GDDR5\r\nMEMORY INTERFACE : 192-bit\r\nMEMORY CLOCK SPEED (MHZ) :\r\n- 8100 MHz (OC Mode)\r\n- 8000 MHz (Gaming Mode)\r\n- 8000 MHz (Silent Mode)\r\n\r\nOUTPUT SUPPORT\r\nDisplayPort (Version 1.4)\r\nHDMI (Version 2.0)\r\nDL-DVI-D\r\n\r\nVIRTUAL REALITY READY : Y\r\nDIGITAL MAXIMUM RESOLUTION : 7680 x 4320\r\nHDCP SUPPORT : 2.2\r\nDIRECTX VERSION SUPPORT : 12\r\nOPENGL VERSION SUPPORT : 4.5\r\n\r\nCARD DIMENSION(MM) : 277 x 140 x 39 mm\r\nCARD WEIGHT (G) : 1017\r\n\r\nPOWER CONSUMPTION (W) : 120\r\nRECOMMENDED PSU (W) : 400\r\nPOWER CONNECTORS : 8-pin x 1\r\n');
/*!40000 ALTER TABLE `gpus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `internal_storages`
--

DROP TABLE IF EXISTS `internal_storages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `internal_storages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'placeholder.png',
  `capacity` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `internal_storages`
--

LOCK TABLES `internal_storages` WRITE;
/*!40000 ALTER TABLE `internal_storages` DISABLE KEYS */;
INSERT INTO `internal_storages` VALUES (1,'Patriot Viper VP4100 1TB',2520000,'https://tokopedia.link/TxEzWLAfjwb','Patriot Viper VP4100 1TB.jpg','1TB','SSD NVME Gen 4','Brand : Patriot\r\nType : VP-4100\r\nCapacity : 1TB\r\nInterface : PCIe Gen4 x4, NVMe 1.3\r\nPhison E16 Series Controller\r\n2280 M.2 PCIe Gen4 x 4, NVMe 1.3\r\nExternal thermal sensor\r\nlow profile heatshield design\r\nadvanced wear leveling, etc.\r\n\r\nSequential (ATTO): up to 5,000MB/s Read and up to 4,400MB/s Write'),(2,'Crucial P3 Plus SSD 500GB',765000,'https://tokopedia.link/HmRX8l56hwb','Crucial P3 Plus SSD 500GB.png','500GB','SSD NVME PCIe Gen 4.0','SSD series - P3 Plus\r\nInterface - NVMe (PCIe Gen 4 x4)\r\nCapacity - 500GB\r\nForm factor - M.2 (2280)\r\nSequential Read - 4700 MB/s\r\nSequential Write - 1900 MB/s\r\nSSD Endurance (TBW) - 110 Terabytes'),(3,'Kingston SSD NV2 250GB',423000,'https://tokopedia.link/0KveeMd6hwb','Kingston SSD NV2 250GB.jpg','250GB','SSD NVME PCIe Gen 4.0','Form Faktor M.2 2280\r\nAntarmuka PCIe 4.0 x4 NVMe\r\nKapasitas2 250GB, 500GB, 1TB, 2TB\r\nBaca/Tulis Berurutl1 250GB – 3.000/1.300MB/dtk\r\nDaya tahan (Total Byte Ditulis)3 250GB – 80TB\r\nSuhu Penyimpanan -40°C~85°C\r\nSuhu Pengoperasian 0°C~70°C\r\nDimensi 22mm x 80mm x 2,2mm'),(4,'Samsung SSD 980 M.2 PCIe Gen3 x4 500GB MZ-V8V500BW',841000,'https://tokopedia.link/vnT9icavfwb','Samsung SSD 980 M.2 PCIe Gen3 x4 500GB MZ-V8V500BW.png','500GB','SSD NVME PCIe Gen 3','Form Factor : Single-Sided M.2 2280\r\nInterface : PCIe 3.0 x4, NVMe 1.4\r\nController : Samsung Pablo\r\nDRAM : None\r\nNAND Flash : Samsung 128L 512Gb TLC\r\nSequential Read : 2900 MB/s (250GB), 3100 MB/s (500GB), 3500 MB/s (1TB)\r\nSequential Write : 1300 MB/s (250GB), 2600 MB/s (500GB), 3000 MB/s (1TB)\r\nMax SLC Cache Size : 45 GB (250GB), 122 GB (500GB), 160 GB (1TB)\r\nRandom Read\r\nRandom Write\r\nIOPS : QD1 53k (250GB), 54k ( 500GB / 1TB)\r\nQD32T16 : 320k (250GB), 470k (500GB), 480k (500GB)\r\nPower Read : 3.7 W (250GB), 4.3 W (500GB), 4.5 W (1TB)\r\nPower Write : 3.2 W (250GB), 4.2 W (500GB), 4.6 W (1TB)\r\nManagement Software : Samsung Magician\r\nData Encryption : AES 256-bit Full Disk Encryption, TCG/Opal V2.0, Encrypted Drive (IEEE1667)\r\nWarranty : 5 years'),(5,'Adata SX6000 Lite 128GB',305000,'https://tokopedia.link/lUgKxNkfjwb','Adata SX6000 Lite 128GB.jpg','128GB','SSD NVME Gen 3','Product Name: ADATA SX6000 Lite 128GB M.2 NVME R 1800MB/S W 1200MB/S\r\nBrand: ADATA\r\nSeries: SX6000 Lite\r\nForm Factor: M.2 2280\r\nCapacity: 128GB\r\nController: -\r\nMemory Components: SLC\r\nInterface: PCIe Gen3x4\r\nR 1800mb/s\r\nW 600mb/s\r\nWarranty: 3 Years'),(6,'SSD ADATA SU800 1TB SATA III',2105000,'https://tokopedia.link/oXQD2MCvfwb','SSD ADATA SU800 1TB SATA III.jpg','1TB','SSD SATA III','Product Name: ADATA SU800 1TB SATA III ( R/W Up to 560 / 520MB/s )\r\nBrand: ADATA\r\nSeries: SU800\r\nForm Factor: 2.5 inch\r\nCapacity: 1TB\r\nController: SMI\r\nMemory Components: 3D TLC\r\nInterface: SATA 6Gb/s\r\nMax Sequential Read: Up to 560MB/s\r\nMax Sequential Write: Up to 520MB/s\r\nWarranty: 3 Years'),(7,'V-GeN Rescue SSD 960GB SATA3',793000,'https://tokopedia.link/aR6CDmqiiwb','V-GeN Rescue SSD 960GB SATA3.jpg','960GB','SSD SATA III','Speed : Read up to 500Mbps\r\nWrite up to 400Mbps\r\nInterface : SATA 3 - 6GB/s\r\nForm Factor : 2.5 inch\r\nWarranty : 3 years one to one replacement\r\nType : Internal Storage\r\nSupported : UDMA Mode 6\r\nTRIM Support : Yes (Requires OS Support)\r\nGarbage Collection : Yes\r\nS.M.A.R.T : Yes\r\nWrite Cache : Yes\r\nHost Protect Area : Yes\r\nAPM : Yes\r\nNCQ : Yes\r\n48-Bit : Yes'),(8,'Transcend MTS830 512GB M.2 SATA III',683000,'https://tokopedia.link/2UUalAovfwb','Transcend MTS830 512GB M.2 SATA III.jpg','512GB','SSD M.2 Sata III','Product Name: Transcend MTS830 512GB M.2 SATA III\r\nBrand: Transcend\r\nSeries: MTS830\r\nForm Factor: M.2 2280\r\nCapacity: 512GB\r\nController: ?\r\nMemory Components: ?\r\nInterface: SATA3 6Gb/detik\r\nMax Sequential Read: Up to 560MB/s\r\nMax Sequential Write: Up to 500MB/s\r\nWarranty: Five-year Limited Warranty'),(9,'Team T-Force Vulcan Z SSD 240GB SATA3',326000,'https://tokopedia.link/EuMWLwbiiwb','Team T-Force Vulcan Z SSD 240GB SATA3.jpg','240gb','SSD SATA III','Product Specifications\r\nModel: VULCAN Z SSD\r\nInterface: SATA III 6Gb/s\r\nCapacity: 240GB\r\nTerabyte Written: 240GB: 200 TBW\r\n\r\nPerformance:\r\nCrystal Disk Mark: [240GB] Read: up to 520MB/s ; Write: up to 450MB/s.\r\n\r\nDimensions\r\n100(L) x 69.9(W) x 7(H)mm\r\n'),(10,'V-GeN Rescue SSD 120GB SATA3',175000,'https://tokopedia.link/9WeVw3Mejwb','V-GeN Rescue SSD 120GB SATA3.jpg','120GB','SSD SATA III','Speed : Read up to 500Mbps\r\nWrite up to 400Mbps\r\nInterface : SATA 3 - 6GB/s\r\nForm Factor : 2.5 inch\r\nType : Internal Storage\r\nSupported : UDMA Mode 6\r\nTRIM Support : Yes (Requires OS Support)\r\nGarbage Collection : Yes\r\nS.M.A.R.T : Yes\r\nWrite Cache : Yes\r\nHost Protect Area : Yes'),(11,'Toshiba 2TB SATA3 256MB 7200RPM - P300 Series',801000,'https://tokopedia.link/x53R21Kvfwb','Toshiba 2TB SATA3 256MB 7200RPM - P300 Series.png','2TB','HDD 3.5 7200RPM','Brand : Toshiba\r\nCapacity : 2TB\r\nInterface : SATA 6.0Gb/s\r\nRPM : 7200\r\nForm Factor : 3.5 Inch'),(12,'Seagate 1TB SATA3',641000,'https://tokopedia.link/PYqOXxE5hwb','Seagate 1TB SATA3.jpg','1TB','HDD 3.5 7200RPM','Product Name : Seagate 1TB SATA3 - BarraCuda Series\r\nBrand : Seagate\r\nSeries : BarraCuda\r\nCapacity : 1TB\r\nInterface : SATA 6.0Gb/s\r\nRPM : 7200\r\nCache : 64MB\r\nForm Factor : 3.5 Inch\r\nWarranty : 2 Tahun'),(13,'WDC Blue 500GB 3.5',135000,'https://tokopedia.link/knHJrkCejwbs','WDC Blue 500GB 3.5.jpg','500GB','HDD 3.5 7200RPM','500GB\r\n7200RPM\r\nSATA III\r\n32MB Cache\r\n3.5\"\r\nUnit Utama'),(14,'HDD 250GB Seagate',70000,'https://tokopedia.link/r8P5eJ5ejwb','HDD 250GB Seagate.jpg','250GB','HDD 3.5 7200RPM','Merk : Seagate\r\nKapasitas : 250Gb\r\nDimensi Hardisk: 3.5 inch\r\nKategori : SATA III (Up to 3Gb/s)\r\nSpeed : 7200 Rpm'),(15,'WDC Purple Surveillance 2TB - WD22PURZ',897000,'https://tokopedia.link/WyrwxaOvfwb','WDC Purple Surveillance 2TB - WD22PURZ.jpg','2TB','HDD 3.5 5400RPM','WDC Purple Surveillance 2TB - WD22PURZ / HDD CCTV 2TB\r\nSpecifications\r\nCapacity : 2 TB\r\nSpeed : 5400 RPM\r\nCache : 64 MB\r\nInterface : SATA 6 Gb/s 8.9 cm (3.5\")\r\nDimensions : 14.6 x 10 x 2.6 cm (LxWxH)');
/*!40000 ALTER TABLE `internal_storages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `memories`
--

DROP TABLE IF EXISTS `memories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `memories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'placeholder.png',
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `count` int NOT NULL,
  `capacityPerPiece` int NOT NULL,
  `description` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `memories`
--

LOCK TABLES `memories` WRITE;
/*!40000 ALTER TABLE `memories` DISABLE KEYS */;
INSERT INTO `memories` VALUES (1,'CORSAIR VENGEANCE 64GB 2x32GB DDR5 DRAM 5600Mz',20769000,'https://tokopedia.link/JSY4pbu2cwb','CORSAIR VENGEANCE 64GB 2x32GB DDR5 DRAM 5600Mz.jpg','DDR5-5600',2,32,'Fan Included No\r\nMemory Series VENGEANCE DDR5\r\nMemory Type DDR5\r\nPMIC Type Overclock PMIC\r\nMemory Size 64GB (2 x 32GB)\r\nTested Latency 40-40-40-77\r\nTested Voltage 1.25\r\nTested Speed 5600\r\n\r\nSPD Latency 32-32-32-64\r\nSPD Speed 4000MHz\r\nSPD Voltage 1.1V\r\nSpeed Rating PC5-44800 (DDR5-5600)\r\nCompatibility Intel 600 Series\r\nHeat Spreader Aluminum\r\nPackage Memory Format DIMM\r\nPerformance Profile XMP 3.0\r\nPackage Memory Pin 288'),(2,'Team Elite Plus Black DDR5 PC38400 64GB',4382000,'https://tokopedia.link/bBHFoXc2cwb','Team Elite Plus Black DDR5 PC38400 64GB.jpg','DDR5-4800',2,32,'Series	Elite Plus Black\r\nCapacity	64GB\r\nType	DDR5 288 Pin\r\nSpeed	PC38400 (4800MHz)\r\nCas Latency	-\r\nVoltage	1.1 V\r\nTiming	-\r\nWarranty	Lifetime'),(3,'Corsair DDR4 Vengeance RGB RS PC28800 32GB',2005000,'https://tokopedia.link/NHv1xVm1cwb','Corsair DDR4 Vengeance RGB RS PC28800 32G.jpg','DDR4-3600',2,16,'Memory Series VENGEANCE RGB RS\r\nMemory Type DDR4\r\nMemory Size 32GB (2 x 16GB)\r\nTested Latency 18-22-22-42\r\nTested Voltage 1.35\r\nTested Speed 3600'),(4,'ADATA DDR4 XPG SPECTRIX D50 PC28800 3600MHz 32GB',1891000,'https://tokopedia.link/InxovsB1cwb','ADATA DDR4 XPG SPECTRIX D50 PC28800 3600MHz 32GB.jpg','DDR4-3600',2,16,'Product Name : ADATA DDR4 XPG SPECTRIX D50 PC28800 3600MHz 32GB (2X16GB) Dual Channel - RGB\r\nBrand : ADATA\r\nSeries : SPECTRIX D50\r\nCapacity : 32GB (2X16GB)\r\nType : 288-pin DDR4 DIMM\r\nSpeed : DDR4 PC28800 (3600Mhz)'),(5,'Team T-Force Vulcan Z Red DDR4 PC25600 3200MHz',831000,'https://tokopedia.link/BfpCWMcOiwb','Team T-Force Vulcan Z Red DDR4 PC25600 3200MHz.jpg','DDR4-3200',2,16,'Technical Details\r\nManufacturer ‎TEAMGROUP TEAM\r\nColor ‎Vulcan Z Dual-channel (Red)\r\nRAM Size ‎16 GB (2x8GB)\r\nMemory Technology ‎Ddr4_sdram\r\nComputer Memory Type ‎DDR4 SDRAM\r\nMemory Clock Speed ‎1'),(6,'CUBE GAMING DDR4 3200MHz PC25600 Dual Channel 16GB',625000,'https://tokopedia.link/RGCVLvrljwb','CUBE GAMING DDR4 3200MHz PC25600 Dual Channel 16GB.jpg','DDR4-3200',2,8,'Memory Type DDR4\r\nSpeed 3200MHZ\r\nSpeed Voltage 1.35V\r\nCompatible AMD/Intel\r\nWarranty Lifetime'),(7,'V-GeN TsunamiX RGB DDR4 PC25600 3200Mhz Dual Channel 8GB',732000,'https://tokopedia.link/wMHmBAy0cwb','V-GeN TsunamiX RGB DDR4 PC25600 3200Mhz Dual Channel 8GB.jpg','DDR4-3200',2,4,'Product Name : V-GeN TsunamiX RGB DDR4 PC25600 3200Mhz Dual Channel 8GB (2x4GB) 16-18-18-36\r\nBrand : V-GeN\r\nSeries : TsunamiX\r\nCapacity : 8GB (2x4GB)\r\nType : 288-pin DDR4 DIMM\r\nSpeed : DDR4 PC25600 (3200Mhz)\r\nCas Latency : CL16\r\nVoltage : 1.35V\r\nTiming : 16-18-18-36\r\nWarranty : Limited Lifetime Warranty'),(8,'Apacer DDR4 PC21000 2666Mhz 8GB',413000,'https://tokopedia.link/ywz5Z9SLiwb','Apacer DDR4 PC21000 2666Mhz 8GB.jpg','DDR4-2666',1,8,'Memory Architecture\r\nx8 FBGA DRAM chip\r\n\r\nIntel XMP 2.0\r\nYes\r\n\r\nPIN\r\n288-pin\r\n\r\nCertificate\r\nRoHS, CE, FCC, RCM, VCCI, JEDEC\r\n\r\nPackage\r\nSingle Channel Package'),(9,'KINGSTON HYPERX FURY DDR4 8GB 2666MHz 21300',390000,'https://tokopedia.link/LCQjSm6Miwb','RAM KINGSTON HYPERX FURY DDR4 8GB 2666MHz 21300.jpg','DDR4-2666',1,8,'-Merk: KINGSTON FURY BEAST\r\n-Chip: KINGSTON\r\n-Manufacture: KINGSTON\r\n-kapasitas: 8GB (1 keping)\r\n-Speed: 2666MHz/ 21000\r\n-Voltase: 1.2v , 1.35v DDR4\r\n-Jenis: RAM PC / KOMPUTER\r\n-Support INTEL XMP\r\n-Support AMD RYZEN'),(10,'V-GeN Tsunami R DDR4 PC21000 2666Mhz 8GB',537000,'https://tokopedia.link/XZojOrbljwb','V-GeN Tsunami R DDR4 PC21000 2666Mhz 8GB.jpg','DDR4-2666',2,4,'Ultra Low Voltage 1.2V\r\nXMP 2.0 supports\r\nCapable of operating above the rate XMP speed\r\nAlluminium Alloy Heat Spreader with 1mm thickness,low heat operation\r\nQC Pass for 72 Hours Burning Test\r\nLimited Lifetime Warranty\r\nWith Major Brand IC : Samsung / Hynix / Micron'),(11,'V-GeN Platinum DDR4 4GB PC21000',244000,'https://tokopedia.link/Bct92c4kjwb','V-GeN Platinum DDR4 4GB PC21000.jpg','DDR4-2666',1,4,'Product Name : V-GeN Platinum DDR4 4GB PC21000\r\nBrand : V-GeN\r\nSeries : Platinum\r\nCapacity : 4GB\r\nType : 288-pin DDR4 DIMM\r\nSpeed : DDR4 PC21000 (2666Mhz)\r\nCas Latency : CL19\r\nVoltage : 1.2V\r\nTiming : 19-19-19-43\r\nWarranty : Limited Lifetime Warranty'),(12,'Team Elite Plus Black DDR4 PC19200 2400Mhz Dual Channel 16GB',795000,'https://tokopedia.link/QbFMPLDljwb','Team Elite Plus Black DDR4 PC19200 2400Mhz Dual Channel 16GB.jpg','DDR4-2400',2,8,'Product Name : Team Elite Plus Black DDR4 PC19200 2400Mhz Dual Channel 16GB (2X8GB) 16-16-16-39 - TPD416GM2400HC16DC01\r\nBrand : Team\r\nSeries : Elite Plus\r\nCapacity : 16GB (2X8GB)\r\nType : 288-pin DDR4 DIMM\r\nSpeed : DDR4 PC19200 (2400Mhz)\r\nCas Latency : CL16\r\nVoltage : 1.2V\r\nTiming : 16-16-16-39\r\nWarranty : Limited Lifetime Warranty'),(13,'Team Elite Plus Black DDR4 PC19200 2400Mhz 8GB',408000,'https://tokopedia.link/rA3J71dMiwb','Team Elite Plus Black DDR4 PC19200 2400Mhz 8GB.jpg','DDR4-2400',1,8,'Product Name : Team Elite Plus Black DDR4 PC19200 2400Mhz 8GB 16-16-16-39 - TPD48GM2400HC1601\r\nBrand : Team\r\nSeries : Elite Plus\r\nCapacity : 8GB\r\nType : 288-pin DDR4 DIMM\r\nSpeed : DDR4 PC19200 (2400Mhz)\r\nCas Latency : CL16\r\nVoltage : 1.2V\r\nTiming : 16-16-16-39\r\nWarranty : Lifetime'),(14,'Avexir DDR4 Budget 2400MHZ 8GB',514000,'https://tokopedia.link/x1YRSupOiwb','Avexir DDR4 Budget 2400MHZ 8GB.jpg','DDR4-2400',1,8,'Single DDR4 desktop memory module - PC4-19200\r\n2400MHz speed with timings of CL16 (16-16-16-36)\r\nLow voltage DDR4 memory - operates at only 1.2V\r\nSuitable for mainstream and gaming computers - optimised for use on Intel based motherboards\r\n8-layer PCB improves reliability and reduces interference'),(15,'Team Elite Plus Black DDR4 PC19200 2400Mhz 4GB',316000,'https://tokopedia.link/jAz5Mxkljwb','Team Elite Plus Black DDR4 PC19200 2400Mhz 4GB.jpg','DDR4-2400',1,4,'Product Name : Team Elite Plus Black DDR4 PC19200 2400Mhz 4GB 16-16-16-39 - TPD44GM2400HC1601\r\nBrand : Team\r\nSeries : Elite Plus\r\nCapacity : 4GB\r\nType : 288-pin DDR4 DIMM\r\nSpeed : DDR4 PC19200 (2400MHz)\r\nCas Latency : CL16\r\nVoltage : 1.2V\r\nTiming : 16-16-16-39\r\nWarranty : Lifetime\r\n');
/*!40000 ALTER TABLE `memories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2022_11_24_020147_create_admins_table',1),(6,'2022_12_23_014435_create_cpu_sockets_table',1),(7,'2022_12_23_071043_create_cases_table',1),(8,'2022_12_23_072159_create_motherboards_table',1),(9,'2022_12_23_072903_create_cpus_table',1),(10,'2022_12_23_073419_create_memories_table',1),(11,'2022_12_23_073638_create_gpus_table',1),(12,'2022_12_23_073917_create_power_supplies_table',1),(13,'2022_12_23_074156_create_internal_storages_table',1),(14,'2022_12_27_024355_create_pc_builds_table',1),(15,'2023_01_06_040717_create_build_recommendations_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `motherboards`
--

DROP TABLE IF EXISTS `motherboards`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `motherboards` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'placeholder.png',
  `cpuSocketId` bigint unsigned NOT NULL,
  `formFactor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `memoryMaxGB` int NOT NULL,
  `memorySlot` int NOT NULL,
  `description` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `motherboards_cpusocketid_foreign` (`cpuSocketId`),
  CONSTRAINT `motherboards_cpusocketid_foreign` FOREIGN KEY (`cpuSocketId`) REFERENCES `cpu_sockets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `motherboards`
--

LOCK TABLES `motherboards` WRITE;
/*!40000 ALTER TABLE `motherboards` DISABLE KEYS */;
INSERT INTO `motherboards` VALUES (1,'Asus PRIME B450M-A II',1178000,'https://tokopedia.link/W3JNG6qEcwb','Asus PRIME B450M-A II.png',2,'Micro ATX',128,4,'CPU\r\nAMD AM4 Socket for AMD Ryzen™ 5000 Series/ 5000 G-Series/ 4000 G-Series/ 3rd/2nd/1st Gen AMD Ryzen™/ 2nd and 1st Gen AMD Ryzen™ with Radeon™ Vega Graphics/ Athlon™ with Radeon™ Vega Graphics Processors *\r\nChipset\r\nAMD B450\r\nMemory\r\n3rd/2nd/1st Gen AMD Ryzen™/ 2nd and 1st Gen AMD Ryzen™ with Radeon™ Vega Graphics/ Athlon™ with Radeon™ Vega Graphics Processors\r\n4 x DIMM, Max. 128GB, DDR4 4400(O.C)/4000(O.C.)/3866(O.C.)/3733(O.C.)/3600(O.C.)/3466(O.C.)/3400(O.C.)/3300(O.C.)/3200(O.C.)/3000(O.C.)/2800(O.C.)/2666/2400/2133 MHz Un-buffered Memory *\r\nDual Channel Memory Architecture\r\nECC Memory (ECC mode) support varies by CPU.'),(2,'Asus TUF Gaming Z690-PLUS WiFi D4',5051000,'https://tokopedia.link/e3dVvQBUcwb','Asus TUF Gaming Z690-PLUS WiFi D4.jpg',7,'ATX',128,4,'Intel® Z690 (LGA 1700) ATX gaming motherboard, 15 DrMOS power stages, PCIe® 5.0, DDR4 memory, four M.2 slots, WiFi 6 and Intel 2.5 Gb Ethernet, HDMI®, DisplayPort™, USB 3.2 Gen 2x2 Type-C®, front USB 3.2 Gen 2 Type C, SATA 6 Gbps, Thunderbolt™ 4 support and Aura Sync RGB lighting\r\n\r\nIntel® LGA 1700 socket: Ready for 12th Gen Intel Core™ processors\r\nEnhanced power solution: 14+1 DrMOS, six-layer PCB, ProCool sockets, alloy chokes and durable capacitors for stable power delivery\r\nNext-gen connectivity: PCIe® 5.0, USB 3.2 Gen2x2 Type-C®, front USB 3.2 Gen 2 Type-C, Thunderbolt™ 4 header support'),(3,'ASRock X570 Taichi',4989000,'https://tokopedia.link/fLJKgp2Fcwb','ASRock X570 Taichi.jpg',2,'ATX',128,4,'Supports AMD AM4 Socket Ryzen™ 2000, 3000, 4000 G-Series, 5000 and 5000 G-Series Desktop Processors\r\nIntel® Wi-Fi 6 802.11ax (2.4Gbps) + BT 5.2\r\nSupports DDR4 4666+ (OC)\r\n3 PCIe 4.0 x16, 2 PCIe 4.0 x1\r\nNVIDIA® NVLink™, Quad SLI™, AMD 3-Way CrossFireX™\r\n7.1 CH HD Audio (Realtek ALC1220 Audio Codec), Supports Purity Sound™ 4 & DTS Connect\r\n8 SATA3, 2 Hyper M.2 (PCIe Gen4 x4 & SATA3), 1 Hyper M.2 (PCIe Gen4 x4)\r\n3 USB 3.2 Gen2 (Rear Type A+C, Front Type-C), 8 USB 3.2 Gen1 (2 Front, 6 Rear)\r\nIntel® Gigabit LAN\r\nASRock Polychrome SYNC'),(4,'Asus ROG CROSSHAIR X670E EXTREME',17179000,'https://tokopedia.link/ORe3axBFcwb','Asus ROG CROSSHAIR X670E EXTREME.png',3,'EATX',128,4,'CPU\r\nAMD Socket AM5 for AMD Ryzen™ 7000 Series\r\nDesktop Processors*\r\n* Refer to www.asus.com for CPU support\r\nlist.\r\nChipset\r\nAMD X670\r\nMemory\r\n4 x DIMM, Max. 128GB, DDR5 \r\n6400+(OC)/6200(OC)/ 6000(OC)/ 5800(OC)/ 5600/ 5400/ 5200/ 5000/ 4800 ECC and Non-ECC,Un-buffered Memory*\r\nDual Channel Memory Architecture\r\nSupports AMD EXTended Profiles for Overclocking (EXPO™)\r\nOptiMem II\r\n* Supported memory types, data rate(Speed), and number of DRAM module vary depending on the CPU and memory configuration, for more information refer to www.asus.com for\r\nmemory support list.\r\n* Non-ECC, Un-buffered DDR5 Memory supports On-Die ECC function.\r\nGraphics\r\n2 x USB4® ports support USB Type-C® display outputs*\r\n* VGA resolution support depends on processors\' or graphic cards\' resolution.\r\nExpansion Slots\r\nAMD Ryzen™ 7000 Series Desktop Processors\r\n2 x PCIe 5.0 x16 slots (supports x16 or x8/x8 modes)*\r\nAMD X670 Chipset\r\n1 x PCIe 4.0 x4 slot\r\n*When the PCIe 5.0 M.2 card is installed on the PCIEX16(G5)_2, PCIEX16(G5)_1 will run x8 only. \r\n*When M.2_2 is enabled, PCIEX16(G5)_1 will run x8 and PCIEX16(G5)_2 will run x4.\r\nStorage\r\nTotal supports 5 x M.2 slots and 6 x SATA 6Gb/s ports*\r\nAMD Ryzen™ 7000 Series Desktop Processors\r\nM.2_1 slot (Key M), type 2242/2260/2280 (supports PCIe 5.0 x4 mode)\r\nM.2_2 slot (Key M), type 2242/2260/2280 (supports PCIe 5.0 x4 mode)**\r\nGEN-Z.2_1 slot (Key M) via ROG GEN-Z.2, type 2242/2260/2280/22110 (supports PCIe 5.0 x4 mode)***\r\nPCIe 5.0 M.2 slot (Key M) via PCIe 5.0 M.2 card, type 2242/2260/2280/22110 (supports PCIe 5.0 x4 mode)***\r\nAMD X670 Chipset\r\nGEN-Z.2_2 slot (Key M) via ROG GEN-Z.2, type 2242/2260/2280/22110 (supports PCIe 4.0 x4 mode)\r\n6 x SATA 6Gb/s ports\r\n*AMD RAIDXpert2 Technology supports both NVMe RAID 0/1/10 and SATA RAID 0/1/10.\r\n** When M.2_2 is enabled, PCIEX16(G5)_1 will run x8 and PCIEX16(G5)_2 will run x4.\r\n*** Performance may very depending on the SSD’s firmware version, the system hardware and system configuration, for more information refer to www.asus.com for device support list.'),(5,'MSI MEG Z690 ACE',12264000,'https://tokopedia.link/rXYMmldVcwb','MSI MEG Z690 ACE.jpg',7,'EATX',128,4,'Model Name MEG Z690 ACE\r\nCPU Support Supports 12th Gen Intel® Core™ Processors, Pentium® Gold\r\nand Celeron® Processors\r\nCPU Socket LGA 1700\r\nChipset Intel® Z690 Chipset\r\nGraphics\r\nInterface\r\n2x PCIe 5.0 x16 slots\r\n1x PCIe 4.0 x16 slot\r\nAMD® CrossFire™ Technology\r\nDisplay Interface 1x Type-C Display port – Requires Processor Graphics\r\n2x Thunderbolt™ 4 (Type-C) – Input from mini DisplayPort\r\nMemory Support 4 DIMMs, Dual Channel DDR5-6666+MHz (OC)\r\nStorage 4x M.2 Gen4 x4 64Gbps slots,\r\n1x M.2 Gen3 x4 32Gbps slot,\r\n6x SATA 6Gb/s ports\r\nThunderbolt™ 4 2x USB Type-C up to 40G,\r\nCharging support up to 5V/3A, 15W'),(6,'Biostar H310MHP',852000,'https://tokopedia.link/GGOxH2mGhwb','Biostar H310MHP.png',5,'Micro ATX',32,2,'Biostar H310MHP (LGA1151V2, Intel H310, USB3.1, DDR4)\r\nChipset Intel H310\r\nCPU SUPPORT Socket 1151 for 9th / 8th Gen Intel® Core, Pentium and Celeron processors\r\nMaximum CPU TDP (Thermal Design Power): 95Watt\r\nMEMORY Supports Dual Channel DDR4 1866/ 2133/ 2400/ 2666\r\n2x DDR4 DIMM Memory Slot, Max. Supports up to 32 GB Memory\r\nINTEGRATED VIDEO By CPU model\r\nSupports DX12\r\nSupports HDCP\r\nSTORAGE 4 x SATA III Connectors (6Gb/s)\r\nLAN RTL8111H\r\n10/ 100/ 1000 Mb/s auto negotiation, Half / Full duplex capability\r\nAUDIO CODEC ALC887\r\n7.1 Channels, High Definition Audio\r\nSupport HD Audio\r\nUSB 4x USB 3.2(Gen1) port (2 on rear I/Os and 2 via internal header)\r\n6x USB 2.0 port (4 on rear I/Os and 2 via internal header)'),(7,'Asrock Fatal1ty B250 Gaming K4',1500000,'https://tokopedia.link/pGziisBIhwb','Asrock Fatal1ty B250 Gaming K4.jpg',4,'ATX',64,4,'Supports DDR4 2400 (Intel® 7th Gen CPUs) / 2133 (Intel® 6th Gen CPUs)2 PCIe 3.0 x16, 4 PCIe 3.0 x1, 1 M.2(Key E)AMD Quad CrossFireX™Graphics Output Options: HDMI, DVI-D, D-SubSupports Triple Monitor7.1 CH HD Audio (Realtek ALC1220 Audio Codec), Supports Creative Sound Blaster™ Cinema 36 SATA3, 1 Ultra M.2 (PCIe Gen3 x4 & SATA3), 1 M.2 (PCIe Gen3 x2 & SATA3)6 USB 3.1 Gen1 (1 Type-C, 2 Front, 3 Rear)Intel® Gigabit LANASRock RGB LEDIntel® Optane'),(8,'MSI H510M PRO-E',1059000,'https://tokopedia.link/6z23CtTIhwb','MSI H510M PRO-E.png',6,'Micro ATX',64,2,'Model Name H510M PRO-E\r\nCPU Support Supports 10th Gen Intel® Core™ Processors, 11th Gen Intel®\r\nCore™ Processors, Pentium® Gold and Celeron® Processors\r\nCPU Socket LGA 1200 socket\r\nChipset Intel® H510 Chipset\r\nGraphics\r\nInterface\r\n1x PCIe 4.0 x16 slot\r\nDisplay Interface Support 4K@30Hz as specified in HDMI 1.4, VGA\r\n– Requires Processor Graphics\r\nMemory Support 2 DIMMs, Dual Channel DDR4-3200MHz (MAX)\r\nExpansion Slots 2x PCIe 3.0 x1 slots\r\nStorage 4x SATA 6Gbps ports\r\nUSB ports 4x USB 3.2 Gen 1 5Gbps (4 Type-A)\r\n6x USB 2.0\r\nLAN Realtek® RTL8111 Gigabit LAN\r\nAudio 8-Channel (7.1) HD Audio with Audio Boost'),(9,'ASRock B450M-HDV',1051000,'https://tokopedia.link/roU65RtJhwb','ASRock B450M-HDV.png',2,'Micro ATX',64,2,'Product Name : ASRock B450M-HDV R4.0 (AM4, AMD Promontory B450, DDR4, USB3.1, SATA3)\r\nSpecifications :\r\nUnique Feature\r\nASRock Super Alloy\r\n- High Density Glass Fabric PCB\r\n- Sapphire Black PCB\r\nASRock Ultra M.2 (PCIe Gen3 x4 & SATA3)\r\nASRock Full Spike Protection (for all USB, Audio, LAN Ports)\r\nASRock Live Update & APP Shop\r\nCPU\r\n- Supports AMD AM4 Socket Ryzen™ 2000, 3000, 4000 G-Series, 5000 and 5000 G-Series Desktop Processors\r\n- 6 Power Phase design\r\n- Supports CPU up to 105W\r\nChipset\r\n- AMD Promontory B450\r\nMemory\r\n- Dual Channel DDR4 Memory Technology\r\n- 2 x DDR4 DIMM Slots'),(10,'Biostar A320MH',765000,'https://tokopedia.link/FgzqLXQJhwb','Biostar A320MH.png',2,'Micro ATX',32,2,'Product Name : Biostar A320MH (AM4, AMD Promontory A320, DDR4, USB 3.1, SATA3)\r\nBrand : Biostar\r\nModel : A320MH\r\nCPU Type : AMD A-series APU / Ryzen CPU / NPU for Socket AM4\r\nChipset : AMD A320\r\nMemory Standard : 2 x DDR4 DIMM, 2933/2667/2400/2133/1866 MHz\r\nMaximum Memory Supported : 32GB Dual Channel\r\nExpansion Slots : 1x PCI-E 3.0 x16, 2 x PCI-E 3.0 x1\r\nSATA Port : 4 x SATA3\r\nM.2 : -\r\nOnboard Video Chipset : Integrated AMD Radeon Graphics (APU Only)\r\nMulti-GPU support : -\r\nAudio Chipset : Realtek ALC887\r\nLAN Chipset : Realtek RTL8111H\r\nRear Panel Ports : PS/2 Keyboard/Mouse, 2x USB3.1 Gen1 Ports, 4x USB2.0, HDMI, VGA, LAN, 3x Audio Jacks\r\nForm Factor : Micro ATX 22.6cm x 17.4cm ( W x L )\r\nWarranty : 3 Years\r\n'),(11,'ASRock H510M-HVS R2.0',1040000,'https://tokopedia.link/ffp8jM8Viwb','ASRock H510M-HVS R2.0.png',6,'Micro ATX',64,2,'Supports 10th Gen Intel® Core™ Processors and 11th Gen Intel® Core™ Processors\r\nSupports DDR4 3200MHz*\r\n1 x PCIe 4.0 x16, 1 x PCIe 3.0 x1\r\nGraphics Output Options: HDMI, D-Sub\r\n7.1 CH HD Audio (Realtek ALC887/ 897 Audio Codec)\r\n4 SATA3\r\n4 x USB 3.2 Gen1 (2 x Rear, 2 x Front)\r\nRealtek Gigabit LAN\r\n*Actual support may vary by CPU\r\n'),(12,'Biostar H610MH',1295000,'https://tokopedia.link/htLm9BqWiwb','Biostar H610MH.png',7,'Micro ATX',64,2,'Biostar H610MH (LGA1700, H610, DDR4, USB3.2, SATA3)\r\nCPU SUPPORT Support for 12th Generation Intel Core™ i9/ i7/ i5/ i3 processors and Intel Pentium processors/ Intel Celeron processors in the LGA1700 package\r\nMEMORY Supports Dual Channel DDR4 1866/ 2133/ 2400/ 2666/ 2933/ 3200\r\n2 x DDR4 DIMM Memory Slot, Max. Supports up to 64 GB Memory\r\nEach DIMM supports non-ECC 4/8/16/32GB DDR4 module\r\nSupport Intel Extreme Memory Profile (XMP) memory modules\r\nINTEGRATED VIDEO Supports DX12\r\nSupports HDCP\r\nSTORAGE -- Total supports 1x M.2 socket and 4 x SATA III (6Gb/s) ports\r\n4 x SATA III Connector (6Gb/s)'),(13,'MSI MAG B660M Bazooka DDR4',2857000,'https://tokopedia.link/iIdkQ8Sljwb','MSI MAG B660M Bazooka DDR4.png',7,'Micro ATX',128,4,'Model Name MAG B660M BAZOOKA DDR4\r\nCPU Support Supports 12th Gen Intel® Core™ Processors, Pentium® Gold\r\nand Celeron® Processors\r\nCPU Socket LGA 1700\r\nChipset Intel® B660 Chipset\r\nGraphics\r\nInterface\r\n1x PCIe 4.0 x16 slot, 1x PCIe 3.0 x16 slot\r\nSupport AMD® CrossFire™ Technology\r\nDisplay Interface Support 4K@60Hz as specified in HDMI 2.1, DisplayPort 1.4\r\n– Requires Processor Graphics\r\nMemory Support 4 DIMMs, Dual Channel DDR4-4800+ (OC)\r\nExpansion Slot 1x PCIe 3.0 x1 slot\r\nStorage 2x M.2 Gen4 x4 64Gbps slots,\r\nsupports Intel® Optane™ Technology\r\n4 x SATA 6Gb/s\r\nUSB ports 2x USB3.2 Gen2 10Gbps (2 Type-A),\r\n5x USB 3.2 Gen1 5Gbps (4 Type-A + 1 Type-C),\r\n6x USB 2.0\r\nLAN Realtek® RTL8125BG 2.5Gbps LAN\r\nAudio 8-Channel (7.1) HD Audio with Audio Boost'),(14,'ASRock A520M-HVS',984000,'https://tokopedia.link/uuN1FTOWiwb','ASRock A520M-HVS.png',2,'Micro ATX',64,2,'Unique Feature\r\nASRock Super Alloy\r\n- Premium 50A Power Choke\r\n- Sapphire Black PCB\r\n- High Density Glass Fabric PCB\r\nASRock Ultra M.2 (PCIe Gen3 x4 & SATA3)\r\nASRock Full Spike Protection (for all USB, Audio, LAN Ports)\r\nASRock Live Update & APP Shop\r\nCPU\r\n- Supports AMD AM4 Socket Ryzen™ 3000, 4000 G-Series and 5000 and 5000 G-Series Desktop Processors*\r\n- 6 Power Phase design\r\n*Not compatible with AMD Ryzen™ 5 3400G and Ryzen™ 3 3200G.\r\nChipset\r\n- AMD A520\r\nMemory\r\n- Dual Channel DDR4 Memory Technology\r\n- 2 x DDR4 DIMM Slots\r\n- AMD Ryzen series CPUs'),(15,'ASRock B550M PG Riptide',1892000,'https://tokopedia.link/clyxXU7Wiwb','ASRock B550M PG Riptide.png',2,'Micro ATX',128,4,'Supports AMD AM4 Socket Ryzen™ 3000, 4000 G-Series and 5000 Series Desktop Processors\r\n8 Phase, Digi Power, Dr. MOS\r\nSupports DDR4 4733+ (OC)*\r\n1 PCIe 4.0 x16 Slot, 1 PCIe 3.0 x16 Slots,\r\n1 PCIe 3.0 x1 Slot, 1 M.2 Key E for Wi-Fi\r\nGraphics Outputs: 1 HDMI, 1 DisplayPort\r\n7.1 CH HD Audio (Realtek ALC897 Audio Codec),\r\nNahimic Audio\r\n4 SATA3, 1 Hyper M.2 (PCIe Gen4 x4),\r\n1 M.2 (PCIe Gen3 x2 & SATA3)\r\n2 Rear USB 3.2 Gen2 (Type-A + Type-C)\r\n1 Front USB 3.2 Gen1 Type-C\r\n6 USB 3.2 Gen1 (4 Rear, 2 Front)\r\n6 USB 2.0 (2 Rear, 4 Front)\r\nPhantom Gaming 2.5G LAN');
/*!40000 ALTER TABLE `motherboards` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `power_supplies`
--

DROP TABLE IF EXISTS `power_supplies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `power_supplies` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'placeholder.png',
  `formFactor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `efficiencyRating` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `wattage` int NOT NULL,
  `modular` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `power_supplies`
--

LOCK TABLES `power_supplies` WRITE;
/*!40000 ALTER TABLE `power_supplies` DISABLE KEYS */;
INSERT INTO `power_supplies` VALUES (1,'Cooler Master MWE Gold 1250 V2 80+ Gold - Full Modular',3367000,'https://tokopedia.link/X644Ow6Pewb','Cooler Master MWE Gold 1250 V2 80+ Gold - Full Modular.png','ATX','80+ Gold',1250,'Full','Model\r\nMPE-C501-AFCAG\r\nATX Version\r\nATX 12V V2.52\r\nPFC\r\nActive PFC\r\nInput Voltage\r\n90-264V\r\nInput Current\r\n15-7A\r\nInput Frequency\r\n47-63Hz\r\nDimensions (L x W x H)\r\n180 x 150 x 86 mm\r\nFan Size\r\n140mm\r\nFan Bearing\r\nFDB\r\nFan Speed\r\n2200 RPM\r\nNoise Level @ 20%\r\n0 dBA\r\nNoise Level @ 50%\r\n15.8 dBA\r\nNoise Level @ 100%\r\n30.1 dBA\r\nEfficiency\r\n90% @ Typical Load\r\n80 PLUS Rating\r\n80 PLUS Gold'),(2,'Corsair RMe Series 1000W Full Modular - Gold',3566000,'https://tokopedia.link/tXmnmcXPewb','Corsair RMe Series 1000W Full Modular - Gold.jpg','ATX','80+ Gold',1000,'Full','\r\nCorsair RMe Series 1000W Full Modular - Gold / PSU 1000W RM1000e\r\nTech Specs :\r\nATX Connector\r\n1\r\nATX12V Version\r\nv2.4\r\nContinuous power W\r\n1000 Watts\r\nMTBF hours\r\n100,000 hours\r\n80 PLUS Efficiency\r\nGold\r\nZero RPM Mode\r\nYes\r\nCable Type\r\nType 4\r\nEPS12V Connector\r\n2\r\nModular\r\nFully\r\nPCIe Connector\r\n4\r\nSATA Connector\r\n7'),(3,'MSI MPG A750GF 750Watt',1840000,'https://tokopedia.link/YcuWXflkjwb','MSI MPG A750GF 750Watt.png','ATX','80+ Gold',750,'Full','PRODUCT NAME MPG A850GF\r\nPSU FORM FACTOR ATX\r\nPOWER WATT 750W\r\nINPUT VOLTAGE 100~240 Vac\r\nINPUT CURRENT 115Vac/10.0A max. 230Vac/5.0A max.\r\nINPUT FREQUENCY 47Hz ~ 63Hz\r\nEFFICIENCY Up to 90% (80 Plus Gold)\r\nFAN SIZE 140 mm\r\nDIMENSION 150mm x160mm x86mm\r\nPFC TYPE Active PFC\r\nPROTECTION OCP / OVP / OPP / OTP / SCP / UVP'),(4,'Be quiet! SFX-L POWER 600W',1767000,'https://tokopedia.link/oYHbj1cjjwbs','be quiet! SFX-L POWER 600W.jpg','ATX','80+ Gold',600,'Full','80 PLUS® Gold certification (up to 92% efficiency)\r\n4 PCIe connectors for powerful GPUs\r\nStable LLC, Synchronous Rectifier (SR) and DC-to-DC power conversion\r\nModular cables for maximum build flexibility\r\nTemperature-controlled 120mm high-quality fan\r\nSFX-to-ATX adapter bracket for usage with larger case sizes\r\n3-year manufacturer’s warranty'),(5,'FSP Hydro M PRO 700W 80+ Bronze',1020000,'https://tokopedia.link/FX8e38mPewb','FSP Hydro M PRO 700W 80+ Bronze.jpg','ATX','80+ Bronze',700,'Semi','Model HP2-700M\r\nRated Output Power 700W\r\nForm Factor ATX\r\n80 PLUS Certification 80 PLUS® 230V EU Bronze\r\nInput Voltage 200-240V\r\nInput Current 5A\r\nInput Frequency 50-60Hz\r\nPFC Active PFC\r\nEfficiency 88%\r\nFan Type HYB Fan, 120mm\r\nDimensions(L x W x H) 150 x 140 x 86mm'),(6,'Corsair CXF RGB Series 650W Full Modular - Bronze',1239000,'https://tokopedia.link/MyyUmnFPewb','Corsair CXF RGB Series 650W Full Modular - Bronze.png','ATX','80+ Bronze',650,'Full','overview\r\nTECH SPECS\r\nDOWNLOADS\r\nSUPPORT\r\nPACKAGE CONTENTS\r\nWeight\r\n1.3\r\nAdjustable Single/Multi 12V Rail\r\nNo\r\nATX Connector\r\n1\r\nATX12V Version\r\nv2.4\r\nContinuous output rated temperature C\r\n40°C\r\nContinuous power W\r\n650 Watts\r\nFan bearing technology\r\nRifle Bearing\r\nFan size mm\r\n120mm\r\nMTBF hours\r\n100,000 hours\r\nMulti-GPU ready\r\nYes\r\nWarranty\r\n5 Years\r\n80 PLUS Efficiency\r\nBronze\r\nPSU Form Factor\r\nATX\r\niCUE Compatibility\r\nYes\r\nZero RPM Mode\r\nNo\r\nCable Type\r\nSleeved and Flat Black Cables\r\nEPS12V Connector\r\n2\r\nEPS12V Version\r\nv2.92\r\nFloppy Connector\r\n0\r\nIntel C6C7 sleep state compatible\r\nYes\r\nModular\r\nFully\r\nPCIe Connector\r\n4\r\nSATA Connector\r\n7\r\nSpecial Technology\r\n120mm RGB Fan\r\nPush-button for manual RGB control\r\nRGB-In port for software control\r\nARGB Compatible (with included adapter)\r\nProtections\r\nOVP (Over Voltage)\r\nUVP (Under Voltage)\r\nSCP (Short Circuit)\r\nOTP (Over Temp)\r\nOPP (Over Power)'),(7,'Aerocool LUX RGB 550W 80 Plus Bronze',571000,'https://tokopedia.link/tmmyNVYjiwb','Aerocool LUX RGB 550W 80 Plus Bronze.jpg','ATX','80+ Bronze',550,'No','Product Name : Aerocool LUX RGB 550W 80 Plus Bronze - 2 Years Warranty\r\nBrand : Aerocool\r\nSeries : LUX RGB\r\nWattage : 550W\r\n80 PLUS Certification : 80 Plus Bronze\r\nMax. Efficiency : Up to 88%+ efficiency\r\nCooling : Fan\r\nModular : No\r\nModularity : No\r\nMotherboard Connector : 20+4-Pin\r\nConnectors : 1x (8/4+4) pin CPU +12V\r\n2x 4Pin Molex\r\n1x (6+2 pins) PCI-E Power\r\n4x SATA Power'),(8,'Enermax CyberBron 500W 80+ Bronze',647000,'https://tokopedia.link/AN0x5j5jiwb','Enermax CyberBron 500W 80+ Bronze.jpg','ATX','80+ Bronze',500,'No','Enermax CyberBron 500W 80+ Bronze - ECB500AWT / PSU 500W\r\nModel ECB500AWT\r\nEfficiency BRONZE\r\nModular Native\r\nCable type Black flat\r\nTotal power (W) 500\r\nInput Voltage (V) 115-230\r\nInput Current (A) 7\r\nInput Frequency (Hz) 47-63\r\nFan size (mm) 120\r\nOperating temperature (C) 40\r\nMTBF (hours) >100K\r\nProtection OVP, UVP, OPP, SCP\r\nDimension (D x W x H), (mm) 140x150x86'),(9,'Corsair CV Series 450W 80+ Bronze',739000,'https://tokopedia.link/heL2tZIOewb','Corsair CV Series 450W 80+ Bronze.jpg','ATX','80+ Bronze',450,'No','Product Name : Corsair CV Series 450W - 80 Plus Bronze\r\nBrand : Corsair\r\nSeries : CV Series\r\nWattage : 450W\r\n80 PLUS Certification : 80 Plus Bronze\r\nMax. Efficiency : Up to 88 %\r\nCooling : Fan\r\nModular : No\r\nModularity : No\r\nMotherboard Connector : 20+4-Pin\r\nConnectors : 1x (8/4+4) pin CPU +12V\r\n2x (6+2 pins) PCI-E Power\r\n7x SATA Power\r\n1x FDD Power\r\nForm Factor : ATX\r\nWarranty : Three years'),(10,'be quiet! SYSTEM POWER U9 400W',706000,'https://tokopedia.link/KiAXRYCjjwb','be quiet! SYSTEM POWER U9 400W.jpg','ATX','80+ Bronze',400,'No','Product Name : be quiet! SYSTEM POWER 9 400W - 80+ Bronze Certified - 3 Years Warranty - Number 1 PSU in Germany\r\nBrand : be quiet\r\nSeries : SYSTEM POWER 9\r\nWattage : 400W\r\n80 PLUS Certification : 80 PLUS Bronze\r\nMax. Efficiency : Up to 89%\r\nCooling : Fan\r\nModular : No\r\nModularity : No\r\nMotherboard Connector : 20+4-Pin\r\nConnectors : 1x (8/4 pins) CPU +12V\r\n2x 4Pin Molex\r\n2x (8/6 pins) PCI-E Power\r\n5x SATA Power\r\n1x FDD Power\r\nForm Factor : ATX\r\nWarranty : 3 Years'),(11,'Enermax NAXN Bronze 350W',566000,'https://tokopedia.link/zv4hqWujjwbs','Enermax NAXN Bronze 350W.jpg','ATX','80+ Bronze',350,'No','ETP350AWT\r\n80PLUS Bronze certified\r\n100% Japanese electrolytic capacitors\r\n12cm temperature controlled silent fan\r\nNAXN BRONZE power supply series is 80 PLUS Bronze certified with up to 88% efficiency, coming with 100% durable Japanese electrolytic capacitors, Active PFC circuit, and multiple protection. Besides, it helps meet the EU ErP Lot 6 requirements. NAXN BRONZE provides durability, reliability, and energy-saving designs. It is suitable for mainstream PC systems, media centers, and gaming builds.'),(12,'Corsair VS550 550 WATT',859000,'https://tokopedia.link/dauE9DPjjwb','Corsair VS550 ATX Power Supply 550 WATT.jpg','ATX','80+ White',550,'No','- ATX Connector 1\r\n- Adjustable Single/Multi 12V Rail No\r\n- ATX12V Version v2.31\r\n- Continuous output rated temperature C 30°C\r\n- Continuous power W 550 Watts\r\n- Fan bearing technology Sleeve\r\n- Fan size mm 120mm\r\n- MTBF hours 100,000 hours\r\n- Multi-GPU ready No\r\n- Warranty Three years\r\n- 80 PLUS Efficiency Bronze\r\n- PSU Form Factor ATX\r\n- Zero RPM Mode No\r\n- iCUE Compatibility No\r\n- Cable Type Sleeved\r\n- Dimensions 150mm x 125mm x 86mm\r\n- EPS12V Connector 1\r\n- EPS12V Version v2.92\r\n- Floppy Connector 1\r\n- Intel C6C7 Notes:\r\n- Corsair VS550 ATX Power Supply 550 WATT 80 PLUS White Certified PSU\r\n- Garansi Resmi Corsair 3 Tahun.'),(13,'Cooler Master Elite 500 V4 80+',655000,'https://tokopedia.link/sTo3s0ckiwb','Cooler Master Elite 500 V4 80+.jpg','ATX','80+ White',500,'No','Model MPE-5001-ACABN\r\nATX Version ATX 12V Ver. 2.41\r\nPFC Active PFC\r\nInput Voltage 200-240Vac\r\nInput Curren 5A\r\nInput Frequency 50-60Hz\r\nDimensions (L x W x H) 140 x 150 x 86 mm\r\nFan Size 120mm\r\nFan Bearing Sleeve Bearing\r\nEfficiency 85% @ Typical Load\r\n80 PLUS Rating 80 PLUS Standard 230V EU\r\nErP 2014 Lot 3 Yes\r\nOperating Temperature 40C\r\nPower Good Signal 100-500ms\r\nHold Up Time >14ms at 100% load\r\nMTBF >100,000 Hours\r\nProtections OVP, OPP, OTP, SCP, UVP\r\nRegulatory TUV, cTUVus, CE, BSMI, FCC, EAC, RCM, KCC, CCC, CB\r\nMB 24-Pin Connectors 1\r\nEPS 4+4 Pin Connectors 1\r\nSATA Connectors 5\r\nPeripheral 4-Pin Connectors 3\r\nPCI-e 6+2 Pin Connectors 2\r\nSerie Elite Series\r\n80 Plus Standard\r\nModular Non Modular'),(14,'DeepCool PF400',430000,'https://tokopedia.link/CqDFHlZjjwb','DeepCool PF400.jpg','ATX','80+ White',400,'No','Type ATX12V V2.4\r\nProduct Dimensions 150×140×86mm (W x L x H)\r\n80PLUS Certifications 230V EU White\r\nFan Size 120mm\r\nFan Bearing Hypro Bearing\r\nTopology Active PFC+Double tube forward\r\nCapacitors Taiwan bulk capacitor\r\nPower Good Signal 100-500ms\r\nHold Up Time ≥16ms(75% Load)\r\nEfficiency ≥85% Under Typical Load(50% Loading)\r\nProtection OPP/OVP/SCP/UVP\r\nOperation Temperature 0-40°C\r\nRegulatory CB/CCC/CE/UKCA/EAC/RCM\r\nErp Regulation ErP 2010\r\nMTBF 100,000 Hour'),(15,'Enermax MaxPro II 600W',647000,'https://tokopedia.link/DA67pMvkiwb','Enermax MaxPro II 600W.jpg','ATX','80+ White',600,'No','MODEL	EMP600AGT-C\r\nEFFICIENCY	STANDARD\r\nMODULAR	Native\r\nCABLE TYPE	Black flat\r\nTOTAL POWER (W)	600\r\nINPUT VOLTAGE (V)	200-240\r\nINPUT CURRENT (A)	4.5\r\nINPUT FREQUENCY (HZ)	47-63\r\nFAN SIZE (MM)	120\r\nOPERATING TEMPERATURE (°C)	40\r\nMTBF (HOURS)	> 100k\r\nPROTECTION	OVP, UVP, OPP, SCP, SIP\r\nDIMENSION (D X W X H), (MM)	140 x 150 x 86');
/*!40000 ALTER TABLE `power_supplies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_pc_builds`
--

DROP TABLE IF EXISTS `user_pc_builds`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_pc_builds` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `userId` bigint unsigned NOT NULL,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'PC Rakitan User',
  `cpuId` bigint unsigned DEFAULT NULL,
  `moboId` bigint unsigned DEFAULT NULL,
  `memoryId` bigint unsigned DEFAULT NULL,
  `gpuId` bigint unsigned DEFAULT NULL,
  `caseId` bigint unsigned DEFAULT NULL,
  `inStorageId` bigint unsigned DEFAULT NULL,
  `psuId` bigint unsigned DEFAULT NULL,
  `totalPrice` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `pc_builds_code_unique` (`code`),
  KEY `pc_builds_userid_foreign` (`userId`),
  KEY `pc_builds_cpuid_foreign` (`cpuId`),
  KEY `pc_builds_moboid_foreign` (`moboId`),
  KEY `pc_builds_memoryid_foreign` (`memoryId`),
  KEY `pc_builds_gpuid_foreign` (`gpuId`),
  KEY `pc_builds_caseid_foreign` (`caseId`),
  KEY `pc_builds_instorageid_foreign` (`inStorageId`),
  KEY `pc_builds_psuid_foreign` (`psuId`),
  CONSTRAINT `pc_builds_caseid_foreign` FOREIGN KEY (`caseId`) REFERENCES `cases` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `pc_builds_cpuid_foreign` FOREIGN KEY (`cpuId`) REFERENCES `cpus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `pc_builds_gpuid_foreign` FOREIGN KEY (`gpuId`) REFERENCES `gpus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `pc_builds_instorageid_foreign` FOREIGN KEY (`inStorageId`) REFERENCES `internal_storages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `pc_builds_memoryid_foreign` FOREIGN KEY (`memoryId`) REFERENCES `memories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `pc_builds_moboid_foreign` FOREIGN KEY (`moboId`) REFERENCES `motherboards` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `pc_builds_psuid_foreign` FOREIGN KEY (`psuId`) REFERENCES `power_supplies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `pc_builds_userid_foreign` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_pc_builds`
--

LOCK TABLES `user_pc_builds` WRITE;
/*!40000 ALTER TABLE `user_pc_builds` DISABLE KEYS */;
INSERT INTO `user_pc_builds` VALUES (1,1,'c88ee3','Rakitan 1',2,2,4,2,1,1,6,29098000),(2,1,'7e2a96','Rakitan 1',2,12,2,4,4,3,1,39914000);
/*!40000 ALTER TABLE `user_pc_builds` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user.png',
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Irham Tri Ahmadi','irhamtria@gmail.com','2023-01-15 19:55:51','$2y$10$KYwbFVbVu6HucfGZ6U.u/Owoxqq8haFhTHkFn8AY6W9ixzRxoGL7G','109328426690919865365','user.png',NULL,NULL,'2023-01-15 19:55:51'),(2,'Muhammad Fadhlan Syauqi','fadhlan@gmail.com',NULL,'$2y$10$lkbPD6BrmeMMlPF/WL1tcO0gvgRfPxXn2RvbRKSZlzRn9N48A7uAG',NULL,'user.png',NULL,NULL,NULL),(3,'Alfina Balqis Nurzaharani','alfina@gmail.com',NULL,'$2y$10$lkbPD6BrmeMMlPF/WL1tcO0gvgRfPxXn2RvbRKSZlzRn9N48A7uAG',NULL,'user.png',NULL,NULL,NULL),(4,'Budi Santosa','budi@gmail.com',NULL,'$2y$10$FsFHlHqVfw.eqSOiEGU6..aGecBm.I7BR1KmHKXSCcFMr4tOy0e3C',NULL,'user.png',NULL,'2023-01-07 21:35:03','2023-01-07 21:35:03'),(10,'Irham Tri','nameoriginal474@gmail.com','2023-01-15 19:55:51',NULL,'109681665153980858257','user.png',NULL,'2023-01-15 19:23:06','2023-01-15 19:23:06');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'bycom'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-01-16 10:58:26
