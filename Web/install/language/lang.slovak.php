// Author Notes:
// This file has been translated from English to Slovak by sharki from www.cs.war-board.net.

// This is the Installation Language File

<?php
//encoding and locale
define("_ENCODING","UTF-8"); //ISO-8859-1,utf-8

define("_INSTALLATION","Inštalácia");
define("_STEP","Krok");
define("_STEP1","Štart");
define("_STEP2","Informácie");
define("_STEP3","Priečinky");
define("_STEP4","Databáza");
define("_STEP5","Administrátor");
define("_STEP6","Súhrn");
define("_STEP7","Dokončenie");

define("_OF","z");
define("_NEXT","Ďalej");
define("_BACK","Späť");
define("_DIRCHECK","Kontrola priečinkov");

//step1
define("_WELCOME","Vitajte v inštalácii AMXBans.");
define("_WELCOME2","Pomocou tejto stránky budete prevedený inštalačným procesom.");
define("_LICENSEAGREE","Súhlasím s licenčnými podmienkami");

//step2
define("_STEP2DESC","Informácie o servery");
define("_SERVERSETUP","Nastavenia servera");
define("_REFRESH","Obnoviť");
define("_VERSION","Verzia");
define("_ON","Zapnuté");
define("_OFF","Vypnuté");
define("_SEC","Sekundy");
define("_SETRECOMMENDED","Nastavenia spĺňajú požiadavky");
define("_SETNOTRECOMMENDED","neodporúčané, ale malo by fungovať");

//step3
define("_STEP3DESC","Získavanie informácií o priečinkoch");
define("_STEP3DESC2","Zvyčajne skript automaticky zistí informácie o cestách ");
define("_DIRROOT","Základná zložka");
define("_DIRDOCUMENT","URL cesta");
define("_RECHECK","Znovu skontrolovať");
define("_ROOTDIRS","Priečinky na serveri");
define("_OK","OK");
define("_NOTWRITABLE","Do priečinka sa nedá zapisovať, prosím skontrolujte oprávnenia!");
define("_SETUPNOTDELETABLE","Súbor setup.php musí byť vymazaný manuálne po inštalácii!");

//step4
define("_STEP4DESC","Získavanie informácií o databáze");
define("_DBSETTINGS","Nastavenie databázy");
define("_DBCHECK","Kontrola údajov");
define("_CANTCONNECT","Prístupové údaje sú nesprávne!");
define("_CANTSELECTDB","Databáza nenájdená!");
define("_DBOK","Prístupové údaje OK!");
define("_DBPREVILEGES","Oprávnenia užívateľov databázy");
define("_HOST","Host");
define("_USER","Užívateľské meno");
define("_PASSWORD","Heslo");
define("_DATABASE","Názov databázy");
define("_TBLPREFIX","Prefix tabuľky");
define("_NOTALLPREVILEGES","Užívateľ nemá všetky potrebné oprávnenia!");
define("_PREFIXEXISTSV5","Nájdená existujúca inštalácia, aktualizácia nie je možná!");
define("_PREFIXEXISTSV6","Nájdená existujúca inštalácia, teraz bude aktualizovaná!");

//step5
define("_STEP5DESC","Vytváranie prvého správcu stránky");
define("_ADMINSETTINGS","Prístupové informácie správcovi");
define("_PASSWORD2","Heslo (overenie)");
define("_EMAILADR","E-mailová adresa");
define("_ADMINCHECK","Kontrola údajov");
define("_PWNOCONFIRM","Heslá sa nezhodujú!");
define("_NOREQUIREDFIELDS","Povinné polia nie sú vyplnené!");
define("_ADMINOK","Údaje v poriadku!");
define("_USERTOSHORT","Užívateľské meno je príliš krátke (min. 4 znaky)!");
define("_PWTOSHORT","Heslo je príliš krátke (min. 4 znaky)!");
define("_NOVALIDEMAIL","Zadaná e-mailová adresa nie je platná!");

//step6
define("_STEP6DESC","Súhrn získaných údajov");
define("_STEP6DESC2","AMXBans bude nainštalovaný s nasledujúcimi údajmi");

//step7
define("_STEP7DESC","Inštalačný proces");
define("_TABLECREATE","Vytváranie štruktúry tabuliek");
define("_DEFAULTDATACREATE","Zadajte požadované údaje");
define("_DEFAULTWEBSETTINGSCREATE","Vstup do nastavení");
define("_DEFAULTUSERMENUCREATE","Nastaviť užívateľské menu");
define("_DEFAULTMODULESCREATE","Inštalačný modul");
define("_WEBADMINCREATE","Vytváranie správcu stránky");
define("_ALREADYEXISTS","Už existuje");
define("_CREATED","Úspešne vytvorené");
define("_FAILED","Neúspešné");
define("_INSERTED","Úspešne registrovaný");
define("_CREATEWEBADMIN","Údaje správcu");
define("_CREATEUSERLEVEL","Úroveň správcu");
define("_CREATEWEBSETTINGS","Webová stránka");
define("_CREATEUSERMENU","Užívateľské menu");
define("_FILEEXISTS","Konfigurácia už existuje!");
define("_FILEOPENERROR","Konfigurácia nemohla byť vytvorená!");
define("_FILESUCCESS","Konfigurácia vytvorená!");
define("_MANUALEDIT","Otvorte /include/db.config.inc.php a skopírujte & vložte nasledujúce:");
define("_SETUPENDDESC","Súbor setup.php bude teraz zmazaný a vy budete presmerovaný do AMXBans!");
define("_SETUPEND","Ísť na AMXBans...");
?>