-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql258.hosting.combell.com:3306
-- Generation Time: Jun 15, 2019 at 12:43 AM
-- Server version: 5.7.22-22
-- PHP Version: 7.1.25-1+0~20181207224605.11+jessie~1.gbpf65b84

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ID282067_20182019`
--

-- --------------------------------------------------------

--
-- Table structure for table `int2_events`
--

CREATE TABLE `int2_events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `title_clean` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `desc_short` text NOT NULL,
  `desc_long` text NOT NULL,
  `kind` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_detail` varchar(255) DEFAULT NULL,
  `ticket_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `int2_events`
--

INSERT INTO `int2_events` (`id`, `title`, `title_clean`, `date`, `time`, `desc_short`, `desc_long`, `kind`, `image`, `image_detail`, `ticket_id`) VALUES
(1, 'Jump <br><span class=\"lime\">enhancement</span> <br>training', 'Jump enhancement training', '2019-07-01', '10:00:00', 'Experiencing trouble happy hooping from building to building? This training session will help you make the perfect jumps every time!', 'Experiencing trouble happy hooping from building to building? This training session will help you make the perfect jumps every time! Our trainers will guide you into using the perfect jump and landing technique. They will even give you some tips and tricks from their own experiences as a happy hooper.', '1', 'event1.png', 'eventdetail1.png', 1),
(2, 'Taking <br>care of your <br><span class=\"pink\">hoop</span>', 'Taking care of your hoop', '2019-07-02', '09:00:00', 'Your hoop might take some heavy beatings during training sessions and happy hoop sessions. In this how-to session we will go over some methods to keep your hoop as new as possible.', 'Your hoop might take some heavy beatings during training sessions and happy hoop sessions. In this how-to session we will go over some methods to keep your hoop as new as possible. We will show you all kinds of products and materials you can use to maintain your hoop. After all, without a hoop you can\'t play happy hoops.', '2', 'event2.png', 'eventdetail2.png', 2),
(3, 'Picking <br>the right <br><span class=\"pink\">shoes</span>', 'Picking the right shoes', '2019-07-03', '11:00:00', 'When you\'re happy hooping you probably don\'t want to break your feet. That\'s why you\'ll definitely need some good shoes.', 'When you\'re happy hooping you probably don\'t want to break your feet. That\'s why you\'ll definitely need some good shoes. In this how-to session we will show you what makes a good shoe for happy hooping, and what kinds of shoes to stay away from.', '2', 'event3.png', 'eventdetail3.png', 3),
(4, 'Improve your <br><span class=\"lime\">throwing</span> <br>technique', 'Improve your throwing technique', '2019-07-04', '14:00:00', 'Throwing your hoop building to building is not easy. In this training session we will teach you how to perfectly throw your hoop and make sure it lands where you want it to.', 'Throwing your hoop building to building is not easy. In this training session we will teach you how to perfectly throw your hoop and make sure it lands where you want it to. Our trainers will teach you the best throwing and aiming techniques and guide you into mastering them.', '1', 'event4.png', 'eventdetail4.png', 4),
(5, 'Yearly <br><span class=\"lime\">fundraiser</span>', 'Yearly fundraiser', '2019-07-05', '09:00:00', 'Every year we organise a fundraiser to raise money for new equipment. This year the raised money will go towards new team shirts and sweaters.', 'Every year we organise a fundraiser to raise money for new equipment. This year the raised money will go towards new team shirts and sweaters. That way, when we are happy hooping throughout Kortrijk people will recognise us immediately.', '3', 'event5.png', 'eventdetail5.png', 5),
(6, 'Choosing the <br>right kind of <br><span class=\"pink\">hoop</span>', 'Choosing the right kind of hoop', '2019-07-08', '08:30:00', 'To execute perfect throws when happy hooping, you\'ll need a good hoop. In this how-to session we\'ll explain you what makes a good, and what makes a bad hoop.', 'To execute perfect throws when happy hooping, you\'ll need a good hoop. In this how-to session we\'ll explain you what makes a good, and what makes a bad hoop. We\'ll explain you the different kinds of hoops, along with the advantages and disadvantages of each kind. Every participant of this how-to session gets a 50&#37;-off coupon for their next hoop purchase.', '2', 'event6.png', 'eventdetail6.png', 6),
(7, 'Improve your <br><span class=\"lime\">hoop</span> <br>stability', 'Improve your hoop stability', '2019-07-09', '17:00:00', 'Experiencing trouble keeping your hoop stable while happy hooping?\r\nThis training session will teach you you how to keep your hoop stable by improving your aim.', 'Experiencing trouble keeping your hoop stable while happy hooping?\r\nThis training session will teach you you how to keep your hoop stable by improving your aim. Our trainers will teach you the finest techniques and give you some tips and tricks to even do some trickshots.', '1', 'event7.png', 'eventdetail7.png', 7),
(8, 'Train your <br><span class=\"lime\">tactics</span>', 'Train your tactics', '2019-07-10', '11:00:00', 'Besides technique, tactics are one of the most important things in happy hoops. In this training session we\'ll teach you various happy hoops tactics.', 'Besides technique, tactics are one of the most important things in happy hoops. In this training session we\'ll teach you various happy hoops tactics. You\'ll be guided by our experienced trainers.', '1', 'event8.png', 'eventdetail8.png', 8),
(9, 'Recording epic <br>happy hoops <br><span class=\"pink\">videos</span>', 'Recording epic happy hoops videos', '2019-07-11', '09:30:00', 'Yearning to share your happy hoop adventures? This is your chance! We will teach you how to schoot, edit and upload the most amazing, exciting and epic happy hoop videos ever!', 'Yearning to share your happy hoop adventures? This is your chance! We will teach you how to schoot, edit and upload the most amazing, exciting and epic happy hoop videos ever! We’ll show you the best shooting techniques and the most exciting compositions for your videos. We’ll even show you how to use editing software to take your videos to the next level!', '2', 'event9.png', 'eventdetail9.png', 9),
(10, 'Improve your <br><span class=\"lime\">teamplay</span> <br>skills', 'Improve your teamplay skills', '2019-07-12', '15:00:00', 'In many sports teamplay is a big aspect, and especially in Happy Hoops. In this training session you’ll learn how to efficiently communicate with your team and play as a team.', 'In many sports teamplay is a big aspect, and especially in Happy Hoops. In this training session you’ll learn how to efficiently communicate with your team and play as a team. Not only will this improve your Happy Hoops experience, it will also greatly improve team spirit.', '1', 'event10.png', 'eventdetail10.png', 10);

