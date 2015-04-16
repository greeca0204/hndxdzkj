-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 04 月 11 日 12:49
-- 服务器版本: 5.5.20
-- PHP 版本: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `sq_gztranstar`
--

-- --------------------------------------------------------

--
-- 表的结构 `tb_admin`
--

CREATE TABLE IF NOT EXISTS `tb_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) COLLATE utf8_bin NOT NULL,
  `password` varchar(50) COLLATE utf8_bin NOT NULL,
  `checked` int(11) NOT NULL,
  `pwd` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`, `checked`, `pwd`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 'admin');

-- --------------------------------------------------------

--
-- 表的结构 `tb_advertise`
--

CREATE TABLE IF NOT EXISTS `tb_advertise` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_bin NOT NULL,
  `imgurl` varchar(255) COLLATE utf8_bin NOT NULL,
  `contenturl` varchar(255) COLLATE utf8_bin NOT NULL,
  `checked` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `tb_advertise`
--

INSERT INTO `tb_advertise` (`id`, `title`, `imgurl`, `contenturl`, `checked`) VALUES
(1, '广告1', 'upload/20130606/20130606063301_03429.jpg', '', 1);

-- --------------------------------------------------------

--
-- 表的结构 `tb_classes`
--

CREATE TABLE IF NOT EXISTS `tb_classes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `classname` varchar(50) COLLATE utf8_bin NOT NULL,
  `cid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=24 ;

--
-- 转存表中的数据 `tb_classes`
--

INSERT INTO `tb_classes` (`id`, `classname`, `cid`) VALUES
(1, '新闻动态', 0),
(2, '公司新闻', 1),
(3, '技术动态', 1),
(4, '行业新闻', 1),
(5, '解决方案', 0),
(6, '成功案例', 0),
(10, '关于我们', 0),
(11, '公司简介', 10),
(12, '组织结构', 10),
(13, '公司材料', 10),
(14, '资质证书', 10),
(15, '公司奖项', 10),
(16, '知识产权', 10),
(17, '诚聘英才', 0);

-- --------------------------------------------------------

--
-- 表的结构 `tb_friends`
--

