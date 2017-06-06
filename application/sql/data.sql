CREATE DATABASE IF NOT EXISTS artime365 default charset utf8 COLLATE utf8_general_ci;
use artime365;


--
-- 音频表
--
DROP TABLE IF EXISTS `tbl_audio`;
CREATE TABLE IF NOT EXISTS `tbl_audio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `count_id` int(11) NOT NULL DEFAULT '0' COMMENT '计数ID',
  `url` varchar(300) NOT NULL COMMENT 'url',
  `code_url` varchar(100) NOT NULL DEFAULT '' COMMENT '二维码url',
  `count_id_md5` varchar(32) NOT NULL DEFAULT '' COMMENT '计数器IDMd5加密',
  PRIMARY KEY (`id`)
) DEFAULT CHARSET=utf8;

insert into tbl_audio (count_id, url) values (1000, 'http://www.jd.com');
insert into tbl_audio (count_id, url) values (1001, 'http://www.jd.com');


