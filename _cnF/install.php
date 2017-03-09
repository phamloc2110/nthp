<?php
include("_star_cn_F.php");
##  --> Tแบกo database  <-- ##
// --> Table Token <--
mysql_query("CREATE TABLE IF NOT EXISTS `tokenandroid` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idfb` varchar(32)  NOT NULL,
  `ten` varchar(32)  NOT NULL,
  `token` varchar(255)  NOT NULL,
  PRIMARY KEY (`id`)
 ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
");
// --> Table Token <--
mysql_query("CREATE TABLE IF NOT EXISTS `tokeniphone` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idfb` varchar(32)  NOT NULL,
  `ten` varchar(32)  NOT NULL,
  `token` varchar(255)  NOT NULL,
  PRIMARY KEY (`id`)
 ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
");
// --> Table Token <--
mysql_query("CREATE TABLE IF NOT EXISTS `tokenios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idfb` varchar(32)  NOT NULL,
  `ten` varchar(32)  NOT NULL,
  `token` varchar(255)  NOT NULL,
  PRIMARY KEY (`id`)
 ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
");
// --> Table Token <--
mysql_query("CREATE TABLE IF NOT EXISTS `tokenhtc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idfb` varchar(32)  NOT NULL,
  `ten` varchar(32)  NOT NULL,
  `token` varchar(255)  NOT NULL,
  PRIMARY KEY (`id`)
 ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
");
// --> Table Token <--
mysql_query("CREATE TABLE IF NOT EXISTS `tokenvip` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idfb` varchar(32)  NOT NULL,
  `ten` varchar(32)  NOT NULL,
  `token` varchar(255)  NOT NULL,
  PRIMARY KEY (`id`)
 ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
");
// --> Table Vip <--
mysql_query("CREATE TABLE IF NOT EXISTS `TAIKHOAN` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idfb` varchar(32) NOT NULL,
  `ten` varchar(32)  NOT NULL,
  `vnd` int(11) NOT NULL,
  `luotgioithieu` int(11) NOT NULL,
  PRIMARY KEY (`id`)
 ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
");
// --> Table Log <--
mysql_query("CREATE TABLE IF NOT EXISTS `LogBotTraLike` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idstt` varchar(1024) NOT NULL,
  `idngta` varchar(1024) NOT NULL,
  `idsttngta` varchar(1024) NOT NULL,
  `ten` varchar(1024) NOT NULL,
  `noidung` varchar(1024) NOT NULL,
  PRIMARY KEY (`id`)
 ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
");
// --> Table Token <--
mysql_query("CREATE TABLE IF NOT EXISTS `BotTraLike` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idfb` varchar(32)  NOT NULL,
  `ten` varchar(32)  NOT NULL,
  `token` varchar(255)  NOT NULL,
  PRIMARY KEY (`id`)
 ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
");
// --> Table Vip <--
mysql_query("CREATE TABLE IF NOT EXISTS `BLOCK` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idfb` varchar(32) NOT NULL,
  `thoigian` int(11) NOT NULL,
  PRIMARY KEY (`id`)
 ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
");
// --> Table Token <--
mysql_query("CREATE TABLE IF NOT EXISTS `SimCmtFeed` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idfb` varchar(32)  NOT NULL,
  `ten` varchar(32)  NOT NULL,
  `token` varchar(255)  NOT NULL,
  PRIMARY KEY (`id`)
 ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
");
// --> Table Token <--
mysql_query("CREATE TABLE IF NOT EXISTS `SimCmt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idfb` varchar(32)  NOT NULL,
  `ten` varchar(32)  NOT NULL,
  `token` varchar(255)  NOT NULL,
  `vip` varchar(32)  NOT NULL,
  PRIMARY KEY (`id`)
 ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
");
// --> Table Token <--
mysql_query("CREATE TABLE IF NOT EXISTS `VIP` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idfb` varchar(32)  NOT NULL,
  `ten` varchar(32)  NOT NULL,
  `level` varchar(32)  NOT NULL,
  `time` int(11)  NOT NULL,
  `timemua` int(11)  NOT NULL,
  PRIMARY KEY (`id`)
 ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
");


// --> Table Token <--
mysql_query("CREATE TABLE IF NOT EXISTS `GIOITHIEU` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idfb` varchar(32) NOT NULL,
  `ten` varchar(32) NOT NULL,
  `idgt` varchar(32) NOT NULL,
  `tengt` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=0 ;
");

// --> Table Token <--
mysql_query("CREATE TABLE IF NOT EXISTS `BotLike` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idfb` varchar(32)  NOT NULL,
  `token` varchar(255)  NOT NULL,
  `likecmt` varchar(32)  NOT NULL,
  `ten` varchar(32)  NOT NULL,
  PRIMARY KEY (`id`)
 ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
");
// --> Table Token <--
mysql_query("CREATE TABLE IF NOT EXISTS `BotEx` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idfb` varchar(32)  NOT NULL,
  `token` varchar(255)  NOT NULL,
  `likecmt` varchar(32)  NOT NULL,
  `ten` varchar(32)  NOT NULL,
  PRIMARY KEY (`id`)
 ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
");
// --> Table Token <--
mysql_query("CREATE TABLE IF NOT EXISTS `BotExLove` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idfb` varchar(32)  NOT NULL,
  `token` varchar(255)  NOT NULL,
  `likecmt` varchar(32)  NOT NULL,
  `ten` varchar(32)  NOT NULL,
  PRIMARY KEY (`id`)
 ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
");
// --> Table Token <--
mysql_query("CREATE TABLE IF NOT EXISTS `BotCamsuc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idfb` varchar(32)  NOT NULL,
  `token` varchar(255)  NOT NULL,
  `camsuc` varchar(32)  NOT NULL,
  `likecmt` varchar(32)  NOT NULL,
  `ten` varchar(32)  NOT NULL,
  PRIMARY KEY (`id`)
 ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
");
// --> Table Token <--
mysql_query("CREATE TABLE IF NOT EXISTS `BotCmt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idfb` varchar(32)  NOT NULL,
   `token` varchar(255)  NOT NULL,
  `bieutuong` varchar(32)  NOT NULL,
  `quangcao` varchar(32)  NOT NULL,
  `ten` varchar(32)  NOT NULL,
  PRIMARY KEY (`id`)
 ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
");
mysql_query("CREATE TABLE IF NOT EXISTS `LogSimCmt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(255) NOT NULL,
  `idstt` varchar(32) NOT NULL,
  `noidungcmt` varchar(255) NOT NULL,
  `idngta` varchar(255) NOT NULL,
  `tenngta` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
");
mysql_query("CREATE TABLE IF NOT EXISTS `LogSimFeed` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(32) NOT NULL,
  `idstt` varchar(32) NOT NULL,
  `noidungcmt` varchar(1025) NOT NULL,
  `tenngta` varchar(255) NOT NULL,
  `idngta` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
");
mysql_query("CREATE TABLE IF NOT EXISTS `shout_box` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(60) NOT NULL,
  `user_id` varchar(60) NOT NULL,
  `message` varchar(1024) NOT NULL,
  `date_time` varchar(100) NOT NULL,
  `ip_address` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
");
?>