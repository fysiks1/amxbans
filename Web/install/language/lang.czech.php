// Author Notes:
// This file has been translated from English to Czech by IdiotStrike from www.amxbans.de.

// This is the Installation Language File

<?php
define("_ENCODING","UTF-8"); //ISO-8859-1,utf-8

define("_INSTALLATION","Instalace");
define("_STEP","Krok");
define("_STEP1","Zaèátek");
define("_STEP2","Informace");
define("_STEP3","Složky");
define("_STEP4","Databáze");
define("_STEP5","Administrátor");
define("_STEP6","Shrnutí");
define("_STEP7","Dokonèení");

define("_OF","z");
define("_NEXT","další");
define("_BACK","zpìt");
define("_DIRCHECK","Kontrola složek");

//step1
define("_WELCOME","Vítejte v insalaèním procesu AMXBans.");
define("_WELCOME2","S jeho pomocí budete provedeni kompletní instalací AMXBans.");
define("_LICENSEAGREE","Souhlasím s licenèními podmínkami");

//step2
define("_STEP2DESC","Informace nastavení serveru");
define("_SERVERSETUP","Nastavení serveru");
define("_REFRESH","Aktualizovat");
define("_VERSION","Verze");

define("_ON","Zapnout");
define("_OFF","Vypnout");
define("_SEC","Seconds");
define("_SETRECOMMENDED","Nastavení je správné.");
define("_SETNOTRECOMMENDED","Nedoporuèeno, ale nemìly by nastat potíže.");

//step3
define("_STEP3DESC","Získávání informací o složkách");
define("_STEP3DESC2","Script normálnì detektuje cestu automaticky.");
define("_DIRROOT","Root cesta");
define("_DIRDOCUMENT","URL cesta");
define("_RECHECK","Re-kontrola");
define("_ROOTDIRS","Serverové složky");
define("_OK","OK");
define("_NOTWRITABLE","Složka není zapisovatelná. Prosíme, zkontrolujte pøístup(CHMOD)!");
define("_SETUPNOTDELETABLE","Nezapmeòte okamžitì smazat soubor setup.php po instalaci.!");

//step4
define("_STEP4DESC","Získávání informací o databázi");
define("_DBSETTINGS","Nastavení databáze");
define("_DBCHECK","Zkontrolovat pøístup");
define("_CANTCONNECT","Pøístup není správný. Upravte jej!");
define("_CANTSELECTDB","Databáze nenalezena. Musíte jí vytvoøit manuálnì!");
define("_DBOK","Pøístupová data OK!");
define("_DBPREVILEGES","Privilégia uživatele v databázi");
define("_HOST","Host");
define("_USER","Uživatelské jméno");
define("_PASSWORD","Heslo");
define("_DATABASE","Databáze");
define("_TBLPREFIX","Prefix tabulek (amx_, bans_ atd.)");
define("_NOTALLPREVILEGES","Uživatel nemá všechna potøebná privilégia!");
define("_PREFIXEXISTSV5","Nalezena existující instalace. Update není v tomto pøípadì možný!");
define("_PREFIXEXISTSV6","Nalezena existující instalace. Bude updatováno!");

//step5
define("_STEP5DESC","Vytvoøení prvního administrátora webu");
define("_ADMINSETTINGS","Administrátorská pøístupová data");
define("_PASSWORD2","Znovu heslo");
define("_EMAILADR","E-mailová adresa");
define("_ADMINCHECK","Zkontrolovat data");
define("_PWNOCONFIRM","Hesla se neshodují!");
define("_NOREQUIREDFIELDS","Chybí nìkterá požadovaná pole!");
define("_ADMINOK","Pøístup je OK!");
define("_USERTOSHORT","Uživatelské jméno je pøíliš krátké(minimálnì 4 znaky)!");
define("_PWTOSHORT","Heslo je pøíliš krátké(minimálnì 4 znaky)!");
define("_NOVALIDEMAIL","E-mailová adresa není správná.");

//step6
define("_STEP6DESC","Shrnutí všech informací");
define("_STEP6DESC2","AMXBans bude nainstalováno s tìmito daty");

//step7
define("_STEP7DESC","Instalaèní proces");
define("_TABLECREATE","Vytváøení struktury tabulky");
define("_DEFAULTDATACREATE","Vložte požadovaná data");
define("_DEFAULTWEBSETTINGSCREATE","Vložte požadované nastavení");
define("_DEFAULTUSERMENUCREATE","Nastavení uživatelského menu");
define("_DEFAULTMODULESCREATE","Nainstalovat modul");
define("_WEBADMINCREATE","Vytvoøit administrátora webu");
define("_ALREADYEXISTS","Již existuje!");
define("_CREATED","Úspìšnì vytvoøeno");
define("_FAILED","Selhalo");
define("_INSERTED","úspìšnì zaregistrováno");
define("_CREATEWEBADMIN","Data administrátora webu");
define("_CREATEUSERLEVEL","Level administrátora webu");
define("_CREATEWEBSETTINGS","Webová stránka");
define("_CREATEUSERMENU","Uživatelské menu");
define("_FILEEXISTS","Konfigurace již existuje!");
define("_FILEOPENERROR","Konfig nemohl být vytvoøen!");
define("_FILESUCCESS","Konfig vytvoøen!");
define("_MANUALEDIT","Otevøete /include/db.config.inc.php a zkopírujte tam tyto øádky:");
define("_SETUPENDDESC","Soubor setup.php bude smazán a vy budete pøesmìrováni do AMXBans!");
define("_SETUPEND","Jít do AMXBans...");
?>