// Author Notes:
// This file has been translated from 'SeToY & |PJ| Shorty's head' to English by SeToY & |PJ| Shorty from www.amxbans.de.

// This is the Installation Language File

<?php
//encoding and locale
define("_ENCODING","ISO-8859-1"); //ISO-8859-1,utf-8

define("_INSTALLATION","Installation");
define("_STEP","Step");
define("_STEP1","Start");
define("_STEP2","Information");
define("_STEP3","Directories");
define("_STEP4","Database");
define("_STEP5","Administrator");
define("_STEP6","Summary");
define("_STEP7","Finish");

define("_OF","of");
define("_NEXT","next");
define("_BACK","back");
define("_DIRCHECK","Directory check");

//step1
define("_WELCOME","Welcome to the installation suite of AMXBans.");
define("_WELCOME2","This wizard will help you through the setup process.");
define("_LICENSEAGREE","I accept the license agreement");

//step2
define("_STEP2DESC","Information of the server settings");
define("_SERVERSETUP","Server settings");
define("_REFRESH","Refresh");
define("_VERSION","Version");
define("_ON","On");
define("_OFF","Off");
define("_SEC","Seconds");
define("_SETRECOMMENDED","Recommended settings");
define("_SETNOTRECOMMENDED","not recommended, but should work");

//step3
define("_STEP3DESC","Getting of directory information");
define("_STEP3DESC2","Normally, this script detects the paths of the script automatically");
define("_DIRROOT","Root path");
define("_DIRDOCUMENT","URL path");
define("_RECHECK","Re-check");
define("_ROOTDIRS","Server directories");
define("_OK","OK");
define("_NOTWRITABLE","Directory not writable, please check the rights!");
define("_SETUPNOTDELETABLE","File setup.php has to be deleted manually after setup!");

//step4
define("_STEP4DESC","Getting the database information");
define("_DBSETTINGS","Database settings");
define("_DBCHECK","Check access data");
define("_CANTCONNECT","Access data wrong!");
define("_CANTSELECTDB","Database not found!");
define("_DBOK","Access-Data OK!");
define("_DBPREVILEGES","Users' database privileges");
define("_HOST","Host");
define("_USER","Username");
define("_PASSWORD","Password");
define("_DATABASE","Database");
define("_TBLPREFIX","Table Prefix");
define("_NOTALLPREVILEGES","User does not have all the required privileges!");
define("_PREFIXEXISTSV5","Existing Installation has been found, update not possible!");
define("_PREFIXEXISTSV6","Existing Installation has been found, will now be Updated!");

//step5
define("_STEP5DESC","Creating the first web administrator");
define("_ADMINSETTINGS","Administrator access data");
define("_PASSWORD2","Re-type Password");
define("_EMAILADR","Email Address");
define("_ADMINCHECK","Check data");
define("_PWNOCONFIRM","Passwords do not match!");
define("_NOREQUIREDFIELDS","Required fields are missing!");
define("_ADMINOK","Admin data ok!");
define("_USERTOSHORT","Username too short (min. 4 characters)!");
define("_PWTOSHORT","Password too short (min. 4 characters)!");
define("_NOVALIDEMAIL","E-mail address is not valid!");

//step6
define("_STEP6DESC","Summary of collected data");
define("_STEP6DESC2","AMXBans will be installed with the following data");

//step7
define("_STEP7DESC","Installation progress");
define("_TABLECREATE","Creating the table structure");
define("_DEFAULTDATACREATE","Enter required data");
define("_DEFAULTWEBSETTINGSCREATE","Enter settings");
define("_DEFAULTUSERMENUCREATE","Set user menu");
define("_DEFAULTMODULESCREATE","Install module");
define("_WEBADMINCREATE","Create web admin");
define("_ALREADYEXISTS","already exists");
define("_CREATED","successfully created");
define("_FAILED","failed");
define("_INSERTED","successfully registered");
define("_CREATEWEBADMIN","Webadmin data");
define("_CREATEUSERLEVEL","Webadmin level");
define("_CREATEWEBSETTINGS","Website");
define("_CREATEUSERMENU","User menu");
define("_FILEEXISTS","The Config already exists!");
define("_FILEOPENERROR","The Config could not be created!");
define("_FILESUCCESS","Config created!");
define("_MANUALEDIT","Open /include/db.config.inc.php and copy & paste this:");
define("_SETUPENDDESC","The setup.php will now be deleted and you will be redirected to AMXBans!");
define("_SETUPEND","Go to AMXBans...");
?>