-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2016 at 04:52 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos2`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `telephone` int(10) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `telephone`, `address`) VALUES
(0, 'random', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`) VALUES
(13817, '1.1 KENTUCKY'),
(13818, '1.2 LAS VEGAS'),
(13819, '1.3 CHICAGO'),
(13820, '1.4 NEW YORK'),
(13821, '1.5 TEXAS'),
(13822, '1.6 SAN FRANCISCO'),
(13823, '1.7 ARIZONA BLUE'),
(13824, '1.8 CLASSIC'),
(13827, '1.11 TENNESSEE'),
(13828, '1.9 MANHATTAN'),
(13829, '1.10 MISSISSIPPI BBQ'),
(13830, '1.12 SOHO CHICKEN'),
(13831, '1.13 BRONX'),
(13832, '1.14 BROOKLYN'),
(13833, '1.15 CALIFORNIA'),
(13834, '1.16 PHILLY'),
(13835, 'COLESLAW LARGE'),
(13836, 'CAESAR SALAD'),
(13837, 'FRESH SALAD LARGE'),
(13838, 'NEW ORLEANS'),
(13839, 'VILLAGE SALAD'),
(13840, '4.1 EL PASO'),
(13841, '4.2 MEXICAN'),
(13843, '5.1 GRILLED CHICKEN'),
(13844, '5.2 MISSISSIPPI BBQ GRILLED CHICKEN'),
(13845, '5.3 MISSISSIPPI BBQ PORK STEAK'),
(13846, '5.4 SPARE RIBS'),
(13847, '5.1 CHICKEN STRIPS (4 PCS)'),
(13848, '5.1 CHICKEN STRIPS (8 PCS)'),
(13849, '5.2 CHILI WEDGES'),
(13850, '5.3 CHEESY CHIPS'),
(13851, '5.4 CHILI CON CARNE'),
(13852, 'FRIES'),
(13853, 'MASHED POTATOES'),
(13854, 'ONION RINGS (10 PCS)'),
(13855, 'ONION RINGS (15 PCS)'),
(13856, 'COLESLAW SMALL'),
(13857, 'FRESH SALAD SMALL'),
(13858, 'SOFT DRINKS - 300ml'),
(13859, 'JUICES- 250ml'),
(13860, 'WATER- 500ml'),
(13861, 'WATER- 1L'),
(13862, 'COWGIRL'),
(13863, 'COWBOY'),
(13864, 'BUY BOTH (COWGIRL & COWBOY)'),
(13866, '9.1 CARAMELIZED ONION JUNIOR'),
(13868, '9.2 CHEESEBURGER JUNIOR'),
(13869, '9.3 GRILLED CHICKEN JUNIOR'),
(13870, '9.4 BACON MUSHROOM JUNIOR'),
(13871, '9.5 HOMEMADE BBQ JUNIOR'),
(13873, '9.6 MISSISSIPPI BBQ JUNIOR'),
(13875, '2.4 BREAKFAST BURGER'),
(13876, '2.2 YOGHURT BURGER'),
(13877, '2.1 CRISPY, SOUTHERN, SWEET CHICKEN BURGER'),
(13879, '4 JUNIOR CHEESEBURGERS & WEDGES'),
(14888, '3.2 FALAFEL BURGER'),
(14889, '3.1 VEGGIE BURGER'),
(14890, '3.3 SALMON BURGER'),
(14892, '3.4 SHRIMP BURGER'),
(14893, '3.5 CALAMARI BURGER'),
(15782, 'WEDGES'),
(17276, '2.3 ATHENS BURGER'),
(17278, 'CHILI WEDGES'),
(18744, 'SAUCE');

-- --------------------------------------------------------

--
-- Table structure for table `modifiesitems`
--

