// Author Notes:
// This file has been translated from English to Swedish by Sleepwalker & Gizmo from www.amxbans.de.

// This is the Installation Language File

<?php
//encoding and locale
define("_ENCODING","ISO-8859-1"); //ISO-8859-1,utf-8

define("_INSTALLATION","Installation");
define("_STEP","Steg");
define("_STEP1","Starta");
define("_STEP2","Information");
define("_STEP3","Mappar");
define("_STEP4","Databas");
define("_STEP5","Administrat&ouml;r");
define("_STEP6","Sammanfattning");
define("_STEP7","F&auml;rdigt");

define("_OF","av");
define("_NEXT","N&auml;sta");
define("_BACK","Tillbaka");
define("_DIRCHECK","Mapp-Check");

//step1
define("_WELCOME","V&auml;lkommen till installations-guiden f&ouml;r AMXBans.");
define("_WELCOME2","Med denna hj&auml;lp s&aring; blir du guidad genom installations-processen.");
define("_LICENSEAGREE","Jag accepterar Licens-Avtalet");

//step2
define("_STEP2DESC","Information om Server-Inst&auml;llningar");
define("_SERVERSETUP","Server Inst&auml;llningar");
define("_REFRESH","Uppdatera");
define("_VERSION","Version");
define("_ON","P&aring;");
define("_OFF","Av");
define("_SEC","Sekunder");
define("_SETRECOMMENDED","Inst&auml;llningar m&ouml;ter rekomendation");
define("_SETNOTRECOMMENDED","Inte rekomenderat, men borde fungera");

//step3
define("_STEP3DESC","H&auml;mtar Mapp-Information");
define("_STEP3DESC2","Normalt, s&aring; uppt&auml;cker scriptet s&ouml;kv&auml;garna automatiskt");
define("_DIRROOT","Root S&ouml;kv&auml;g");
define("_DIRDOCUMENT","URL S&ouml;kv&auml;g");
define("_RECHECK","Kolla igen");
define("_ROOTDIRS","Server Mappar");
define("_OK","OK");
define("_NOTWRITABLE","Mappen &auml;r ej skrivbar, var v&auml;nlig kolla r&auml;ttigheterna!");
define("_SETUPNOTDELETABLE","Filen setup.php m&aring;ste tas bort manuellt efter installationen!");

//step4
define("_STEP4DESC","H&auml;mtar Databas-Information");
define("_DBSETTINGS","Databas Inst&auml;llningar");
define("_DBCHECK","Kolla Databaskoppling");
define("_CANTCONNECT","Databaskoppling felaktig!");
define("_CANTSELECTDB","Databasen ej funnen!");
define("_DBOK","Databaskoppling OK!");
define("_DBPREVILEGES","Anv&auml;ndarens databas privilegier");
define("_HOST","V&auml;rd");
define("_USER","Anv&auml;ndarnamn");
define("_PASSWORD","L&ouml;senord");
define("_DATABASE","Databas");
define("_TBLPREFIX","Tabell Prefix");
define("_NOTALLPREVILEGES","Anv&auml;ndaren har inte tillr&auml;ckliga privilegier!");
define("_PREFIXEXISTSV5","En existerande installation &auml;r funnen, ingen uppdatering tillg&auml;nglig!");
define("_PREFIXEXISTSV6","En existerande installation &auml;r funnen, uppdatering kommer nu att ske!");

//step5
define("_STEP5DESC","Skapar f&ouml;rsta Webb-Administrat&ouml;ren");
define("_ADMINSETTINGS","Administrat&ouml;rskonto");
define("_PASSWORD2","L&ouml;senord igen");
define("_EMAILADR","Email-Adress");
define("_ADMINCHECK","Kontrollera Uppgifter");
define("_PWNOCONFIRM","L&ouml;senorden matchar inte!");
define("_NOREQUIREDFIELDS","N&ouml;dv&auml;ndiga f&auml;lt saknas!");
define("_ADMINOK","Admin-Uppgifter ok!");
define("_USERTOSHORT","Anv&auml;ndarnamnet &auml;r f&ouml;r kort (minst 4 symboler)!");
define("_PWTOSHORT","L&ouml;senordet &auml;r f&ouml;r kort (minst 4 symboler)!");
define("_NOVALIDEMAIL","Ingen giltig Email-Adress!");

//step6
define("_STEP6DESC","Sammanfattning av uppsamlad information");
define("_STEP6DESC2","AMXBans kommer installeras med f&ouml;ljande information");

//step7
define("_STEP7DESC","Installations Process");
define("_TABLECREATE","Skapar tabellstrukturen");
define("_DEFAULTDATACREATE","N&ouml;dv&auml;ndig information");
define("_DEFAULTWEBSETTINGSCREATE","Inst&auml;llningar");
define("_DEFAULTUSERMENUCREATE","Anv&auml;ndarmenyn");
define("_DEFAULTMODULESCREATE","Installera Modul");
define("_WEBADMINCREATE","Skapa Webb-Admin");
define("_ALREADYEXISTS","Finns redan");
define("_CREATED","Lyckades skapa");
define("_FAILED","Misslyckades");
define("_INSERTED","Lyckades registrera");
define("_CREATEWEBADMIN","Webb-admin Info");
define("_CREATEUSERLEVEL","Webb-admin Niv&aring;");
define("_CREATEWEBSETTINGS","Webbsidan");
define("_CREATEUSERMENU","Anv&auml;ndarmeny");
define("_FILEEXISTS","Config filen existerar redan!");
define("_FILEOPENERROR","Config filen kunde inte skapas!");
define("_FILESUCCESS","Config filen skapad!");
define("_MANUALEDIT","&Ouml;ppna /include/db.config.inc.php och kopiera och klistra in detta::");
define("_SETUPENDDESC","setup.php kommer nu bli borttagen, och du kommer bli vidareskickad till AMXBans!");
define("_SETUPEND","Till AMXBans...");
?>