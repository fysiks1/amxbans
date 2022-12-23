// Author Notes:
// This file has been translated from English to German by SeToY & |PJ| Shorty from www.amxbans.de.

// This is the Installation Language File

<?php
//encoding and locale
define("_ENCODING","ISO-8859-1"); //ISO-8859-1,utf-8

define("_INSTALLATION","Installation");
define("_STEP","Schritt");
define("_STEP1","Start");
define("_STEP2","Informationen");
define("_STEP3","Verzeichnisse");
define("_STEP4","Datenbank");
define("_STEP5","Administrator");
define("_STEP6","Zusammenfassung");
define("_STEP7","Abschluss");

define("_OF","von");
define("_NEXT","Weiter");
define("_BACK","Zur&uuml;ck");
define("_DIRCHECK","Verzeichnispr&uuml;fung");

//step1
define("_WELCOME","Willkommen auf der AMXBans Installations-Seite.");
define("_WELCOME2","Mit ihrer Hilfe wirst du durch die einzelnen Installationsschritte gef&uuml;hrt.");
define("_LICENSEAGREE","Ich akzeptiere die Lizenzbestimmungen");

//step2
define("_STEP2DESC","Information der Server-Einstellungen");
define("_SERVERSETUP","Server Einstellungen");
define("_REFRESH","Aktualisieren");
define("_VERSION","Version");
define("_ON","Ein");
define("_OFF","Aus");
define("_SEC","Sekunden");
define("_SETRECOMMENDED","Einstellung entspricht den Empfehlungen");
define("_SETNOTRECOMMENDED","nicht empfohlen, sollte aber funktionieren");

//step3
define("_STEP3DESC","Sammeln der Verzeichnis-Informationen");
define("_STEP3DESC2","Das Script erkennt die Verzeichnisse des Servers im Normalfall selbst");
define("_DIRROOT","Root Pfad");
define("_DIRDOCUMENT","URL Pfad");
define("_RECHECK","erneute Pr&uuml;fung");
define("_ROOTDIRS","Server Verzeichnisse");
define("_OK","OK");
define("_NOTWRITABLE","Verzeichnis nicht beschreibbar, Rechte pr&uuml;fen!");
define("_SETUPNOTDELETABLE","Datei setup.php muss nach der Installation manuell gel&ouml;scht werden!");

//step4
define("_STEP4DESC","Sammeln der Datenbank Informationen");
define("_DBSETTINGS","Datenbank Zugangsdaten");
define("_DBCHECK","Zugangsdaten pr&uuml;fen");
define("_CANTCONNECT","Zugangsdaten fehlerhaft!");
define("_CANTSELECTDB","Datenbank nicht gefunden!");
define("_DBOK","Zugangsdaten in Ordnung");
define("_DBPREVILEGES","Datenbankrechte des Benutzers");
define("_HOST","Adresse");
define("_USER","Benutzername");
define("_PASSWORD","Passwort");
define("_DATABASE","Datenbank");
define("_TBLPREFIX","Tabellen Pr&auml;fix");
define("_NOTALLPREVILEGES","Benutzer hat nicht alle ben&ouml;tigten Rechte!");
define("_PREFIXEXISTSV5","Vorhandene Installation gefunden, Update nicht m&ouml;glich!");
define("_PREFIXEXISTSV6","Vorhandene Installation gefunden, Update wird durchgef&uuml;hrt");

//step5
define("_STEP5DESC","Anlegen des ersten Web Administrators");
define("_ADMINSETTINGS","Administrator Zugangsdaten");
define("_PASSWORD2","Passwort best&auml;tigen");
define("_EMAILADR","Email Adresse");
define("_ADMINCHECK","Daten pr&uuml;fen");
define("_PWNOCONFIRM","Passw&ouml;rter stimmen nicht &uuml;berein!");
define("_NOREQUIREDFIELDS","Erforderliche Daten fehlen!");
define("_ADMINOK","Admindaten in Ordnung");
define("_USERTOSHORT","Benutzername zu kurz (min. 4 Zeichen)!");
define("_PWTOSHORT","Passwort zu kurz (min. 4 Zeichen)!");
define("_NOVALIDEMAIL","Keine g&uuml;ltige Email Adresse!");

//step6
define("_STEP6DESC","Zusammenfassung der gesammelten Daten");
define("_STEP6DESC2","AMXBans wird mit den folgenden Daten installiert");

//step7
define("_STEP7DESC","Installations Fortschritt");
define("_TABLECREATE","Erstellen der Tabellenstruktur");
define("_DEFAULTDATACREATE","Erforderliche Daten eintragen");
define("_DEFAULTWEBSETTINGSCREATE","Einstellungen eintragen");
define("_DEFAULTUSERMENUCREATE","Benutzer Men&uuml; erstellen");
define("_DEFAULTMODULESCREATE","Module installieren");
define("_WEBADMINCREATE","Web Admin erstellen");
define("_ALREADYEXISTS","Existiert bereits");
define("_CREATED","Erfolgreich erstellt");
define("_FAILED","Fehlgeschlagen / bereits vorhanden");
define("_INSERTED","Erfolgreich eingetragen");
define("_CREATEWEBADMIN","Webadmin Daten");
define("_CREATEUSERLEVEL","Webadmin Level");
define("_CREATEWEBSETTINGS","Webseite");
define("_CREATEUSERMENU","Benutzer Men&uuml;");
define("_FILEEXISTS","Die Konfigurations Datei existiert bereits!");
define("_FILEOPENERROR","Konfigurations Datei konnte nicht erstellt werden!");
define("_FILESUCCESS","Konfigurations Datei erfolgreich erstellt");
define("_MANUALEDIT","/include/db.config.inc.php &ouml;ffnen / erstellen und diesen Inhalt einf&uuml;gen:");
define("_SETUPENDDESC","Die setup.php wird jetzt gel&ouml;scht und zu AMXBans weitergeleitet!");
define("_SETUPEND","Weiter zu AMXBans");
?>