CREATE TABLE IF NOT EXISTS `tb_friends` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `friends` varchar(50) COLLATE utf8_bin NOT NULL,
  `url` varchar(255) COLLATE utf8_bin NOT NULL,
  `logo` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tb_link`
--

CREATE TABLE IF NOT EXISTS `tb_link` (
  `id` int(11) NOT NULL,
  `website` varchar(100) COLLATE utf8_bin NOT NULL,
  `comname` varchar(50) COLLATE utf8_bin NOT NULL,
  `keyword` varchar(255) COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `negotiator` varchar(50) COLLATE utf8_bin NOT NULL,
  `address` varchar(255) COLLATE utf8_bin NOT NULL,
  `postcode` varchar(10) COLLATE utf8_bin NOT NULL,
  `tel` varchar(20) COLLATE utf8_bin NOT NULL,
  `tel2` varchar(20) COLLATE utf8_bin NOT NULL,
  `tel3` varchar(20) COLLATE utf8_bin NOT NULL,
  `tel4` varchar(20) COLLATE utf8_bin NOT NULL,
  `fax` varchar(20) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `copyright` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `tb_link`
--

INSERT INTO `tb_link` (`id`, `website`, `comname`, `keyword`, `description`, `negotiator`, `address`, `postcode`, `tel`, `tel2`, `tel3`, `tel4`, `fax`, `email`, `copyright`) VALUES
(1, '蝶讯电子', '湖南蝶讯电子科技有限公司', '蝶讯电子', '蝶讯电子', '', '', '', '', '', '', '', '', '', '版权所有 © 湖南蝶讯电子科技有限公司');

-- --------------------------------------------------------

--
-- 表的结构 `tb_lyb`
--

CREATE TABLE IF NOT EXISTS `tb_lyb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE utf8_bin NOT NULL,
  `tel` varchar(20) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `topic` varchar(255) COLLATE utf8_bin NOT NULL,
  `content` text COLLATE utf8_bin NOT NULL,
  `addtime` varchar(50) COLLATE utf8_bin NOT NULL,
  `checked` int(11) NOT NULL,
  `reply` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tb_news`
--

CREATE TABLE IF NOT EXISTS `tb_news` (
  `nid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_bin NOT NULL,
  `author` varchar(50) COLLATE utf8_bin NOT NULL,
  `addtime` varchar(50) COLLATE utf8_bin NOT NULL,
  `content` text COLLATE utf8_bin NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`nid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=67 ;

--
-- 转存表中的数据 `tb_news`
--

INSERT INTO `tb_news` (`nid`, `title`, `author`, `addtime`, `content`, `type`) VALUES
(1, '公司简介', '运星科技', '1368110282', '<div class="comintro">\r\n	<p>\r\n		<br />\r\n	</p>\r\n</div>', 11),
(2, '组织结构', '', '1368110458', '', 12),
(3, '市场营销总监、副总监', '运星科技', '1368190841', '<p class="jobtitle">\r\n	岗位职责\r\n</p>\r\n<p>\r\n	1、高层管理职位，协助决策层制定公司品牌发展战略，负责其功能领域内短期及长期的公司品牌决策和战略，对公司中长期目标的达成产生重要影响；\r\n</p>\r\n<p>\r\n	2、负责策划公司品牌年度市场工作目标和营销方案；\r\n</p>\r\n<p>\r\n	3、负责开拓市场业务，进行相关的宣传推广，包括管理以及进度的推进，建立公司的市场运作体制；\r\n</p>\r\n<p>\r\n	4、分析和预测销售市场、把握市场趋势，为决策提供准确的相关信息，开拓和发展销售市场；\r\n</p>\r\n<p>\r\n	5、规划和管理市场活动的预算，合理有效、最大限度地使用预算执行广告和市场活动。\r\n</p>\r\n<p>\r\n	&nbsp;\r\n</p>\r\n<p class="jobtitle">\r\n	岗位要求\r\n</p>\r\n<p>\r\n	1、具有3年以上市场营销经验，和较好的工作业绩，具有交通行业从业背景，对该领域市场发展有深刻理解；\r\n</p>\r\n<p>\r\n	2、具备很强的策划能力，熟悉各类媒体运作方式，有大型市场活动推广成功经验；\r\n</p>\r\n<p>\r\n	3、具有敏感的商业和市场意识，分析问题及解决问题能力强，具有优秀的资源整合能力和业务推进能力；\r\n</p>\r\n<p>\r\n	4、具备良好的沟通合作技巧及丰富的团队建设经验。\r\n</p>', 17),
(4, '销售经理', '运星科技', '1368190841', '<p class="jobtitle">\r\n	岗位职责\r\n</p>\r\n<p>\r\n	1、销售管理职位，从事企事业的营销工作。\r\n</p>\r\n<p>\r\n	2、制定、参与或协助上层执行相关的政策和制度；负责领域内主要目标和计划\r\n</p>\r\n<p>\r\n	3、负责部门的日常管理工作及部门员工的管理、指导、培训及评估；\r\n</p>\r\n<p>\r\n	4、负责组织行业或区域的销售运作，包括计划、组织、进度控制和检讨；\r\n</p>\r\n<p>\r\n	5、设置销售目标、销售模式、销售战略、销售预算和奖励计划；\r\n</p>\r\n<p>\r\n	6、建立和管理销售队伍，完成销售目标；\r\n</p>\r\n<p>\r\n	7、从销售和客户需求的角度，对产品的研发提供指导性建议。\r\n</p>\r\n<p>\r\n	&nbsp;\r\n</p>\r\n<p class="jobtitle">\r\n	岗位要求\r\n</p>\r\n<p>\r\n	1、有2年以上销售工作经验；有较好的管理能力和人际沟通能力和团队协作精神。\r\n</p>\r\n<p>\r\n	2、具有丰富的客户资源和客户关系，业绩优秀；\r\n</p>\r\n<p>\r\n	3、具备较强的市场分析、营销、推广能力和良好的人际沟通、协调能力，分析和解决问题的能力；\r\n</p>\r\n<p>\r\n	4、工作能力强，有较强的事业心，具备一定的领导能力；\r\n</p>\r\n<p>\r\n	&nbsp;\r\n</p>', 17),
(5, '工程技术员', '运星科技', '1368190841', '<p class="jobtitle">\r\n	岗位职责\r\n</p>\r\n<p>\r\n	1、负责公司产品的焊接、组装、调试及相关设备的维护；\r\n</p>\r\n<p>\r\n	2、相关项目的现场施工；\r\n</p>\r\n<p>\r\n	3、根据公司统一制定的工程施工方案、工程建设方案等，结合项目具体情况和客户需求，制定项目方案；\r\n</p>\r\n<p>\r\n	4、根据项目工作者或事业部经理为客户提供产品、方案的演讲和培训；\r\n</p>\r\n<p>\r\n	&nbsp;\r\n</p>\r\n<p class="jobtitle">\r\n	岗位要求\r\n</p>\r\n<p>\r\n	1、男，18~40岁，大专以上学历，计算机、电子电机、自动控制、基建工程等相关专业毕业，能接受出差安排；\r\n</p>\r\n<p>\r\n	2、责任心强，积极乐观，具有较强的现场处理和应变能力；\r\n</p>\r\n<p>\r\n	3、在弱电和绳工程方面有一定的实践经验，和实际动手操作能力，会使用烙铁等硬件生产工具，熟悉项目工程施工的操作流程；\r\n</p>\r\n<p>\r\n	4、能熟练对设备的管理、维护、保养；\r\n</p>\r\n<p>\r\n	5、熟练计算机的使用，熟悉各种办公软件以及PROTEL等设计软件的基本操作；熟悉电脑硬件原理和操作系统的修改定制；\r\n</p>\r\n<p>\r\n	6、具备智能交通知识及相关项目工程安装经验者优先考虑；\r\n</p>\r\n<p>\r\n	7、有1年以上相关工作经验者优先考虑。\r\n</p>\r\n<p>\r\n	&nbsp;\r\n</p>', 17),
(6, '工程技术实习生', '运星科技', '1368190841', '<p class="jobtitle">\r\n	岗位职责\r\n</p>\r\n<p>\r\n	1、负责公司产品的焊接、组装、调试及相关设备的维护；\r\n</p>\r\n<p>\r\n	2、相关项目的现场施工；\r\n</p>\r\n<p>\r\n	3、根据公司统一制定的工程施工方案、工程建设方案等，结合项目具体情况和客户需求，制定项目方案；\r\n</p>\r\n<p>\r\n	4、根据项目工作者或事业部经理为客户提供产品、方案的演讲和培训；\r\n</p>\r\n<p>\r\n	&nbsp;\r\n</p>\r\n<p class="jobtitle">\r\n	岗位要求\r\n</p>\r\n<p>\r\n	1、2013届应届生，大专以上学历，计算机、基建工程等相关专业，实习期至少3个月；能接受出差安排；\r\n</p>\r\n<p>\r\n	2、责任心强，具有较强的应变能力、合作精神；\r\n</p>\r\n<p>\r\n	3、具备一定的动手能力，会使用相关的硬件生产工具；\r\n</p>\r\n<p>\r\n	4、熟悉各种办公软件以及PROTEL等设计软件的基本操作；熟悉电脑硬件原理和操作系统的修改定制；\r\n</p>\r\n<p>\r\n	5、表现优秀者可转为正式员工。\r\n</p>\r\n<p>\r\n	&nbsp;\r\n</p>', 17),
(7, '电子工程师', '运星科技', '1368190841', '<p class="jobtitle">\r\n	岗位职责\r\n</p>\r\n<p>\r\n	1.负责公司相关产品的原理图设计、PCB绘制、硬件调试以及代码编程，参与元器件的选型，以及参与硬件研发项目管理；\r\n</p>\r\n<p>\r\n	2.相关文档编写等。\r\n</p>\r\n<p>\r\n	&nbsp;\r\n</p>\r\n<p class="jobtitle">\r\n	岗位要求\r\n</p>\r\n<p>\r\n	1.电子、通信、计算机、自动化类大专以上学历。要求能够立即上岗，有实际的产品开发及管理规范者优先；\r\n</p>\r\n<p>\r\n	2. 精通模拟和数字电子技术原理并且能进行电路的设计和调试，精通使用一种或一种以上的EAD软件（如protel99，DXP，Powerpcb等）；\r\n</p>\r\n<p>\r\n	3. 精通51、AVR、PIC或者ARM中一种或多种单片机，以及具备扎实的C语言硬件底层软件代码编程功底，有嵌入式底层驱动开发经验者优先；\r\n</p>\r\n<p>\r\n	4. 熟悉电子元件知识，掌握常用电子元器件、电子组件的用途、参数、性能要求；\r\n</p>\r\n<p>\r\n	5. 具备较好的烙铁焊接能力，并熟悉常用电子仪表的使用；\r\n</p>\r\n<p>\r\n	6. 具有自我激励和良好的团队协作能力，能独立完成工作；\r\n</p>\r\n<p>\r\n	7. 具有良好的逻辑思维能力和沟通能力；\r\n</p>\r\n<p>\r\n	8. 具有良好的语言表达和文档撰写能力，以及良好的英语阅读能力。\r\n</p>\r\n<p>\r\n	&nbsp;\r\n</p>', 17),
(8, '软件开发工程师', '运星科技', '1368190841', '<p class="jobtitle">\r\n	岗位职责\r\n</p>\r\n<p>\r\n	1. 协助制定和分析产品的需求，进行系统架构的设计、软件界面设计和功能模块的代码实现；\r\n</p>\r\n<p>\r\n	2.核心算法设计及改进、通信协议设计，以及第三方库或算法的移植实现；\r\n</p>\r\n<p>\r\n	3.参与和组织相关开发工程师进行各个模块的设计，指导小组成员有计划的进行工作；\r\n</p>\r\n<p>\r\n	4.需求分析、技术开发报告、测试报告等相关文档的编写。\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p class="jobtitle">\r\n	岗位要求\r\n</p>\r\n<p>\r\n	1.本科以上学历，熟悉C/C++编程，有2年以上软件开发工作经验；\r\n</p>\r\n<p>\r\n	2.有较强的数据处理和分析能力, 较强的逻辑思维能力,能够胜任算法设计及编码的工作；\r\n</p>\r\n<p>\r\n	3. 熟练使用VisualStudio进行程序开发，熟悉MFC程序开发。\r\n</p>\r\n<p>\r\n	4.有良好的开发和代码编写习惯，具有主动思考问题，发现问题和解决问题的能力，有较强的团队意识和主动性；\r\n</p>\r\n<p>\r\n	5.具有良好的语言表达和文档撰写能力，并能阅读和理解英文资料。\r\n</p>\r\n<p>\r\n	6.有如下条件者优先：同时具备C++/ C#开发能力者；具有嵌入式linux/wince项目经历；有数据库Mysql/Oracle项目经历；有视频图像处理相关经验。\r\n</p>\r\n<p>\r\n	<br />\r\n</p>', 17),
(9, '文员', '运星科技', '1368190841', '<p class="jobtitle">\r\n	岗位职责\r\n</p>\r\n<p>\r\n	1、档案资料的汇总、整理、归档等等；\r\n</p>\r\n<p>\r\n	2、负责电话的接听与转接；\r\n</p>\r\n<p>\r\n	3、负责客户的咨询与答复，维护好客户关系；\r\n</p>\r\n<p>\r\n	4、完成部门主管其他工作安排。\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p class="jobtitle">\r\n	岗位要求\r\n</p>\r\n<p>\r\n	1、大专以上学历；\r\n</p>\r\n<p>\r\n	2、性格好，20-30岁，女性；\r\n</p>\r\n<p>\r\n	3、工作仔细认真、责任心强、为人正直；\r\n</p>\r\n<p>\r\n	4、熟悉公文写作格式，熟练运用OFFICE等办公软件，具备较强的书面和口头表达能力；\r\n</p>\r\n<p>\r\n	5、有相关工作经验，文秘、行政管理等相关专业优先；\r\n</p>\r\n<p>\r\n	6、有整理合同、报价、标书等工作经验者优先，或者经过短期培训能掌握该项技能者优先。\r\n</p>\r\n<p>\r\n	7.有一定的美工水平，懂得管理网页。\r\n</p>\r\n<p>\r\n	<br />\r\n</p>', 17),
(10, '系统集成领域', '运星科技', '1368192239', '<p>\r\n	1、中国智能交通系统社会环境体系建设，国家“十五” 科技攻关重大项目\r\n</p>\r\n<p>\r\n	2、国家“十五”ITS培训中心 -- 华南分中心建设\r\n</p>\r\n<p>\r\n	3、广东科学中心C标 -- “交通世界”展馆展品设计与制造承建，广东省“十五”重大招标项目\r\n</p>\r\n<p>\r\n	4、智能交通系统关键技术开发和应用示范工程 -- 专用短程通信设备开发，“十五”国家科技攻关项目\r\n</p>\r\n<p>\r\n	5、广东省公路交通量数据采集与处理技术研究\r\n</p>\r\n<p>\r\n	6、基于视频检测的关联交叉口群智能控制系统的研究及实现，广东省“十五”攻关项目\r\n</p>\r\n<p>\r\n	7、自适应交通信号控制软件系统开发，广州市“十五”攻关项目\r\n</p>\r\n<p>\r\n	8、广东省电子不停车收费系统，广东省交通厅重大工程项目\r\n</p>\r\n<p>\r\n	9、广州市城市桥梁管理信息系统（GZMBMX）研究、开发与应用\r\n</p>\r\n<p>\r\n	10、206国道改造丰顺莲花山隧道监控系统软件委托开发\r\n</p>\r\n<p>\r\n	11、京珠高速公路甘塘至翁城段隧道监控系统软件\r\n</p>\r\n<p>\r\n	12、广东省高速公路数据库系统\r\n</p>\r\n<p>\r\n	13、佛开高速公路收费管理系统\r\n</p>\r\n<p>\r\n	14、广珠高速公路交通流量调查分析与预测\r\n</p>\r\n<p>\r\n	15、广州市交通违章拍摄系统工程\r\n</p>\r\n<p>\r\n	16、东莞市虎门交通信号协调控制系统工程\r\n</p>\r\n<p>\r\n	17、长沙市视频电子警察系统工程\r\n</p>\r\n<p>\r\n	18、宁波市视频电子警察系统工程\r\n</p>\r\n<p>\r\n	19、江西省鹰潭市信号灯控制系统和视频电子警察系统工程\r\n</p>\r\n<p>\r\n	20、江西省贵溪市视频电子警察系统和信号灯控制系统工程\r\n</p>\r\n<p>\r\n	21、江西省鹰潭市智能交通管理指挥系统工程\r\n</p>\r\n<p>\r\n	22、中石化广东分公司成品油配送监控调度管理系统\r\n</p>\r\n<p>\r\n	23、中山市中驾运营车辆监控系统\r\n</p>\r\n<p>\r\n	24、广东省公路局夏元检测站交通数据采集分析系统\r\n</p>\r\n<p>\r\n	25、广州市钟落潭检测站交通数据采集分析系统\r\n</p>\r\n<p>\r\n	26、广州市龙归检测站交通数据采集分析系统\r\n</p>\r\n<p>\r\n	27、厦门市仙岳隧道交通流采集系统工程\r\n</p>\r\n<p>\r\n	28、厦门市一期智能交通系统之交通流采集子系统工程\r\n</p>\r\n<p>\r\n	29、京珠北高速公路温泉隧道视频交通事件检测系统\r\n</p>', 7),
(11, '设计咨询领域', '运星科技', '1368192279', '<p>\r\n	1、国家“十五”ITS示范工程项目－广州市智能交通系统应用试点示范工程\r\n</p>\r\n<p>\r\n	2、广州市“十五”智能交通系统示范工程试点城市发展规划\r\n</p>\r\n<p>\r\n	3、国家“十五”科技攻关计划项目“智能交通系统关键技术开发和示范工程”-深圳市智能交通系统应用试点示范工程\r\n</p>\r\n<p>\r\n	4、国家“十五”ITS示范工程项目 - 深圳市现代物流信息系统技术方案\r\n</p>\r\n<p>\r\n	5、深圳市智能交通系统应用示范工程-深圳市现代物流信息系统项目技术报告编制\r\n</p>\r\n<p>\r\n	6、深圳市交通运输信息化发展总体规划\r\n</p>\r\n<p>\r\n	7、厦门市道路智能交通管理系统一期工程总体方案设计\r\n</p>\r\n<p>\r\n	8、佛山市一环快速路智能交通系统总体设计方案\r\n</p>\r\n<p>\r\n	9、鹰潭市交通管理指挥系统总体设计\r\n</p>\r\n<p>\r\n	10、杭州市智能交通系统技术方案研究\r\n</p>\r\n<p>\r\n	11、佛山市“十一五”规划课题-佛山市城市交通问题研究\r\n</p>\r\n<p>\r\n	12、佛山市公安局信号控制系统评价验收项目\r\n</p>\r\n<p>\r\n	13、佛山市公安局电子警察系统评价验收项目\r\n</p>\r\n<p>\r\n	14、佛山市电子警察系统咨询设计项目\r\n</p>\r\n<p>\r\n	15、佛山市南海交通违法拍摄系统勘测咨询和监理项目\r\n</p>\r\n<p>\r\n	16、广州市智能交通系统亚运（“十一五”）发展规划研究\r\n</p>\r\n<p>\r\n	17、广州市ITS共用信息平台数据融合技术攻关及应用示范\r\n</p>\r\n<p>\r\n	18、中山市ITS可行性研究及ITS总体规划\r\n</p>\r\n<p>\r\n	19、深圳市综合交通信息平台规划研究\r\n</p>\r\n<p>\r\n	20、深圳市智能交通系统应用示范工程－深圳市现代物流信息系统项目技术报告编制\r\n</p>\r\n<p>\r\n	21、广州市城市交通改善实施方案研究TOR编制及广州市城市交通改善实施方案研究实施过过程中的国内咨询TOR编制\r\n</p>\r\n<p>\r\n	22、广州市中心区交通项目之交通需求、停车管理及内环路对周边地区经济发展影响的综合评议\r\n</p>\r\n<p>\r\n	23、东莞市虎门镇中心商贸区交通设计\r\n</p>\r\n<p>\r\n	24、广东省高速公路ITS项目的决策及评价体系研究\r\n</p>\r\n<p>\r\n	25、广东省高速公路ITS发展战略规划研究\r\n</p>\r\n<p>\r\n	26、广州开发区公共交通规划及近期实施方案研究\r\n</p>\r\n<p>\r\n	27、环城高速公路指路标志系统改善方案研究\r\n</p>\r\n<p>\r\n	28、广州市中心区道路交通紧急救援系统研究\r\n</p>', 8),
(12, '交通实验室领域', '运星科技', '1368192331', '<p style="text-indent:2em;">\r\n	感恩社会，回报教育。运星科技从2003年进入交通实验室建设的市场，立足于交通工程的建设经验和高校实际教学方向相结合，并开发了一系列的产品，成为目前国内最专业的交通实验室设备制造商。\r\n</p>\r\n<p style="text-indent:2em;">\r\n	运星科技拥有目前国内交通实验室设备行业最庞大的用户群体，目前市场覆盖率已达到70%以上。多款产品已成为全国高等级院校、高职高专、中专、职高及教培中心等交通实验室的首选品牌。\r\n</p>\r\n<p style="text-indent:2em;">\r\n	运星科技在发展的路上一直十分重视国内智能交通人才建设的培养，有针对性的为各所院校量身打造专业而又实用的交通实验室，并伴随教学需求，不断进行合理完善与升级。多年来运星科技与国内多家院校建立了共建实训室项目，为学校培养专业的交通人才。\r\n</p>\r\n<p align="center">\r\n	<img alt="" src="/kindeditor/attached/image/20130610/20130610145846_29234.jpg" />\r\n</p>', 9),
(13, '资质证书', '运星科技', '1368192427', '<p>\r\n	<img src="/hndxdzkj/kindeditor/attached/image/20150411/20150411122922_16748.jpg" width="250" height="203" alt="" /><span style="white-space:normal;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span>&nbsp;<img src="/hndxdzkj/kindeditor/attached/image/20150411/20150411122922_16748.jpg" width="250" height="203" alt="" style="white-space:normal;" /> \r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<img src="/hndxdzkj/kindeditor/attached/image/20150411/20150411122922_16748.jpg" width="250" height="203" alt="" style="white-space:normal;" />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img src="/hndxdzkj/kindeditor/attached/image/20150411/20150411122922_16748.jpg" width="250" height="203" alt="" style="white-space:normal;" /> \r\n</p>', 14),
(14, '公司奖项', '', '1368194932', '<div class="gscl_text">\r\n	<p>\r\n		<br />\r\n	</p>\r\n</div>', 15),
(15, '知识产权', '', '1368194969', '', 16),
(16, '湖南交通职业技术学院交通安全与智能控制专业实训室建设', '运星科技', '1368276521', '<p style="text-indent:2em;">\r\n	<span style="font-size:16px;">湖南交通职业技术学院交通安全与智能控制专业实训室工程建设项目由交通监控实训室、交通收费实训室、交通安全实训室三个实训室建设项目成。</span>\r\n</p>\r\n<p style="text-indent:2em;">\r\n	<span style="font-size:16px;">该项目采用先进的智能分析技术、信息安全技术、集群管理技术、网络技术、流媒体技术等技术，集成模拟收费站与路分中心视频监控、车辆检测、气象分析、数据传输、通讯系统、信息发布、隧道监控特殊部分、GPS管理、交通安全、交通系统沙盘部分等模块，采用积木式结构，可根据实际应用需求进行组合，平台可进行多级联网、集中管理、信息共享、互联互动。</span>\r\n</p>\r\n<p style="text-indent:2em;">\r\n	<span style="font-size:16px;">根据高职类院校和本专业的特点，此次的实训室工程建设，主要实现的功能是通过实训过程，培养面向交通安全与智能控制工作第一线，组织纪律、安全意识、质量意识、敬业精神和团队协作精神强，具有必备的基础理论知识和专业技能，获得相应职业资格证书，具有较强的现场操作能力、创新能力和可持续发展能力，精系统集成与维护、懂技术管理、会设备操作的高素质技能型专门人才。</span>\r\n</p>\r\n<p style="text-indent:2em;">\r\n	<span style="font-size:16px;">该项目已于2010年7月30日全部竣工，并与2010年8月5日通过了湖南交通职业技术学院的竣工验收。</span>\r\n</p>\r\n<p style="text-indent:2em;">\r\n	<span style="font-size:16px;">2010年9月4日，湖南省人民政府党组成员、教育厅厅长张放平，省委组织部副部长李宗文，省交通运输厅厅长吴亚中等领导一行在学院领导的陪同下对本项目进行视察。在考察了整个交通安全与智能控制实训室之后，领导们听取了公司副总经理饶建炜关于实训室项目建设的工作汇报。</span>\r\n</p>\r\n<p style="text-indent:2em;">\r\n	<span style="font-size:16px;">省领导们充分肯定了本次实训室建设的成绩、交职院教工与运星公司工作人员的共同努力，并鼓励我们能够进一步加强校企合作，为社会培养出更多交通界人才。</span>\r\n</p>', 2),
(17, '红灯亮多久车流量说了算，虎门引入智能交通信号灯', '运星科技', '1368277718', '<p style="text-indent:2em;">\r\n	<span style="font-size:16px;">记者昨日获悉，虎门第二大交通要道连升中路智能信号灯工程日前完成改造进入试运行阶段，并将于6月正式投入使用。据悉，这套设计、施工历时半年多、造价100万的系统将使道路通行能力提高30%以上。</span> \r\n</p>\r\n<p style="text-indent:2em;">\r\n	<span style="font-size:16px;">据</span><span style="font-size:16px;">介绍</span><span style="font-size:16px;">，连升中路是虎门第二大交通要道，虽然去年11月完成改造实现双向八道通车，但原有呆板单一的交通信号灯，交通拥挤现象仍无法得到改善。因此，虎门决定建设一种更为先进的信号控制系统。</span> \r\n</p>\r\n<p style="text-indent:2em;">\r\n	<span style="font-size:16px;">该系统最后由华南理工大学广州运星科技有限公司建设，总造价100万元，分别在连升中路与太宝路、虎门大道等8个路口安装，“呆灯”被改装成聪明机智的“智能灯”，整个工程于今年4月初完成。</span> \r\n</p>\r\n<p style="text-indent:2em;">\r\n	<span style="font-size:16px;">“智能交通信号灯就是根据路面车辆情况自动调整红绿灯时间，也就是说，红灯亮多久，车流量说了算”，虎门城建办有关人士告诉记者。</span> \r\n</p>\r\n<p style="text-indent:2em;">\r\n	<span style="font-size:16px;">据了解，目前系统还是在测试阶段，系统自动收集相关数据，试运行时间以原来红绿灯设定时间为基础，所以司机目前如果在该路段驾驶还不能明显感觉到变化。但正式运行后，红绿灯等待时间自动调节，司机就能体会到通行比以前顺畅很多。业内人士透露，该信号灯启用后，至少可以将连升中路道路通行能力提高30%.有关人士表示，连升中路智能交通信号灯工程改造取得成功后，将在全镇其它重要道路广泛推广。记者随机调查了几名司机，均表示该路最近一段时间以来，确实不像以前那么堵了。（编辑：冯怡驹）</span> \r\n</p>', 2),
(19, '深圳职业技术学院汽车与交通学院与运星公司校企合作交流及签约活动', '运星科技', '1369659610', '<p style="text-indent:2em;">\r\n	<span style="font-size:16px;">汽车与交通学院于6月3日下午，在东校区举办了一场重要的校企合作交流及签约活动。华南理工大学科技园有限公司总经理、国家ITS专家组专家、博士生导师徐建闽教授，广州运星科技有限公司副总经理饶建炜及随行人员出席了本次活动，汽车与交通学院贺萍院长，院长助理董铸荣副教授，交控专业、汽运专业、汽营专业与汽电专业负责人以及06级、07级交控专业学生代表作为主办方人员参会。</span> \r\n</p>\r\n<p style="text-indent:2em;">\r\n	<span style="font-size:16px;">会议中，宾主双方就校企合作开发技能证书、共建实训室等话题进行了深入、坦诚的交流。会议签署了两份重要的合作协议，一份是关于运星公司向交控专业捐赠设备的协议，另一份是学院与运星公司共建“交通信息与控制实训室”协议，协议的具体承接单位均为交控专业。本次企业捐赠设备的合同总金额达到151500元人民币，为我院到目前为止最大的一笔企业设备捐赠项目，所有设备将用于交控制专业的实训教学，与共建的“交通信息与控制实训室”一起，将极大地改善我院交控专业的实训条件。这对于我院交控专业进一步开展校企深层次合作、为社会提供更多更好的服务奠定坚实基础。</span>\r\n</p>', 2),
(20, '实验室系统', '运星科技', '1369659685', '<p style="text-indent:2em;">\r\n	<span style="font-size:16px;">针对目前国内高校交通方面专业课程设置的特点，公司结合项目经验自主开发了“GZTRANSTAR交通实验室”五大系列共20多项产品，受到了市场的瞩目和客户的广泛好评。目前国内已有超过40所高校使用了运星公司的实验室建设方案。运星公司的目的是通过建设高校交通实验室，提供先进的满足教学要求的实验设备、优秀的集成方案和优质的服务，与高校共同培养从事交通行业的高科技人才，共创ITS的美好明天。</span> \r\n</p>\r\n<p style="text-indent:2em;">\r\n	&nbsp;\r\n</p>\r\n<p align="center">\r\n	<img alt="" src="/kindeditor/attached/image/20130527/20130527140614_99491.gif" /> \r\n	<div align="center">\r\n		&nbsp;\r\n	</div>\r\n	<p>\r\n		<br />\r\n	</p>\r\n	<p align="center" style="text-indent:2em;">\r\n		<br />\r\n	</p>\r\n	<p align="center" style="text-indent:2em;">\r\n		<br />\r\n	</p>\r\n	<p align="center">\r\n		<img alt="" src="/kindeditor/attached/image/20130527/20130527140632_24488.gif" /> \r\n		<div align="left">\r\n			&nbsp;\r\n		</div>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p align="center">\r\n			<br />\r\n		</p>\r\n		<p align="center">\r\n			<img alt="" src="/kindeditor/attached/image/20130527/20130527140652_43903.gif" /> \r\n			<div align="left">\r\n				&nbsp;\r\n			</div>\r\n			<p>\r\n				<br />\r\n			</p>\r\n			<p align="center">\r\n				<br />\r\n			</p>\r\n			<p align="center" style="text-indent:2em;">\r\n				<br />\r\n			</p>\r\n<span style="font-size:16px;"></span>', 21),
(21, '广东科学中心“交通世界”展馆展品设计与制造承建', '运星科技', '1369665275', '<p align="center">\r\n	<img alt="" src="/kindeditor/attached/image/20130527/20130527143317_13276.gif" />\r\n	<div align="left">\r\n		&nbsp;\r\n	</div>\r\n</p>\r\n<p>\r\n	&nbsp;\r\n</p>\r\n<p align="center">\r\n	<img alt="" src="/kindeditor/attached/image/20130527/20130527143331_63308.jpg" />\r\n	<div align="left">\r\n		&nbsp;\r\n	</div>\r\n</p>\r\n<p>\r\n	&nbsp;\r\n</p>\r\n<p align="center">\r\n	<img alt="" src="/kindeditor/attached/image/20130527/20130527143347_36867.jpg" />\r\n	<div align="left">\r\n		&nbsp;\r\n	</div>\r\n</p>\r\n<p>\r\n	&nbsp;\r\n</p>\r\n<p align="center">\r\n	<img alt="" src="/kindeditor/attached/image/20130527/20130527143358_39657.jpg" />\r\n	<div align="left">\r\n		&nbsp;\r\n	</div>\r\n</p>\r\n<p>\r\n	&nbsp;\r\n</p>\r\n<p align="center">\r\n	<img alt="" src="/kindeditor/attached/image/20130527/20130527143411_39396.jpg" />\r\n	<div align="left">\r\n		&nbsp;\r\n	</div>\r\n</p>\r\n<p align="center">\r\n	&nbsp;\r\n</p>', 20),
(22, '广东省公路交通量数据采集与处理系统', '运星科技', '1369665564', '<p align="center">\r\n	<img alt="" src="/kindeditor/attached/image/20130527/20130527143823_29841.gif" />\r\n	<div align="left">\r\n		&nbsp;\r\n	</div>\r\n</p>\r\n<p>\r\n	&nbsp;\r\n</p>\r\n<p align="center">\r\n	<img alt="" src="/kindeditor/attached/image/20130527/20130527143836_60671.gif" />\r\n	<div align="left">\r\n		&nbsp;\r\n	</div>\r\n</p>\r\n<p>\r\n	&nbsp;\r\n</p>\r\n<p align="center">\r\n	<img alt="" src="/kindeditor/attached/image/20130527/20130527143853_19464.gif" />\r\n	<div align="left">\r\n		&nbsp;\r\n	</div>\r\n</p>\r\n<p>\r\n	&nbsp;\r\n</p>\r\n<p align="center">\r\n	<img alt="" src="/kindeditor/attached/image/20130527/20130527143904_57859.gif" />\r\n	<div align="left">\r\n		&nbsp;\r\n	</div>\r\n</p>\r\n<p>\r\n	&nbsp;\r\n</p>', 20),
(23, '东莞市虎门干道协调控制系统', '运星科技', '1369665731', '<p align="center">\r\n	<img alt="" src="/kindeditor/attached/image/20130527/20130527144128_57642.gif" />\r\n	<div align="left">\r\n		&nbsp;\r\n	</div>\r\n</p>\r\n<p>\r\n	&nbsp;\r\n</p>\r\n<p align="center">\r\n	<img alt="" src="/kindeditor/attached/image/20130527/20130527144141_72902.gif" />\r\n	<div align="left">\r\n		&nbsp;\r\n	</div>\r\n</p>\r\n<p>\r\n	&nbsp;\r\n</p>\r\n<p align="center">\r\n	<img alt="" src="/kindeditor/attached/image/20130527/20130527144152_51811.gif" />\r\n	<div align="left">\r\n		&nbsp;\r\n	</div>\r\n</p>\r\n<p>\r\n	&nbsp;\r\n</p>', 20),
(24, '佛山市一环快速路智能交通系统总体设计', '运星科技', '1369665820', '<p align="center">\r\n	<img alt="" src="/kindeditor/attached/image/20130527/20130527144332_36595.jpg" /> \r\n	<div align="left">\r\n		&nbsp;\r\n	</div>\r\n	<p>\r\n		<br />\r\n	</p>\r\n<span id="ctl00_ContentPlaceHolder1_Label2"></span>', 20),
(25, '广州南沙区环市大道西信号协调控制项目', '运星科技', '1369665914', '<p align="center">\r\n	<img alt="" src="/kindeditor/attached/image/20130527/20130527144507_77123.jpg" />\r\n	<div align="left">\r\n		&nbsp;\r\n	</div>\r\n</p>', 20),
(18, '桂林电子科技大学共建实验室', '运星科技', '1368287054', '<p style="text-indent:2em;">\r\n	<span style="font-size:16px;">交通信息与控制实验室是学院与广州运星科技有限公司共建实验室，主要包括：交通信息检测与控制实验系统、智能交通信号控制实验系统、交通调度实验系统、视频电子监控实验系统、高速公路收费实验系统、交通仿真实验系统、交通可变信息实验系统。本实验室主要面向交通工程专业交通信息与控制方向，充分发挥了学院信息与控制方面的学科优势。</span> \r\n</p>\r\n<p style="text-indent:2em;">\r\n	<span style="font-size:16px;">实验室以交通信息采集、信息传输处理、交通管理与控制为实验对象，主要培养学生交通信息检测与分析、交通信息与控制系统规划设计的实践应用能力。</span>\r\n</p>\r\n<span style="font-size:16px;"></span>', 2);

-- --------------------------------------------------------

--
-- 表的结构 `tb_product`
--

CREATE TABLE IF NOT EXISTS `tb_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `proName` varchar(100) COLLATE utf8_bin NOT NULL,
  `proImg` varchar(255) COLLATE utf8_bin NOT NULL,
  `proIntro` text COLLATE utf8_bin NOT NULL,
  `proType` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
