CREATE DATABASE IF NOT EXISTS artime365 default charset utf8 COLLATE utf8_general_ci;
use artime365;


--
-- 音频表
--
DROP TABLE IF EXISTS `tbl_audio`;
CREATE TABLE IF NOT EXISTS `tbl_audio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL DEFAULT '0' COMMENT '用户ID',
  `url` varchar(300) NOT NULL COMMENT 'url',
  `created` datetime NOT NULL COMMENT '发表时间',
  `createdip` varchar(16) DEFAULT '0.0.0.0' COMMENT '提交IP',
  PRIMARY KEY (`id`)
) DEFAULT CHARSET=utf8;

insert into tbl_audio (userid, url, created) values (1, 'http://www.jd.com', '2017-06-05');