-- --------------------------------------------------------

--
-- Table structure for table `int2_orders`
--

CREATE TABLE `int2_orders` (
  `id` int(11) NOT NULL,
  `ticket_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `int2_orders`
--

INSERT INTO `int2_orders` (`id`, `ticket_id`, `name`, `email`) VALUES
(1, 1, 'bram', 'bram@gmail.com'),
(2, 1, 'Test', 'Test@gmail.com'),
(3, 1, 'Test', 'Test@gmail.com'),
(4, 1, 'en nu?', 'nu@gmail.com'),
(5, 1, 'en nu?', 'nu@gmail.com'),
(6, 2, 'd', 'd@gmail.com'),
(7, 10, 'chinouk', 'chinouk@bmail.com'),
(8, 5, 'Bram', 'Bram@brambail.com'),
(9, 2, 'beheerder', 'bramvandenbergh@icloud.com'),
(10, 2, 'Jelle', 'bramvandenbergh@icloud.com'),
(11, 2, 'Guylian', 'd@gmail.com'),
(12, 2, 'beheerder', 'bramvandenbergh@icloud.com'),
(13, 2, 'nathaaaaan', 'vandeweggge@gmail.com'),
(14, 5, 'Bram', 'bramvandenbergh@icloud.com'),
(15, 5, 'Bram', 'bramvandenbergh@icloud.com'),
(16, 2, 'NATHAN IS DE BESTE JAJAJAJ', 'nathanvragenbijphpkommaaraf@phpisnietzoleukhe.com');

-- --------------------------------------------------------

--
-- Table structure for table `int2_type`
--

CREATE TABLE `int2_type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `int2_type`
--

INSERT INTO `int2_type` (`id`, `name`) VALUES
(1, 'training'),
(2, 'how-to'),
(3, 'fundraiser');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `int2_events`
--
ALTER TABLE `int2_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `int2_orders`
--
ALTER TABLE `int2_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `int2_type`
--
ALTER TABLE `int2_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `int2_events`
--
ALTER TABLE `int2_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `int2_orders`
--
ALTER TABLE `int2_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `int2_type`
--
ALTER TABLE `int2_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
