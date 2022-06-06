/*
Navicat MySQL Data Transfer

Source Server         : mysql_local
Source Server Version : 100419
Source Host           : localhost:3306
Source Database       : finalproject

Target Server Type    : MYSQL
Target Server Version : 100419
File Encoding         : 65001

Date: 2021-07-11 13:12:02
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for contact
-- ----------------------------
DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact` (
  `description` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `no_street` varchar(255) COLLATE utf8_bin DEFAULT '',
  `city` varchar(255) COLLATE utf8_bin DEFAULT '',
  `state` varchar(255) COLLATE utf8_bin DEFAULT '',
  `email` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of contact
-- ----------------------------
INSERT INTO `contact` VALUES ('If you have any inquiry, please do not be hesitated to contact us!123', 'Jalan Durian', 'Unimas', 'Sarawak', 'ZHAZHA@gmail.com123', '+6016-6376037000');

-- ----------------------------
-- Table structure for faq_title
-- ----------------------------
DROP TABLE IF EXISTS `faq_title`;
CREATE TABLE `faq_title` (
  `faqID` int(11) NOT NULL,
  `label` varchar(255) DEFAULT NULL,
  `title1` varchar(255) DEFAULT NULL,
  `title2` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`faqID`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of faq_title
-- ----------------------------
INSERT INTO `faq_title` VALUES ('1', 'F.A.Q', 'Frequently Asked', 'Questions', 'Any problems?');

-- ----------------------------
-- Table structure for message
-- ----------------------------
DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
  `name` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `message` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of message
-- ----------------------------
INSERT INTO `message` VALUES ('Larry', 'larry@gmail.com', 'let\'s team up!', 'let\'s work together', '2021-07-06');
INSERT INTO `message` VALUES ('Marry', 'marry@gmail.com', 'price?', 'hmmm, how much leh?', '2021-07-07');
INSERT INTO `message` VALUES ('Sunny', 'sunny@gmail.com', 'location??', 'where are you guys located', '2021-07-08');
INSERT INTO `message` VALUES ('Lula', 'lula@gmail.com', 'fax?', 'any fax number?', '2021-07-09');

-- ----------------------------
-- Table structure for pricing_h
-- ----------------------------
DROP TABLE IF EXISTS `pricing_h`;
CREATE TABLE `pricing_h` (
  `tagID` int(11) NOT NULL,
  `tag` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `title1` varchar(255) COLLATE utf8_bin DEFAULT '',
  `title2` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`tagID`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of pricing_h
-- ----------------------------
INSERT INTO `pricing_h` VALUES ('1', 'PRICING', 'Check our', 'Pricing', 'Have a look at the pricing for wedding packages and customize package. All prices would subject to change when neccessary. The price for ZHAZHA Custom package is from RM200.');

-- ----------------------------
-- Table structure for qna
-- ----------------------------
DROP TABLE IF EXISTS `qna`;
CREATE TABLE `qna` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` longtext NOT NULL,
  `answer` longtext NOT NULL,
  KEY `no` (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of qna
-- ----------------------------
INSERT INTO `qna` VALUES ('11', 'DO YOU TRAVEL FOR SHOOTS?', 'Yes! We are based in JB, Malaysia but travel is what we live for. So no matter where you live or plan to go, please reach out.\r\n');
INSERT INTO `qna` VALUES ('12', 'HOW WOULD YOU DESCRIBE YOUR SHOOTING STYLE?', 'Our main priority is making you feel comfortable so we are able to capture candid moments in the realist light possible.');
INSERT INTO `qna` VALUES ('13', 'WHAT TIME OF DAY DO YOU PREFER TO SHOOT?', 'Golden Hour & Blue Hour are our favorite times of day to shoot (an hour before and after sunset). The sky is most colorful during this time so you can expect that coveted golden light and gorgeous shades of blue/pink.');
INSERT INTO `qna` VALUES ('14', 'WE ARE SO AWKWARD IN FRONT OF A CAMERA!', 'I swear 99% all inquiries start off this way but YALL that is what we here for! Our job is to make you feel comfortable and relaxed in whatever setting we are in. All I ask in return, is for you to be your true self and the images will reflect that, letting your personality shine through.\r\n\r\n');
INSERT INTO `qna` VALUES ('15', 'HOW DO I GET THE BEST PHOTOS POSSIBLE?', 'LIGHT is the biggest factor in wedding photo greatness. If I could pick my perfect scenario, it would be an outdoor ceremony about an hour before sunset. ENVIRONMENT plays a big role as well. Make sure your surroundings (getting ready room, ceremony backdrop, etc) are nOt overly busy. You want the focus to be on the two of you and all the FEELS going on in that moment - not the distracting background behind or around you all.');

-- ----------------------------
-- Table structure for security_question
-- ----------------------------
DROP TABLE IF EXISTS `security_question`;
CREATE TABLE `security_question` (
  `questionID` int(11) NOT NULL,
  `question` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`questionID`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of security_question
-- ----------------------------
INSERT INTO `security_question` VALUES ('1', 'What Is your favorite book?');
INSERT INTO `security_question` VALUES ('2', 'What is the name of the road you grew up on?');
INSERT INTO `security_question` VALUES ('3', 'What was the name of your first pet?');
INSERT INTO `security_question` VALUES ('4', 'Where did you go to high school/college?');
INSERT INTO `security_question` VALUES ('5', 'What city were you born in?');
INSERT INTO `security_question` VALUES ('6', 'What is your favorite food?');
INSERT INTO `security_question` VALUES ('7', 'What is your mother’s name?');
INSERT INTO `security_question` VALUES ('8', 'What was the first company that you worked for?');

-- ----------------------------
-- Table structure for table_category
-- ----------------------------
DROP TABLE IF EXISTS `table_category`;
CREATE TABLE `table_category` (
  `UserType` varchar(1) NOT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Interface` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`UserType`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of table_category
-- ----------------------------
INSERT INTO `table_category` VALUES ('A', 'Admin', 'admin/admin.php');
INSERT INTO `table_category` VALUES ('U', 'User', 'index.php');

-- ----------------------------
-- Table structure for table_school
-- ----------------------------
DROP TABLE IF EXISTS `table_school`;
CREATE TABLE `table_school` (
  `school` int(11) NOT NULL,
  `schoolName` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`school`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of table_school
-- ----------------------------
INSERT INTO `table_school` VALUES ('0', 'Select School');
INSERT INTO `table_school` VALUES ('1', 'School of Computing');
INSERT INTO `table_school` VALUES ('2', 'School of Civil Engineering');
INSERT INTO `table_school` VALUES ('3', 'School of Electrical Engineering');
INSERT INTO `table_school` VALUES ('4', 'School of Mechanical Engineering');

-- ----------------------------
-- Table structure for table_user
-- ----------------------------
DROP TABLE IF EXISTS `table_user`;
CREATE TABLE `table_user` (
  `UserID` varchar(255) NOT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `cPassword` varchar(255) DEFAULT NULL,
  `UserType` varchar(1) DEFAULT '',
  `Name` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `questionID` int(11) DEFAULT NULL,
  `answer` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`UserID`) USING BTREE,
  KEY `UserType` (`UserType`) USING BTREE,
  KEY `questionID` (`questionID`) USING BTREE,
  CONSTRAINT `table_user_ibfk_1` FOREIGN KEY (`UserType`) REFERENCES `table_category` (`UserType`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `table_user_ibfk_2` FOREIGN KEY (`questionID`) REFERENCES `security_question` (`questionID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of table_user
-- ----------------------------
INSERT INTO `table_user` VALUES ('admin002@gmail.com', '123', '123', 'A', 'Administrator_002', 'admin002@gmail.com', '1', 'web');
INSERT INTO `table_user` VALUES ('admin@gmail.com', '123', '123', 'A', 'Administrator_1', 'admin@gmail.com', '1', 'zhazha');
INSERT INTO `table_user` VALUES ('huing000@gmail.com', '1234', '1234', 'U', 'Iris Ng', 'huing000@gmail.com', '1', 'oop');
INSERT INTO `table_user` VALUES ('irisng000@gmail.com', '111', '111', 'U', 'Iris', 'irisng000@gmail.com', '8', 'spectrum');
INSERT INTO `table_user` VALUES ('kiew@gmail.com', '123', '123', 'U', 'kiew', 'kiew@gmail.com', '1', 'OOP');
INSERT INTO `table_user` VALUES ('ngmeihui@gmail.com', '1234', '1234', 'U', 'Ng Mei Hui', 'ngmeihui@gmail.com', '1', 'oop');
INSERT INTO `table_user` VALUES ('user@gmail.com', '123', '123', 'U', 'user1', 'user@gmail.com', '1', 'oop');

-- ----------------------------
-- Table structure for tblbooking
-- ----------------------------
DROP TABLE IF EXISTS `tblbooking`;
CREATE TABLE `tblbooking` (
  `bookingID` int(11) NOT NULL,
  `packageID` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `Name` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `phoneNo` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `details` varchar(2555) COLLATE utf8_bin DEFAULT '',
  PRIMARY KEY (`bookingID`) USING BTREE,
  KEY `packageID` (`packageID`) USING BTREE,
  CONSTRAINT `tblbooking_ibfk_1` FOREIGN KEY (`packageID`) REFERENCES `tblpricing` (`packageID`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of tblbooking
-- ----------------------------
INSERT INTO `tblbooking` VALUES ('1', 'aa', 'Chloe', 'chloe@gmail.com', '011-12345678', '2021-07-21', '07:50:00', '-------');
INSERT INTO `tblbooking` VALUES ('2', 'dd', 'Jacklyn', 'jacklyn@gmail.com', '012-34567891', '2021-07-17', '05:50:00', '--');
INSERT INTO `tblbooking` VALUES ('3', 'aa', 'Lim Chin Qing', 'limchinqing@graduate.utm.my', '017-7281978', '2021-07-30', '20:10:00', '-----');
INSERT INTO `tblbooking` VALUES ('4', 'aa', 'Soo Toh', 'sotong@gmail.com', '018-21234124', '2021-07-23', '07:05:00', '---');
INSERT INTO `tblbooking` VALUES ('5', 'bb', 'Soo Toh Xin Hui', 'sootoh@gmail.com', '123-123123999', '2021-07-19', '21:55:00', ' -');
INSERT INTO `tblbooking` VALUES ('6', 'dd', 'Tee Hui You', 'teeee@gmail.com', '011-12341243', '2021-07-23', '23:55:00', '-');
INSERT INTO `tblbooking` VALUES ('7', 'cc', 'Leo Tan', 'leotan@gmail.com', '011-11111233', '2021-07-26', '11:05:00', '-');

-- ----------------------------
-- Table structure for tblcategory
-- ----------------------------
DROP TABLE IF EXISTS `tblcategory`;
CREATE TABLE `tblcategory` (
  `categoryID` int(11) NOT NULL,
  `categoryname` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`categoryID`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of tblcategory
-- ----------------------------
INSERT INTO `tblcategory` VALUES ('1', 'FAMILY');
INSERT INTO `tblcategory` VALUES ('2', 'WEDDING');

-- ----------------------------
-- Table structure for tblphoto
-- ----------------------------
DROP TABLE IF EXISTS `tblphoto`;
CREATE TABLE `tblphoto` (
  `photoid` varchar(255) COLLATE utf8_bin NOT NULL,
  `photoname` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `photodes` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `photolink` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `categoryID` int(11) DEFAULT NULL,
  PRIMARY KEY (`photoid`,`photoname`) USING BTREE,
  KEY `categoryID` (`categoryID`) USING BTREE,
  CONSTRAINT `tblphoto_ibfk_1` FOREIGN KEY (`categoryID`) REFERENCES `tblcategory` (`categoryID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of tblphoto
-- ----------------------------
INSERT INTO `tblphoto` VALUES ('DS', 'Disney wedding', 'in the forest', './assets/img/portfolio/59c2bbf8e517bd1e008b4bad.jpg', '2');
INSERT INTO `tblphoto` VALUES ('bf', 'Thanksgiving', 'Family Portrait at San Diego', './assets/img/portfolio/20160701_TAN_FAMILY_PORTRAITS-019.jpg', '1');
INSERT INTO `tblphoto` VALUES ('fa', 'Affectionately', 'Waiting for a new born baby', './assets/img/portfolio/family-1.jpg', '1');
INSERT INTO `tblphoto` VALUES ('fm', 'White', 'Peaceful, purity', './assets/img/portfolio/family-3.jpg', '1');
INSERT INTO `tblphoto` VALUES ('ft', 'HOLA!', 'Look at the camera, dik', './assets/img/portfolio/Family_3-800x1200.jpg', '1');
INSERT INTO `tblphoto` VALUES ('sy', 'Wonder', 'A girl full of curiosity ', './assets/img/portfolio/wedding-1.jpg', '2');
INSERT INTO `tblphoto` VALUES ('us', 'sunkiss', 'A couple who decided to live forever for the rest of their life', './assets/img/portfolio/5eac8da748d92c3d275bb2de.png', '2');

-- ----------------------------
-- Table structure for tblportfolio
-- ----------------------------
DROP TABLE IF EXISTS `tblportfolio`;
CREATE TABLE `tblportfolio` (
  `portfolioID` int(11) NOT NULL,
  `portfoliolabel` varchar(255) COLLATE utf8_bin DEFAULT '',
  `portfolioTitle` varchar(255) COLLATE utf8_bin DEFAULT '',
  `portfolioTitle2` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `portfolioDesc` varchar(255) COLLATE utf8_bin DEFAULT '',
  PRIMARY KEY (`portfolioID`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of tblportfolio
-- ----------------------------
INSERT INTO `tblportfolio` VALUES ('1', 'PORTFOLIO', 'Check Our', 'Portfolio', 'Here is our portfolio session');
INSERT INTO `tblportfolio` VALUES ('2', 'testinglabel', 'testingtitle', null, 'testingdesc');

-- ----------------------------
-- Table structure for tblpricing
-- ----------------------------
DROP TABLE IF EXISTS `tblpricing`;
CREATE TABLE `tblpricing` (
  `packageID` varchar(20) COLLATE utf8_bin NOT NULL,
  `packageName` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `firstLine` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `secondLine` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `thirdLine` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `fourthLine` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `fifthLine` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`packageID`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of tblpricing
-- ----------------------------
INSERT INTO `tblpricing` VALUES ('aa', 'Basic', '8 hours of photography', 'complimentary engagement shoot', 'online gallery for sharing', 'professional editing', 'a second photographer', '1512.00');
INSERT INTO `tblpricing` VALUES ('bb', 'Standard', '10 hours of photography', 'complimentary engagement shoot', 'online gallery for sharing', 'professional editing', ' a second photographer', '2466.00');
INSERT INTO `tblpricing` VALUES ('cc', 'Ultimate', '12 hours of photography', 'complimentary engagement shoot', 'online gallery for sharing', 'professional editing', 'a second photographer', '3899.90');
INSERT INTO `tblpricing` VALUES ('dd', 'ZHAZHA Custom', '1 person (min)', '30 minutes session (min) ', 'Digital images', 'Photo release', 'Facebook cover', '200.00');

-- ----------------------------
-- Table structure for team_member
-- ----------------------------
DROP TABLE IF EXISTS `team_member`;
CREATE TABLE `team_member` (
  `MatricNo` varchar(12) NOT NULL,
  `firstName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `school` int(11) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `course` varchar(255) DEFAULT NULL,
  `bio` varchar(255) DEFAULT NULL,
  `ProfilePic` varchar(255) DEFAULT NULL,
  `phoneNum` varchar(255) DEFAULT NULL,
  `Facebook` varchar(255) DEFAULT NULL,
  `Instagram` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`MatricNo`) USING BTREE,
  KEY `imageID` (`ProfilePic`) USING BTREE,
  KEY `school` (`school`) USING BTREE,
  CONSTRAINT `team_member_ibfk_1` FOREIGN KEY (`school`) REFERENCES `table_school` (`school`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of team_member
-- ----------------------------
INSERT INTO `team_member` VALUES ('A19EC0062', 'Xue Kee', 'Kiew', 'kiewxuekee@graduate.utm.my', '1', '1999-12-07', '2/SECV', 'I love ALBEDO, ALBEDO love me.', './assets/img/team/photo_2021-07-10_01-35-42.jpg', '0163632949', 'https://www.facebook.com/profile.php?id=100004372633271', 'https://www.instagram.com/xk_umiikoo/?hl=en');
INSERT INTO `team_member` VALUES ('A19EC0071', 'Chin Qing', 'Lim', 'limchinqing@graduate.utm.my', '1', '1999-11-23', '2/SECV', 'I love Carrot Susu and BANANAAAAA.', './assets/img/team/photo_2021-07-10_01-32-44.jpg', '0189469252', 'https://www.facebook.com/lim.chinqing', 'https://www.instagram.com/fiiighting/?hl=en');
INSERT INTO `team_member` VALUES ('A19EC0116', 'Mei Hui', 'Ng', 'ngmeihui@graduate.utm.my', '1', '2000-04-14', '2/SECV', 'I hope everything is as simple as being fat.', './assets/img/team/photo_2021-06-21_22-36-43.jpg', '0166376037', 'https://www.facebook.com/meihui.ng.98/', 'https://www.instagram.com/hui_ng0414/?hl=en');
INSERT INTO `team_member` VALUES ('A19EC3028', 'Simon', 'Chong', 'simon@graduate.utm.my', '1', '1998-07-11', '2/SECV', 'Nothing here.', './assets/img/team/photo_2021-07-10_01-32-30.jpg', '0165879447', 'https://www.facebook.com/simon.chong.711', 'https://www.instagram.com/simon_chong_711/?hl=en');
INSERT INTO `team_member` VALUES ('A19EC3031', 'Shu Yu', 'Ng', 'ngshuyu@graduate.utm.my', '1', '1998-01-01', '2/SECV', 'All things are difficult before they are easy.', './assets/img/team/photo_2021-07-10_01-35-29.jpg', '0197135593', 'https://www.facebook.com/ming.wu.3958', '');

-- ----------------------------
-- Table structure for team_title
-- ----------------------------
DROP TABLE IF EXISTS `team_title`;
CREATE TABLE `team_title` (
  `teamID` int(11) NOT NULL,
  `label` varchar(255) DEFAULT NULL,
  `title1` varchar(255) DEFAULT NULL,
  `title2` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`teamID`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of team_title
-- ----------------------------
INSERT INTO `team_title` VALUES ('1', 'Team', 'Our Hardworking', 'Team', 'It not much but it is a honest work');
