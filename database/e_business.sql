-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2023 at 04:09 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_business`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `title` varchar(200) NOT NULL,
  `brife` text NOT NULL,
  `point_1` varchar(200) NOT NULL,
  `point_2` varchar(200) NOT NULL,
  `point_3` varchar(200) NOT NULL,
  `point_4` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `photo`, `title`, `brife`, `point_1`, `point_2`, `point_3`, `point_4`) VALUES
(2, 'sd.jpg', 'Project Maintenance', '<p><span style=\"color: rgb(68, 68, 68); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; background-color: rgb(249, 249, 249);\">Redug Lagre dolor sit amet, consectetur adipisicing elit. Itaque quas officiis iure aspernatur sit adipisci quaerat unde at nequeRedug Lagre dolor sit amet, consectetur adipisicing elit. Itaque quas officiis iure</span><br></p>', ' Interior design Package', ' Reparing of Residentail Roof', ' Building House', 'Renovaion of Commercial Office');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `photo`, `title`, `description`) VALUES
(9, 'dhir.jpg', 'Its help us', '<pre jsname=\"TaKM8\" class=\"T7nuU\" style=\"font-family: arial, sans-serif; font-size: 14px; margin-top: 4px; margin-bottom: 0px; overflow: hidden; color: rgb(32, 33, 36); white-space: pre-wrap; overflow-wrap: break-word; line-height: 20px;\"><span jsname=\"pkrv7\">Relevant,Classic, hard-hitting, investigative, important, old fashioned and perfectly dated just enough to give a removed perspective which perfectly leads into Today... \r\nFrom the birth of corporations to the rights of corporations to own and patent identified, isolated genes, genomic, biotech companies, and life itself, to the lengths legal persons may go to protect their interests, it iss a sobering look at very real issues affecting our time...</span></pre>'),
(10, 'mir.jpg', 'It makes our life easier', '<pre jsname=\"TaKM8\" class=\"T7nuU\" style=\"font-family: arial, sans-serif; font-size: 14px; margin-top: 4px; margin-bottom: 0px; overflow: hidden; color: rgb(32, 33, 36); white-space: pre-wrap; overflow-wrap: break-word; line-height: 20px;\"><span jsname=\"pkrv7\">Relevant,Classic, hard-hitting, investigative, important, old fashioned and perfectly dated just enough to give a removed perspective which perfectly leads into Today... \r\nFrom the birth of corporations to the rights of corporations to own and patent identified, isolated genes, genomic, biotech companies, and life itself, to the lengths legal persons may go to protect their interests, it iss a sobering look at very real issues affecting our time...</span></pre>'),
(11, 'fd.jpg', 'It makes our life easier', '<pre jsname=\"TaKM8\" class=\"T7nuU\" style=\"font-family: arial, sans-serif; font-size: 14px; margin-top: 4px; margin-bottom: 0px; overflow: hidden; color: rgb(32, 33, 36); white-space: pre-wrap; overflow-wrap: break-word; line-height: 20px;\"><span jsname=\"pkrv7\">Relevant,Classic, hard-hitting, investigative, important, old fashioned and perfectly dated just enough to give a removed perspective which perfectly leads into Today... \r\nFrom the birth of corporations to the rights of corporations to own and patent identified, isolated genes, genomic, biotech companies, and life itself, to the lengths legal persons may go to protect their interests, it iss a sobering look at very real issues affecting our time...</span></pre>');

-- --------------------------------------------------------

--
-- Table structure for table `extra_add`
--

CREATE TABLE `extra_add` (
  `id` int(11) NOT NULL,
  `title_1` varchar(200) NOT NULL,
  `title_2` varchar(200) NOT NULL,
  `title_3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `extra_add`
--

INSERT INTO `extra_add` (`id`, `title_1`, `title_2`, `title_3`) VALUES
(2, 'WORKING WITH US', 'WEB DESIGN, READY HOME, CONSTRUCTION AND CO-OPERATE OUTSTANDING BUILDINGS.', 'Welcome to our eBusiness company.');

-- --------------------------------------------------------

--
-- Table structure for table `footer_1`
--

CREATE TABLE `footer_1` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `icon_1` varchar(200) NOT NULL,
  `icon_2` varchar(255) NOT NULL,
  `icon_3` varchar(255) NOT NULL,
  `icon_4` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `footer_1`
