// Author Notes:
// This file has been translated from English to Danish by fjollerik at www.amxbans.de.

// This is the Installation Language File

<?php
//encoding and locale
define("_ENCODING","ISO-8859-1"); //ISO-8859-1,utf-8

define("_INSTALLATION","Installation");
define("_STEP","Trin");
define("_STEP1","Start");
define("_STEP2","Information");
define("_STEP3","Mapper");
define("_STEP4","Database");
define("_STEP5","Administrator");
define("_STEP6","Oppsummering");
define("_STEP7","F&aelig;rdig");

define("_OF","af");
define("_NEXT","N&aelig;ste");
define("_BACK","Tilbage");
define("_DIRCHECK","Mappe tjek");

//step1
define("_WELCOME","Velkommen til installations-guiden for AMXBans.");
define("_WELCOME2","Med hj&aelig;lp fra guiden, vil du blive hjulpet godt p&aring; vej med installationsprocessen.");
define("_LICENSEAGREE","Jeg accepterer Licens-aftalen");

//step2
define("_STEP2DESC","Information omkring server indstillinger");
define("_SERVERSETUP","Server indstillinger");
define("_REFRESH","Opdater");
define("_VERSION","Version");
define("_ON","til");
define("_OFF","fra");
define("_SEC","Sekunder");
define("_SETRECOMMENDED","Indstillingerne opfylder det anbefalede");
define("_SETNOTRECOMMENDED","anbefales ikke, men vil virke");

//step3
define("_STEP3DESC","Henter mappe-information");
define("_STEP3DESC2","Normalt vil scriptet selv finde scriptets egne stier automatisk");
define("_DIRROOT","Rod sti");
define("_DIRDOCUMENT","Webadresse");
define("_RECHECK","Genindl&aelig;s");
define("_ROOTDIRS","Server mapper");
define("_OK","OK");
define("_NOTWRITABLE","Mapperne er ikke skrivbare, tjek venligst rettighederne!");
define("_SETUPNOTDELETABLE","setup.php filen skal slettes manuelt efter installationen!");

//step4
define("_STEP4DESC","Henter database-information");
define("_DBSETTINGS","Database indstillinger");
define("_DBCHECK","Tjek data adgang");
define("_CANTCONNECT","Data adgangen er forkert!");
define("_CANTSELECTDB","Databasen blev ikke fundet!");
define("_DBOK","Adgang til databasen er OK!");
define("_DBPREVILEGES","Privilegeret bruger database");
define("_HOST","V&aelig;rt");
define("_USER","Brugernavn");
define("_PASSWORD","Kodeord");
define("_DATABASE","Database");
define("_TBLPREFIX","Tabel Pr&aelig;fiks");
define("_NOTALLPREVILEGES","Bruger har ikke alle privilegerede rettigheder!");
define("_PREFIXEXISTSV5","Eksisterende installation blev fundet, ikke mulighed for opdatering!");
define("_PREFIXEXISTSV6","Eksisterende installation blev fundet, vil nu blive opdateret!");

//step5
define("_STEP5DESC","Opret den f&oslash;rste web-administrator");
define("_ADMINSETTINGS","Administrator adgangs data");
define("_PASSWORD2","Gentag kodeord");
define("_EMAILADR","Email adresse");
define("_ADMINCHECK","Tjek data");
define("_PWNOCONFIRM","Kodeordene er ikke ens!");
define("_NOREQUIREDFIELDS","Mangler obligatoriske felter!");
define("_ADMINOK","Admin-Data ok!");
define("_USERTOSHORT","Brugernavn er for kort (Minimum 4 symboler)!");
define("_PWTOSHORT","Kodeordet er for kort (MiniPassword too short (min. 4 symboler)!");
define("_NOVALIDEMAIL","Email adressen er ikke gyldig!");

//step6
define("_STEP6DESC","Oppsummering af indsamlede data");
define("_STEP6DESC2","AMXBans vil blive installeret med f&oslash;lgende data");

//step7
define("_STEP7DESC","Installations Fremskridt");
define("_TABLECREATE","Opretter tabel-strukturen");
define("_DEFAULTDATACREATE","Indtast n&oslash;dvendig data");
define("_DEFAULTWEBSETTINGSCREATE","Indtast Indstillinger");
define("_DEFAULTUSERMENUCREATE","S&aelig;t bruger menu");
define("_DEFAULTMODULESCREATE","Installer modul");
define("_WEBADMINCREATE","Opret Web-administrator");
define("_ALREADYEXISTS","Findes allerede");
define("_CREATED","Oprettet med succes");
define("_FAILED","fejl");
define("_INSERTED","Registreret med succes");
define("_CREATEWEBADMIN","Webadmin data");
define("_CREATEUSERLEVEL","Webadmin niveau");
define("_CREATEWEBSETTINGS","Hjemmeside");
define("_CREATEUSERMENU","Bruger menu");
define("_FILEEXISTS","Konfigurationen eksisterer allerede!");
define("_FILEOPENERROR","Kunne ikke oprette konfigurationen!");
define("_FILESUCCESS","konfigurationen blev oprettet!");
define("_MANUALEDIT","Åben /include/db.config.inc.php hvorefter du skal kopiere og s&aelig;tte dette ind:");
define("_SETUPENDDESC","setup.php filen vil nu blive slettet og du vil blive ført videre til AMXBans!");
define("_SETUPEND","Gå til AMXBans...");
?>