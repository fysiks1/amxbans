// Author Notes:
// This file has been translated from English to Estonian by Kryzu from www.amxbans.de.

// This is the Installation Language File

<?php
//encoding and locale
define("_ENCODING","ISO-8859-1"); //ISO-8859-1,utf-8

define("_INSTALLATION","Installeerimine");
define("_STEP","Etapp");
define("_STEP1","Alusta");
define("_STEP2","Serveri seaded");
define("_STEP3","Asukohad");
define("_STEP4","Andmebaas");
define("_STEP5","Administraatorid");
define("_STEP6","Kokkuvõte");
define("_STEP7","Lõpetus");

define("_OF","kokkusummast");
define("_NEXT","Edasi");
define("_BACK","Tagasi");
define("_DIRCHECK","Asukoha-kontroll");

//step1
define("_WELCOME","Teretulemast AMXBans-i installeerimisse.");
define("_WELCOME2","Siinse õpetusega juhatatakse sind läbi seadistusprotsessi.");
define("_LICENSEAGREE","Ma nõustun lintsentsi tingimustega");

//step2
define("_STEP2DESC","Serveri seadete informatsioon");
define("_SERVERSETUP","Serveri seaded");
define("_REFRESH","Värskenda");
define("_VERSION","Versioon");
define("_ON","Sees");
define("_OFF","Väljas");
define("_SEC","sekundit");
define("_SETRECOMMENDED","Seaded vastavad soovitusele");
define("_SETNOTRECOMMENDED","Ei ole soovitatav, aga peaks töötama");

//step3
define("_STEP3DESC","Asukoha informatsiooni käsitlemine");
define("_STEP3DESC2","Tavaliselt script tuvastab asukohad automaatselt");
define("_DIRROOT","Peaasukoht");
define("_DIRDOCUMENT","URL asukoht");
define("_RECHECK","Kontrolli uuesti");
define("_ROOTDIRS","Serveri asukohad");
define("_OK","OK");
define("_NOTWRITABLE","Asukohad ei ole kirjutatavad, palun kontrolli õiguseid!");
define("_SETUPNOTDELETABLE","Fail setup.php tuleb manuaalselt peale seadistamist kustutada!");

//step4
define("_STEP4DESC","Andmebaasi informatsiooni käsitlemine");
define("_DBSETTINGS","Andmebaasi seaded");
define("_DBCHECK","Kontrolli andmete juurdepääsu");
define("_CANTCONNECT","Andmetele puudub juurdepääs!");
define("_CANTSELECTDB","Andmebaasi ei leitud!");
define("_DBOK","Andmete juurdepääs on OK!");
define("_DBPREVILEGES","Kasutaja andmebaasi privileegid");
define("_HOST","Host");
define("_USER","Kasutajanimi");
define("_PASSWORD","Parool");
define("_DATABASE","Andebaasi nimi");
define("_TBLPREFIX","Tabeli eesliide");
define("_NOTALLPREVILEGES","Kasutajal ei ole kõiki nõutud privileege!");
define("_PREFIXEXISTSV5","Olemasolev installeerimine on leitud, uuendamist vajavaid andmeid ei leitud!");
define("_PREFIXEXISTSV6","Olemasolev installeerimine on leitud ja uuendatud!");

//step5
define("_STEP5DESC","Esimese Web-Administraatori tegemine");
define("_ADMINSETTINGS","Administraatori juurdepääsu andmed");
define("_PASSWORD2","Sisesta parool uuesti");
define("_EMAILADR","E-mail");
define("_ADMINCHECK","Kontrolli andmeid");
define("_PWNOCONFIRM","Paroolid ei kattu!");
define("_NOREQUIREDFIELDS","Nõutud lahtrid on täitmata!");
define("_ADMINOK","Admini andmed on OK!");
define("_USERTOSHORT","Kasutajanimi on liiga lühike (min. 4 sümbolit)!");
define("_PWTOSHORT","Parool on liiga lühike (min. 4 sümbolit)!");
define("_NOVALIDEMAIL","Mittekehtiv e-maili aadress!");

//step6
define("_STEP6DESC","Kogutud andmete kokkuvõte");
define("_STEP6DESC2","AMXBans installitakse järgnevate andmetega");

//step7
define("_STEP7DESC","Installeerimise progress");
define("_TABLECREATE","Tabelite struktuuri loomine");
define("_DEFAULTDATACREATE","Nõutud andmete sisestamine");
define("_DEFAULTWEBSETTINGSCREATE","Seadete sisestamine");
define("_DEFAULTUSERMENUCREATE","Kasutajamenüü seadistamine");
define("_DEFAULTMODULESCREATE","Moodulite installimine");
define("_WEBADMINCREATE","Web-Admini lisamine");
define("_ALREADYEXISTS","Juba eksisteerib");
define("_CREATED","Edukas");
define("_FAILED","Ebaõnnestus");
define("_INSERTED","edukalt registreeritud");
define("_CREATEWEBADMIN","Webadmini andmed");
define("_CREATEUSERLEVEL","Webadmini tase");
define("_CREATEWEBSETTINGS","Veebilehekülg");
define("_CREATEUSERMENU","Kasutaja menüü");
define("_FILEEXISTS","Konfiguratsioon juba eksisteerib!");
define("_FILEOPENERROR","Konfiguratsiooni ei saa teha!");
define("_FILESUCCESS","Konfiguratsioon tehtud!");
define("_MANUALEDIT","Ava /include/db.config.inc.php ja copy & paste see:");
define("_SETUPENDDESC","Setup.php kustutatakse koheselt ning sind suunatakse AMXBans-i!");
define("_SETUPEND","Edasi...");
?>