--

INSERT INTO `footer_1` (`id`, `logo`, `details`, `icon_1`, `icon_2`, `icon_3`, `icon_4`) VALUES
(2, '<span>e</span>Business', '<p><span style=\"color: rgb(68, 68, 68); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; background-color: rgb(249, 249, 249);\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</span><br></p>', 'bi bi-facebook', 'bi bi-twitter', 'bi bi-instagram', 'bi bi-linkedin');

-- --------------------------------------------------------

--
-- Table structure for table `footer_2`
--

CREATE TABLE `footer_2` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `tel` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `hour` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `footer_2`
--

INSERT INTO `footer_2` (`id`, `title`, `details`, `tel`, `email`, `hour`) VALUES
(2, 'INFORMATION', '<p><span style=\"color: rgb(68, 68, 68); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; background-color: rgb(249, 249, 249);\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</span><br></p>', '9874561245', 'e_business@gmailcom', '9am-5pm');

-- --------------------------------------------------------

--
-- Table structure for table `footer_3`
--

CREATE TABLE `footer_3` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `footer_3`
--

INSERT INTO `footer_3` (`id`, `title`, `photo`) VALUES
(2, 'INSTAGRAM', 'k.jpg'),
(4, '', 'y.jpg'),
(5, '', 'l.jpg'),
(6, '', 'u.jpg'),
(7, '', 'o.jpg'),
(10, '', 'j.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `name`, `email`, `subject`, `msg`) VALUES
(19, 'Faria', 'reza@gmail.com', 'Want to rent 4A', '      sdrgdrht'),
(20, 'Hamid', 'admin@email.com', 'Want to rent 4A', '      d hdftrg'),
(21, 'hamid', 'sharmin@gmail.com', 'Want to rent 4A', '      e5y r');

-- --------------------------------------------------------

--
-- Table structure for table `general_info`
--

CREATE TABLE `general_info` (
  `id` int(11) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `web` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `map` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `general_info`
--

INSERT INTO `general_info` (`id`, `phone`, `email`, `address`, `web`, `time`, `map`) VALUES
(3, '01815269321', 'e_business@gmail.com', '<p>7/A Dhanmondhi,Dhaka-1209</p>', 'www.e_business.com', 'Sunday-thursday(9am-5pm)', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14608.039147952037!2d90.36710721854193!3d23.747030403454197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b33cffc3fb%3A0x4a826f475fd312af!2sDhanmondi%2C%20Dhaka%201205!5e0!3m2!1sen!2sbd!4v1');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `title_1` varchar(200) NOT NULL,
  `title_2` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `photo`, `title_1`, `title_2`) VALUES
(9, 'j.jpg', 'Business City', 'Web Development'),
(10, 'u.jpg', 'Creative Team', 'Photoshop'),
(11, 'l.jpg', 'Beautiful Nature', 'Web Development'),
(12, 'o.jpg', 'Night Hill', 'Photoshop'),
(13, 'k.jpg', 'Blue Sea', 'Photoshop'),
(14, 'y.jpg', 'Beautiful Flower', 'Web Development');

-- --------------------------------------------------------

--
-- Table structure for table `price_details`
--

CREATE TABLE `price_details` (
  `id` int(11) NOT NULL,
  `id_1` int(11) NOT NULL,
  `feature` text NOT NULL,
  `feature_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `price_details`
--

INSERT INTO `price_details` (`id`, `id_1`, `feature`, `feature_status`) VALUES
(8, 1, 'bi bi-x', ' Online system'),
(9, 1, 'bi bi-x', ' Full access'),
(10, 1, 'bi bi-check', 'Free apps'),
(11, 1, 'bi bi-check', ' Multiple slider'),
(12, 1, 'bi bi-x', ' Free domin'),
(13, 1, 'bi bi-x', 'Support unlimited'),
(14, 1, 'bi bi-check', ' Payment online'),
(15, 1, 'bi bi-x', 'Cash back'),
(23, 0, '', ''),
(24, 0, '', ''),
(26, 0, '', ''),
(27, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `price_title`
--

CREATE TABLE `price_title` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `money` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `price_title`
--

INSERT INTO `price_title` (`id`, `title`, `money`) VALUES
(6, 'BASIC', '$80 / MONTH'),
(7, 'STANDARD', '$110 / MONTH'),
(8, 'PREMIUM', '$150 / MONTH');

-- --------------------------------------------------------

--
-- Table structure for table `pricing`
--

CREATE TABLE `pricing` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `feature` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pricing`
--

INSERT INTO `pricing` (`id`, `title`, `price`, `feature`, `status`) VALUES
(1, 'srdtg', 'dstr', 'dfhx', 'dhfy');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `logo`, `title`, `description`) VALUES
(15, 'bi bi-calendar4-week', '24/7 Support', '<p><span style=\"color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; text-align: center;\">will have to make sure the prototype looks finished by inserting text or photo make sure the prototype looks finished by.</span><br></p>'),
(16, 'bi bi-brightness-high', 'Seo Expart', '<p><span style=\"color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; text-align: center;\">will have to make sure the prototype looks finished by inserting text or photo make sure the prototype looks finished by.</span><br></p>'),
(18, 'bi bi-binoculars', 'Social Marketer', '<p><span style=\"color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; text-align: center;\">will have to make sure the prototype looks finished by inserting text or photo make sure the prototype looks finished by.</span><br></p>'),
(19, 'bi bi-bar-chart', 'Wordpress Develope', '<p><span style=\"color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; text-align: center;\">will have to make sure the prototype looks finished by inserting text or photo make sure the prototype looks finished by.</span><br></p>'),
(20, 'bi bi-card-checklist', 'Creative Designer', '<p><span style=\"color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; text-align: center;\">will have to make sure the prototype looks finished by inserting text or photo make sure the prototype looks finished by.</span><br></p>'),
(21, 'bi bi-briefcase', 'Expert Coder', '<p><span style=\"color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; text-align: center;\">will have to make sure the prototype looks finished by inserting text or photo make sure the prototype looks finished by.</span><br></p>');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `title_1` varchar(255) NOT NULL,
  `title_2` varchar(255) NOT NULL,
  `title_3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `photo`, `title_1`, `title_2`, `title_3`) VALUES
(25, 'x.jpg', 'The Best Business Information', 'We are In The Business Of Helping ', 'Start Your Business'),
(26, 'a.jpg', 'It is helpful company', 'We are In The Business Of Helping ', 'Mind for Your Family'),
(28, 's.jpg', 'It is great opportunity', 'We are In The Business Of Helping', 'Start Your Business ');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `name` varchar(150) NOT NULL,
  `designation` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `photo`, `name`, `designation`) VALUES
(3, 'Mahin.jpg', 'Mahin Alam', 'SEO'),
(4, 'Zara.jpg', 'Masuka Nowrin', 'Web Design'),
(6, 'Atif Hosen.jpg', 'Atif khan', 'SEO Expert'),
(9, 'Alex.jpg', 'Alex Partishon', 'Web Developer');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `photo`, `name`, `designation`, `description`) VALUES
(13, 'seo.jpg', 'Sadia Anam', 'Designer', '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae eveniet pariatur consequuntur unde architecto amet.<br></p>'),
(14, 'cap.jpg', 'Sajid Khan', 'Enterpreneur', '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae eveniet pariatur consequuntur unde architecto amet.<br></p>'),
(15, 'freelancer.jpg', 'Atif Islam', 'CEO & Founder', '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae eveniet pariatur consequuntur unde architecto amet.<br></p>'),
(16, 'web.jpg', 'Faria Hasan', 'Freelancer', '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae eveniet pariatur consequuntur unde architecto amet.<br></p>');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'sharmin', 'sharmin@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `extra_add`
--
ALTER TABLE `extra_add`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_1`
--
ALTER TABLE `footer_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_2`
--
ALTER TABLE `footer_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_3`
--
ALTER TABLE `footer_3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_info`
--
ALTER TABLE `general_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `price_details`
--
ALTER TABLE `price_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `price_title`
--
ALTER TABLE `price_title`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricing`
--
ALTER TABLE `pricing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `extra_add`
--
ALTER TABLE `extra_add`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `footer_1`
--
ALTER TABLE `footer_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `footer_2`
--
ALTER TABLE `footer_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `footer_3`
--
ALTER TABLE `footer_3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `general_info`
--
ALTER TABLE `general_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `price_details`
--
ALTER TABLE `price_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `price_title`
--
ALTER TABLE `price_title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pricing`
--
ALTER TABLE `pricing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
