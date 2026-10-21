-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2025 at 08:51 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pet2`
--

-- --------------------------------------------------------

--
-- Table structure for table `cate`
--

CREATE TABLE IF NOT EXISTS `cate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nme` varchar(150) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `cate`
--

INSERT INTO `cate` (`id`, `nme`, `st`) VALUES
(1, 'Cats', 0),
(2, 'Dogs', 0),
(3, 'Parrot', 0),
(4, 'Lovebirds', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cont`
--

CREATE TABLE IF NOT EXISTS `cont` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` varchar(150) NOT NULL,
  `did` varchar(150) NOT NULL,
  `uid` varchar(150) NOT NULL,
  `msg` text NOT NULL,
  `dt` date NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `cont`
--

INSERT INTO `cont` (`id`, `cid`, `did`, `uid`, `msg`, `dt`, `st`) VALUES
(3, '555850', 'ha@gmail.com', 'ma@gmail.com', 'hellooo', '2022-08-29', 0),
(4, '540386', 'ak@gmail.com', 'ma@gmail.com', 'helloo', '2025-05-27', 0),
(5, '605068', 'ak@gmail.com', 'ma@gmail.com', 'My cat is very mischeif', '2025-06-06', 0);

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE IF NOT EXISTS `district` (
  `DistCode` int(11) NOT NULL AUTO_INCREMENT,
  `StCode` int(11) DEFAULT NULL,
  `DistrictName` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`DistCode`),
  KEY `StCode` (`StCode`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=651 ;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`DistCode`, `StCode`, `DistrictName`) VALUES
(1, 1, 'North and Middle Andama'),
(2, 1, 'South Andama'),
(3, 1, 'Nicobar'),
(4, 2, 'Anantapur'),
(5, 2, 'Chittoor'),
(6, 2, 'East Godavari'),
(7, 2, 'Guntur'),
(8, 2, 'Krishna'),
(9, 2, 'Kurnool'),
(10, 2, 'Prakasam'),
(11, 2, 'Srikakulam'),
(12, 2, 'Sri Potti Sri Ramulu Nellore'),
(13, 2, 'Vishakhapatnam'),
(14, 2, 'Vizianagaram'),
(15, 2, 'West Godavari'),
(16, 2, 'Cudappah'),
(17, 3, 'Anjaw'),
(18, 3, 'Changlang'),
(19, 3, 'East Siang'),
(20, 3, 'East Kameng'),
(21, 3, 'Kurung Kumey'),
(22, 3, 'Lohit'),
(23, 3, 'Lower Dibang Valley'),
(24, 3, 'Lower Subansiri'),
(25, 3, 'Papum Pare'),
(26, 3, 'Tawang'),
(27, 3, 'Tirap'),
(28, 3, 'Dibang Valley'),
(29, 3, 'Upper Siang'),
(30, 3, 'Upper Subansiri'),
(31, 3, 'West Kameng'),
(32, 3, 'West Siang'),
(33, 4, 'Baksa'),
(34, 4, 'Barpeta'),
(35, 4, 'Bongaigao'),
(36, 4, 'Cachar'),
(37, 4, 'Chirang'),
(38, 4, 'Darrang'),
(39, 4, 'Dhemaji'),
(40, 4, 'Dima Hasao'),
(41, 4, 'Dhubri'),
(42, 4, 'Dibrugarh'),
(43, 4, 'Goalpara'),
(44, 4, 'Golaghat'),
(45, 4, 'Hailakandi'),
(46, 4, 'Jorhat'),
(47, 4, 'Kamrup'),
(48, 4, 'Kamrup Metropolita'),
(49, 4, 'Karbi Anglong'),
(50, 4, 'Karimganj'),
(51, 4, 'Kokrajhar'),
(52, 4, 'Lakhimpur'),
(53, 4, 'Morigao'),
(54, 4, 'Nagao'),
(55, 4, 'Nalbari'),
(56, 4, 'Sivasagar'),
(57, 4, 'Sonitpur'),
(58, 4, 'Tinsukia'),
(59, 4, 'Udalguri'),
(60, 5, 'Araria'),
(61, 5, 'Arwal'),
(62, 5, 'Aurangabad'),
(63, 5, 'Banka'),
(64, 5, 'Begusarai'),
(65, 5, 'Bhagalpur'),
(66, 5, 'Bhojpur'),
(67, 5, 'Buxar'),
(68, 5, 'Darbhanga'),
(69, 5, 'East Champara'),
(70, 5, 'Gaya'),
(71, 5, 'Gopalganj'),
(72, 5, 'Jamui'),
(73, 5, 'Jehanabad'),
(74, 5, 'Kaimur'),
(75, 5, 'Katihar'),
(76, 5, 'Khagaria'),
(77, 5, 'Kishanganj'),
(78, 5, 'Lakhisarai'),
(79, 5, 'Madhepura'),
(80, 5, 'Madhubani'),
(81, 5, 'Munger'),
(82, 5, 'Muzaffarpur'),
(83, 5, 'Nalanda'),
(84, 5, 'Nawada'),
(85, 5, 'Patna'),
(86, 5, 'Purnia'),
(87, 5, 'Rohtas'),
(88, 5, 'Saharsa'),
(89, 5, 'Samastipur'),
(90, 5, 'Sara'),
(91, 5, 'Sheikhpura'),
(92, 5, 'Sheohar'),
(93, 5, 'Sitamarhi'),
(94, 5, 'Siwa'),
(95, 5, 'Supaul'),
(96, 5, 'Vaishali'),
(97, 5, 'West Champara'),
(98, 6, 'Chandigarh'),
(99, 7, 'Bastar'),
(100, 7, 'Bijapur'),
(101, 7, 'Bilaspur'),
(102, 7, 'Dantewada'),
(103, 7, 'Dhamtari'),
(104, 7, 'Durg'),
(105, 7, 'Jashpur'),
(106, 7, 'Janjgir-Champa'),
(107, 7, 'Korba'),
(108, 7, 'Koriya'),
(109, 7, 'Kanker'),
(110, 7, 'Kabirdham (formerly Kawardha);'),
(111, 7, 'Mahasamund'),
(112, 7, 'Narayanpur'),
(113, 7, 'Raigarh'),
(114, 7, 'Rajnandgao'),
(115, 7, 'Raipur'),
(116, 7, 'Surajpur'),
(117, 8, 'Dadra and Nagar Haveli'),
(118, 9, 'Dama'),
(119, 9, 'Diu'),
(120, 10, 'Central Delhi'),
(121, 10, 'East Delhi'),
(122, 10, 'New Delhi'),
(123, 10, 'North Delhi'),
(124, 10, 'North East Delhi'),
(125, 10, 'North West Delhi'),
(126, 10, 'South Delhi'),
(127, 10, 'South West Delhi'),
(128, 10, 'West Delhi'),
(129, 11, 'North Goa'),
(130, 11, 'South Goa'),
(131, 12, 'Ahmedabad'),
(132, 12, 'Amreli'),
(133, 12, 'Anand'),
(134, 12, 'Aravalli'),
(135, 12, 'Banaskantha'),
(136, 12, 'Bharuch'),
(137, 12, 'Bhavnagar'),
(138, 12, 'Dahod'),
(139, 12, 'Dang'),
(140, 12, 'Gandhinagar'),
(141, 12, 'Jamnagar'),
(142, 12, 'Junagadh'),
(143, 12, 'Kutch'),
(144, 12, 'Kheda'),
(145, 12, 'Mehsana'),
(146, 12, 'Narmada'),
(147, 12, 'Navsari'),
(148, 12, 'Pata'),
(149, 12, 'Panchmahal'),
(150, 12, 'Porbandar'),
(151, 12, 'Rajkot'),
(152, 12, 'Sabarkantha'),
(153, 12, 'Surendranagar'),
(154, 12, 'Surat'),
(155, 12, 'Tapi'),
(156, 12, 'Vadodara'),
(157, 12, 'Valsad'),
(158, 13, 'Ambala'),
(159, 13, 'Bhiwani'),
(160, 13, 'Faridabad'),
(161, 13, 'Fatehabad'),
(162, 13, 'Gurgao'),
(163, 13, 'Hissar'),
(164, 13, 'Jhajjar'),
(165, 13, 'Jind'),
(166, 13, 'Karnal'),
(167, 13, 'Kaithal'),
(168, 13, 'Kurukshetra'),
(169, 13, 'Mahendragarh'),
(170, 13, 'Mewat'),
(171, 13, 'Palwal'),
(172, 13, 'Panchkula'),
(173, 13, 'Panipat'),
(174, 13, 'Rewari'),
(175, 13, 'Rohtak'),
(176, 13, 'Sirsa'),
(177, 13, 'Sonipat'),
(178, 13, 'Yamuna Nagar'),
(179, 14, 'Bilaspur'),
(180, 14, 'Chamba'),
(181, 14, 'Hamirpur'),
(182, 14, 'Kangra'),
(183, 14, 'Kinnaur'),
(184, 14, 'Kullu'),
(185, 14, 'Lahaul and Spiti'),
(186, 14, 'Mandi'),
(187, 14, 'Shimla'),
(188, 14, 'Sirmaur'),
(189, 14, 'Sola'),
(190, 14, 'Una'),
(191, 15, 'Anantnag'),
(192, 15, 'Badgam'),
(193, 15, 'Bandipora'),
(194, 15, 'Baramulla'),
(195, 15, 'Doda'),
(196, 15, 'Ganderbal'),
(197, 15, 'Jammu'),
(198, 15, 'Kargil'),
(199, 15, 'Kathua'),
(200, 15, 'Kishtwar'),
(202, 15, 'Kupwara'),
(203, 15, 'Kulgam'),
(204, 15, 'Leh'),
(205, 15, 'Poonch'),
(206, 15, 'Pulwama'),
(207, 15, 'Rajouri'),
(208, 15, 'Ramba'),
(209, 15, 'Reasi'),
(210, 15, 'Samba'),
(211, 15, 'Shopia'),
(212, 15, 'Srinagar'),
(213, 15, 'Udhampur'),
(214, 16, 'Bokaro'),
(215, 16, 'Chatra'),
(216, 16, 'Deoghar'),
(217, 16, 'Dhanbad'),
(218, 16, 'Dumka'),
(219, 16, 'East Singhbhum'),
(220, 16, 'Garhwa'),
(221, 16, 'Giridih'),
(222, 16, 'Godda'),
(223, 16, 'Gumla'),
(224, 16, 'Hazaribag'),
(225, 16, 'Jamtara'),
(226, 16, 'Khunti'),
(227, 16, 'Koderma'),
(228, 16, 'Latehar'),
(229, 16, 'Lohardaga'),
(230, 16, 'Pakur'),
(231, 16, 'Palamu'),
(232, 16, 'Ramgarh'),
(233, 16, 'Ranchi'),
(234, 16, 'Sahibganj'),
(235, 16, 'Seraikela Kharsawa'),
(236, 16, 'Simdega'),
(237, 16, 'West Singhbhum'),
(238, 17, 'Bagalkot'),
(239, 17, 'Bangalore Rural'),
(240, 17, 'Bangalore Urba'),
(241, 17, 'Belgaum'),
(242, 17, 'Bellary'),
(243, 17, 'Bidar'),
(244, 17, 'Bijapur'),
(245, 17, 'Chamarajnagar'),
(246, 17, 'Chikkamagaluru'),
(247, 17, 'Chikkaballapur'),
(248, 17, 'Chitradurga'),
(249, 17, 'Davanagere'),
(250, 17, 'Dharwad'),
(251, 17, 'Dakshina Kannada'),
(252, 17, 'Gadag'),
(253, 17, 'Gulbarga'),
(254, 17, 'Hassa'),
(255, 17, 'Haveri'),
(256, 17, 'Kodagu'),
(257, 17, 'Kolar'),
(258, 17, 'Koppal'),
(259, 17, 'Mandya'),
(260, 17, 'Mysore'),
(261, 17, 'Raichur'),
(262, 17, 'Shimoga'),
(263, 17, 'Tumkur'),
(264, 17, 'Udupi'),
(265, 17, 'Uttara Kannada'),
(266, 17, 'Ramanagara'),
(267, 17, 'Yadgir'),
(268, 18, 'Alappuzha'),
(269, 18, 'Ernakulam'),
(270, 18, 'Idukki'),
(271, 18, 'Kannur'),
(272, 18, 'Kasaragod'),
(273, 18, 'Kollam'),
(274, 18, 'Kottayam'),
(275, 18, 'Kozhikode'),
(276, 18, 'Malappuram'),
(277, 18, 'Palakkad'),
(278, 18, 'Pathanamthitta'),
(279, 18, 'Thrissur'),
(280, 18, 'Thiruvananthapuram'),
(281, 18, 'Wayanad'),
(282, 19, 'Lakshadweep'),
(283, 20, 'Agar'),
(284, 20, 'Alirajpur'),
(285, 20, 'Anuppur'),
(286, 20, 'Ashok Nagar'),
(287, 20, 'Balaghat'),
(288, 20, 'Barwani'),
(289, 20, 'Betul'),
(290, 20, 'Bhind'),
(291, 20, 'Bhopal'),
(292, 20, 'Burhanpur'),
(293, 20, 'Chhatarpur'),
(294, 20, 'Chhindwara'),
(295, 20, 'Damoh'),
(296, 20, 'Datia'),
(297, 20, 'Dewas'),
(298, 20, 'Dhar'),
(299, 20, 'Dindori'),
(300, 20, 'Guna'),
(301, 20, 'Gwalior'),
(302, 20, 'Harda'),
(303, 20, 'Hoshangabad'),
(304, 20, 'Indore'),
(305, 20, 'Jabalpur'),
(306, 20, 'Jhabua'),
(307, 20, 'Katni'),
(308, 20, 'Khandwa (East Nimar);'),
(309, 20, 'Khargone (West Nimar);'),
(310, 20, 'Mandla'),
(311, 20, 'Mandsaur'),
(312, 20, 'Morena'),
(313, 20, 'Narsinghpur'),
(314, 20, 'Neemuch'),
(315, 20, 'Panna'),
(316, 20, 'Raise'),
(317, 20, 'Rajgarh'),
(318, 20, 'Ratlam'),
(319, 20, 'Rewa'),
(320, 20, 'Sagar'),
(321, 20, 'Satna'),
(322, 20, 'Sehore'),
(323, 20, 'Seoni'),
(324, 20, 'Shahdol'),
(325, 20, 'Shajapur'),
(326, 20, 'Sheopur'),
(327, 20, 'Shivpuri'),
(328, 20, 'Sidhi'),
(329, 20, 'Singrauli'),
(330, 20, 'Tikamgarh'),
(331, 20, 'Ujjai'),
(332, 20, 'Umaria'),
(333, 20, 'Vidisha'),
(334, 21, 'Ahmednagar'),
(335, 21, 'Akola'),
(336, 21, 'Amravati'),
(337, 21, 'Aurangabad'),
(338, 21, 'Beed'),
(339, 21, 'Bhandara'),
(340, 21, 'Buldhana'),
(341, 21, 'Chandrapur'),
(342, 21, 'Dhule'),
(343, 21, 'Gadchiroli'),
(344, 21, 'Gondia'),
(345, 21, 'Hingoli'),
(346, 21, 'Jalgao'),
(347, 21, 'Jalna'),
(348, 21, 'Kolhapur'),
(349, 21, 'Latur'),
(350, 21, 'Mumbai City'),
(351, 21, 'Mumbai suburba'),
(352, 21, 'Nanded'),
(353, 21, 'Nandurbar'),
(354, 21, 'Nagpur'),
(355, 21, 'Nashik'),
(356, 21, 'Osmanabad'),
(357, 21, 'Parbhani'),
(358, 21, 'Pune'),
(359, 21, 'Raigad'),
(360, 21, 'Ratnagiri'),
(361, 21, 'Sangli'),
(362, 21, 'Satara'),
(363, 21, 'Sindhudurg'),
(364, 21, 'Solapur'),
(365, 21, 'Thane'),
(366, 21, 'Wardha'),
(367, 21, 'Washim'),
(368, 21, 'Yavatmal'),
(369, 22, 'Bishnupur'),
(370, 22, 'Churachandpur'),
(371, 22, 'Chandel'),
(372, 22, 'Imphal East'),
(373, 22, 'Senapati'),
(374, 22, 'Tamenglong'),
(375, 22, 'Thoubal'),
(376, 22, 'Ukhrul'),
(377, 22, 'Imphal West'),
(378, 23, 'East Garo Hills'),
(379, 23, 'East Khasi Hills'),
(380, 23, 'Jaintia Hills'),
(381, 23, 'Ri Bhoi'),
(382, 23, 'South Garo Hills'),
(383, 23, 'West Garo Hills'),
(384, 23, 'West Khasi Hills'),
(385, 24, 'Aizawl'),
(386, 24, 'Champhai'),
(387, 24, 'Kolasib'),
(388, 24, 'Lawngtlai'),
(389, 24, 'Lunglei'),
(390, 24, 'Mamit'),
(391, 24, 'Saiha'),
(392, 24, 'Serchhip'),
(393, 25, 'Dimapur'),
(394, 25, 'Kiphire'),
(395, 25, 'Kohima'),
(396, 25, 'Longleng'),
(397, 25, 'Mokokchung'),
(398, 25, 'Mo'),
(399, 25, 'Pere'),
(400, 25, 'Phek'),
(401, 25, 'Tuensang'),
(402, 25, 'Wokha'),
(403, 25, 'Zunheboto'),
(404, 26, 'Angul'),
(405, 26, 'Boudh (Bauda);'),
(406, 26, 'Bhadrak'),
(407, 26, 'Balangir'),
(408, 26, 'Bargarh (Baragarh);'),
(409, 26, 'Balasore'),
(410, 26, 'Cuttack'),
(411, 26, 'Debagarh (Deogarh);'),
(412, 26, 'Dhenkanal'),
(413, 26, 'Ganjam'),
(414, 26, 'Gajapati'),
(415, 26, 'Jharsuguda'),
(416, 26, 'Jajpur'),
(417, 26, 'Jagatsinghpur'),
(418, 26, 'Khordha'),
(419, 26, 'Kendujhar (Keonjhar);'),
(420, 26, 'Kalahandi'),
(421, 26, 'Kandhamal'),
(422, 26, 'Koraput'),
(423, 26, 'Kendrapara'),
(424, 26, 'Malkangiri'),
(425, 26, 'Mayurbhanj'),
(426, 26, 'Nabarangpur'),
(427, 26, 'Nuapada'),
(428, 26, 'Nayagarh'),
(429, 26, 'Puri'),
(430, 26, 'Rayagada'),
(431, 26, 'Sambalpur'),
(432, 26, 'Subarnapur (Sonepur);'),
(433, 26, 'Sundergarh'),
(434, 27, 'Karaikal'),
(435, 27, 'Mahe'),
(436, 27, 'Pondicherry'),
(437, 27, 'Yanam'),
(438, 28, 'Amritsar'),
(439, 28, 'Barnala'),
(440, 28, 'Bathinda'),
(441, 28, 'Firozpur'),
(442, 28, 'Faridkot'),
(443, 28, 'Fatehgarh Sahib'),
(444, 28, 'Fazilka'),
(445, 28, 'Gurdaspur'),
(446, 28, 'Hoshiarpur'),
(447, 28, 'Jalandhar'),
(448, 28, 'Kapurthala'),
(449, 28, 'Ludhiana'),
(450, 28, 'Mansa'),
(451, 28, 'Moga'),
(452, 28, 'Sri Muktsar Sahib'),
(453, 28, 'Pathankot'),
(454, 28, 'Patiala'),
(455, 28, 'Rupnagar'),
(456, 28, 'Ajitgarh (Mohali);'),
(457, 28, 'Sangrur'),
(458, 28, 'Shahid Bhagat Singh Nagar'),
(459, 28, 'Tarn Tara'),
(460, 29, 'Ajmer'),
(461, 29, 'Alwar'),
(462, 29, 'Bikaner'),
(463, 29, 'Barmer'),
(464, 29, 'Banswara'),
(465, 29, 'Bharatpur'),
(466, 29, 'Bara'),
(467, 29, 'Bundi'),
(468, 29, 'Bhilwara'),
(469, 29, 'Churu'),
(470, 29, 'Chittorgarh'),
(471, 29, 'Dausa'),
(472, 29, 'Dholpur'),
(473, 29, 'Dungapur'),
(474, 29, 'Ganganagar'),
(475, 29, 'Hanumangarh'),
(476, 29, 'Jhunjhunu'),
(477, 29, 'Jalore'),
(478, 29, 'Jodhpur'),
(479, 29, 'Jaipur'),
(480, 29, 'Jaisalmer'),
(481, 29, 'Jhalawar'),
(482, 29, 'Karauli'),
(483, 29, 'Kota'),
(484, 29, 'Nagaur'),
(485, 29, 'Pali'),
(486, 29, 'Pratapgarh'),
(487, 29, 'Rajsamand'),
(488, 29, 'Sikar'),
(489, 29, 'Sawai Madhopur'),
(490, 29, 'Sirohi'),
(491, 29, 'Tonk'),
(492, 29, 'Udaipur'),
(493, 30, 'East Sikkim'),
(494, 30, 'North Sikkim'),
(495, 30, 'South Sikkim'),
(496, 30, 'West Sikkim'),
(497, 31, 'Ariyalur'),
(498, 31, 'Chennai'),
(499, 31, 'Coimbatore'),
(500, 31, 'Cuddalore'),
(501, 31, 'Dharmapuri'),
(502, 31, 'Dindigul'),
(503, 31, 'Erode'),
(504, 31, 'Kanchipuram'),
(505, 31, 'Kanyakumari'),
(506, 31, 'Karur'),
(507, 31, 'Krishnagiri'),
(508, 31, 'Madurai'),
(509, 31, 'Nagapattinam'),
(510, 31, 'Nilgiris'),
(511, 31, 'Namakkal'),
(512, 31, 'Perambalur'),
(513, 31, 'Pudukkottai'),
(514, 31, 'Ramanathapuram'),
(515, 31, 'Salem'),
(516, 31, 'Sivaganga'),
(517, 31, 'Tirupur'),
(518, 31, 'Tiruchirappalli'),
(519, 31, 'Theni'),
(520, 31, 'Tirunelveli'),
(521, 31, 'Thanjavur'),
(522, 31, 'Thoothukudi'),
(523, 31, 'Tiruvallur'),
(524, 31, 'Tiruvarur'),
(525, 31, 'Tiruvannamalai'),
(526, 31, 'Vellore'),
(527, 31, 'Viluppuram'),
(528, 31, 'Virudhunagar'),
(529, 32, 'Adilabad'),
(530, 32, 'Hyderabad'),
(531, 32, 'Karimnagar'),
(532, 32, 'Khammam'),
(533, 32, 'Mahbubnagar'),
(534, 32, 'Medak'),
(535, 32, 'Nalgonda'),
(536, 32, 'Nizamabad'),
(537, 32, 'Ranga Reddy'),
(538, 32, 'Warangal'),
(539, 33, 'Dhalai'),
(540, 33, 'North Tripura'),
(541, 33, 'South Tripura'),
(542, 33, 'Khowai'),
(543, 33, 'West Tripura'),
(544, 35, 'Agra'),
(545, 35, 'Aligarh'),
(546, 35, 'Allahabad'),
(547, 35, 'Ambedkar Nagar'),
(548, 35, 'Auraiya'),
(549, 35, 'Azamgarh'),
(550, 35, 'Bagpat'),
(551, 35, 'Bahraich'),
(552, 35, 'Ballia'),
(553, 35, 'Balrampur'),
(554, 35, 'Banda'),
(555, 35, 'Barabanki'),
(556, 35, 'Bareilly'),
(557, 35, 'Basti'),
(558, 35, 'Bijnor'),
(559, 35, 'Budau'),
(560, 35, 'Bulandshahr'),
(561, 35, 'Chandauli'),
(562, 35, 'Amethi (Chhatrapati Shahuji Maharaj Nagar)'),
(563, 35, 'Chitrakoot'),
(564, 35, 'Deoria'),
(565, 35, 'Etah'),
(566, 35, 'Etawah'),
(567, 35, 'Faizabad'),
(568, 35, 'Farrukhabad'),
(569, 35, 'Fatehpur'),
(570, 35, 'Firozabad'),
(571, 35, 'Gautam Buddh Nagar'),
(572, 35, 'Ghaziabad'),
(573, 35, 'Ghazipur'),
(574, 35, 'Gonda'),
(575, 35, 'Gorakhpur'),
(576, 35, 'Hamirpur'),
(577, 35, 'Hardoi'),
(578, 35, 'Hathras (Mahamaya Nagar);'),
(579, 35, 'Jalau'),
(580, 35, 'Jaunpur'),
(581, 35, 'Jhansi'),
(582, 35, 'Jyotiba Phule Nagar'),
(583, 35, 'Kannauj'),
(584, 35, 'Kanpur Dehat (Ramabai Nagar);'),
(585, 35, 'Kanpur Nagar'),
(586, 35, 'Kanshi Ram Nagar'),
(587, 35, 'Kaushambi'),
(588, 35, 'Kushinagar'),
(589, 35, 'Lakhimpur Kheri'),
(590, 35, 'Lalitpur'),
(591, 35, 'Lucknow'),
(592, 35, 'Maharajganj'),
(593, 35, 'Mahoba'),
(594, 35, 'Mainpuri'),
(595, 35, 'Mathura'),
(596, 35, 'Mau'),
(597, 35, 'Meerut'),
(598, 35, 'Mirzapur'),
(599, 35, 'Moradabad'),
(600, 35, 'Muzaffarnagar'),
(601, 35, 'Panchsheel Nagar (Hapur);'),
(602, 35, 'Pilibhit'),
(603, 35, 'Pratapgarh'),
(604, 35, 'Raebareli'),
(605, 35, 'Rampur'),
(606, 35, 'Saharanpur'),
(607, 35, 'Sambhal(Bheem Nagar);'),
(608, 35, 'Sant Kabir Nagar'),
(609, 35, 'Sant Ravidas Nagar'),
(610, 35, 'Shahjahanpur'),
(611, 35, 'Shamli'),
(612, 35, 'Shravasti'),
(613, 35, 'Siddharthnagar'),
(614, 35, 'Sitapur'),
(615, 35, 'Sonbhadra'),
(616, 35, 'Sultanpur'),
(617, 35, 'Unnao'),
(618, 35, 'Varanasi'),
(619, 34, 'Almora'),
(620, 34, 'Bageshwar'),
(621, 34, 'Chamoli'),
(622, 34, 'Champawat'),
(623, 34, 'Dehradu'),
(624, 34, 'Haridwar'),
(625, 34, 'Nainital'),
(626, 34, 'Pauri Garhwal'),
(627, 34, 'Pithoragarh'),
(628, 34, 'Rudraprayag'),
(629, 34, 'Tehri Garhwal'),
(630, 34, 'Udham Singh Nagar'),
(631, 34, 'Uttarkashi'),
(632, 36, 'Bankura'),
(633, 36, 'Bardhama'),
(634, 36, 'Birbhum'),
(635, 36, 'Cooch Behar'),
(636, 36, 'Dakshin Dinajpur'),
(637, 36, 'Darjeeling'),
(638, 36, 'Hooghly'),
(639, 36, 'Howrah'),
(640, 36, 'Jalpaiguri'),
(641, 36, 'Kolkata'),
(642, 36, 'Maldah'),
(643, 36, 'Murshidabad'),
(644, 36, 'Nadia'),
(645, 36, 'North 24 Parganas'),
(646, 36, 'Paschim Medinipur'),
(647, 36, 'Purba Medinipur'),
(648, 36, 'Purulia'),
(649, 36, 'South 24 Parganas'),
(650, 36, 'Uttar Dinajpur');

-- --------------------------------------------------------

--
-- Table structure for table `hos_data`
--

CREATE TABLE IF NOT EXISTS `hos_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nme` varchar(150) NOT NULL,
  `cont` varchar(150) NOT NULL,
  `addr` varchar(150) NOT NULL,
  `la` float NOT NULL,
  `lo` float NOT NULL,
  `em` varchar(150) NOT NULL,
  `pas` varchar(150) NOT NULL,
  `ph` varchar(150) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `hos_data`
--

INSERT INTO `hos_data` (`id`, `nme`, `cont`, `addr`, `la`, `lo`, `em`, `pas`, `ph`, `st`) VALUES
(1, 'Haven  Pet Shop', '7895461235', 'Pulimoodu Junction, Santhi Nagar, Pulimoodu, Thiruvananthapuram, Kerala', 8.49558, 76.9477, 'ha@gmail.com', '123', '22.jpg', 1),
(2, 'Cats & Dogs pet Shop', '7897896543', 'East Fort, Pavithra Nagar, East Fort, Pazhavangadi, Thiruvananthapuram, Kerala, India', 8.48946, 76.9472, 'cd@gmail.com', '123', '11.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE IF NOT EXISTS `msg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `msg` text NOT NULL,
  `dt` date NOT NULL,
  `typ` varchar(150) NOT NULL,
  `uid` varchar(150) NOT NULL,
  `cid` varchar(150) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `msg`
