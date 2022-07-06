/*
MySQL Backup
Source Server Version: 5.5.5
Source Database: modx
Date: 6/7/2022 16:04:19
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
--  Table structure for `ad8`
-- ----------------------------
DROP TABLE IF EXISTS `ad8`;
CREATE TABLE `ad8` (
  `ad8_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัส ad8(auto)',
  `register_id` int(11) NOT NULL COMMENT 'รหัสลงทะเบียน',
  `respondent` int(1) DEFAULT NULL COMMENT 'ผู้ตอบ 1=ผู้สูงอายุ,2=ผู้ดูแลหรือญาติ',
  `question1` int(1) DEFAULT NULL COMMENT '1=ใช่,2=ไม่ใช่,3=ไม่ทราบ',
  `question2` int(1) DEFAULT NULL COMMENT '1=ใช่,2=ไม่ใช่,3=ไม่ทราบ',
  `question3` int(1) DEFAULT NULL COMMENT '1=ใช่,2=ไม่ใช่,3=ไม่ทราบ',
  `question4` int(1) DEFAULT NULL COMMENT '1=ใช่,2=ไม่ใช่,3=ไม่ทราบ',
  `question5` int(1) DEFAULT NULL COMMENT '1=ใช่,2=ไม่ใช่,3=ไม่ทราบ',
  `question6` int(1) DEFAULT NULL COMMENT '1=ใช่,2=ไม่ใช่,3=ไม่ทราบ',
  `question7` int(1) DEFAULT NULL COMMENT '1=ใช่,2=ไม่ใช่,3=ไม่ทราบ',
  `question8` int(1) DEFAULT NULL COMMENT '1=ใช่,2=ไม่ใช่,3=ไม่ทราบ',
  `score` int(2) NOT NULL DEFAULT 0 COMMENT '0=ตอบไม่ครบทุกข้อ ',
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  `flagdel` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1=ลบ',
  `success` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'บันทึก 1 กรณีทำครบทุกข้อ',
  `step` int(1) DEFAULT NULL,
  PRIMARY KEY (`ad8_id`),
  KEY `ad8_ibfk_1` (`register_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `ad8_master`
-- ----------------------------
DROP TABLE IF EXISTS `ad8_master`;
CREATE TABLE `ad8_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `head` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `case`
-- ----------------------------
DROP TABLE IF EXISTS `case`;
CREATE TABLE `case` (
  `caseid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัส case(Auto)',
  `name` varchar(100) DEFAULT '' COMMENT 'ชื่อ',
  `surname` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL COMMENT 'สกุล',
  `provinces_id` int(3) DEFAULT NULL,
  `email` varchar(50) DEFAULT '' COMMENT 'email',
  `tel` varchar(20) DEFAULT '' COMMENT 'เบอร์โทร',
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  `flagdel` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1=Del ',
  PRIMARY KEY (`caseid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `doctor`
-- ----------------------------
DROP TABLE IF EXISTS `doctor`;
CREATE TABLE `doctor` (
  `doctor_id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`doctor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `files`
-- ----------------------------
DROP TABLE IF EXISTS `files`;
CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `files_part` varchar(100) NOT NULL DEFAULT '',
  `files_name` varchar(100) DEFAULT '' COMMENT 'ชื่อไฟล์',
  `case_id` varchar(30) NOT NULL DEFAULT '',
  `user_id` int(11) NOT NULL,
  `flagdel` tinyint(1) NOT NULL DEFAULT 0,
  `create_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `fruit`
-- ----------------------------
DROP TABLE IF EXISTS `fruit`;
CREATE TABLE `fruit` (
  `fruit_id` int(11) NOT NULL AUTO_INCREMENT,
  `fruit` varchar(100) NOT NULL DEFAULT '' COMMENT 'ผลไม้',
  `keyword` text DEFAULT NULL COMMENT 'คำใกล้เคียง {k,w}',
  PRIMARY KEY (`fruit_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `provinces`
-- ----------------------------
DROP TABLE IF EXISTS `provinces`;
CREATE TABLE `provinces` (
  `provinces_id` int(5) NOT NULL,
  `code` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `name_th` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `geography_id` int(5) NOT NULL DEFAULT 0,
  PRIMARY KEY (`provinces_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for `register`
-- ----------------------------
DROP TABLE IF EXISTS `register`;
CREATE TABLE `register` (
  `register_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสลงทะเบียน(Auto)',
  `case_id` int(11) DEFAULT NULL COMMENT 'รหัส case',
  `casecode` varchar(50) NOT NULL COMMENT 'รหัสที่สร้างขึ้นมาเพื่อแทนผู้ทดสอบ',
  `name` varchar(100) DEFAULT '' COMMENT 'ชื่อ',
  `surname` varchar(100) DEFAULT '' COMMENT 'สกุล',
  `disease` varchar(20) DEFAULT '' COMMENT 'control,case',
  `age` int(3) DEFAULT NULL,
  `gender` varchar(3) NOT NULL DEFAULT '' COMMENT 'M,F,O',
  `provinces_id` int(3) NOT NULL,
  `email` varchar(80) DEFAULT '',
  `tel` varchar(20) DEFAULT NULL COMMENT 'เบอร์โทร',
  `datetest` date NOT NULL COMMENT 'วันที่ทดสอบ',
  `month` int(2) unsigned zerofill NOT NULL,
  `year` int(4) NOT NULL,
  `docter_id` int(11) DEFAULT NULL COMMENT 'รหัสผู้ส่งทดสอบ',
  `source` varchar(50) DEFAULT '' COMMENT 'online,beta,alhfa',
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  `flagdel` tinyint(2) NOT NULL DEFAULT 0 COMMENT '1=Del ',
  PRIMARY KEY (`register_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `role`
-- ----------------------------
DROP TABLE IF EXISTS `role`;
CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` varchar(100) DEFAULT '' COMMENT 'สิทธิ์',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `testandlimit`
-- ----------------------------
DROP TABLE IF EXISTS `testandlimit`;
CREATE TABLE `testandlimit` (
  `testandlimit_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัส testandlimit(Auto)',
  `register_id` int(11) NOT NULL COMMENT 'รหัสลงทะเบียน',
  `qustion1` varchar(100) DEFAULT '' COMMENT 'คำตอบข้อ1จากผู้ทดสอบ',
  `qustion2` varchar(100) DEFAULT '' COMMENT 'คำตอบข้อ2จากผู้ทดสอบ',
  `qustion3` varchar(100) DEFAULT '' COMMENT 'คำตอบข้อ3จากผู้ทดสอบ',
  `voicepath1` varchar(100) DEFAULT '' COMMENT 'ตำแหน่งไฟล์เสียงข้อ1',
  `voicepath2` varchar(100) DEFAULT '' COMMENT 'ตำแหน่งไฟล์เสียงข้อ2',
  `voicepath3` varchar(100) DEFAULT '' COMMENT 'ตำแหน่งไฟล์เสียงข้อ3',
  `score` int(2) NOT NULL DEFAULT 0 COMMENT 'คะแนน',
  `user_id` int(11) DEFAULT NULL COMMENT 'ผู้บันทึกข้อมูล',
  `userrecord_qustion1` varchar(100) DEFAULT '' COMMENT 'บันทึกการได้ยินเสียงโดย User',
  `userrecord_qustion2` varchar(100) DEFAULT '' COMMENT 'บันทึกการได้ยินเสียงโดย User',
  `userrecord_qustion3` varchar(100) DEFAULT '' COMMENT 'บันทึกการได้ยินเสียงโดย User',
  `voicequality1` tinyint(1) DEFAULT NULL COMMENT 'คุณภาพภาพเสียงดี',
  `voicequality2` tinyint(1) DEFAULT NULL COMMENT 'คุณภาพภาพเสียงเบา',
  `voicequality3` tinyint(1) DEFAULT NULL COMMENT 'คุณภาพภาพเสียงมีเสียงรบกวน',
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  `flagdel` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1=ลบ',
  `success` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1=สมบูรณ์',
  PRIMARY KEY (`testandlimit_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `toolx`
-- ----------------------------
DROP TABLE IF EXISTS `toolx`;
CREATE TABLE `toolx` (
  `toolx_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสtoolx_id(Auto)',
  `register_id` int(11) NOT NULL COMMENT 'รหัสลงทะเบียน',
  `regsiter1` varchar(100) NOT NULL DEFAULT '' COMMENT 'คำที่ 1 Random',
  `regsiter2` varchar(100) NOT NULL DEFAULT '' COMMENT 'คำที่ 2 Random',
  `regsiter3` varchar(100) NOT NULL DEFAULT '' COMMENT 'คำที่ 3 Random',
  `datenow` varchar(30) NOT NULL DEFAULT '' COMMENT 'วันนี้วันอะไร',
  `caseregsiter` varchar(255) DEFAULT NULL COMMENT 'คำตอบ 3 คำมารวดเดียว',
  `regsiterwordseg` varchar(255) DEFAULT NULL COMMENT 'คำตอบ 3 คำที่แยกโดย Word Segmentation',
  `orientation` varchar(255) DEFAULT '' COMMENT 'วันนี้วันอะไร',
  `fruitfluency` text DEFAULT NULL COMMENT 'ข้อความพูดผลไม้',
  `fruitwordseg` text DEFAULT NULL COMMENT 'ข้อความพูดผลไม้แยก',
  `recall` varchar(255) DEFAULT '' COMMENT 'ทบทวน 3 คำ',
  `recallwordseg` varchar(255) DEFAULT NULL COMMENT 'ทบทวน 3 คำแยกค',
  `voiceregsiter` varchar(100) DEFAULT '' COMMENT 'ตำแหน่งไฟล์เสียงtoolxพูดตามเสียง',
  `voiceorientationpath` varchar(100) DEFAULT '' COMMENT 'ตำแหน่งไฟล์เสียงวันนี้วันอะไร',
  `voicefruitluency` varchar(100) DEFAULT '' COMMENT 'ตำแหน่งไฟล์เสียงผลไม้',
  `voicerecall` varchar(100) DEFAULT '' COMMENT 'ตำแหน่งไฟล์เสียงทบทวน3คำ',
  `user_id` int(11) DEFAULT NULL COMMENT 'ผู้บันทึกข้อมูล',
  `regsiter_score` int(3) NOT NULL DEFAULT 0 COMMENT 'คะแนนพูดตาม',
  `fruitfluency_score` int(3) NOT NULL DEFAULT 0 COMMENT 'คะแนนผลไม้',
  `wordregsiter_score` int(3) NOT NULL DEFAULT 0 COMMENT 'คะแนนทบทวบ3คำ',
  `orientation_score` int(3) NOT NULL DEFAULT 0 COMMENT 'คะแนนวันนี้วันอะไร',
  `user_a_record_regsiter_1` varchar(100) DEFAULT NULL COMMENT 'บันทึกการได้ยินเสียงจากระบบโดย ShadowingA คำที่ 1',
  `user_a_record_regsiter_2` varchar(100) DEFAULT '' COMMENT 'บันทึกการได้ยินเสียงจากระบบโดย ShadowingA คำที่ 2',
  `user_a_record_regsiter_3` varchar(100) DEFAULT '' COMMENT 'บันทึกการได้ยินเสียงจากระบบโดย ShadowingA คำที่ 3',
  `user_b_record_regsiter_1` varchar(100) DEFAULT '' COMMENT 'บันทึกการได้ยินเสียงจากเคสโดย ShadowingB คำที่ 1',
  `user_b_record_regsiter_2` varchar(100) DEFAULT '' COMMENT 'บันทึกการได้ยินเสียงจากเคสโดย ShadowingB คำที่ 2',
  `user_b_record_regsiter_3` varchar(100) DEFAULT '' COMMENT 'บันทึกการได้ยินเสียงจากเคสโดย ShadowingB คำที่ 3',
  `user_b_record_orientation` varchar(100) DEFAULT '' COMMENT 'บันทึกการได้ยินคำตอบถามวัน ShadowingB',
  `user_b_record_friut` text DEFAULT NULL COMMENT 'บันทึกการได้ยินเสียงผลไม้  ShadowingB',
  `user_b_record_recall1` varchar(100) DEFAULT '' COMMENT 'บันทึกการได้ยินเสียงทบทวนคำ1 ShadowingB',
  `user_b_record_recall2` varchar(100) DEFAULT '' COMMENT 'บันทึกการได้ยินเสียงทบทวนคำ2 ShadowingB',
  `user_b_record_recall3` varchar(100) DEFAULT '' COMMENT 'บันทึกการได้ยินเสียงทบทวนคำ2 ShadowingB',
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  `flagdel` tinyint(1) NOT NULL DEFAULT 0,
  `success` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`toolx_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `toolx_fruit`
-- ----------------------------
DROP TABLE IF EXISTS `toolx_fruit`;
CREATE TABLE `toolx_fruit` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Auto',
  `toolx_id` int(11) NOT NULL COMMENT 'รหัสtoolx_id',
  `wordfruit` varchar(255) DEFAULT '' COMMENT 'คำที่ตัดมาได้',
  `fruit_id` int(11) DEFAULT NULL COMMENT 'math กับผลไม้ใน DB id ไหน',
  `point` int(11) NOT NULL DEFAULT 0 COMMENT '0 ไม่ math 1=math',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `toolx_word`
-- ----------------------------
DROP TABLE IF EXISTS `toolx_word`;
CREATE TABLE `toolx_word` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Auto',
  `toolx_id` int(11) NOT NULL COMMENT 'รหัสtoolx_id',
  `word` varchar(255) DEFAULT '' COMMENT 'คำที่ตัดมาได้',
  `wordreg_id` int(11) DEFAULT NULL COMMENT 'math กับคำไหนใน DB',
  `point` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` smallint(6) NOT NULL DEFAULT 1,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`),
  KEY `role` (`role`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for `wordregister`
-- ----------------------------
DROP TABLE IF EXISTS `wordregister`;
CREATE TABLE `wordregister` (
  `wordreg_id` int(11) NOT NULL AUTO_INCREMENT,
  `word` varchar(255) NOT NULL COMMENT 'คำที่ใช่ random',
  `verbtype` int(11) NOT NULL COMMENT 'ประเภทคำ 1,2,3',
  `voicepart` varchar(255) DEFAULT NULL COMMENT 'ตำแหน่งไฟล์',
  PRIMARY KEY (`wordreg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records 
-- ----------------------------
INSERT INTO `ad8` VALUES ('1','1','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','2022-07-04 07:59:22','2022-07-04 07:59:22','0','0',NULL), ('2','1','2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','2022-07-04 09:00:24','2022-07-04 09:00:24','0','0',NULL), ('3','1','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','2022-07-04 09:59:48','2022-07-04 09:59:48','0','0',NULL), ('4','1','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','2022-07-04 10:02:28','2022-07-04 10:02:28','0','0',NULL), ('5','1','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','2022-07-04 10:03:22','2022-07-04 10:03:22','0','0',NULL), ('6','1','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','2022-07-04 10:03:48','2022-07-04 10:03:48','0','0',NULL), ('7','1','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','2022-07-04 11:01:01','2022-07-04 11:01:01','0','0',NULL), ('8','1','1','3','3','3','2','3','3','3','3','0','2022-07-04 01:48:39','2022-07-04 03:04:35','0','1','9'), ('9','4','1','1','3','2','3','2','3','2','3','1','2022-07-04 05:18:30','2022-07-04 05:19:26','0','1','9'), ('10','5','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','2022-07-04 05:22:42','2022-07-04 05:22:42','0','0',NULL), ('11','5','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','2022-07-04 05:23:14','2022-07-04 05:23:14','0','0',NULL), ('12','5','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','2022-07-04 05:23:57','2022-07-04 05:23:57','0','0',NULL), ('13','5','1','1','2','3','3','2','3','2','3','1','2022-07-04 05:24:24','2022-07-04 05:47:55','0','1','9'), ('14','6','1','3','2','3','2','3','1','1','3','2','2022-07-05 02:49:25','2022-07-05 02:49:47','0','1','9'), ('15','7','1','3','3','3','3','3','3','3','3','0','2022-07-05 04:01:47','2022-07-05 04:02:42','0','1','9'), ('16','8','1','3','2','3','3','2','3','2','3','0','2022-07-05 04:17:23','2022-07-05 04:18:04','0','1','9'), ('17','8','1','3','1','3','3','3','3','3','3','1','2022-07-05 04:25:42','2022-07-05 04:27:27','0','1','9'), ('18','9','1','3','3','3','3','3','3','3','2','0','2022-07-05 09:02:45','2022-07-05 09:03:10','0','1','9'), ('19','10','1','3','3','2','3','2','3','2','3','0','2022-07-05 09:12:26','2022-07-05 09:12:44','0','1','9'), ('20','11','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','2022-07-05 09:17:21','2022-07-05 09:17:21','0','0',NULL), ('21','12','1','3','1','3','3','3','3','3','3','1','2022-07-05 01:46:47','2022-07-05 01:47:02','0','1','9'), ('22','13','1','3','3','3','3','3','2','3','3','0','2022-07-05 02:21:10','2022-07-05 02:21:54','0','1','9'), ('23','15','1','3','1','3','1','3','1','3','1','4','2022-07-06 08:32:42','2022-07-06 08:32:59','0','1','9');
INSERT INTO `ad8_master` VALUES ('1','มีปัญหาเรื่องการตัดสินใจหรือไม่สามารถที่จะคิดถึงผลที่ตามมาได้','เช่น ไม่สามารถตัดสินใจ เรื่องการลงทุนและผลที่ตามมา'), ('2','มีความสนใจต่องานอดิเรกและกิจกรรมที่เคยทำลดลง',NULL), ('3','พูดซ้ำถามซ้ำบ่อยๆ','เช่น ถามคำถามเดิมซ้ำๆ เล่าเรื่องเดิมซ้ำๆ หรือประโยดเดิมซ้ำๆ'), ('4','มีปัญหาในการเรียนรู้ที่จะใช้เครื่องมือใหม่ๆ','เช่น คอมพิวเตอร์ ไมโครเวฟ รีโมทคอนโทรล'), ('5','จำเดือนหรือปี ที่ถูกต้องไม่ได้',NULL), ('6','มีปัญหาในการจัดการด้านการเงินการลงทุนที่ซับซ้อน',NULL), ('7','จำนัดหมายต่างๆไม่ได้',NULL), ('8','ปัญหาความจำและความคิดเกิดขึ้นเป็นประจำทุกวัน',NULL);
INSERT INTO `doctor` VALUES ('1','หมอคนที่ 1'), ('2','หมอคนที่ 2');
INSERT INTO `fruit` VALUES ('1','ส้ม','ส้ม,สม,ส้มเขียวหวาน,สาม');
INSERT INTO `provinces` VALUES ('1','10','กรุงเทพมหานคร','Bangkok','2'), ('2','11','สมุทรปราการ','Samut Prakan','2'), ('3','12','นนทบุรี','Nonthaburi','2'), ('4','13','ปทุมธานี','Pathum Thani','2'), ('5','14','พระนครศรีอยุธยา','Phra Nakhon Si Ayutthaya','2'), ('6','15','อ่างทอง','Ang Thong','2'), ('7','16','ลพบุรี','Loburi','2'), ('8','17','สิงห์บุรี','Sing Buri','2'), ('9','18','ชัยนาท','Chai Nat','2'), ('10','19','สระบุรี','Saraburi','2'), ('11','20','ชลบุรี','Chon Buri','5'), ('12','21','ระยอง','Rayong','5'), ('13','22','จันทบุรี','Chanthaburi','5'), ('14','23','ตราด','Trat','5'), ('15','24','ฉะเชิงเทรา','Chachoengsao','5'), ('16','25','ปราจีนบุรี','Prachin Buri','5'), ('17','26','นครนายก','Nakhon Nayok','2'), ('18','27','สระแก้ว','Sa Kaeo','5'), ('19','30','นครราชสีมา','Nakhon Ratchasima','3'), ('20','31','บุรีรัมย์','Buri Ram','3'), ('21','32','สุรินทร์','Surin','3'), ('22','33','ศรีสะเกษ','Si Sa Ket','3'), ('23','34','อุบลราชธานี','Ubon Ratchathani','3'), ('24','35','ยโสธร','Yasothon','3'), ('25','36','ชัยภูมิ','Chaiyaphum','3'), ('26','37','อำนาจเจริญ','Amnat Charoen','3'), ('27','39','หนองบัวลำภู','Nong Bua Lam Phu','3'), ('28','40','ขอนแก่น','Khon Kaen','3'), ('29','41','อุดรธานี','Udon Thani','3'), ('30','42','เลย','Loei','3'), ('31','43','หนองคาย','Nong Khai','3'), ('32','44','มหาสารคาม','Maha Sarakham','3'), ('33','45','ร้อยเอ็ด','Roi Et','3'), ('34','46','กาฬสินธุ์','Kalasin','3'), ('35','47','สกลนคร','Sakon Nakhon','3'), ('36','48','นครพนม','Nakhon Phanom','3'), ('37','49','มุกดาหาร','Mukdahan','3'), ('38','50','เชียงใหม่','Chiang Mai','1'), ('39','51','ลำพูน','Lamphun','1'), ('40','52','ลำปาง','Lampang','1'), ('41','53','อุตรดิตถ์','Uttaradit','1'), ('42','54','แพร่','Phrae','1'), ('43','55','น่าน','Nan','1'), ('44','56','พะเยา','Phayao','1'), ('45','57','เชียงราย','Chiang Rai','1'), ('46','58','แม่ฮ่องสอน','Mae Hong Son','1'), ('47','60','นครสวรรค์','Nakhon Sawan','2'), ('48','61','อุทัยธานี','Uthai Thani','2'), ('49','62','กำแพงเพชร','Kamphaeng Phet','2'), ('50','63','ตาก','Tak','4'), ('51','64','สุโขทัย','Sukhothai','2'), ('52','65','พิษณุโลก','Phitsanulok','2'), ('53','66','พิจิตร','Phichit','2'), ('54','67','เพชรบูรณ์','Phetchabun','2'), ('55','70','ราชบุรี','Ratchaburi','4'), ('56','71','กาญจนบุรี','Kanchanaburi','4'), ('57','72','สุพรรณบุรี','Suphan Buri','2'), ('58','73','นครปฐม','Nakhon Pathom','2'), ('59','74','สมุทรสาคร','Samut Sakhon','2'), ('60','75','สมุทรสงคราม','Samut Songkhram','2'), ('61','76','เพชรบุรี','Phetchaburi','4'), ('62','77','ประจวบคีรีขันธ์','Prachuap Khiri Khan','4'), ('63','80','นครศรีธรรมราช','Nakhon Si Thammarat','6'), ('64','81','กระบี่','Krabi','6'), ('65','82','พังงา','Phangnga','6'), ('66','83','ภูเก็ต','Phuket','6'), ('67','84','สุราษฎร์ธานี','Surat Thani','6'), ('68','85','ระนอง','Ranong','6'), ('69','86','ชุมพร','Chumphon','6'), ('70','90','สงขลา','Songkhla','6'), ('71','91','สตูล','Satun','6'), ('72','92','ตรัง','Trang','6'), ('73','93','พัทลุง','Phatthalung','6'), ('74','94','ปัตตานี','Pattani','6'), ('75','95','ยะลา','Yala','6'), ('76','96','นราธิวาส','Narathiwat','6'), ('77','97','บึงกาฬ','buogkan','3');
INSERT INTO `register` VALUES ('1',NULL,'','มานิต','จิตต์ประไพย','control','67','F','55','manit.pbac@','0931464976','2022-07-04','07','2022','2','uat','0000-00-00 00:00:00','0000-00-00 00:00:00','0'), ('2',NULL,'','มานิต','จิตต์ประไพย','control','67','F','55','manit.pbac@','0931464976','2022-07-04','07','2022','2','uat','0000-00-00 00:00:00','0000-00-00 00:00:00','0'), ('3',NULL,'','มานิต','จิตต์ประไพย','control','67','','55','manit.pbac@','0931464976','2022-07-04','07','2022','2','uat','2022-07-04 17:17:48','2022-07-04 17:17:48','0'), ('4',NULL,'','มานิต','จิตต์ประไพย','control','67','F','55','manit.pbac@','0931464976','2022-07-04','07','2022','2','uat','2022-07-04 17:17:48','2022-07-04 17:17:48','0'), ('5',NULL,'','มานิต','จิตต์ประไพย','control','32','M','63','manit.pbac@gmail.com','0931464976','2022-07-04','07','2022','2','uat','2022-07-04 17:22:21','2022-07-04 17:22:21','0'), ('6',NULL,'','มานิต','จิตต์ประไพย','control','70','F','63','manit.pbac@gmail.com','0931464976','2022-07-05','07','2022','4','uat','2022-07-05 02:49:06','2022-07-05 02:49:06','0'), ('7',NULL,'','มานิต','จิตต์ประไพย','control','67','F','1','manit.pbac@gmail.com','0931464976','2022-07-05','07','2022','1','uat','2022-07-05 04:01:25','2022-07-05 04:01:25','0'), ('8',NULL,'','มานิต','จิตต์ประไพย','control','70','M','1','manit.pbac@gmail.com','0931464976','2022-07-05','07','2022','3','uat','2022-07-05 04:17:07','2022-07-05 04:17:07','0'), ('9',NULL,'','test','test','control','13','F','1','manit.pbac@gmail.com','0931464976','2022-07-05','07','2022','1','uat','2022-07-05 09:02:13','2022-07-05 09:02:13','0'), ('10',NULL,'','มานิต','จิตต์ประไพย','control','67','F','1','manit.pbac@gmail.com','0931464976','2022-07-05','07','2022','1','uat','2022-07-05 09:12:14','2022-07-05 09:12:14','0'), ('11',NULL,'','มานิต','จิตต์ประไพย','control','67','F','1','manit.pbac@gmail.com','0931464976','2022-07-05','07','2022','1','uat','2022-07-05 09:17:09','2022-07-05 09:17:09','0'), ('12',NULL,'','มานิต','จิตต์ประไพย','control','30','M','63','manit.pbac@gmail.com','0931464976','2022-07-05','07','2022','15','uat','2022-07-05 13:46:10','2022-07-05 13:46:10','0'), ('13',NULL,'','ทดสอบ','ทดสอบนามสกุล','control','60','M','63','manit.pbac@gmail.com','093146476','2022-07-05','07','2022','1','uat','2022-07-05 14:19:28','2022-07-05 14:19:28','0'), ('14',NULL,'','มานิต','จิตต์ประไพย','control',NULL,'F','63','manit.pbac@gmail.com','0931464976','2022-07-05','07','2022','18','uat','2022-07-05 15:17:54','2022-07-05 15:17:54','0'), ('15',NULL,'','มานิต','จิตต์ประไพย','control','67','F','63','manit.pbac@gmail.com','0931464976','2022-07-06','07','2022','1','uat','2022-07-06 08:32:24','2022-07-06 08:32:24','0');
INSERT INTO `testandlimit` VALUES ('1','7','','','','','','','0',NULL,'','','',NULL,NULL,NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00','0','0'), ('2','8','','ครศรีธรรมราช','จียงกรม เที่ยง','20220705_042834_7f63d7d0eded577c5ecb7bf29b42a914.wav','20220705_041926_b36d12400ea11dcf9859eb304b6fc874.wav','20220705_041953_cd947c0978684ff1bbfb12660c21e2f0.wav','0',NULL,'','','',NULL,NULL,NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00','0','0'), ('3','9','','','','20220705_090350_11c11e1fb233ba89d0a6b3910fb27712.wav','20220705_090416_a99a4502610dc35a09f9538cf38a92dd.wav','20220705_090442_1f30b5c8af378ba96fe1960e0987a10d.wav','0',NULL,'','','',NULL,NULL,NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00','0','0'), ('4','10','ผลไม้','','','20220706_081934_5034a5bcfc2074bbc3b1059580c497e2.wav','','','1',NULL,'','','',NULL,NULL,NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00','0','0'), ('5','12','พี่','นครศรีธรรมราช','7:00 น','20220705_134758_53c2140ce1f6629a68cbc12c5a89fdd0.wav','20220705_134812_9d1182546b8ab3bfdf57a953b463a3bf.wav','20220705_134827_bcf39175506bd98276777912af9d039b.wav','3',NULL,'','','',NULL,NULL,NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00','0','0'), ('6','13','15 นาที','กรุงเทพมหานคร','8:00 น','20220705_142410_e813c1a513b83e908e6d9861189768c4.wav','20220705_142424_85efa0f72b0799873431450b1bbf2d7b.wav','20220705_142439_bcfb6755a380e962e069544ce6fb187b.wav','3',NULL,'','','',NULL,NULL,NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00','0','0'), ('7','1','เก้าปี','ละครสี่','ทุ่มสี่สิบห้า','20220706_082236_03f01fef8a8a3850daf0a9a3953926e4.wav','20220706_074832_c14f5d26863b99a96a1286b7e4c3c0da.wav','20220706_074854_29e9f5fab5c82a5c75728ab6cf9f853a.wav','0',NULL,'','','',NULL,NULL,NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00','0','0');
INSERT INTO `user` VALUES ('1','admin','Administrator','JttHBY87iSJk_vxIm3wqKlTvJ3Uui6HX','$2y$13$b63yhATEfYyNXeRWW066iOZFJF8YU9IcjxN3ajPJbAkpv.BdHudmi',NULL,'admin@admin.com','10','10','2022','0',NULL), ('2','demo','Demostration','FuF2blP5VQrfLURJh9p6wWYzBml1tB3o','$2y$13$pyz21siWEyC30a5LC6W/rus1xcaPWDTxCnEBCDlMZcfqSYZRtl2m6',NULL,'demo@admin.com','1','10','2022','0',NULL);
