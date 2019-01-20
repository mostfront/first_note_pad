/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100134
 Source Host           : localhost:3306
 Source Schema         : gbook

 Target Server Type    : MySQL
 Target Server Version : 100134
 File Encoding         : 65001

 Date: 20/01/2019 23:42:16
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin_user
-- ----------------------------
DROP TABLE IF EXISTS `admin_user`;
CREATE TABLE `admin_user`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `creat_time` int(10) NOT NULL,
  `update_time` int(10) NOT NULL,
  `delete_time` int(10) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 17 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of admin_user
-- ----------------------------
INSERT INTO `admin_user` VALUES (1, '123', '$2y$10$JkvHGnOrvvhED3yL6WIDeufIzqrGzVc6gdIl2T.iSjxRovouCMhGC', 0, 1542216261, NULL);
INSERT INTO `admin_user` VALUES (2, 'admin', '$2y$10$7Bjhe4EJ3Ez2ie5Lqv0ewuO1IpXMQHMoRf.2SWAakri/pdEPa1Diu', 0, 0, NULL);
INSERT INTO `admin_user` VALUES (3, '234', '$2y$10$1Bm61x5D1ledvM2g4aQVP.Mc0xgUcGpBijKC8gHAXawgNSxfulA5a', 0, 1540834972, NULL);
INSERT INTO `admin_user` VALUES (4, '345', '$2y$10$gtu0p9/AtwgYL0xyBnE5xOxiusI0ptk4jk2NcZ0B3nRxok4TaDY3a', 0, 1540834970, 1540834970);
INSERT INTO `admin_user` VALUES (5, '456', '$2y$10$Ucip7EhbnxpWT95TAel7k.tdB4rdpD1M5Xwb7YgY/rnBPhy41MAw.', 0, 1540832185, 1540832185);
INSERT INTO `admin_user` VALUES (6, 'bbb', '$2y$10$l3IZJJAnhzqX1AkLSV9gQOsyNqbYpQbA3I35DK6Q1.bzvVqr7ihKq', 0, 1540832184, 1540832184);
INSERT INTO `admin_user` VALUES (7, '12345678', '$2y$10$FGCWizkuQPBgU/ezGO0NseGYm0KGVqQAB6Sgnb9V5hK1Z7OV2ILYy', 0, 1540832172, 1540832172);
INSERT INTO `admin_user` VALUES (8, 'cc', '$2y$10$Mc8erD2Fg.VlyCv8FcoSC.H7VxOntg.hP6admRpOPdH5aVFCgJZ3a', 0, 1540833230, NULL);
INSERT INTO `admin_user` VALUES (9, '234', '$2y$10$SiaARXRm6P8nIqQ0WbycW.g6OsgZHlcuju1jy3EwbTQE.qeLiVrrO', 0, 1540835263, 1540835263);
INSERT INTO `admin_user` VALUES (10, '234', '$2y$10$OmY5IY1eM6LrsjI9RnvLCeuQkGNRpQO3yVqu3NV4Bv3knav.jqMNa', 0, 1540835179, 1540835179);
INSERT INTO `admin_user` VALUES (11, '345', '$2y$10$d0YInWngip8JoiLYkAtz9uLv.YidFvsbAji352sN/HN70r6ktKnpu', 0, 1540835177, 1540835177);
INSERT INTO `admin_user` VALUES (12, '234', '$2y$10$o4pI1ZwgSTSzfWOgUCRll.6ERyjIVFMsDhi0kujxpY/1lWMcUrW7e', 0, 1540835444, NULL);
INSERT INTO `admin_user` VALUES (13, '345', '$2y$10$.3DYImr3C5W2zURyyPGgz.f6cBR7GzDwqCTB3Q3mDm8k72y1wiWMu', 0, 1540835473, 1540835473);
INSERT INTO `admin_user` VALUES (14, '456', '$2y$10$QGLdfIzjSnJ4RB6AUPMXmeZg1LvXLLRcR7sCgZbBur3ijJXTltBzC', 0, 1540835468, 1540835468);
INSERT INTO `admin_user` VALUES (15, '123', '$2y$10$iqcnJRvW49j2PlhBPlL2SuAWedqiZxkw8O.SfZRZp9wQZIb1qbAVC', 0, 1540835572, 1540835572);
INSERT INTO `admin_user` VALUES (16, 'ccc', '$2y$10$YAd.QzxyElza5aE6Ongne.znvC2Wg.y1RY5B5N7wCAH21LCaFEBA2', 0, 1541844238, NULL);

