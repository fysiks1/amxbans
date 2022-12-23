// Author Notes:
// This file has been translated from English to Norwegian by Kujta at www.amxbans.de.

// This is the Installation Language File

<?php
//encoding and locale
define("_ENCODING","ISO-8859-1"); //ISO-8859-1,utf-8

define("_INSTALLATION","Installasjon");
define("_STEP","Trinn");
define("_STEP1","Start");
define("_STEP2","Informasjon");
define("_STEP3","Mapper");
define("_STEP4","Database");
define("_STEP5","Administrator");
define("_STEP6","Oppsummering");
define("_STEP7","Slutt");

define("_OF","av");
define("_NEXT","neste");
define("_BACK","tilbake");
define("_DIRCHECK","Mappe-sjekk");

//step1
define("_WELCOME","Velkommen til Installasjons guiden for AMXBans.");
define("_WELCOME2","Med hjelp fra guiden vil du bli veiledet gjennom installasjonprosessen.");
define("_LICENSEAGREE","Jeg aksepterer Lisens-avtalen");

//step2
define("_STEP2DESC","Informasjon om Server-Instillinger");
define("_SERVERSETUP","Server Instillinger");
define("_REFRESH","Oppdater");
define("_VERSION","Versjon");
define("_ON","p&aring;");
define("_OFF","av");
define("_SEC","Sekunder");
define("_SETRECOMMENDED","Instillingene oppfyller anbefalingen");
define("_SETNOTRECOMMENDED","ikke anbefalt, men b&oslash;r fungere");

//step3
define("_STEP3DESC","Henter Mappe-Information");
define("_STEP3DESC2","Vanligvis oppdager skriptet banen av skriptet automatisk");
define("_DIRROOT","rotbane");
define("_DIRDOCUMENT","Nettadresse");
define("_RECHECK","sjekker igjen");
define("_ROOTDIRS","Server mapper");
define("_OK","OK");
define("_NOTWRITABLE","Mappen er ikke skrivbar, sjekk rettighetene!");
define("_SETUPNOTDELETABLE","Filen setup.php m&aring; slettes manuelt etter installasjonen!");

//step4
define("_STEP4DESC","Henter Database-Informaasjon");
define("_DBSETTINGS","Database instillinger");
define("_DBCHECK","Sjekker Databasekobling");
define("_CANTCONNECT","Databasekobling er feilaktig!");
define("_CANTSELECTDB","Databasen ikke funnet!");
define("_DBOK","Databasekobling OK!");
define("_DBPREVILEGES","Brukere database privilegier");
define("_HOST","Vert");
define("_USER","Brukernavn");
define("_PASSWORD","Passord");
define("_DATABASE","Database");
define("_TBLPREFIX","Tabell prefiks");
define("_NOTALLPREVILEGES","Brukeren har ikke alle n&oslash;dvendige rettigehetene!");
define("_PREFIXEXISTSV5","Eksisterende installasjon har blitt funnet, ingen oppdatering er mulig!");
define("_PREFIXEXISTSV6","Eksisterende installasjon har blitt funnet, Vil n&aring; bli oppdatert!");

//step5
define("_STEP5DESC","Opprett den f&oslash;rste Web-Administratoren");
define("_ADMINSETTINGS","Administrator innlogging");
define("_PASSWORD2","Skriv passord p&aring; nytt");
define("_EMAILADR","Email Adresse");
define("_ADMINCHECK","Sjekk Data");
define("_PWNOCONFIRM","Passordene samsvarer ikke!");
define("_NOREQUIREDFIELDS","Obligatoriske felt mangler!");
define("_ADMINOK","Admin-Data ok!");
define("_USERTOSHORT","Brukernavn er for kort (min. 4 Symboler)!");
define("_PWTOSHORT","Passord er for kort (min. 4 Symbols)!");
define("_NOVALIDEMAIL","Ingen gyldige Email-Adresser!");

//step6
define("_STEP6DESC","Sammendrag av innsamlede Data");
define("_STEP6DESC2","AMXBans vil bli installert med f&oslash;lgende data");

//step7
define("_STEP7DESC","Installasjon Fremgang");
define("_TABLECREATE","Oppretter tabellstrukturen");
define("_DEFAULTDATACREATE","Oppgi n&oslash;dvendige Data");
define("_DEFAULTWEBSETTINGSCREATE","Oppgi instillinger");
define("_DEFAULTUSERMENUCREATE","Still inn bruker meny");
define("_DEFAULTMODULESCREATE","Installer modul");
define("_WEBADMINCREATE","Opprett Web-Administrator");
define("_ALREADYEXISTS","Eksisterer allerede");
define("_CREATED","Vellykket opprettet");
define("_FAILED","Mislyktes");
define("_INSERTED","Vellykket registrert");
define("_CREATEWEBADMIN","Webadmin Data");
define("_CREATEUSERLEVEL","Webadmin Niv&aring;");
define("_CREATEWEBSETTINGS","Webside");
define("_CREATEUSERMENU","Bruker Meny");
define("_FILEEXISTS","Config filen eksisterer allerede!");
define("_FILEOPENERROR","Config filen kunne ikke bli opprettet!");
define("_FILESUCCESS","Config filen oprettet!");
define("_MANUALEDIT","&Aring;pne /include/db.config.inc.php og kopier og lim inn dette:");
define("_SETUPENDDESC","setup.php vil n&aring; bli slettet og du vil bli videresendt til AMXBans!");
define("_SETUPEND","G&aring; til AMXBans...");
?>