CREATE TABLE `modifiesitems` (
  `id` int(8) NOT NULL,
  `name` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modifiesitems`
--

INSERT INTO `modifiesitems` (`id`, `name`) VALUES
(6877, 'Wedges'),
(6880, 'fries'),
(6881, 'wedges'),
(6882, 'mashed potatoes'),
(6883, 'onion rings'),
(6884, 'coleslaw'),
(6885, 'fresh salad'),
(6886, 'grilled chicken'),
(6887, 'fried chicken'),
(6888, 'grilled chicken'),
(6889, 'fried chicken'),
(6890, 'grilled chicken'),
(6891, 'fried chicken'),
(6894, 'extra bread'),
(6896, 'extra bacon'),
(6897, 'extra egg'),
(6898, 'extra mushroom'),
(6899, 'extra caramelized onions'),
(6907, 'extra onion rings in burger'),
(6920, 'Fries'),
(6921, 'Mashed Potatoes'),
(6922, 'Fresh Salad'),
(6923, 'Coleslaw'),
(6924, 'Onion Rings sides'),
(6925, 'Rare'),
(6926, 'Rare to Medium'),
(6927, 'Medium'),
(6928, 'Medium to Well'),
(6929, 'Well done'),
(6930, 'tomato'),
(6931, 'lettuce'),
(6932, 'onions'),
(6933, 'tomato'),
(6934, 'lettuce'),
(7110, 'mozzarela'),
(7111, 'extra jalapenos'),
(7112, 'extra mexican beans'),
(7113, 'extra chili con carne'),
(7114, 'extra burger'),
(7115, 'extra chicken fillet'),
(7118, 'orange'),
(7119, 'apple'),
(7120, 'peach'),
(7121, '8 fruits'),
(7122, 'orange & apricot & apple'),
(7123, 'coca cola'),
(7124, 'coca cola diet'),
(7125, 'coca cola zero'),
(7126, 'sprite'),
(7127, 'sprite zero'),
(7128, 'fanta'),
(7129, 'fanta zero'),
(7130, 'nestea peach'),
(7131, 'nestea lemon'),
(7132, 'soda schweppes'),
(7139, 'lettuce'),
(7140, 'tomato'),
(7141, 'onion'),
(7142, 'honey mustard sauce'),
(7143, 'feta'),
(7144, 'lettuce'),
(7145, 'tomato'),
(7146, 'cucunber'),
(7147, 'onion'),
(7148, 'olives'),
(7149, 'oregano'),
(7150, 'oil and vinegar'),
(7151, 'lettuce'),
(7152, 'croutons'),
(7153, 'parmezan'),
(7154, 'caesar dressing'),
(7155, 'bacon'),
(7156, 'lettuce'),
(7157, 'tomato'),
(7158, 'carrot'),
(7460, 'Plain'),
(7461, 'Edam Cheese'),
(7462, 'Edam Cheese & Bacon'),
(7612, 'cheddar cheese'),
(8234, 'Wedges'),
(8235, 'Fries'),
(13024, 'edam cheese'),
(13032, 'extra edam cheese'),
(13033, 'extra fetta cheese'),
(13034, 'extra blue cheese'),
(13036, 'extra mozzarela'),
(13038, 'extra cheddar cheese'),
(13039, 'plain'),
(13040, 'with cheese'),
(14031, 'tomato'),
(14032, 'lettuce'),
(14033, 'onions'),
(14034, 'sauteed mushrooms'),
(14039, 'double cheddar'),
(14040, 'Wedges'),
(14041, 'Fries'),
(15084, 'blue cheese'),
(15085, 'feta'),
(15086, 'fanta lemon'),
(15093, 'extra crispy chicken'),
(15094, 'Goodburger'),
(15095, 'BBQ'),
(15097, 'Mississippi BBQ'),
(15098, 'Mayonaise'),
(15099, 'Caesar'),
(15100, 'Honey Mustard'),
(15101, 'New Orleans'),
(15102, 'Mississippi'),
(15103, 'Ketchup'),
(15105, 'Yoghurt Sauce'),
(15106, 'Chili Sauce'),
(15107, 'Mustard'),
(15108, 'BBQ Vinaigrette'),
(15109, 'Tahini'),
(15110, 'Sour Cream'),
(15111, 'Pesto'),
(16094, 'Ketchup'),
(16095, 'Mayonaise'),
(16096, 'Mustard'),
(16097, 'Goodburger'),
(16098, 'BBQ'),
(16099, 'Mississippi BBQ'),
(16100, 'Caesar'),
(16101, 'Honey Mustard'),
(16102, 'New Orleans'),
(16103, 'Mississippi'),
(16104, 'Yoghurt Sauce'),
(16105, 'Chili Sauce'),
(16106, 'BBQ Vinaigrette'),
(16107, 'Tahini'),
(16108, 'Sour Cream'),
(16109, 'Pesto');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `customerId` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

CREATE TABLE `orderitems` (
  `orderid` int(11) NOT NULL,
  `itemid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderitems`
--

INSERT INTO `orderitems` (`orderid`, `itemid`) VALUES
(164, 13817),
(164, 13828),
(164, 13861),
(164, 13834),
(164, 13858),
(164, 13819),
(165, 13840),
(165, 13833),
(165, 13830),
(166, 13818),
(166, 13829),
(167, 13823),
(167, 13858),
(167, 13829),
(168, 13821),
(168, 13817),
(169, 13840),
(169, 13859),
(169, 13817),
(169, 13861),
(170, 13862),
(170, 13848),
(170, 13847),
(171, 13847),
(171, 13879),
(171, 14892),
(171, 13835),
(172, 13818),
(172, 13857),
(172, 13839),
(173, 13817),
(174, 14889),
(174, 13817),
(175, 13827),
(175, 13817),
(176, 13817),
(176, 13840),
(176, 13859),
(177, 13861),
(178, 13817),
(178, 13879),
(178, 13828),
(178, 13859),
(179, 13840),
(179, 13862),
(179, 13835),
(180, 13817),
(180, 13866),
(180, 13879),
(181, 13857),
(181, 13859),
(181, 13833),
(181, 13817),
(182, 14889),
(182, 13843),
(183, 13817),
(183, 13843),
(183, 13859),
(183, 13860),
(184, 14892),
(185, 13855),
(186, 14889),
(186, 13845),
(186, 14889),
(186, 13879),
(187, 13840),
(187, 14889),
(188, 14892),
(188, 13840),
(189, 13866),
(189, 13835),
(189, 14889),
(189, 13840),
(190, 14892),
(190, 14893),
(191, 13820),
(191, 13846),
(192, 13862),
(192, 13850),
(192, 13849),
(193, 13875),
(193, 13840),
(193, 13879),
(193, 13871),
(193, 14892),
(198, 14892),
(198, 13875),
(198, 13877),
(198, 13875),
(199, 13877),
(200, 13875),
(201, 13875),
(202, 13875),
(202, 13879),
(203, 13840),
(204, 13841),
(206, 13857),
(207, 18744),
(208, 17808),
(209, 14892),
(210, 13875),
(211, 13840),
(212, 13820),
(213, 13840),
(213, 13859),
(213, 13817),
(214, 13849),
(214, 14889),
(214, 13850),
(214, 13851),
(215, 13819),
(215, 13835),
(215, 13832),
(216, 13817),
(216, 13848),
(216, 13850),
(217, 13868),
(217, 13879),
(217, 13848),
(217, 13841),
(217, 14889),
(218, 13820),
(219, 14889);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `modifiesitems`
--
ALTER TABLE `modifiesitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=220;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