--

INSERT INTO `msg` (`id`, `msg`, `dt`, `typ`, `uid`, `cid`, `st`) VALUES
(9, 'hellooo', '2022-08-29', 'pat', 'ma@gmail.com', '555850', 0),
(10, 'hi', '2022-08-29', 'doc', 'ha@gmail.com', '555850', 0),
(11, 'hi', '2022-08-29', 'doc', 'ha@gmail.com', '555850', 0),
(12, 'hi', '2022-08-29', 'doc', 'ha@gmail.com', '555850', 0),
(13, 'helloo', '2025-05-27', 'pat', 'ma@gmail.com', '540386', 0),
(14, 'hey', '2025-05-27', 'doc', 'ak@gmail.com', '540386', 0),
(15, 'My cat is very mischeif', '2025-06-06', 'pat', 'ma@gmail.com', '605068', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pic_db`
--

CREATE TABLE IF NOT EXISTS `pic_db` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nme` varchar(150) NOT NULL,
  `ct` varchar(150) NOT NULL,
  `ct1` varchar(150) NOT NULL,
  `loc` text NOT NULL,
  `des` text NOT NULL,
  `typ` varchar(150) NOT NULL,
  `siz` varchar(150) NOT NULL,
  `ph` varchar(150) NOT NULL,
  `uid` varchar(150) NOT NULL,
  `dt` date NOT NULL,
  `tm` varchar(150) NOT NULL,
  `st` int(11) NOT NULL,
  `prc` varchar(150) NOT NULL,
  `age` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `pic_db`
--

INSERT INTO `pic_db` (`id`, `nme`, `ct`, `ct1`, `loc`, `des`, `typ`, `siz`, `ph`, `uid`, `dt`, `tm`, `st`, `prc`, `age`) VALUES
(1, 'Husky', '2', 'Siberian Husky', 'Male', 'Despite a large and sometimes intimidating appearance, German Shepherds are often gentle, intelligent dogs with a reputation for being hard working and loyal pets. The German Shepherdâ€™s high level of intelligence, curious nature and keen senses make them a popular guard dog, and theyâ€™re known to be highly protective of their family and territory.', 'image/jpeg', '263763', '5564544.jpg', 'ha@gmail.com', '2022-06-14', '21:53:33pm', 0, '45000', '1 Year'),
(2, 'Brown Persian Cat', '1', 'Persian Cats', 'Female', 'Known for their gentle, laid-back personalities, sweet faces and round eyes, Persian cats are affectionate, quiet, beautiful creatures of habit, making them the most popular breed among cat fanciers.\r\n\r\nPersian cats are not only the most popular breed of cats, theyâ€™ve also been around the longest. In fact, hieroglyphics reference their origination as far back a 1684 B.C. Thought to have originated in Persia (now Iran), the cats were named after their believed â€œcountry of origin.â€ Although the breed has evolved over time in color and body type, one thing has remained the same: its thick and full fur. Ideally, Persians should be groomed at least once a day to prevent knots and matting of the fur. Persians should also be bathed occasionally to maintain a clean and healthy coat.', 'image/jpeg', '171085', '8754150.jpg', 'ha@gmail.com', '2022-06-14', '22:03:10pm', 0, '1000', '6 months'),
(3, 'German Shepherd', '2', 'German Shepherd', 'Male', 'Despite a large and sometimes intimidating appearance, German Shepherds are often gentle, intelligent dogs with a reputation for being hard working and loyal pets. The German Shepherdâ€™s high level of intelligence, curious nature and keen senses make them a popular guard dog, and theyâ€™re known to be highly protective of their family and territory.', 'image/jpeg', '528964', '3451873.jpg', 'ha@gmail.com', '2022-06-14', '22:13:29pm', 0, '4000', '1 Year'),
(4, 'PersianCat', '1', 'Persian Cats', 'Male', 'Young Persian cat', 'image/jpeg', '127387', '1967620.jpg', 'safe@gmail.com', '2023-10-27', '11:14:07am', 0, '10000', '1 Month');

-- --------------------------------------------------------

--
-- Table structure for table `shl_data`
--

CREATE TABLE IF NOT EXISTS `shl_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nme` varchar(150) NOT NULL,
  `cont` varchar(150) NOT NULL,
  `addr` varchar(150) NOT NULL,
  `la` float NOT NULL,
  `lo` float NOT NULL,
  `em` varchar(150) NOT NULL,
  `pas` varchar(150) NOT NULL,
  `ph` varchar(150) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `shl_data`
--

INSERT INTO `shl_data` (`id`, `nme`, `cont`, `addr`, `la`, `lo`, `em`, `pas`, `ph`, `st`) VALUES
(1, 'Safe Pet Shelter', '7895463215', 'Pulimoodu Junction, Santhi Nagar, Pulimoodu, Thiruvananthapuram, Kerala', 8.49658, 76.947, 'safe@gmail.com', '123', '35471801.jpg', 1),
(2, 'Haven Pet Shelter', '7897897854', 'East Fort, Pavithra Nagar, East Fort, Pazhavangadi, Thiruvananthapuram, Kerala, India', 8.48572, 76.9457, 'hp@gmail.com', '123', '61270446.jpeg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `spec`
--

CREATE TABLE IF NOT EXISTS `spec` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nme` varchar(150) NOT NULL,
  `uid` varchar(150) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `spec`
--

INSERT INTO `spec` (`id`, `nme`, `uid`, `st`) VALUES
(5, 'Cats', 'ak@gmail.com', 0),
(6, 'Dogs', 'ak@gmail.com', 0),
(7, 'Cats', 'ha@gmail.com', 0),
(8, 'Dogs', 'ha@gmail.com', 0),
(9, 'Lovebirds', 'ha@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `srv`
--

CREATE TABLE IF NOT EXISTS `srv` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nme` varchar(150) NOT NULL,
  `hid` varchar(150) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `srv`
--

INSERT INTO `srv` (`id`, `nme`, `hid`, `st`) VALUES
(1, 'Grooming', 'ha@gmail.com', 0),
(2, 'Vaccination', 'ha@gmail.com', 0),
(3, 'Medicine', 'ha@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nme` varchar(150) NOT NULL,
  `cont` varchar(150) NOT NULL,
  `em` varchar(150) NOT NULL,
  `pass` varchar(150) NOT NULL,
  `ph` varchar(150) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `nme`, `cont`, `em`, `pass`, `ph`, `st`) VALUES
(1, 'Trivandrum Animal Insurance', '7896543215', 'tvm@gmail.com', '123', 'Thiruvananthapuram', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sub_cate`
--

CREATE TABLE IF NOT EXISTS `sub_cate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` varchar(150) NOT NULL,
  `nme` varchar(150) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `sub_cate`
--

INSERT INTO `sub_cate` (`id`, `cid`, `nme`, `st`) VALUES
(1, '1', 'Persian Cats', 0),
(2, '1', 'British Shorthair', 0),
(3, '1', 'Ragdoll Cats', 0),
(4, '1', 'Maine Coon Cats', 0),
(5, '1', 'Abyssinian Cats', 0),
(6, '2', 'German Shepherd', 0),
(7, '2', 'Golden Retriever', 0),
(8, '2', 'Bulldog', 0),
(9, '2', 'Rottweiler', 0),
(10, '2', 'Siberian Husky', 0);

-- --------------------------------------------------------

--
-- Table structure for table `s_post`
--

CREATE TABLE IF NOT EXISTS `s_post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dis` varchar(150) NOT NULL,
  `tit` varchar(150) NOT NULL,
  `desc` text NOT NULL,
  `in_id` varchar(150) NOT NULL,
  `cate` varchar(150) NOT NULL,
  `ph` varchar(150) NOT NULL,
  `uid` varchar(150) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `s_post`
--

INSERT INTO `s_post` (`id`, `dis`, `tit`, `desc`, `in_id`, `cate`, `ph`, `uid`, `st`) VALUES
(4, 'Thiruvananthapuram', 'Husky', 'i need 1 year insurance for my pet', 'INC-554998', 'Cats', '449557.docx', 'ma@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tr_data`
--

CREATE TABLE IF NOT EXISTS `tr_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nme` varchar(150) NOT NULL,
  `exp` varchar(150) NOT NULL,
  `cont` varchar(150) NOT NULL,
  `addr` varchar(150) NOT NULL,
  `em` varchar(150) NOT NULL,
  `pas` varchar(150) NOT NULL,
  `ph` varchar(150) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tr_data`
--

INSERT INTO `tr_data` (`id`, `nme`, `exp`, `cont`, `addr`, `em`, `pas`, `ph`, `st`) VALUES
(1, 'Ajay Kumar', '2 Years', '7894653125', 'Mannanthala, Thiruvananthapuram, Kerala, India', 'ak@gmail.com', '123', '307366.jpg', 0),
(2, 'Neena N', '1 Year', '7896543126', 'Pulimoode junction,Trivandrum kerala', 'nn@gmail.com', '123', '383776.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tut`
--

CREATE TABLE IF NOT EXISTS `tut` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tit` varchar(150) NOT NULL,
  `cate` varchar(150) NOT NULL,
  `lin` text NOT NULL,
  `dt` date NOT NULL,
  `uid` varchar(150) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tut`
--

INSERT INTO `tut` (`id`, `tit`, `cate`, `lin`, `dt`, `uid`, `st`) VALUES
(2, 'Dog Training Tips', '2', '<iframe width="683" height="384" src="https://www.youtube.com/embed/1oDGa2yPb2g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>', '2022-06-15', 'ak@gmail.com', 0),
(3, '5 Cat tricks', '1', '<iframe width="683" height="384" src="https://www.youtube.com/embed/2h9VqeC6n50" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>', '2022-06-15', 'ak@gmail.com', 0),
(4, 'Worst Cat Mistake', '1', '<iframe width="683" height="384" src="https://www.youtube.com/embed/y-DQKFiaxzE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>', '2022-06-15', 'ak@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_log`
--

CREATE TABLE IF NOT EXISTS `user_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `utyp` varchar(15) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `user_log`
--

INSERT INTO `user_log` (`id`, `uid`, `pwd`, `utyp`, `st`) VALUES
(1, 'admin@gmail.com', 'admin', 'admin', 1),
(5, 'tvm@gmail.com', '123', 'staff', 1),
(6, 'ak@gmail.com', '123', 'trainer', 1),
(7, 'nn@gmail.com', '123', 'trainer', 1),
(8, 'ma@gmail.com', '123', 'user', 1),
(9, 'ha@gmail.com', '123', 'shop', 1),
(10, 'cd@gmail.com', '123', 'shop', 1),
(11, 'safe@gmail.com', '123', 'shl', 1),
(12, 'hp@gmail.com', '123', 'shl', 1);

-- --------------------------------------------------------

--
-- Table structure for table `usr_data`
--

CREATE TABLE IF NOT EXISTS `usr_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nme` varchar(150) NOT NULL,
  `cont` varchar(150) NOT NULL,
  `addr` varchar(150) NOT NULL,
  `em` varchar(150) NOT NULL,
  `pas` varchar(150) NOT NULL,
  `ph` varchar(150) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `usr_data`
--

INSERT INTO `usr_data` (`id`, `nme`, `cont`, `addr`, `em`, `pas`, `ph`, `st`) VALUES
(1, 'Manu Krishna', '7896543215', 'East fort Trivandrum', 'ma@gmail.com', '123', '826992.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vac`
--

CREATE TABLE IF NOT EXISTS `vac` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tit` varchar(150) NOT NULL,
  `des` text NOT NULL,
  `dt` date NOT NULL,
  `pid` varchar(150) NOT NULL,
  `hid` varchar(150) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `vac`
--

INSERT INTO `vac` (`id`, `tit`, `des`, `dt`, `pid`, `hid`, `st`) VALUES
(3, 'Everything You Must Know About Vaccinating Your Dog', '<p>Dog vaccinations play a critical role in protecting your&nbsp;dog from many dangerous and even fatal diseases. While state law requires all dogs are vaccinated for rabies, there are a number of other vaccinations that can protect your dog from serious diseases that are easily preventable.</p>\r\n\r\n<p>At Indian Trail Animal Hospital we have spent decades educating people about the benefits of dog vaccinations. This includes what vaccines are necessary and how they should be scheduled. Over the years we have been asked every question possible about dog vaccinations and we have compiled some of the most frequently asked ones for you here. This is only meant to be a general introduction dog vaccinations. At your dog&#39;s next veterinary appointment, we will be happy to help you understand the vaccination recommendations for your dog.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>What Are Dog Vaccines And Why Are They Important?</h2>\r\n\r\n<p>Vaccines help prepare a dog&#39;s immune system to defend itself from any invasion of disease-causing organisms. Vaccines contain antigens, which mimic disease-causing organisms in a dog&#39;s immune system, but don&#39;t actually cause disease. The purpose of puppy vaccines and dog vaccines is to mildly stimulate the immune system by having it recognize the antigens present. This way, if a dog becomes exposed to the real disease, it&#39;s immune system will recognize it, and therefore be prepared to fight it off, or at the least reduce its effects.</p>\r\n\r\n<h2>What Are The Core Dog Vaccinations?</h2>\r\n\r\n<p>Core puppy vaccinations and dog vaccinations are considered vital to all canines based on a universal risk of exposure, the severity of disease, and the risk of transmission to other dogs, as well as other animal species including human beings.</p>\r\n\r\n<p>The American Animal Hospital Association&#39;s Canine Task Force considers the following dog vaccinations to be core:</p>\r\n\r\n<ul>\r\n	<li>Canine Parvovirus</li>\r\n	<li>Canine Distemper</li>\r\n	<li>Hepatitis</li>\r\n	<li>Rabies</li>\r\n	<li>Leptospirosis</li>\r\n</ul>\r\n\r\n<p>Non core - vaccines include</p>\r\n\r\n<ul>\r\n	<li>Bordetella</li>\r\n	<li>Canine Influenza (dog flu)</li>\r\n	<li>Lyme vaccine</li>\r\n</ul>\r\n\r\n<p>Although these vaccines are not considered Core, they are very important for most dogs who may be exposed to these infectious diseases. At your dog&#39;s next appointment, we will be happy to review which of the above make the most sense for your dog and make the appropriate recommendations.</p>\r\n\r\n<p>Rabies vaccinations are required by law in most states, including NC. Owners must periodically have their dogs and puppies vaccinated against rabies, but the specific time frames for puppy vaccinations and dog vaccinations vary by state. In NC, puppy rabies vaccine is generally given at 16 weeks ( no earlier than week 12), and the rabies vaccination is good for one year. For adult dogs, the rabies vaccination is good for three years and should be addressed at the time of the first visit for new patients. For example, a puppy would receive the rabies vaccine at 16 weeks, 1 year and then again at age 4.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Are There Optional Dog Vaccines?</h2>\r\n\r\n<p>Although puppy vaccines and dog vaccinations are very important to the overall health and wellness of your canine companion, not every puppy or dog needs to be vaccinated against every disease. Some canine vaccinations should only be administered depending upon factors including:</p>\r\n\r\n<ul>\r\n	<li>Age</li>\r\n	<li>Medical history</li>\r\n	<li>Environment</li>\r\n	<li>Travel habits</li>\r\n	<li>Lifestyle</li>\r\n</ul>\r\n\r\n<p>Therefore, it is very important for us to discuss the vaccination protocol that&#39;s right for your canine companion at your next appointment.</p>\r\n\r\n<h2>When To Start Puppy Vaccinations</h2>\r\n\r\n<p>In general,&nbsp;<a href="https://www.indiantrailanimalhospital.com/services/dogs/puppy-care">a puppy</a>&nbsp;should start vaccines as soon as you get the puppy (this is usually between 6 and 8 weeks) and then every three weeks until approximately four months of age when it will receive the final round. Generally, if the puppy&#39;s mother has a healthy immune system, it will most likely receive antibodies in the mother&#39;s milk while nursing. After a puppy has been weaned off of the mother&#39;s milk, vaccinations should begin.</p>\r\n\r\n<h2>Puppy Vaccination Schedule</h2>\r\n\r\n<p>We typically recommend the following vaccination schedule for puppies:</p>\r\n\r\n<ul>\r\n	<li>6-7 weeks: DHPP*, Bordetella</li>\r\n	<li>9-10 weeks: DHPP, Bordetella, Leptospirosis</li>\r\n	<li>12-13 weeks: DHPP, Leptospirosis, Canine Influenza**, Lyme Disease</li>\r\n	<li>15-17 weeks: DHPP, Rabies, Canine Influenza, Lyme Disease</li>\r\n</ul>\r\n\r\n<p><em>**Canine influenza and Lyme vaccinations are given depending on the lifestyle of the dog</em></p>\r\n\r\n<p><em>*DHPP - distemper, hepatitis, parvovirus, parainfluenza.</em></p>\r\n\r\n<p>It is important to stay current with your puppy vaccine schedule. Puppy vaccinations have been medically proven to combat many preventable diseases and illnesses that can occur without proper immunizations. Adhering to a puppy vaccine schedule is synonymous with responsible puppy care. Your puppy deserves every chance to be healthy and happy for life and vaccinations play an important role. Don&#39;t run the risk of your puppy contracting one of these terrible diseases, when they are so easily preventable.</p>\r\n\r\n<p><em>**Some puppies may need additional vaccinations against parvovirus after 15 weeks of age. Consult with the veterinarian at your next appointment.</em></p>\r\n\r\n<h2>Dog Vaccination Schedule</h2>\r\n\r\n<p>Once your puppy reaches adulthood, and all of the core puppy vaccines have been administered,&nbsp;<a href="https://www.indiantrailanimalhospital.com/">your veterinarian</a>&nbsp;can begin implementing an adult dog vaccination schedule. A dog vaccination schedule consists of periodic adult boosters*, which are combinations of the same type of DHPP vaccine administered to puppies, along with several other additions.</p>\r\n\r\n<p>When dogs come in for their first one year visit, we recommend boostering their DHPP, Leptospirosis, and Rabies vaccines as well as Canine Influenza and Lyme if the lifestyle of the dog requires these vaccines. If Kennel Cough (Bordetella) is due at this time, it should also be administered.</p>\r\n\r\n<h2>The Amount Of Time Each Vaccination Is Effective Is As Follows:</h2>\r\n\r\n<ul>\r\n	<li>DHPP - 3 years</li>\r\n	<li>Rabies - 3 years</li>\r\n	<li>Leptospirosis - 1 year</li>\r\n	<li>Canine Influenza - 1 year</li>\r\n	<li>Lyme Disease - 1 year</li>\r\n	<li>Bordetella (Kennel Cough) - 1 year</li>\r\n</ul>\r\n\r\n<h2>Side Effects And Risks Associated With Dog Vaccinations</h2>\r\n\r\n<p>The benefits of vaccinations far outweigh any risks. Adverse reactions to dog vaccines are rare. However, as with any medication or immunization protocol, puppy vaccinations and dog vaccinations can cause some side effects. We do recommend that you have your puppy or dog vaccinated at time when when you can monitor them after the vaccination.</p>\r\n\r\n<p>If your dog does experience any reaction to vaccinations, symptoms may include:</p>\r\n\r\n<ul>\r\n	<li>Fever</li>\r\n	<li>Sluggishness</li>\r\n	<li>Loss of appetite</li>\r\n	<li>Facial or paw swelling and/or hives</li>\r\n	<li>Vomiting</li>\r\n	<li>Diarrhea</li>\r\n	<li>Pain or swelling around the injection site</li>\r\n	<li>Collapse, difficulty breathing, and seizures (anaphylactic shock)</li>\r\n</ul>\r\n\r\n<p>Just as with human vaccines, mild symptoms can be ignored. The majority of reactions are mild and short lived. If you suspect a more severe reaction to puppy vaccines or dog vaccines, such as facial swelling, vomiting or lethargy, you should contact your veterinarian immediately.</p>\r\n\r\n<h2>Scheduling An Appointment For Dog Vaccinations</h2>\r\n\r\n<p>A puppy vaccination schedule should be established during your first veterinarian visit, which should take place within a week of receiving your new puppy. An adult dog vaccination schedule, which includes periodic booster immunizations, can be scheduled after the puppy vaccination schedule has been completed, or immediately upon welcoming an adolescent or adult dog into your family.</p>\r\n\r\n<p>As with any other immunization protocol, a dog vaccination schedule should be adhered to without deviation, in order to ensure your canine companion remains healthy, happy and well for the duration of his or her life. Schedule an appointment for your canine companion to receive their vaccinations today.</p>\r\n\r\n<h2><a href="https://www.indiantrailanimalhospital.com/forms/request-veterinary-appointment">Schedule An Appointment To Get Your Dog Vaccinated Today!</a></h2>\r\n\r\n<h3>Featured Quote:</h3>\r\n\r\n<p>So there are four core vaccines with dog vaccinations and then there are two lifestyle or what we would call non-core vaccinations.</p>\r\n\r\n<h3>Video Transcript:</h3>\r\n\r\n<p>Hi, this is Dr. Tabony with Indian Trail Animal Hospital. We&#39;re going to take just a few minutes today to talk about vaccinations and dogs. This is Sookie, Dr. Wolfe&#39;s dog. She&#39;s well protected with her vaccinations, and we want your pets to be too.</p>\r\n\r\n<p>So there are four core vaccines with dog vaccinations and then there are two lifestyle or what we would call non-core vaccinations. I&#39;ll run through those, but do know that we treat every patient as an individual at our practice, so while there are standards, there could be some variations depending on your pet&#39;s health and their needs.</p>\r\n\r\n<p>So for the core vaccines, first we&#39;ve got the distemper parvo. That is a combination vaccine, but distemper and parvo as a part of the combination are the most common diseases and most concerning diseases. Distemper is a neurologic condition that can be quite scary, and parvo virus is a gastrointestinal illness. So distemper parvo is a core vaccine. The frequency of that vaccination changes as the pet ages. In fact, in older pets we&#39;ll sometimes do tighter testing for distemper parvo if they&#39;ve had multiple throughout their lifetime they may still be protected even beyond the next three year recommendation.</p>\r\n\r\n<p>The second core vaccine is bordetella, also known as kennel cough. Common miscommunication and misinformation regarding that vaccine is about the need for it. In fact, every pet does need to be protected for kennel cough even if they&#39;re not boarding, grooming or around other animals a lot, because we certainly want to avoid any coughing difficulties at night when they contact that even from sniffing a blade of grass that an animal infected might have had the disease, and can transmit just from sniffing leaf to leaf and grass to grass. So bordetella, kennel cough, is your second core vaccine.</p>\r\n\r\n<p>The third core vaccine is rabies, of course, state law. We don&#39;t hear about rabies a lot in dogs these days, which is really a blessing, but it is still required and very important. It is interesting to note that the most common way that people and dogs in our area get rabies, and it happens in the county with pets every year, is from bats. Pets will be exposed to a bat bite and not even know it. So, even though it&#39;s not as much of a problem as it used to be, it is still a requirement and an important vaccine protection.</p>\r\n\r\n<p>The fourth vaccine requirement is leptospirosis. That is a bacteria that can cause liver or kidney disease. And is more frequently found in our area because of the construction that&#39;s here.</p>\r\n\r\n<p>The two non-core vaccines, again, lifestyle things that we&#39;ll discuss with you are Lyme, from tick-borne illness. Remember that Lyme ticks, even the adults are quite small, and the nymph ticks, the baby Lyme ticks, are so small that they&#39;re smaller than a poppy seed. So you would never find them, you wouldn&#39;t know if they&#39;re present. We&#39;ll discuss the importance and particular nature of the need of that vaccine with you at your visit.</p>\r\n\r\n<p>And then the other one is flu. So, little bit different than human flu, there are two types of dog flu. One in particular is more dangerous, but the vaccine contains both of them. If your dog is going to daycare, groom, pet sits with a pet sitter that&#39;s going in and out of homes and those types of situations, then your pet should have flu.</p>\r\n\r\n<p>If you have questions, we&#39;re more than happy to answer them. This is what we do every day is protect pets, work with individual families so they can do the best for their pets and we look forward to seeing you at your next visit. Thank you.</p>\r\n', '2022-07-25', '6', 'ha@gmail.com', 0),
(4, 'Cat Vaccination', '<h2>What Vaccines Do Cats Need?</h2>\r\n\r\n<p>The&nbsp;<a href="http://www.catvets.com/guidelines/practice-guidelines/feline-vaccination-guidelines" target="_blank">Feline Vaccination Advisory Panel</a>&nbsp;regularly evaluates and researches cat vaccination developments to make science-based recommendations.</p>\r\n\r\n<p>The panel is comprised of&nbsp;dedicated feline veterinarians and scientists and is regarded as a reputable source of cat vaccination standards.</p>\r\n\r\n<p>Their guidelines, published by the&nbsp;<a href="http://www.catvets.com/" target="_blank">American Association of Feline Practitioners</a>, are among the most trusted and utilized recommendations in the field.</p>\r\n\r\n<p>They divide cat vaccines into two categories:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Core vaccines</p>\r\n	</li>\r\n	<li>\r\n	<p>Noncore vaccines</p>\r\n	</li>\r\n</ul>\r\n\r\n<table align="center" border="1" cellpadding="1" cellspacing="1">\r\n	<thead>\r\n		<tr>\r\n			<th scope="col">\r\n			<h3>Age</h3>\r\n			</th>\r\n			<th scope="col">\r\n			<h3>Core Vaccines</h3>\r\n			</th>\r\n			<th scope="col">\r\n			<h3>Noncore Vaccines</h3>\r\n			</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><strong>6-8</strong></p>\r\n\r\n			<p><strong>weeks</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>FVRCP</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>FeLV*</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>10-12</strong></p>\r\n\r\n			<p><strong>weeks</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>FVRCP</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>FeLV*</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>14-16&nbsp;</strong></p>\r\n\r\n			<p><strong>weeks</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>FVRCP</strong></p>\r\n\r\n			<p><strong>Rabies</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>FeLV*</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>1-year booster</strong></p>\r\n\r\n			<p><strong>after initial series</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>FVRCP</strong></p>\r\n\r\n			<p><strong>Rabies</strong></p>\r\n			</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Annual</strong></p>\r\n\r\n			<p><strong>vaccines</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Rabies**</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>FeLV</strong></p>\r\n\r\n			<p><strong>Bordetella (can be administered</strong></p>\r\n\r\n			<p><strong>as early as 8 weeks)</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>3-year</strong></p>\r\n\r\n			<p><strong>vaccines</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>FVRCP</strong></p>\r\n\r\n			<p><strong>Rabies**</strong></p>\r\n			</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>* FeLV: highly recommended for kittens and optional for adult cats.</p>\r\n\r\n<p>** Rabies: 3-year vs 1-year vaccine depending on state laws.</p>\r\n\r\n<h2>Core Vaccines for Cats</h2>\r\n\r\n<p>Core vaccines are those recommended for all cats, no matter where they live or under what conditions.</p>\r\n\r\n<p>The four core vaccines for cats are:&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Rabies</p>\r\n	</li>\r\n	<li>\r\n	<p>FVRCP:</p>\r\n\r\n	<ul>\r\n		<li>\r\n		<p>Feline Rhinotracheitis Virus/Herpesvirus 1 (FVR/FHV-1)</p>\r\n		</li>\r\n		<li>\r\n		<p>Feline Calicivirus (FCV)</p>\r\n		</li>\r\n		<li>\r\n		<p>Feline Panleukopenia (FPV)</p>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n\r\n<p>These diseases are highly infectious and found worldwide. They are highly dangerous to young cats, and the vaccines are considered highly protective with minimal risk. This is why all cats should receive these core vaccines.</p>\r\n\r\n<h2>Rabies Vaccine</h2>\r\n\r\n<p><a href="https://www.petmd.com/cat/conditions/neurological/c_ct_rabies" target="_blank">Rabies</a>&nbsp;is significant not only for its effect on the cat but because it is a disease that is transmissible and fatal to humans.</p>\r\n\r\n<p>While cats are not natural carriers for the disease, they can be infected by a bite from any infected mammal and then pass it on to others. After an incubation stage averaging two months, clinical signs of aggression, disorientation and death rapidly progress.</p>\r\n\r\n<p>Rabies is endemic worldwide, and the vaccine is recommended for all pet cats.</p>\r\n\r\n<p>While the rabies vaccine is not listed as a core vaccine by the AAFP guidelines, it is required by law in most regions. Rabies is a zoonotic disease (it can be transmitted from animals to humans), so it is a public safety issue to keep your cat up to date on their rabies vaccine.</p>\r\n\r\n<h2>FVRCP Vaccine for Cats</h2>\r\n\r\n<p>The other three core vaccines are combined into a single three-in-one vaccine called the FVRCP vaccine. This allows veterinarians to efficiently administer the vaccines all at once, instead of having to inject a cat three separate times in one visit.</p>\r\n\r\n<h3>FPV Vaccine</h3>\r\n\r\n<p><a href="https://www.petmd.com/cat/conditions/infectious-parasitic/c_ct_feline_panleukopenia" target="_blank">Feline panleukopenia</a>, also known as&nbsp;feline parvovirus, is a highly infectious disease with a high mortality rate in kittens.</p>\r\n\r\n<p>While the disease usually starts with decreased energy and low appetite, it progresses to vomiting and diarrhea. The virus also kills off the white blood cells, leaving the young cats even more susceptible to secondary infections.</p>\r\n\r\n<h3>FHV-1 Vaccine</h3>\r\n\r\n<p><a href="https://www.petmd.com/cat/conditions/infectious-parasitic/c_ct_feline_rhinotracheitis" target="_blank">Feline herpesvirus</a>, also known as&nbsp;feline rhinotracheitis virus, causes severe signs of upper respiratory infection.</p>\r\n\r\n<p>Some symptoms you can expect to see include sneezing, nasal congestion and discharge, and&nbsp;<a href="https://www.petmd.com/cat/conditions/eyes/c_ct_conjunctivitis" target="_blank">conjunctivitis</a>. In some cases, it also causes oral ulceration and&nbsp;<a href="https://www.petmd.com/cat/conditions/respiratory/c_ct_pneumonia_interstitial?page=show" target="_blank">pneumonia</a>.</p>\r\n\r\n<p>After the cat recovers from the initial infection, the virus enters a latency period in the nerves. During times of stress, the virus can reactivate, and the cat can start to show signs of infection again&mdash;even if they have not been reexposed to the disease.</p>\r\n\r\n<h3>FCV Vaccine</h3>\r\n\r\n<p><a href="https://www.petmd.com/cat/conditions/infectious-parasitic/c_ct_feline_calicivirus" target="_blank">Feline calicivirus</a>&nbsp;encompasses a number of viral strains that cause signs of upper respiratory infection, such as sneezing and nasal discharge as well as oral ulcerations.</p>\r\n\r\n<p>FCV is thought to be associated with chronic&nbsp;<a href="https://www.petmd.com/cat/conditions/mouth/c_ct_gingivitis" target="_blank">gingivitis</a>/<a href="https://www.petmd.com/cat/conditions/mouth/c_ct_stomatitis" target="_blank">stomatitis</a>, a very painful inflammation of the gums and teeth. Some of the more virulent strains cause hair loss and crusting on other parts of the body as well as hepatitis and even death.</p>\r\n\r\n<h3>Frequency of Core Vaccinations</h3>\r\n\r\n<p>Kittens under 6 months of age are most susceptible to infectious diseases, so they are considered a primary focus of vaccination recommendations.</p>\r\n\r\n<p>Maternal antibodies passed on from the mother are meant to confer some degree of protection against diseases, but they also interfere with, or even inactivate, the body&rsquo;s response to vaccination.</p>\r\n\r\n<p>For this reason, initial core kitten vaccinations occur at three- to four-week intervals until the cat is 16-20 weeks old and maternal antibodies are out of the system.</p>\r\n\r\n<p>For any cat over 16 weeks old whose vaccine history is unknown, the initial series consists of two doses given three to four weeks apart.</p>\r\n\r\n<p>Core vaccines should be boosted one year after the initial series.</p>\r\n\r\n<p>The scientific community is still learning exactly how long these vaccines last. Currently, the recommendation for indoor/outdoor cats is to administer the FVRCP vaccine annually.</p>\r\n\r\n<p>For indoor-only cats, the recommendation is to administer the vaccine every three years. Cats heading into stressful situations, such as boarding, may benefit from a core vaccine booster 7-10 days before.</p>\r\n\r\n<h2>Noncore Vaccines for Cats</h2>\r\n\r\n<p>Vaccines that are appropriate for some cats in some circumstances are considered noncore vaccines (or lifestyle vaccines).</p>\r\n\r\n<p>The noncore vaccines include:&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Feline leukemia virus&nbsp;(FeLV)&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p><a href="https://catvets.com/public/PDFs/PracticeGuidelines/Guidelines/Vaccination/ChlamydophilaFelis_FactSheet.pdf" target="_blank"><em>Chlamydophila felis&nbsp;</em></a></p>\r\n	</li>\r\n	<li>\r\n	<p><a href="https://www.petmd.com/cat/conditions/respiratory/c_ct_bordetellosis" target="_blank"><em>Bordetella bronchiseptica</em></a>&nbsp;</p>\r\n	</li>\r\n</ul>\r\n\r\n<h3>FeLV Vaccine</h3>\r\n\r\n<p>The FeLV vaccine works to protect your cat against&nbsp;<a href="https://www.petmd.com/cat/conditions/infectious-parasitic/c_ct_feline_leukemia" target="_blank">feline leukemia virus</a>. While it is listed as a noncore vaccine, it is a little more complicated than that.</p>\r\n\r\n<p>FeLV is found worldwide. Transmitted through body fluids including saliva, urine and feces, FeLV is spread when an infected cat comes into close contact with another cat that they groom or share bowls with.</p>\r\n\r\n<p>Infection with FeLV is not an automatic death sentence. Many cats are fortunate to go into a regressive state and appear perfectly healthy throughout their lives, but some do not.</p>\r\n\r\n<p>After a latent period lasting months or even years, the disease progresses to a variety of associated conditions:&nbsp;<a href="https://www.petmd.com/cat/conditions/cancer/c_ct_lymphoma">lymphoma</a>, anemia or immunosuppression resulting in secondary disease.</p>\r\n\r\n<p>The FeLV vaccine is recommended as core for kittens. The initial vaccination series consists of two doses three to four weeks apart, followed by revaccination one year later for all pet cats.</p>\r\n\r\n<p>However, based on most recent data, the Vaccine Advisory Panel recommends that subsequent vaccines may be administered based on risk: yearly for high-risk cats and every two years for lower risk cats.</p>\r\n\r\n<p>Your veterinarian can assess your cat&rsquo;s risk of FeLV infection and decide on an appropriate vaccination schedule.</p>\r\n\r\n<h2>What About Adverse Events?</h2>\r\n\r\n<p>No injection or medication is without some degree of risk, but we continue to vaccinate because, in most cases, it is much smaller than the risk of the disease itself.</p>\r\n\r\n<p>The overall incidence of adverse reactions in cats is reported to be about half of 1 percent and usually mild and self-limiting. Common side effects include lethargy, transient fever and local inflammation.</p>\r\n\r\n<p>Anaphylaxis and death are, fortunately, extremely rare: about one in every 10,000 vaccines.</p>\r\n\r\n<p>A vaccine-associated sarcoma is a slow-growing but locally aggressive cancerous mass that develops at vaccine injection sites. Sarcomas occur with about the same rare frequency as anaphylactic reactions.</p>\r\n\r\n<p>For cats without a history of vaccine reactions, the risk of sarcomas is usually outweighed by the benefit of the core vaccines.</p>\r\n\r\n<p>Pet owners can minimize the impact of sarcomas by monitoring injection sites for swelling after vaccinations. Swellings should be biopsied if they are larger than 2 centimeters, persist longer than three months, or grow one month past the date of vaccination. When sarcomas are addressed early, surgery is often curative.</p>\r\n\r\n<h2>Your Veterinarian Can Determine Your Cat&rsquo;s Vaccination Schedule</h2>\r\n\r\n<p>Many factors affect the likelihood of a cat developing an infectious disease, which is why a thorough medical history is essential to determining each cat&rsquo;s recommended care.</p>\r\n\r\n<p>The factors that your veterinarian will consider to determine your&nbsp;<a href="https://www.petmd.com/cat/infographic/basic-vaccine-schedule-cats" target="_blank">cat&rsquo;s vaccination schedule&nbsp;</a>include:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Age</p>\r\n	</li>\r\n	<li>\r\n	<p>Medical history</p>\r\n	</li>\r\n	<li>\r\n	<p>Vaccination history</p>\r\n	</li>\r\n	<li>\r\n	<p>How likely they are to be exposed to a pathogen</p>\r\n	</li>\r\n	<li>\r\n	<p>Severity of disease caused by a pathogen</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>If the benefit to the cat is greater than the likelihood of a bad reaction, the cat should be vaccinated.</p>\r\n\r\n<p>With these recommendations as a starting point, you can discuss your cat&rsquo;s lifestyle and risk factors with your veterinarian to determine an optimal, individualized vaccination protocol.</p>\r\n', '2022-08-27', '4', 'ha@gmail.com', 0),
(5, 'Cat Vaccination', '<p>The importance of vaccinations to the overall health and longevity of your cat cannot be understated. Cat vaccines are medically and scientifically proven to combat the incubation and transmission of crippling and fatal feline diseases. Our&nbsp;<a href="https://www.rauanimalhospital.com/">veterinary staff</a>&nbsp;is dedicated to educating pet parents about the importance of cat vaccinations, including what cat vaccines are necessary, and when they should be scheduled.</p>\r\n\r\n<p>It is important to note that our doctors don&#39;t follow a &#39;one size fits all&#39; protocol for immunizations, but rather treat each patient as an individual and recommend the best possible protocols for that particular cat by looking at their risk factors such as age, overall health and lifestyle.</p>\r\n\r\n<p>Over the years we have fielded many questions about cat vaccinations from concerned kitten and cat owners. Here, we have compiled some of the most frequently asked questions to help you better understand the issues surrounding cat vaccinations. This is only meant to be a general introduction to cat vaccinations, so please consult with one of our veterinarians during your next visit for specific information regarding&nbsp;<a href="https://www.rauanimalhospital.com/services/cats/kitten-care">kitten vaccinations</a>&nbsp;or cat vaccinations where your feline is concerned.</p>\r\n\r\n<h2>Are Kitten Vaccinations And Cat Vaccinations Necessary?</h2>\r\n\r\n<p>The answer is yes. A kitten or cat owner is responsible for the wellbeing of their feline friend this includes happiness and longevity of life. Cat vaccinations are an integral component in the longevity equation. Kitten vaccinations and cat vaccinations are medically and scientifically proven to prevent various insidious diseases.</p>\r\n\r\n<h2>Are Cat Vaccinations Required By Law?</h2>\r\n\r\n<p>Rabies is the only cat vaccination required by law in the state of Pennsylvania. This is due primarily to the threat rabies poses to human beings, and the speed at which rabies can spread. Although other cat and kitten vaccinations are not legally required by law, they are important to&nbsp;protect your cat from serious disease.</p>\r\n\r\n<h2>What Cat Vaccines Are Recommended?</h2>\r\n\r\n<p>The American Association of Feline Practitioners has determined what vaccinations should be administered for cats. You should discuss what vaccinations are necessary for your cat at your next visit. However, the following vaccinations are commonly recommended:</p>\r\n\r\n<h2>Cat Vaccines</h2>\r\n\r\n<ul>\r\n	<li>FVRCP (Also called &ldquo;the feline distemper vaccine&rdquo;; which protects against three feline viruses: rhinotracheitis, calicivirus and panleukopenia.)</li>\r\n	<li>Rabies</li>\r\n	<li>Feline Leukemia</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>What Are The Recommended Kitten And Cat Vaccination Schedules?</h2>\r\n\r\n<p>Kitten vaccinations and cat vaccinations are dependent upon several factors, including preexisting medical conditions and indoor or outdoor living situations. You should always discuss these factors with a veterinarian to determine what your cat vaccine schedule should be. However, we have listed an approximate cat vaccine schedule here for an &Ocirc;average&#39; indoor housecat to give you an idea of a cat vaccination timeline:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Kitten Vaccinations</h2>\r\n\r\n<ul>\r\n	<li><strong>6-10 Weeks Old:</strong>&nbsp;FVRCP (feline distemper)</li>\r\n	<li><strong>11-14 Weeks Old:</strong>&nbsp;FVRCP (feline distemper), FeLV (feline leukemia)</li>\r\n	<li><strong>15+ Weeks Old:</strong>&nbsp;FVRCP (feline distemper), FeLV (feline leukemia), rabies vaccine</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Adult Cat Vaccinations</h2>\r\n\r\n<p>Vaccines are given to your cat one year after the end of the kitten series. Combination Vaccine FVRCP, or feline distemper, FeLV for felines at risk of exposure to feline leukemia virus (cats that are unsupervised outdoors), and rabies annually as required by law.</p>\r\n\r\n<p><em>*A combination vaccine includes feline distemper, rhinotracheitis, and calicivirus.</em></p>\r\n\r\n<p><em>**According to the American Veterinary Medical Association and the American Association of Feline Practitioners, cats at low risk of disease exposure may not need to be boostered yearly for most diseases. Consult with the veterinarian at your next visit to determine the appropriate vaccination schedule for your cat. Remember, recommendations vary depending on the age, breed, and health status of the cat, the potential of the cat to be exposed to the disease, the type of vaccine, whether the cat is used for breeding, and the geographical area where the cat lives or may visit.</em></p>\r\n\r\n<h2>Are There Risks Associated With Cat Vaccinations?</h2>\r\n\r\n<p>Cat vaccinations stimulate your kitten or cat&#39;s immune system in order to create protection from specific infectious diseases. This can cause mild symptoms to occur ranging from soreness at the injection site to fever and allergic reactions. Cat vaccinations can cause other risks like injection site tumors and immune disease, however such incidences are extremely rare and can be linked to pre-existing genetic and medical conditions. Because of the potential for injection site reactions, we give each vaccine in a specific location that is noted in the cat&#39;s medical record.</p>\r\n\r\n<p>The fact is, the rewards of cat vaccinations far outweigh any risks. Cat vaccines have saved countless lives and play a vital role in the battle against&nbsp;<a href="https://www.rauanimalhospital.com/services/cats/illness-disease">feline infectious disease</a>. As with any medical procedure, there is a small chance of negative side effects. In most cases, the risks are much smaller than the risks of disease itself.</p>\r\n\r\n<h2>Are There Any Side Effects I Should Watch For After Cat Vaccination?</h2>\r\n\r\n<p>Most cats show no ill side effect from receiving a cat vaccine. If your cat does have a reaction, they are usually minor and short-lived. However, you should still be on the lookout for the following symptoms that might indicate negative side effects from a cat vaccine:</p>\r\n\r\n<ul>\r\n	<li>Fever</li>\r\n	<li>Severe lethargy</li>\r\n	<li>Loss of appetite</li>\r\n	<li>Vomiting</li>\r\n	<li>Diarrhea</li>\r\n	<li>Swelling and redness around the injection site</li>\r\n	<li>Lameness</li>\r\n	<li>Hives</li>\r\n</ul>\r\n\r\n<p>If you suspect your cat is experiencing any ill side effects from his or her cat vaccine, call us immediately so we can help you to determine whether any special care is needed.</p>\r\n\r\n<h2>When Should I Schedule Kitten Vaccinations And Cat Vaccinations?</h2>\r\n\r\n<p>You should schedule your kitten vaccinations as soon as you get your new kitten. Regardless of the age, your new kitten should be seen by a veterinarian as soon as possible. It is important to get a preventive health care plan in place including vaccinations, de worming and flea control. In addition, we will spend time discussing behavioral training to make sure your kitten develops good behaviors and becomes a great pet.</p>\r\n\r\n<p>Plan on spending at least thirty minutes at your first visit. This is a great time to get all your questions answered on kitten care and discuss the recommended preventive program with our veterinary team.</p>\r\n\r\n<p>An adult cat vaccination schedule, which includes periodic booster immunizations, will be scheduled one year after the kitten vaccination schedule has been completed.</p>\r\n\r\n<p>As with any other immunization protocol, a cat vaccination schedule should be followed with little to no inconsistency, in order to ensure your cat remains healthy and well for the duration of his or her life. We cannot control all health issues but we can prevent the majority of infectious disease with the proper vaccine schedule.</p>\r\n', '2023-10-26', '7', 'ha@gmail.com', 0),
(6, 'Dog Vccination', '<p>Recent advances in veterinary medical science have resulted in an increase in vaccines available for dogs. Improvements are continuously being made in vaccine safety and effectiveness. Veterinarians routinely recommend certain vaccines for all dogs (calledâ€¯core vaccines), while others (calledâ€¯non-core vaccines) are used more selectively according to the dog&rsquo;s environment and lifestyle.</p>\r\n\r\n<p>In all cases, decisions regarding the vaccine types and vaccine schedules that are best for each dog require professional advice.</p>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<h3>What is a vaccine?</h3>\r\n\r\n<p>A vaccine is a preparation of either killed or altered microorganisms that is administered into the body. The vaccine stimulates the immune system to learn how to fight the microorganism so that if the microorganism is encountered in the future, the dog will either not get sick or will have a less severe illness.</p>\r\n\r\n<h3>How do vaccines work?</h3>\r\n\r\n<p>Vaccines work by stimulating the body&#39;s immune system to recognize and fight a particular microorganism such as a virus, bacteria, or other infectious organisms. Once vaccinated, the animal&#39;s immune system is then primed or prepared to react to future infection with that microorganism. In other words, the vaccine mimics a true infection so that the immune system can better protect the body in the future. Depending on the disease, the vaccine will help the body prevent infection or lessen the severity of the infection and promote rapid recovery.</p>\r\n\r\n<blockquote>&quot;Vaccines work by stimulating the body&#39;s immune system to recognize and fight a particular microorganism such as a virus, bacteria, or other infectious organisms.&quot;</blockquote>\r\n\r\n<p>While a vaccine can prevent illness, it cannot block microorganisms from getting into the body. This means that sometimes a dog may not look sick thanks to the vaccine, but the dog can still spread the invading microorganisms to other dogs.</p>\r\n\r\n<h3>What is the difference between a modified live vaccine and a killed vaccine?</h3>\r\n\r\n<p>In a modified live or live attenuated vaccine, the causative organism (virus, bacterium, etc.) has been weakened or altered so that it is no longer harmful or virulent but is still capable of stimulating protective immunity when injected or otherwise administered. With a killed vaccine, the causative organism has been killed or inactivated to render it harmless.</p>\r\n\r\n<p>Killed vaccines often need a helper or adjuvant (added ingredient) included in the vaccine to stimulate a longer-lasting immune response. Both have advantages and disadvantages.</p>\r\n\r\n<p>The choice of which vaccine is better for your dog will depend on its individual circumstances. Your veterinarian will consider these circumstances when choosing the appropriate vaccine for your pet.</p>\r\n\r\n<h3>How are vaccines administered to dogs?</h3>\r\n\r\n<p>Some vaccines are given locally, for example into the nose, but most require injection so that the maximum stimulation of the immune system is achieved. Some vaccines are injected subcutaneously (just under the skin) and others are injected into intramuscularly (into the muscle).</p>\r\n\r\n<h3>Which vaccines are recommended for dogs?</h3>\r\n\r\n<p>Depending on where you live, some infections may be more or less likely. The range of vaccines available includes rabies, distemper, adenovirus (infectious canine hepatitis), parvovirus, leptospirosis, parainfluenza, coronavirus,&nbsp;<em>Bordetella bronchiseptica</em>, Lyme disease, and canine influenza (for details on these diseases, see individual handouts &ldquo;Rabies in Dogs&rdquo;, &ldquo;Distemper in Dogs&rdquo;, &ldquo;Infectious Hepatitis (Adenovirus) in Dogs&rdquo;, &ldquo;Parvovirus in Dogs&rdquo;, &ldquo;Leptospirosis in Dogs&rdquo;, &ldquo;Kennel Cough or Tracheobronchitis in Dogs&rdquo;, &ldquo;Lyme Disease in Dogs&rdquo;, and &ldquo;Canine Influenza &ndash; The Dog Flu&rdquo;).</p>\r\n\r\n<p>These vaccines are often available in combinations that can be given in one dose. Combination vaccines are convenient and avoid extra injections for your dog. Your veterinarian will advise you on the appropriate vaccines for your dog based on his relative risks and lifestyle.</p>\r\n\r\n<p>The following core vaccines are recommended for all puppies and dogs by the American Animal Hospital Association (AAHA) Canine Vaccine Task Force:</p>\r\n\r\n<p>&bull; canine distemper virus<br />\r\n&bull; canine parvovirus<br />\r\n&bull; canine adenovirus-2 (hepatitis)<br />\r\n&bull; rabies virus</p>\r\n\r\n<p>The following non-core vaccines are recommended for puppies and dogs in special circumstances, dependent on the exposure risk of an individual dog, by the AAHA Canine Vaccine Task Force:</p>\r\n\r\n<p>&bull;&nbsp;<em>Leptospira</em>&nbsp;species<br />\r\n&bull;&nbsp;<em>Borrelia burgdorferi</em>&nbsp;(Lyme disease)<br />\r\n&bull; canine parainfluenza virus<br />\r\n&bull;&nbsp;<em>Bordetella bronchiseptica</em>&nbsp;(kennel cough)<br />\r\n&bull; canine influenza</p>\r\n\r\n<h3>What is maternal immunity?</h3>\r\n\r\n<p>Newborn animals have not yet had a chance to make their own immunity so they need protection against infections present in their environment. They receive this immunity from their mother, as maternal antibodies. Part of this passive immunity is transferred across the placenta while the pup is still in the uterus, but most of it is transferred in the first milk or colostrum. This maternal immunity is only temporary and declines steadily over the first few weeks of life, largely gone by twelve weeks. The rate of decline is variable, depending on many factors.</p>\r\n\r\n<h3>Why do puppies need more than one dose of some vaccines?</h3>\r\n\r\n<p>First, without complicated testing, it is impossible to know when a puppy has lost the passive protection it gets from its mother. An early decline in a puppy&#39;s maternal antibody can leave it susceptible to infection at a very young age. A strong maternal immunity can actually interfere with early vaccination (see handout &ldquo;Vaccination Failure in Dogs&rdquo;). Second, particularly with killed vaccines, the first dose is a priming dose, and the second dose boosts the response to a higher, longer-lasting level of immunity.</p>\r\n\r\n<blockquote>&quot;...without complicated testing, it is impossible to know when a puppy has lost the passive protection it gets from its mother.&quot;</blockquote>\r\n\r\n<h3>Why does my dog need to be revaccinated?</h3>\r\n\r\n<p>In most properly vaccinated dogs, the immunity should last more than one year, and often several years. However, immunity does decline with time and this decline rate varies between individuals. To maintain the best protection against infectious diseases, revaccinations have proven very successful. As vaccines are improved over time, some do not need to be given as often, depending on individual circumstances. Most dogs with low-risk lifestyles can be vaccinated every three years with the core vaccines and as needed for any non-core vaccines (most non-core vaccines require annual boosters). Your veterinarian will discuss the need and frequency of booster vaccinations for your dog based on your dog&rsquo;s needs and lifestyle.</p>\r\n\r\n<h3>How long does it take a vaccine to produce immunity?</h3>\r\n\r\n<p>Within a few hours of vaccination, the earliest phases of the immune response are being stimulated. It usually requires 10 to 14 days before a reasonable level of protection is established. Killed vaccines may not provide adequate protection until after the second dose. In young puppies, maternal antibodies may hinder protection until later in the vaccine series. Therefore, it is advisable to keep even a vaccinated puppy away from dogs or puppies of unknown vaccination history until it has finished its vaccination course.</p>\r\n\r\n<h3>Why is the same amount of vaccine given to a small dog and a large dog?</h3>\r\n\r\n<p>Vaccination doses are the same for all dogs, regardless of size. When these vaccines are tested, all dogs in the test group receive the same dose of vaccine and have been proven safe for dogs of all sizes at the recommended dosage. Smaller doses of vaccine may not adequately protect small pets. In addition, there is no evidence that smaller doses of vaccinations are associated with a decreased likelihood of vaccine reactions.</p>\r\n', '2023-10-26', '8', 'ha@gmail.com', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