-- ----------------------------
-- Table structure for content
-- ----------------------------
DROP TABLE IF EXISTS `content`;
CREATE TABLE `content`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `admin_user_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `content_status` tinyint(1) NOT NULL,
  `creat_time` int(10) NOT NULL,
  `update_time` int(10) NOT NULL,
  `delete_time` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 26 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of content
-- ----------------------------
INSERT INTO `content` VALUES (1, '我是标题', 2, 3, '我是内容', 1, 0, 1547288855, 1547288855);
INSERT INTO `content` VALUES (2, '我是内容', 1, 3, '', 1, 0, 1547291211, 1547291211);
INSERT INTO `content` VALUES (3, '它是内容', 2, 3, 'dfas', 1, 0, 1542462434, NULL);
INSERT INTO `content` VALUES (4, '123456789', 0, 16, '<p>123456789</p>', 1, 0, 1547306800, NULL);
INSERT INTO `content` VALUES (5, 'aa', 2, 16, 'aabb', 1, 0, 1547288862, 1547288862);
INSERT INTO `content` VALUES (6, '123', 2, 16, 'sdfasdfa', 1, 0, 1547288529, NULL);
INSERT INTO `content` VALUES (7, 'tower', 2, 16, '<h1 style=\"text-align: center;\">聪明的团队用 Tower 协作</h1><p style=\"text-align: center;\">超过七百万用户正在使用 Tower 来管理项目任务，共享文档文件，撰写团队周报，<br>提高团队协作效率，你的团队也能变得如此活力又高效。</p><p><a href=\"https://tower.im/users/sign_up\">免费开始体验</a></p>', 1, 0, 1547291216, 1547291216);
INSERT INTO `content` VALUES (8, '上传', 0, 16, '<p><img alt=\"07.JPG\" src=\"/gbook/public/uploads/usereditor/07.jpg\" width=\"1024\" height=\"768\"><br></p>', 1, 0, 1547983917, NULL);
INSERT INTO `content` VALUES (9, '上传2', 0, 16, '<p><img alt=\"06.JPG\" src=\"/gbook/public/uploads/usereditor/06.jpg\" width=\"1024\" height=\"768\"><br></p>', 1, 0, 1547983844, NULL);
INSERT INTO `content` VALUES (10, '上传3', 0, 16, '<p><img alt=\"05.JPG\" src=\"/gbook/public/uploads/usereditor/05.jpg\" width=\"1024\" height=\"768\"><br></p>', 1, 0, 1547983833, NULL);
INSERT INTO `content` VALUES (11, '上传4', 2, 16, '<p><img alt=\"07.JPG\" src=\"/gbook/public/uploads/usereditor/07.jpg\" width=\"1024\" height=\"768\"><br></p>', 1, 0, 1547983855, NULL);
INSERT INTO `content` VALUES (12, '1234', 2, 16, '<p>1231</p>', 1, 0, 1547295317, NULL);
INSERT INTO `content` VALUES (13, '1234', 2, 16, '<p>1231</p>', 1, 0, 1547295353, NULL);
INSERT INTO `content` VALUES (14, '1231231', 16, 16, '<p>2131</p>', 1, 0, 1547295468, NULL);
INSERT INTO `content` VALUES (15, '123123123', 16, 16, '<p>213123132</p>', 1, 0, 1547295480, NULL);
INSERT INTO `content` VALUES (16, '123123', 16, 16, '<p>1231</p>', 1, 0, 1547295892, NULL);
INSERT INTO `content` VALUES (17, '1231231', 0, 16, '<p>123132</p>', 1, 0, 1547296507, NULL);
INSERT INTO `content` VALUES (18, '12313123123131', 0, 16, '<p>1231231231231</p>', 1, 0, 1547296519, NULL);
INSERT INTO `content` VALUES (19, 'first post1', 0, 16, '<p>first post</p>', 1, 0, 1547306306, NULL);
INSERT INTO `content` VALUES (20, 'pic', 0, 16, '<p>pic<img alt=\"06.JPG\" src=\"/gbook/public/uploads/editor/06.jpg\" width=\"1024\" height=\"768\"></p>', 1, 0, 1547296643, NULL);
INSERT INTO `content` VALUES (21, 'pic2', 0, 16, '<p>pic2<img alt=\"05.JPG\" src=\"/gbook/public/uploads/editor/05.jpg\" width=\"1024\" height=\"768\"></p>', 1, 0, 1547296765, NULL);
INSERT INTO `content` VALUES (22, 'ad1', 2, 16, '<p>ad1<img alt=\"07.JPG\" src=\"/gbook/public/uploads/editor/07.jpg\" width=\"1024\" height=\"768\"></p>', 1, 0, 1547296945, NULL);
INSERT INTO `content` VALUES (23, '1', 0, 16, '<p>1<img alt=\"06.JPG\" src=\"/gbook/public/uploads/editor/06.jpg\" width=\"1024\" height=\"768\"></p>', 1, 0, 1547297095, NULL);
INSERT INTO `content` VALUES (24, '网易', 0, 16, '<p><img src=\"https://static.ws.126.net/f2e/news/res/channel_logo_new/news.png\"><a href=\"http://www.163.com/\">网易首页</a><a href=\"http://www.163.com/#f=topnav\">应用</a></p><p><a target=\"_self\">快速导航</a></p><p><a href=\"http://reg.163.com/\">登录</a></p><p><a href=\"http://reg.email.163.com/mailregAll/reg0.jsp?from=163navi&amp;regPage=163\">注册免费邮箱</a></p><ul><li><a href=\"http://www.163.com/newsapp/#f=163nav\">移动端</a><br></li><li><a href=\"https://open.163.com/\">网易公开课</a><br></li><li><a href=\"http://rd.da.netease.com/redirect?t=Vc8G344566&amp;p=null&amp;proId=1922&amp;target=http%3A%2F%2Fwww.kaola.com%2F%3Ftag%3Dbe3d8d027a530881037ef01d304eb505\">网易考拉</a><br></li><li><a href=\"http://you.163.com/?from=web_fc_menhu_xinrukou_1\">网易严选</a><br></li><li><a href=\"http://pay.163.com/\">支付</a><br></li><li><a href=\"http://baoxian.163.com/car/?from=mhgwc\">电商</a><br></li><li><a href=\"http://email.163.com/#from=163nav_icon\">邮箱</a><br></li></ul><p></p><p><a href=\"http://www.163.com/\">网易首页</a>&nbsp;&gt;&nbsp;<a href=\"https://news.163.com/\">新闻中心</a>&nbsp;&gt;&nbsp;<a href=\"http://news.163.com/\">新闻</a>&nbsp;&gt; 正文</p><h1>华为回应员工在波兰被捕：个人涉嫌犯罪 终止雇佣</h1><p>2019-01-12 20:53:20　来源:&nbsp;<a href=\"http://world.huanqiu.com/exclusive/2019-01/14048718.html\" target=\"_blank\">环球时报-环球网</a>(北京)</p><p><a href=\"https://news.163.com/19/0112/20/E5BMBPU20001899O.html#\">0</a></p><p><span style=\"color: rgb(136, 136, 136);\">分享到：</span></p><ul><li><a target=\"_self\">易信</a></li><li><a target=\"_self\">微信</a></li><li><a target=\"_self\">QQ空间</a></li><li><a target=\"_self\">微博</a></li><ul><li><a target=\"_self\"></a></li><li><a target=\"_self\"></a></li><li><a target=\"_self\"></a></li></ul></ul><p>（原标题：华为回应波兰员工事件：因个人原因涉嫌犯罪，终止雇佣关系）</p><p>1月10日，波兰国家安全局(ABW)逮捕了一名波兰公民(Piotr Durbajlo)以及华为波兰公司的员工王伟晶，指控两人“从事间谍活动”。12日，《环球时报》记者从华为公司获悉，王伟晶因个人原因涉嫌犯罪，华为决定终止雇佣关系。</p><p><strong>华为公司官方回应如下：</strong></p><p>华为波兰代表处员工王伟晶因个人原因涉嫌违反波兰法律而被逮捕调查，该事件对华为的全球声誉造成了不良影响，依据公司劳动合同相关管理规定，华为决定立刻终止与王伟晶的雇佣关系。</p><p>华为公司一直遵守业务所在国的所有适用法律法规，合规经营，并要求所有员工遵守所在国法律法规。</p><p>多方信息显示，涉案中国公民王伟晶为华为波兰有限公司公共关系部部长。据波兰情报部门一位负责人瓦西克(Maciej Wasik)表示，波兰国家安全局已经搜查了华为在当地的办公室。周四当天，波兰法院决定对两人羁押3个月。如“罪名”最终成立，两人将面临最高10年有期徒刑。在11日的回应中，华为公司表示：华为公司一直遵守业务所在国的所有适用法律法规，合规经营，并要求所有员工遵守所在国法律法规。</p><p>1月12日，中国外交部对波兰内部安全局8日拘押一名华为波兰公司员工作出回应：中方高度关注王伟晶被波兰内部安全局拘押事，中国驻波兰使馆已第一时间约见波外交部，要求波方尽快向中方就案件情况进行领事通报，尽早安排领事探视，依法、公正、妥善处理此案，切实保障当事人合法权益、安全和人道主义待遇。</p><pre><code><p style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: 28px; font-family: &quot;Microsoft Yahei&quot;; text-indent: 2em; margin-top: 28px; margin-bottom: 0px;\"><a href=\"https://news.163.com/19/0111/18/E58QJCO80001899O.html\" target=\"_self\" urlmacroreplace=\"false\" style=\"color: rgb(15, 107, 153); text-decoration-line: underline; line-height: 1;\">波兰逮捕1名疑似华为员工 被指控从事间谍活动</a></p><p style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: 28px; font-family: &quot;Microsoft Yahei&quot;; text-indent: 2em; margin-top: 28px; margin-bottom: 0px;\">波兰国家安全局(state security agency)当地时间周五逮捕了一名中国公民和一名波兰公民,指控他们从事间谍活动。波兰公共电视台TVP频道称,这名中国公民是华为的员工。</p><p style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: 28px; font-family: &quot;Microsoft Yahei&quot;; text-indent: 2em; margin-top: 28px; margin-bottom: 0px;\"><a href=\"https://news.163.com/19/0112/00/E59GP97T0001899O.html\" target=\"_self\" urlmacroreplace=\"false\" style=\"color: rgb(15, 107, 153); text-decoration-line: underline; line-height: 1;\">外交部深夜回应波兰拘押华为员工：高度关注</a></p><p style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: 28px; font-family: &quot;Microsoft Yahei&quot;; text-indent: 2em; margin-top: 28px; margin-bottom: 0px;\">外交部称高度关注王伟晶被波兰内部安全局拘押事，中国驻波兰使馆已第一时间约见波外交部，要求波方尽快向中方就案件情况进行领事通报，尽早安排领事探视，依法、公正、妥善处理此案，切实保障当事人合法权益、安全和人道主义待遇。</p></code></pre><p></p><p><img src=\"http://static.ws.126.net/cnews/css13/img/end_news.png\" alt=\"范姜国一\" width=\"13\" height=\"12\">&nbsp;本文来源：环球时报-环球网 。更多精彩，请登录环球网&nbsp;<a href=\"http://www.huanqiu.com/\">http://www.huanqiu.com</a>责任编辑：侯帅_NN5533</p><p><span style=\"color: rgb(136, 136, 136);\">分享到：</span></p><ul><li><a target=\"_self\">易信</a></li><li><a target=\"_self\">微信</a></li><li><a target=\"_self\">QQ空间</a></li><li><a target=\"_self\">微博</a></li><ul><li><a target=\"_self\"></a></li><li><a target=\"_self\"></a></li><li><a target=\"_self\"></a></li></ul></ul>', 1, 0, 1547311561, NULL);
INSERT INTO `content` VALUES (25, '习近平到天津考察 参观南开百年校史展览', 0, 16, '<p style=\"text-align: justify;\">（原标题：习近平在天津考察）</p><p><a href=\"http://v.163.com/static/3/VK4PTJD2C.html\" target=\"_blank\">【独家V观】习近平在天津考察</a><span style=\"color: rgb(167, 167, 167);\">（来源：）</span></p><p><img alt=\"习近平到天津考察 参观南开百年校史展览\" src=\"http://dingyue.ws.126.net/NuAkBsNa6ouXyaNVy20zplG2wQ56oLmuYIKdRrN6qrcgy1547697514640compressflag.jpg\"></p><p style=\"text-align: center;\"><img alt=\"习近平到天津考察 参观南开百年校史展览\" src=\"http://dingyue.ws.126.net/VN4jx7imvENQvrJMpVbuciCeLI7JcV6JArClBkIHgtVRm1547697514640compressflag.jpg\"></p><p style=\"text-align: center;\"><img alt=\"习近平到天津考察 参观南开百年校史展览\" src=\"http://dingyue.ws.126.net/An1eSjxqOtEnwNdzIFmfwKwoIqE=gYj8xfQ7KGqwwvDwl1547697514642compressflag.jpg\"></p><p style=\"text-align: center;\"><img alt=\"习近平到天津考察 参观南开百年校史展览\" src=\"http://dingyue.ws.126.net/MricPW3C9TMpj7Xjg1lohqCziIwexvz2wbuyrMMcK62801547697514642compressflag.jpg\"></p><p style=\"text-align: justify;\">17日上午，习近平来到天津考察调研。在南开大学，他参观了百年校史主题展览，与部分院士、专家和中青年师生代表互动交流，察看了化学学院和元素有机化学国家重点实验室，详细了解南开大学历史沿革、学科建设、人才队伍、科研创新等情况。</p>', 1, 0, 1547769805, NULL);

-- ----------------------------
-- Table structure for gbook
-- ----------------------------
DROP TABLE IF EXISTS `gbook`;
CREATE TABLE `gbook`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `create_time` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of gbook
-- ----------------------------
INSERT INTO `gbook` VALUES (1, '用户', '留言', 1539709054);
INSERT INTO `gbook` VALUES (2, '456', '123', 1539709252);
INSERT INTO `gbook` VALUES (3, '123我们6trfv', '123465', 1539710182);
INSERT INTO `gbook` VALUES (4, 'name', '又是一条留言', 1539710379);
INSERT INTO `gbook` VALUES (5, '123123', '123213', 1539710485);
INSERT INTO `gbook` VALUES (6, '12312313', '2131231', 1539710512);
INSERT INTO `gbook` VALUES (7, '顶戴要', '基', 1539710656);
INSERT INTO `gbook` VALUES (8, '苦夺a', '顶戴夺', 1539710663);
INSERT INTO `gbook` VALUES (9, '夺东奔西走 ', '村', 1539710668);
INSERT INTO `gbook` VALUES (10, '45667', '123', 1539961457);

-- ----------------------------
-- Table structure for setting
-- ----------------------------
DROP TABLE IF EXISTS `setting`;
CREATE TABLE `setting`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `key` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `value` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `create_time` int(10) UNSIGNED NOT NULL,
  `updata_time` int(10) UNSIGNED NOT NULL,
  `delete_time` int(10) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of setting
-- ----------------------------
INSERT INTO `setting` VALUES (1, 'webname', '网站名称', '教学项目', 0, 0, NULL);
INSERT INTO `setting` VALUES (2, 'is_reg', '是否允许注册（1表示允许）', '1', 0, 0, NULL);
INSERT INTO `setting` VALUES (3, 'reg_status', '注册用户默认的状态（1表示可用）', '1', 0, 0, NULL);
INSERT INTO `setting` VALUES (4, 'star_contents', '输入优秀博文ID,多个博文用逗号分隔', '8,9,10,24,25', 0, 0, NULL);

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nickname` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `user_status` tinyint(1) UNSIGNED NOT NULL COMMENT '保存用户状态，1表示可用，0表示禁用',
  `create_time` int(10) UNSIGNED NOT NULL,
  `update_time` int(10) UNSIGNED NOT NULL,
  `delete_time` int(10) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 17 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (3, 'aaa', '$2y$10$LkBtfErujAoeCvt6U.5xkOKAS6F1OGkz5QuIJ.KsADg8hoqOTd9xm', 'bbbccc', '13311111111', '222@22.com', 1, 0, 1541864274, NULL);
