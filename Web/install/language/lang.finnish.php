// Author Notes:
// This file has been translated from English to Finnish by Jussi "insAnum" Luntiala from www.proz.com.

// This is the Installation Language File

<?php
//encoding and locale
define("_ENCODING","ISO-8859-1"); //ISO-8859-1,utf-8

define("_INSTALLATION","Asennus");
define("_STEP","Vaihe");
define("_STEP1","Aloita");
define("_STEP2","Tietoa");
define("_STEP3","Hakemistot");
define("_STEP4","Tietokanta");
define("_STEP5","Yll&auml;pit&auml;j&auml;");
define("_STEP6","Yhteenveto");
define("_STEP7","Valmis");

define("_OF","/");
define("_NEXT","seuraava");
define("_BACK","edellinen");
define("_DIRCHECK","Hakemiston tarkistus");

//step1
define("_WELCOME","Tervetuloa AMXBansin asennukseen.");
define("_WELCOME2","T&auml;m&auml; ohjelma auttaa sinut asennuksen l&auml;pi.");
define("_LICENSEAGREE","Hyv&auml;ksyn sopimuksen ehdot");

//step2
define("_STEP2DESC","Tietoa palvelimen asetuksista");
define("_SERVERSETUP","Palvelimen asetukset");
define("_REFRESH","P&auml;ivit&auml;");
define("_VERSION","versio");
define("_ON","P&auml;&auml;ll&auml;");
define("_OFF","Pois p&auml;&auml;lt&auml;");
define("_SEC","sekuntia");
define("_SETRECOMMENDED","Suositeltavat asetukset");
define("_SETNOTRECOMMENDED","ei suositeltavaa, mutta pit&auml;isi toimia");

//step3
define("_STEP3DESC","Hakemistojen tietojen haku");
define("_STEP3DESC2","Normaalisti t&auml;m&auml; skripti tunnistaa skriptin polut automaattisesti");
define("_DIRROOT","Juuri");
define("_DIRDOCUMENT","Verkkopolku");
define("_RECHECK","Uudelleentarkistus");
define("_ROOTDIRS","Palvelimen hakemistot");
define("_OK","OK");
define("_NOTWRITABLE","Polkuun ei voitu kirjoittaa, tarkista oikeutesi!");
define("_SETUPNOTDELETABLE","Tiedosto setup.php t&auml;ytyy poistaa manuaalisesti asennuksen j&auml;lkeen!");

//step4
define("_STEP4DESC","Tietokannan tietojen haku");
define("_DBSETTINGS","Tietokannan asetukset");
define("_DBCHECK","Tarkista p&auml;&auml;sytiedot");
define("_CANTCONNECT","P&auml;&auml;sytiedot v&auml;&auml;rin!");
define("_CANTSELECTDB","Tietokantaa ei l&ouml;ytynyt!");
define("_DBOK","P&auml;&auml;sytiedot OK!");
define("_DBPREVILEGES","K&auml;ytt&auml;jien tietokannan oikeudet");
define("_HOST","Is&auml;nt&auml;");
define("_USER","K&auml;ytt&auml;j&auml;nimi");
define("_PASSWORD","Salasana");
define("_DATABASE","Tietokanta");
define("_TBLPREFIX","Taulukon etuliite");
define("_NOTALLPREVILEGES","K&auml;ytt&auml;j&auml;ll&auml; ei ole tarvittavia oikeuksia!");
define("_PREFIXEXISTSV5","Aiempi asennus l&ouml;ydettiin, p&auml;ivityst&auml; ei voida suorittaa!");
define("_PREFIXEXISTSV6","Aiempi asennus l&ouml;ydettiin, p&auml;ivitys suoritetaan!");

//step5
define("_STEP5DESC","Ensimm&auml;isen verkon yll&auml;pit&auml;j&auml;n luonti");
define("_ADMINSETTINGS","Yll&auml;pit&auml;j&auml;n p&auml;&auml;sytiedot");
define("_PASSWORD2","Kirjoita salasana uudelleen");
define("_EMAILADR","S&auml;hk&ouml;postiosoite");
define("_ADMINCHECK","Tarkista tiedot");
define("_PWNOCONFIRM","Salasanat eiv&auml;t t&auml;sm&auml;&auml;!");
define("_NOREQUIREDFIELDS","Tarvittavia kentti&auml; on t&auml;ytt&auml;m&auml;tt&auml;!");
define("_ADMINOK","Tiedot ok!");
define("_USERTOSHORT","K&auml;ytt&auml;j&auml;nimi on liian lyhyt (v&auml;h. 4 merkki&auml;)!");
define("_PWTOSHORT","Salasana on liian lyhyt (v&auml;h. 4 merkki&auml;)!");
define("_NOVALIDEMAIL","S&auml;hk&ouml;postiosoite ei kelpaa!");

//step6
define("_STEP6DESC","Yhteenveto annetuista tiedoista");
define("_STEP6DESC2","AMXBans asennetaan seuraavilla tiedoilla");

//step7
define("_STEP7DESC","Asennuksen eteneminen");
define("_TABLECREATE","Luodaan taulukon rakenne");
define("_DEFAULTDATACREATE","Sy&ouml;t&auml; tarvittavat tiedot");
define("_DEFAULTWEBSETTINGSCREATE","Sy&ouml;t&auml; asetukset");
define("_DEFAULTUSERMENUCREATE","Aseta k&auml;ytt&auml;j&auml;valikko");
define("_DEFAULTMODULESCREATE","Asenna moduuli");
define("_WEBADMINCREATE","Luo verkon yll&auml;pit&auml;j&auml;");
define("_ALREADYEXISTS","on jo olemassa");
define("_CREATED","luotiin onnistuneesti");
define("_FAILED","ep&auml;onnistui");
define("_INSERTED","rekister&ouml;itiin onnistuneesti");
define("_CREATEWEBADMIN","Verkon yll&auml;pit&auml;j&auml;n tiedot");
define("_CREATEUSERLEVEL","Verkon yll&auml;pit&auml;j&auml;n k&auml;ytt&auml;j&auml;taso");
define("_CREATEWEBSETTINGS","Nettisivu");
define("_CREATEUSERMENU","K&auml;ytt&auml;j&auml;valikko");
define("_FILEEXISTS","Asetus on jo olemassa!");
define("_FILEOPENERROR","Asetusta ei voitu luoda!");
define("_FILESUCCESS","Asetus luotu!");
define("_MANUALEDIT","Avaa /include/db.config.inc.php ja kopioi & liit&auml; t&auml;m&auml;:");
define("_SETUPENDDESC","setup.php poistetaan nyt ja sinut ohjataan AMXBansiin!");
define("_SETUPEND","Mene AMXBansiin...");
?>