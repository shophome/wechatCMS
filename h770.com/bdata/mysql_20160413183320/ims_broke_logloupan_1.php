<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.0
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ims_broke_logloupan`;");
E_C("CREATE TABLE `ims_broke_logloupan` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `weid` int(10) unsigned NOT NULL,
  `from_user` varchar(50) NOT NULL,
  `lid` int(10) unsigned NOT NULL,
  `createtime` int(10) NOT NULL COMMENT '时间戳格式',
  `createtime1` varchar(20) NOT NULL COMMENT '日期格式',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>