INSERT INTO `user` VALUES (4, 'bbb', '111', 'cccbbb', '13333333333', 'ccc@ccc.com', 1, 0, 1541860005, NULL);
INSERT INTO `user` VALUES (5, 'ccc', '111', 'aaaccccb', '13333333333', '111@111.com', 1, 0, 1541863545, NULL);
INSERT INTO `user` VALUES (6, 'ddd', '$2y$10$lGv/5XAATEjEyT8Rcfu8JuZGpnJOxIoW.N7eL2cT1Y4WTXelwKCwK', '555', '55555555555', '5555@555', 1, 1541841851, 1541844211, NULL);
INSERT INTO `user` VALUES (7, 'eee', '$2y$10$1BpiqXBlmJvA8sUpdRBbV.vGNKCCP1ZMrE.6jYfjGD1IHtob/rqdy', '666', '13000000000', '666@eee.com', 1, 1541843240, 1541844209, NULL);
INSERT INTO `user` VALUES (8, '777', '$2y$10$VMKO4NQIhFdYUuXh/mSpEuvdK3ZZS/9RbR.zhByw7U6Z7b4csSCcq', '777', '13000000000', '777@77.com', 1, 1541844195, 1541844205, NULL);
INSERT INTO `user` VALUES (9, '888', '$2y$10$2E3JFyMUbhyiwqpp1H0jA.WhaxwOUxvh1kWLAlkCYwkjaqmripnz2', '888', '13333333333', '333@333.com', 1, 1541863622, 1541863622, NULL);
INSERT INTO `user` VALUES (10, 'aaaa', '$2y$10$hYT9PMUsm/EKUM/iXTzqR.TIb0ikgWbBLSw.1p1tgjsueNeJUlDj2', 'aaa', '13000000000', '0000@0000.com', 1, 1542554028, 1542554028, NULL);
INSERT INTO `user` VALUES (11, 'bbbb', '$2y$10$QtC6YKLz10PEQdOM4dIy9eTxvgHNwWejM55NTKZtxgsyw75ohcZO2', 'bbbb', '13000000000', 'bbb@bbb.com', 1, 1542641877, 1542641877, NULL);
INSERT INTO `user` VALUES (12, 'bbbbb', '$2y$10$BUxj8bOVJ.biNg4Y84ds2u9qUjf2o3ilQLZV3P21595imQsr/lUIe', 'bbbb', '13000000000', 'bbb@bbb.com', 1, 1542641916, 1542641916, NULL);
INSERT INTO `user` VALUES (13, 'bbbbbb', '$2y$10$NcTaGn7aPgNQfH/seK3eBOWt3zEhbTNbN7dOQhaOzGSkJeqJlAGQ6', 'bbbb', '13000000000', 'bbb@bbb.com', 1, 1542642015, 1542642015, NULL);
INSERT INTO `user` VALUES (14, 'ccccc', '$2y$10$4Nq4yTAyOq5jc4CzomOf/uqvnyj6gApk15hxcUPYkRtRLFh3PIh0C', 'ccccc', '13000000000', 'bbb@bbb.com', 1, 1542642105, 1542642105, NULL);
INSERT INTO `user` VALUES (15, 'fff', '$2y$10$QLBpJ2sOOX/BCPUDgUOBS.H6r5VM4KwLUWMorwirxv1fwuLQ3k5vG', 'fff', '13000000000', 'fff@fff.com', 1, 1542646682, 1542646682, NULL);
INSERT INTO `user` VALUES (16, 'qqq', '$2y$10$Lhl8zEu8FaqODRSHwFlvkeS.r8CwLrhfUpkqaXMyfnZBeYSm1WAg6', 'qqqq', '13333333333', 'qqqq@qq.com', 1, 1544877801, 1547215848, NULL);

SET FOREIGN_KEY_CHECKS = 1;
