// Author Notes:
// This file has been translated from English to Chinese by wc2345 from www.amxbans.de.

// This is the Installation Language File

<?php
//区域和编码设置
define("_ENCODING","utf-8"); //ISO-8859-1,utf-8

define("_INSTALLATION","安装");
define("_STEP","下一步");
define("_STEP1","开始");
define("_STEP2","信息");
define("_STEP3","目录");
define("_STEP4","数据库");
define("_STEP5","管理员");
define("_STEP6","简介");
define("_STEP7","完成");

define("_OF","of");
define("_NEXT","下一步");
define("_BACK","上一步");
define("_DIRCHECK","目录查询");

//step1
define("_WELCOME","欢迎您使用AMXBans安装程序.");
define("_WELCOME2","通过此向导将帮助您完成安装过程.");
define("_LICENSEAGREE","我接受许可协议");

//step2
define("_STEP2DESC","信息服务器设置");
define("_SERVERSETUP","服务器设置");
define("_REFRESH","刷新");
define("_VERSION","版本");
define("_ON","打开");
define("_OFF","关闭");
define("_SEC","秒");
define("_SETRECOMMENDED","推荐设置");
define("_SETNOTRECOMMENDED","不推荐, but should work");

//step3
define("_STEP3DESC","获取目录信息");
define("_STEP3DESC2","通常情况下，这个脚本的路径系统会自动检测");
define("_DIRROOT","根路径");
define("_DIRDOCUMENT","URL路径");
define("_RECHECK","重新检查");
define("_ROOTDIRS","服务器目录");
define("_OK","确定");
define("_NOTWRITABLE","目录不可写，请检查读写权限!");
define("_SETUPNOTDELETABLE","文件setup.php已被删除，请手动安装!");

//step4
define("_STEP4DESC","获取数据库信息");
define("_DBSETTINGS","数据库设置");
define("_DBCHECK","检查访问数据");
define("_CANTCONNECT","访问数据错误!");
define("_CANTSELECTDB","数据库不存在!");
define("_DBOK","成功连接数据库");
define("_DBPREVILEGES","用户的数据库权限");
define("_HOST","数据库地址");
define("_USER","用户名");
define("_PASSWORD","密码");
define("_DATABASE","数据库");
define("_TBLPREFIX","数据表前缀");
define("_NOTALLPREVILEGES","用户没有所需的权限!");
define("_PREFIXEXISTSV5","正在安装，没有可用更新!");
define("_PREFIXEXISTSV6","正在安装，正在更新文件!");

//step5
define("_STEP5DESC","创建第一个网络管理员");
define("_ADMINSETTINGS","管理员访问数据");
define("_PASSWORD2","请再次输入密码");
define("_EMAILADR","Email地址");
define("_ADMINCHECK","检查数据");
define("_PWNOCONFIRM","密码错误!");
define("_NOREQUIREDFIELDS","必填字段丢失!");
define("_ADMINOK","管理数据正常!");
define("_USERTOSHORT","用户名太短(至少4个字符)!");
define("_PWTOSHORT","密码太短(至少4个字符)!");
define("_NOVALIDEMAIL","E-mail地址是无效!");

//step6
define("_STEP6DESC","收集的数据摘要");
define("_STEP6DESC2","AMXBans将安装以下数据");

//step7
define("_STEP7DESC","安装进度");
define("_TABLECREATE","创建表结构");
define("_DEFAULTDATACREATE","输入所需的数据");
define("_DEFAULTWEBSETTINGSCREATE","输入设置");
define("_DEFAULTUSERMENUCREATE","设置用户菜单");
define("_DEFAULTMODULESCREATE","安装模块");
define("_WEBADMINCREATE","创建Web管理");
define("_ALREADYEXISTS","已存在");
define("_CREATED","创建成功");
define("_FAILED","失败");
define("_INSERTED","注册成功");
define("_CREATEWEBADMIN","网站管理员数据");
define("_CREATEUSERLEVEL","网站管理员等级");
define("_CREATEWEBSETTINGS","网站");
define("_CREATEUSERMENU","用户菜单");
define("_FILEEXISTS","该配置已经存在!");
define("_FILEOPENERROR","该配置不能创建!");
define("_FILESUCCESS","创建配置!");
define("_MANUALEDIT","Open /include/db.config.inc.php 复制并粘贴在此:");
define("_SETUPENDDESC","setup.php将被删除，你将重定向到AMXBans!");
define("_SETUPEND","浏览 AMXBans...");
?>